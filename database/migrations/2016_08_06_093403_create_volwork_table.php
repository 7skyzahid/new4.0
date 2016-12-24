<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volwork', function (Blueprint $table) {         // vol work = volunteer work
            $table->increments('id');
            $table->string('username');
            $table->string('team');
            $table->string('company');
            $table->date('from');
            $table->date('to');
            $table->text('description');
            $table->timestamps();

/* req            
username
team
company
from
to
description
*/        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volwork');
    }
}
