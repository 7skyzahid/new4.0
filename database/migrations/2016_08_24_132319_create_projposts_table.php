<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->string('title');
            $table->text('description');
            $table->string('payment_type');     // full or hourly
            $table->date('startdate');
            $table->date('deadline');
            $table->text('tags');       // project requirements like php, javascript, etc
            $table->integer('amount');
            $table->string('status');     // project waiting or awarded
            $table->integer('accepted_bid_id')->nullable();     // accepted bid id... will be null until bid is accepted
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
        Schema::drop('projposts');
    }
}
