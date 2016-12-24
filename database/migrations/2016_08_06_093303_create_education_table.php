<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('degree');
            $table->string('studylevel');
            $table->string('institute');
            $table->date('from');
            $table->date('to');
            $table->text('description');
            $table->timestamps();

/* req            
username
degree
studylevel
institute
from
to
description
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('education');
    }
}
