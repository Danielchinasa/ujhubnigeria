<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('institution');
            $table->string('matric_num');
            $table->string('program');
            $table->string('other');
            $table->string('department');
            $table->string('duration');
            $table->string('gender');
            $table->string('area1');
            $table->string('area2');
            $table->string('area3');
            $table->string('area4');
            $table->string('area5');
            $table->string('lang1');
            $table->string('lang2');
            $table->string('lang3');
            $table->string('lang4');
            $table->string('lang5');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('address');
            $table->string('about');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('appforms');
    }
}
