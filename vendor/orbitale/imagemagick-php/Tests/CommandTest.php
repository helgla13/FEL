<?php

/*
 * This file is part of the OrbitaleImageMagickPHP package.
 *
 * (c) Alexandre Rock Ancelet <alex@orbitale.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Orbitale\Component\ImageMagick\Tests;

use Orbitale\Component\ImageMagick\Command;

class CommandTest extends AbstractTestCase
{

    /**
     * @dataProvider provideWrongConvertDirs
     */
    public function testWrongConvertDirs($path, $expectedMessage, $expectedException)
    {
        $exception = '';
        $exceptionClass = '';

        $path = str_replace('\\', '/', $path);
        $expectedMessage = str_replace('\\', '/', $expectedMessage);
        try {
            new Command($path);
        } catch (\Exception $e) {
            $exception = $e->getMessage();
            $exceptionClass = get_class($e);
        }
        $this->assertContains($expectedMessage, $exception);
        $this->assertEquals($exceptionClass, $expectedException);
    }

    public function provideWrongConvertDirs()
    {
        return array(
            array('/this/is/a/dummy/dir', 'The specified path (/this/is/a/dummy/dir) is not a directory', 'InvalidArgumentException'),
            array('./', 'The specified path (.) does not seem to contain ImageMagick binaries, or it is not readable', 'InvalidArgumentException'),
        );
    }

    public function testResizeImage()
    {
        $command = new Command(IMAGEMAGICK_DIR);

        $imageToResize = $this->resourcesDir . '/moon_180.jpg';
        $imageOutput = $this->resourcesDir . '/outputs/moon.jpg';
        $this->assertFileExists($imageToResize);

        $response = $command
            ->convert($imageToResize)
            ->resize('100x100')
            ->file($imageOutput, false)
            ->run()
        ;

        $this->assertFalse($response->hasFailed(), "Errors when testing:\n".$response->getProcess()->getOutput()."\t".$response->getProcess()->getErrorOutput());

        $this->assertFileExists($this->resourcesDir . '/outputs/moon.jpg');

        $this->assertFalse($response->hasFailed());

        $this->testConvertIdentifyImage($imageOutput, 'JPEG', '100x94+0+0', '8-bit');
    }

    /**
     * @dataProvider provideImagesToIdentify
     */
    public function testConvertIdentifyImage($imageToIdentify, $expectedFormat, $expectedGeometry, $expectedResolution)
    {
        $command = new Command(IMAGEMAGICK_DIR);

        // ImageMagick normalizes paths with "/" as directory separator
        $imageToIdentify = str_replace('\\', '/', $imageToIdentify);

        $response = $command->identify($imageToIdentify)->run();

        $this->assertFalse($response->hasFailed());

        $content = $response->getOutput();

        $this->assertContains(sprintf(
            '%s %s %s %s %s',
            $imageToIdentify,
            $expectedFormat,
            preg_replace('~\+.*$~', '', $expectedGeometry),
            $expectedGeometry,
            $expectedResolution
        ), $content);
    }

    public function provideImagesToIdentify()
    {
        return array(
            array($this->resourcesDir.'/moon_180.jpg', 'JPEG', '180x170+0+0', '8-bit'),
        );
    }

    public function testMogrifyResizeImage()
    {
        $command = new Command(IMAGEMAGICK_DIR);

        $sourceImage = $this->resourcesDir . '/moon_180.jpg';
        $imageOutput = $this->resourcesDir . '/outputs/moon_mogrify.jpg';
        $this->assertFileExists($sourceImage);

        if (file_exists($imageOutput)) {
            unlink($imageOutput);
        }

        copy($sourceImage, $imageOutput);

        if (!file_exists($imageOutput)) {
            throw new \RuntimeException('File could not be copied from resources dir to output dir.');
        }

        $baseSize = filesize($imageOutput);

        $response = $command
            ->mogrify($imageOutput)
            ->resize('5000x5000')
            ->run()
        ;

        $this->assertFileExists($imageOutput);

        $this->assertFalse($response->hasFailed());

        clearstatcache(true);

        $this->assertGreaterThan($baseSize, filesize($imageOutput));
    }

    /**
     * @dataProvider provideTestCommandString
     */
    public function testCommandString($source, $output, $geometry, $quality)
    {
        $command = new Command(IMAGEMAGICK_DIR);

        $commandString = $command
            ->convert($source)
            ->thumbnail($geometry)
            ->quality($quality)
            ->file($output, false)
            ->getCommand()
        ;

        $expected = ' '.$command->getExecutable('convert').
                    ' "'.$source.'"'.
                    ' -thumbnail "'.$geometry.'"'.
                    ' -quality '.$quality.
                    ' "'.$output.'" ';

        $expected = str_replace('\\', '/', $expected);

        $this->assertEquals($expected, $commandString);
    }

    public function provideTestCommandString()
    {
        return array(
            array($this->resourcesDir.'/moon_180.jpg', $this->resourcesDir.'/outputs/moon_10_forced.jpg', '10x10!', 10),
            array($this->resourcesDir.'/moon_180.jpg', $this->resourcesDir.'/outputs/moon_1000.jpg', '1000x1000', 100),
            array($this->resourcesDir.'/moon_180.jpg', $this->resourcesDir.'/outputs/moon_half.jpg', '50%', 50),
            array($this->resourcesDir.'/moon_180.jpg', $this->resourcesDir.'/outputs/moon_geometry.jpg', '30x30+20+20', 50),
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWrongExecutable()
    {
        $command = new Command(IMAGEMAGICK_DIR);
        $command->getExecutable('this_executable_might_not_exist');
    }

    public function testInexistingFiles()
    {
        $command = new Command(IMAGEMAGICK_DIR);

        $exception = '';
        $file = __DIR__.'/this/file/does/not/exist';
        try {
            $command->file($file, true, true);
        } catch (\Exception $e) {
            $exception = $e->getMessage();
        }
        $this->assertContains(sprintf("The file \"%s\" is not found.", $file), $exception);
    }

    public function testEscape()
    {
        $string = 'PSR\'s a great `code` style standard. ';

        $command = new Command(IMAGEMAGICK_DIR);

        $escaped = $command->escape($string, true);

        $this->assertEquals('"PSR\'s a great \'code\' style standard."', $escaped);
    }

}
