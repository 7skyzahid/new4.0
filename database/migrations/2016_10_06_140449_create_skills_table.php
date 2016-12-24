<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('company');
            $table->string('location');
            $table->string('country');
            $table->string('title');
            $table->string('role');
            $table->string('fmonth');
            $table->string('fyear');
            $table->string('tomonth');
            $table->string('toyear');
            $table->string('current');
            $table->string('description');
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
        Schema::drop('skills');
    }
}
