<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call(UsersTableSeeder::class);
//        $this->call('NewsSeeder');
        $this->call('TeachersSeeder');
    }
}
//class NewsSeeder extends Seeder {
//
//    public function run()
//    {
//        //DB::table('News')->delete();
//        News::create([
//            'title' => 'First Post',
//            'description' => '
//
//Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in commodo purus, eu posuere neque. Nam sagittis eros magna, at dignissim turpis dignissim in. Morbi vestibulum neque nec maximus consectetur. Duis vitae volutpat felis, a efficitur dolor. Integer sodales imperdiet ante, quis tristique nunc posuere ac. Cras at efficitur lacus. Etiam pretium purus ut ex semper commodo. Morbi at convallis lacus. Nunc nec urna a eros aliquam dictum et sed orci. Curabitur turpis magna, tempus eu orci quis, semper elementum neque. Donec sit amet lacus suscipit urna vestibulum pellentesque. Curabitur non urna mauris. Morbi vitae ligula tortor. Vestibulum tristique velit augue. Praesent rhoncus fringilla nisi ac sollicitudin. Suspendisse mollis tincidunt orci vel mattis.
//
//Aenean mattis sapien magna. Duis id nulla mattis, mattis ipsum a, congue velit. Ut iaculis lacus vitae malesuada ornare. Praesent vitae aliquam lacus. Pellentesque dignissim nisl non suscipit accumsan. Quisque non dapibus risus, in luctus nunc. Etiam tincidunt consequat lacus nec dictum. Integer ultricies, lacus non ultrices hendrerit, orci ligula auctor ante, sodales finibus arcu dui gravida lacus. Phasellus a libero est. Nullam nec est accumsan, interdum tellus quis, rhoncus purus. Mauris lacus lorem, interdum in ultricies quis, tincidunt eget lacus. Praesent molestie elit sit amet mauris ornare blandit. Cras consectetur dignissim felis, quis pellentesque risus auctor nec. Duis non leo nisi. Sed vel sem id leo vulputate pellentesque.
//
//Vestibulum porta egestas sem. Nullam cursus elementum urna, non facilisis elit vehicula id. Suspendisse potenti. Curabitur eleifend dui in nisi viverra dictum. Nulla aliquam, nisi eget rutrum tempus, nunc neque scelerisque ante, a maximus sapien magna vel est. Proin elit ex, molestie sed sem consectetur, tincidunt semper odio. Nullam a cursus orci. Cras in cursus ante. Duis mollis rhoncus mi ut sollicitudin. Nulla convallis, ipsum vel tincidunt porta, orci lorem venenatis eros, id suscipit nisi lectus eu metus. Nullam et massa id arcu mattis viverra et sit amet leo. Pellentesque ut libero sit amet neque maximus bibendum at eu mi. Aliquam erat volutpat. Nulla facilisi.
//
//Praesent mollis dictum metus eget aliquam. Sed blandit condimentum dui et rhoncus. Sed vestibulum tristique tortor, a volutpat ante ultrices in. Praesent tempus in justo consequat gravida. Sed nec magna massa. Cras ut nisi quis elit viverra eleifend. Fusce hendrerit mollis tristique. Donec consectetur venenatis odio, nec tempus ante sodales at. Sed nec feugiat augue. Maecenas vestibulum tellus ac pretium hendrerit. Cras tincidunt ornare sapien, nec viverra massa bibendum et. Nulla in pellentesque sapien, nec lacinia justo.
//
//Duis vitae ante ex. Nullam convallis velit risus, non hendrerit purus euismod vel. Integer vitae nibh eget arcu tempor vehicula id sed justo. Curabitur rutrum euismod interdum. Curabitur ut dignissim ipsum. Nam bibendum eros non aliquet consequat. Nulla eleifend congue metus ut laoreet. Aenean lobortis dignissim lectus ac pulvinar. Quisque leo sem, consequat eu dapibus quis, egestas semper risus. Nulla maximus, urna eu pharetra placerat, risus eros gravida magna, at euismod mi libero quis dolor. Nulla eu nulla et dolor rhoncus posuere quis porttitor augue. Maecenas sit amet lacinia nunc, scelerisque elementum eros. Phasellus pulvinar lectus non dolor ornare fringilla. Integer fringilla arcu non euismod porttitor. ',
//            'is_active' => true,
//          // 'created_at' => DB::raw('CURRENT_TIMESTAMP'), // для timestamp
//        ]);
//        News::create([
//            'title' => 'Second Post',
//            'description' => '
//
//Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in commodo purus, eu posuere neque. Nam sagittis eros magna, at dignissim turpis dignissim in. Morbi vestibulum neque nec maximus consectetur. Duis vitae volutpat felis, a efficitur dolor. Integer sodales imperdiet ante, quis tristique nunc posuere ac. Cras at efficitur lacus. Etiam pretium purus ut ex semper commodo. Morbi at convallis lacus. Nunc nec urna a eros aliquam dictum et sed orci. Curabitur turpis magna, tempus eu orci quis, semper elementum neque. Donec sit amet lacus suscipit urna vestibulum pellentesque. Curabitur non urna mauris. Morbi vitae ligula tortor. Vestibulum tristique velit augue. Praesent rhoncus fringilla nisi ac sollicitudin. Suspendisse mollis tincidunt orci vel mattis.
//
//Aenean mattis sapien magna. Duis id nulla mattis, mattis ipsum a, congue velit. Ut iaculis lacus vitae malesuada ornare. Praesent vitae aliquam lacus. Pellentesque dignissim nisl non suscipit accumsan. Quisque non dapibus risus, in luctus nunc. Etiam tincidunt consequat lacus nec dictum. Integer ultricies, lacus non ultrices hendrerit, orci ligula auctor ante, sodales finibus arcu dui gravida lacus. Phasellus a libero est. Nullam nec est accumsan, interdum tellus quis, rhoncus purus. Mauris lacus lorem, interdum in ultricies quis, tincidunt eget lacus. Praesent molestie elit sit amet mauris ornare blandit. Cras consectetur dignissim felis, quis pellentesque risus auctor nec. Duis non leo nisi. Sed vel sem id leo vulputate pellentesque.
//
//Vestibulum porta egestas sem. Nullam cursus elementum urna, non facilisis elit vehicula id. Suspendisse potenti. Curabitur eleifend dui in nisi viverra dictum. Nulla aliquam, nisi eget rutrum tempus, nunc neque scelerisque ante, a maximus sapien magna vel est. Proin elit ex, molestie sed sem consectetur, tincidunt semper odio. Nullam a cursus orci. Cras in cursus ante. Duis mollis rhoncus mi ut sollicitudin. Nulla convallis, ipsum vel tincidunt porta, orci lorem venenatis eros, id suscipit nisi lectus eu metus. Nullam et massa id arcu mattis viverra et sit amet leo. Pellentesque ut libero sit amet neque maximus bibendum at eu mi. Aliquam erat volutpat. Nulla facilisi.
//
//Praesent mollis dictum metus eget aliquam. Sed blandit condimentum dui et rhoncus. Sed vestibulum tristique tortor, a volutpat ante ultrices in. Praesent tempus in justo consequat gravida. Sed nec magna massa. Cras ut nisi quis elit viverra eleifend. Fusce hendrerit mollis tristique. Donec consectetur venenatis odio, nec tempus ante sodales at. Sed nec feugiat augue. Maecenas vestibulum tellus ac pretium hendrerit. Cras tincidunt ornare sapien, nec viverra massa bibendum et. Nulla in pellentesque sapien, nec lacinia justo.
//
//Duis vitae ante ex. Nullam convallis velit risus, non hendrerit purus euismod vel. Integer vitae nibh eget arcu tempor vehicula id sed justo. Curabitur rutrum euismod interdum. Curabitur ut dignissim ipsum. Nam bibendum eros non aliquet consequat. Nulla eleifend congue metus ut laoreet. Aenean lobortis dignissim lectus ac pulvinar. Quisque leo sem, consequat eu dapibus quis, egestas semper risus. Nulla maximus, urna eu pharetra placerat, risus eros gravida magna, at euismod mi libero quis dolor. Nulla eu nulla et dolor rhoncus posuere quis porttitor augue. Maecenas sit amet lacinia nunc, scelerisque elementum eros. Phasellus pulvinar lectus non dolor ornare fringilla. Integer fringilla arcu non euismod porttitor. ',
//            'is_active' => true,
//           //'created_at' => DB::raw('CURRENT_TIMESTAMP'), // для timestamp
//        ]);
//        News::create([
//            'title' => 'Third Post',
//            'description' => '
//
//Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in commodo purus, eu posuere neque. Nam sagittis eros magna, at dignissim turpis dignissim in. Morbi vestibulum neque nec maximus consectetur. Duis vitae volutpat felis, a efficitur dolor. Integer sodales imperdiet ante, quis tristique nunc posuere ac. Cras at efficitur lacus. Etiam pretium purus ut ex semper commodo. Morbi at convallis lacus. Nunc nec urna a eros aliquam dictum et sed orci. Curabitur turpis magna, tempus eu orci quis, semper elementum neque. Donec sit amet lacus suscipit urna vestibulum pellentesque. Curabitur non urna mauris. Morbi vitae ligula tortor. Vestibulum tristique velit augue. Praesent rhoncus fringilla nisi ac sollicitudin. Suspendisse mollis tincidunt orci vel mattis.
//
//Aenean mattis sapien magna. Duis id nulla mattis, mattis ipsum a, congue velit. Ut iaculis lacus vitae malesuada ornare. Praesent vitae aliquam lacus. Pellentesque dignissim nisl non suscipit accumsan. Quisque non dapibus risus, in luctus nunc. Etiam tincidunt consequat lacus nec dictum. Integer ultricies, lacus non ultrices hendrerit, orci ligula auctor ante, sodales finibus arcu dui gravida lacus. Phasellus a libero est. Nullam nec est accumsan, interdum tellus quis, rhoncus purus. Mauris lacus lorem, interdum in ultricies quis, tincidunt eget lacus. Praesent molestie elit sit amet mauris ornare blandit. Cras consectetur dignissim felis, quis pellentesque risus auctor nec. Duis non leo nisi. Sed vel sem id leo vulputate pellentesque.
//
//Vestibulum porta egestas sem. Nullam cursus elementum urna, non facilisis elit vehicula id. Suspendisse potenti. Curabitur eleifend dui in nisi viverra dictum. Nulla aliquam, nisi eget rutrum tempus, nunc neque scelerisque ante, a maximus sapien magna vel est. Proin elit ex, molestie sed sem consectetur, tincidunt semper odio. Nullam a cursus orci. Cras in cursus ante. Duis mollis rhoncus mi ut sollicitudin. Nulla convallis, ipsum vel tincidunt porta, orci lorem venenatis eros, id suscipit nisi lectus eu metus. Nullam et massa id arcu mattis viverra et sit amet leo. Pellentesque ut libero sit amet neque maximus bibendum at eu mi. Aliquam erat volutpat. Nulla facilisi.
//
//Praesent mollis dictum metus eget aliquam. Sed blandit condimentum dui et rhoncus. Sed vestibulum tristique tortor, a volutpat ante ultrices in. Praesent tempus in justo consequat gravida. Sed nec magna massa. Cras ut nisi quis elit viverra eleifend. Fusce hendrerit mollis tristique. Donec consectetur venenatis odio, nec tempus ante sodales at. Sed nec feugiat augue. Maecenas vestibulum tellus ac pretium hendrerit. Cras tincidunt ornare sapien, nec viverra massa bibendum et. Nulla in pellentesque sapien, nec lacinia justo.
//
//Duis vitae ante ex. Nullam convallis velit risus, non hendrerit purus euismod vel. Integer vitae nibh eget arcu tempor vehicula id sed justo. Curabitur rutrum euismod interdum. Curabitur ut dignissim ipsum. Nam bibendum eros non aliquet consequat. Nulla eleifend congue metus ut laoreet. Aenean lobortis dignissim lectus ac pulvinar. Quisque leo sem, consequat eu dapibus quis, egestas semper risus. Nulla maximus, urna eu pharetra placerat, risus eros gravida magna, at euismod mi libero quis dolor. Nulla eu nulla et dolor rhoncus posuere quis porttitor augue. Maecenas sit amet lacinia nunc, scelerisque elementum eros. Phasellus pulvinar lectus non dolor ornare fringilla. Integer fringilla arcu non euismod porttitor. ',
//            'is_active' => true,
//            //'created_at' => DB::raw('CURRENT_TIMESTAMP'), // для timestamp
//        ]);
//    }
//}

class TeachersSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Teachers::create([
            'FIO' => 'Попович Павло Васильович',
            'science_degree' => 'доцент',
            'education' => 'КПІ',
            'course' => 'Акустотехніка',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in commodo purus, eu posuere neque. Nam sagittis eros magna, at dignissim turpis dignissim in. Morbi vestibulum neque nec maximus consectetur. Duis vitae volutpat felis, a efficitur dolor. Integer sodales imperdiet ante, quis tristique nunc posuere ac. Cras at efficitur lacus. Etiam pretium purus ut ex semper commodo. Morbi at convallis lacus. Nunc nec urna a eros aliquam dictum et sed orci. Curabitur turpis magna, tempus eu orci quis, semper elementum neque. Donec sit amet lacus suscipit urna vestibulum pellentesque. Curabitur non urna mauris. Morbi vitae ligula tortor. Vestibulum tristique velit augue. Praesent rhoncus fringilla nisi ac sollicitudin. Suspendisse mollis tincidunt orci vel mattis.

Aenean mattis sapien magna. Duis id nulla mattis, mattis ipsum a, congue velit. Ut iaculis lacus vitae malesuada ornare. Praesent vitae aliquam lacus. Pellentesque dignissim nisl non suscipit accumsan. Quisque non dapibus risus, in luctus nunc. Etiam tincidunt consequat lacus nec dictum. Integer ultricies, lacus non ultrices hendrerit, orci ligula auctor ante, sodales finibus arcu dui gravida lacus. Phasellus a libero est. Nullam nec est accumsan, interdum tellus quis, rhoncus purus. Mauris lacus lorem, interdum in ultricies quis, tincidunt eget lacus. Praesent molestie elit sit amet mauris ornare blandit. Cras consectetur dignissim felis, quis pellentesque risus auctor nec. Duis non leo nisi. Sed vel sem id leo vulputate pellentesque.

Vestibulum porta egestas sem. Nullam cursus elementum urna, non facilisis elit vehicula id. Suspendisse potenti. Curabitur eleifend dui in nisi viverra dictum. Nulla aliquam, nisi eget rutrum tempus, nunc neque scelerisque ante, a maximus sapien magna vel est. Proin elit ex, molestie sed sem consectetur, tincidunt semper odio. Nullam a cursus orci. Cras in cursus ante. Duis mollis rhoncus mi ut sollicitudin. Nulla convallis, ipsum vel tincidunt porta, orci lorem venenatis eros, id suscipit nisi lectus eu metus. Nullam et massa id arcu mattis viverra et sit amet leo. Pellentesque ut libero sit amet neque maximus bibendum at eu mi. Aliquam erat volutpat. Nulla facilisi.

Praesent mollis dictum metus eget aliquam. Sed blandit condimentum dui et rhoncus. Sed vestibulum tristique tortor, a volutpat ante ultrices in. Praesent tempus in justo consequat gravida. Sed nec magna massa. Cras ut nisi quis elit viverra eleifend. Fusce hendrerit mollis tristique. Donec consectetur venenatis odio, nec tempus ante sodales at. Sed nec feugiat augue. Maecenas vestibulum tellus ac pretium hendrerit. Cras tincidunt ornare sapien, nec viverra massa bibendum et. Nulla in pellentesque sapien, nec lacinia justo.

Duis vitae ante ex.',
            'email'=>'pasha@gmail.com',
            'tel'=>'123456789',
            'publications'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'curator'=>'1-fel',
            'position'=>'доцент',
        ]);
        \App\Models\Teachers::create([
            'FIO' => 'Іванова Тамара Василівна',
            'science_degree' => 'асистент',
            'education' => 'КПІ',
            'course' => 'Акустотехніка',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in commodo purus, eu posuere neque. Nam sagittis eros magna, at dignissim turpis dignissim in. Morbi vestibulum neque nec maximus consectetur. Duis vitae volutpat felis, a efficitur dolor. Integer sodales imperdiet ante, quis tristique nunc posuere ac. Cras at efficitur lacus. Etiam pretium purus ut ex semper commodo. Morbi at convallis lacus. Nunc nec urna a eros aliquam dictum et sed orci. Curabitur turpis magna, tempus eu orci quis, semper elementum neque. Donec sit amet lacus suscipit urna vestibulum pellentesque. Curabitur non urna mauris. Morbi vitae ligula tortor. Vestibulum tristique velit augue. Praesent rhoncus fringilla nisi ac sollicitudin. Suspendisse mollis tincidunt orci vel mattis.

Aenean mattis sapien magna. Duis id nulla mattis, mattis ipsum a, congue velit. Ut iaculis lacus vitae malesuada ornare. Praesent vitae aliquam lacus. Pellentesque dignissim nisl non suscipit accumsan. Quisque non dapibus risus, in luctus nunc. Etiam tincidunt consequat lacus nec dictum. Integer ultricies, lacus non ultrices hendrerit, orci ligula auctor ante, sodales finibus arcu dui gravida lacus. Phasellus a libero est. Nullam nec est accumsan, interdum tellus quis, rhoncus purus. Mauris lacus lorem, interdum in ultricies quis, tincidunt eget lacus. Praesent molestie elit sit amet mauris ornare blandit. Cras consectetur dignissim felis, quis pellentesque risus auctor nec. Duis non leo nisi. Sed vel sem id leo vulputate pellentesque.

Vestibulum porta egestas sem. Nullam cursus elementum urna, non facilisis elit vehicula id. Suspendisse potenti. Curabitur eleifend dui in nisi viverra dictum. Nulla aliquam, nisi eget rutrum tempus, nunc neque scelerisque ante, a maximus sapien magna vel est. Proin elit ex, molestie sed sem consectetur, tincidunt semper odio. Nullam a cursus orci. Cras in cursus ante. Duis mollis rhoncus mi ut sollicitudin. Nulla convallis, ipsum vel tincidunt porta, orci lorem venenatis eros, id suscipit nisi lectus eu metus. Nullam et massa id arcu mattis viverra et sit amet leo. Pellentesque ut libero sit amet neque maximus bibendum at eu mi. Aliquam erat volutpat. Nulla facilisi.

Praesent mollis dictum metus eget aliquam. Sed blandit condimentum dui et rhoncus. Sed vestibulum tristique tortor, a volutpat ante ultrices in. Praesent tempus in justo consequat gravida. Sed nec magna massa. Cras ut nisi quis elit viverra eleifend. Fusce hendrerit mollis tristique. Donec consectetur venenatis odio, nec tempus ante sodales at. Sed nec feugiat augue. Maecenas vestibulum tellus ac pretium hendrerit. Cras tincidunt ornare sapien, nec viverra massa bibendum et. Nulla in pellentesque sapien, nec lacinia justo.

Duis vitae ante ex.',
            'email'=>'tomka@gmail.com',
            'tel'=>'123456789',
            'publications'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'curator'=>'1-fel',
            'position'=>'головний асистент',
        ]);
        \App\Models\Teachers::create([
            'FIO' => 'Веселка Михайло Іванович',
            'science_degree' => 'професор',
            'education' => 'КПІ',
            'course' => 'Акустотехніка',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in commodo purus, eu posuere neque. Nam sagittis eros magna, at dignissim turpis dignissim in. Morbi vestibulum neque nec maximus consectetur. Duis vitae volutpat felis, a efficitur dolor. Integer sodales imperdiet ante, quis tristique nunc posuere ac. Cras at efficitur lacus. Etiam pretium purus ut ex semper commodo. Morbi at convallis lacus. Nunc nec urna a eros aliquam dictum et sed orci. Curabitur turpis magna, tempus eu orci quis, semper elementum neque. Donec sit amet lacus suscipit urna vestibulum pellentesque. Curabitur non urna mauris. Morbi vitae ligula tortor. Vestibulum tristique velit augue. Praesent rhoncus fringilla nisi ac sollicitudin. Suspendisse mollis tincidunt orci vel mattis.

Aenean mattis sapien magna. Duis id nulla mattis, mattis ipsum a, congue velit. Ut iaculis lacus vitae malesuada ornare. Praesent vitae aliquam lacus. Pellentesque dignissim nisl non suscipit accumsan. Quisque non dapibus risus, in luctus nunc. Etiam tincidunt consequat lacus nec dictum. Integer ultricies, lacus non ultrices hendrerit, orci ligula auctor ante, sodales finibus arcu dui gravida lacus. Phasellus a libero est. Nullam nec est accumsan, interdum tellus quis, rhoncus purus. Mauris lacus lorem, interdum in ultricies quis, tincidunt eget lacus. Praesent molestie elit sit amet mauris ornare blandit. Cras consectetur dignissim felis, quis pellentesque risus auctor nec. Duis non leo nisi. Sed vel sem id leo vulputate pellentesque.

Vestibulum porta egestas sem. Nullam cursus elementum urna, non facilisis elit vehicula id. Suspendisse potenti. Curabitur eleifend dui in nisi viverra dictum. Nulla aliquam, nisi eget rutrum tempus, nunc neque scelerisque ante, a maximus sapien magna vel est. Proin elit ex, molestie sed sem consectetur, tincidunt semper odio. Nullam a cursus orci. Cras in cursus ante. Duis mollis rhoncus mi ut sollicitudin. Nulla convallis, ipsum vel tincidunt porta, orci lorem venenatis eros, id suscipit nisi lectus eu metus. Nullam et massa id arcu mattis viverra et sit amet leo. Pellentesque ut libero sit amet neque maximus bibendum at eu mi. Aliquam erat volutpat. Nulla facilisi.

Praesent mollis dictum metus eget aliquam. Sed blandit condimentum dui et rhoncus. Sed vestibulum tristique tortor, a volutpat ante ultrices in. Praesent tempus in justo consequat gravida. Sed nec magna massa. Cras ut nisi quis elit viverra eleifend. Fusce hendrerit mollis tristique. Donec consectetur venenatis odio, nec tempus ante sodales at. Sed nec feugiat augue. Maecenas vestibulum tellus ac pretium hendrerit. Cras tincidunt ornare sapien, nec viverra massa bibendum et. Nulla in pellentesque sapien, nec lacinia justo.

Duis vitae ante ex.',
            'email'=>'myhaylo@gmail.com',
            'tel'=>'123456789',
            'publications'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'curator'=>'1-fel',
            'position'=>'професор',
        ]);
        \App\Models\Teachers::create([
            'FIO' => 'Жучкова Марія Петрівна',
            'science_degree' => 'доцент',
            'education' => 'КПІ',
            'course' => 'Акустотехніка',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in commodo purus, eu posuere neque. Nam sagittis eros magna, at dignissim turpis dignissim in. Morbi vestibulum neque nec maximus consectetur. Duis vitae volutpat felis, a efficitur dolor. Integer sodales imperdiet ante, quis tristique nunc posuere ac. Cras at efficitur lacus. Etiam pretium purus ut ex semper commodo. Morbi at convallis lacus. Nunc nec urna a eros aliquam dictum et sed orci. Curabitur turpis magna, tempus eu orci quis, semper elementum neque. Donec sit amet lacus suscipit urna vestibulum pellentesque. Curabitur non urna mauris. Morbi vitae ligula tortor. Vestibulum tristique velit augue. Praesent rhoncus fringilla nisi ac sollicitudin. Suspendisse mollis tincidunt orci vel mattis.

Aenean mattis sapien magna. Duis id nulla mattis, mattis ipsum a, congue velit. Ut iaculis lacus vitae malesuada ornare. Praesent vitae aliquam lacus. Pellentesque dignissim nisl non suscipit accumsan. Quisque non dapibus risus, in luctus nunc. Etiam tincidunt consequat lacus nec dictum. Integer ultricies, lacus non ultrices hendrerit, orci ligula auctor ante, sodales finibus arcu dui gravida lacus. Phasellus a libero est. Nullam nec est accumsan, interdum tellus quis, rhoncus purus. Mauris lacus lorem, interdum in ultricies quis, tincidunt eget lacus. Praesent molestie elit sit amet mauris ornare blandit. Cras consectetur dignissim felis, quis pellentesque risus auctor nec. Duis non leo nisi. Sed vel sem id leo vulputate pellentesque.

Vestibulum porta egestas sem. Nullam cursus elementum urna, non facilisis elit vehicula id. Suspendisse potenti. Curabitur eleifend dui in nisi viverra dictum. Nulla aliquam, nisi eget rutrum tempus, nunc neque scelerisque ante, a maximus sapien magna vel est. Proin elit ex, molestie sed sem consectetur, tincidunt semper odio. Nullam a cursus orci. Cras in cursus ante. Duis mollis rhoncus mi ut sollicitudin. Nulla convallis, ipsum vel tincidunt porta, orci lorem venenatis eros, id suscipit nisi lectus eu metus. Nullam et massa id arcu mattis viverra et sit amet leo. Pellentesque ut libero sit amet neque maximus bibendum at eu mi. Aliquam erat volutpat. Nulla facilisi.

Praesent mollis dictum metus eget aliquam. Sed blandit condimentum dui et rhoncus. Sed vestibulum tristique tortor, a volutpat ante ultrices in. Praesent tempus in justo consequat gravida. Sed nec magna massa. Cras ut nisi quis elit viverra eleifend. Fusce hendrerit mollis tristique. Donec consectetur venenatis odio, nec tempus ante sodales at. Sed nec feugiat augue. Maecenas vestibulum tellus ac pretium hendrerit. Cras tincidunt ornare sapien, nec viverra massa bibendum et. Nulla in pellentesque sapien, nec lacinia justo.

Duis vitae ante ex.',
            'email'=>'maria@gmail.com',
            'tel'=>'123456789',
            'publications'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'curator'=>'1-fel',
            'position'=>'старший викладач',
        ]);
    }
}






