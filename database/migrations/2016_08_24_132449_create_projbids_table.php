<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjbidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projbids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projpost_id');
            $table->string('username');
            $table->text('description');          // why should we hire you?  
            $table->integer('amount');
            $table->integer('acceptstatus');      // means bid not accepted yet
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
        Schema::drop('projbids');
    }
}
