<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkexpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workexp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('position');
            $table->string('company');
            $table->date('from');
            $table->date('to');
            $table->text('description');
            $table->timestamps();

/* req            
username
position
company
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
        Schema::drop('workexp');
    }
}
