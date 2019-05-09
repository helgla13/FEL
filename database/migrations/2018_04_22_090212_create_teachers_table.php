<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FIO');
            $table->string('photo')->nullable();
            $table->string('science_degree')->nullable();
            $table->string('education')->nullable();
            $table->string('course')->nullable();
            $table->text('about')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('publications')->nullable();
            $table->string('curator')->nullable();
            $table->string('position')->nullable();
            $table->string('intelect')->nullable();
            $table->string('googlescholar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
