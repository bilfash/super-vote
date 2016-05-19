<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('telp');
            $table->string('ktp');
            $table->string('session_ip');
            $table->string('session_exp');
            $table->string('token');
            $table->string('token_exp');
            $table->boolean('vote');
            $table->timestamps();
        });

        Schema::create('poll', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voterid');
            $table->boolean('vote');
            $table->timestamps();
        });

        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('parpol');
            $table->timestamps();
        });

        Schema::create('person_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryid');
            $table->integer('personid');
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
        Schema::drop('voter');
        Schema::drop('poll');
        Schema::drop('category');
        Schema::drop('person');
        Schema::drop('person_category');
    }
}
