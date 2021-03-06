<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rooms_users', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();

        $table->integer('room_id')->unsigned();
        $table->integer('user_id')->unsigned();

        $table->date('check_in');
        $table->date('check_out');

        $table->foreign('room_id')->references('id')->on('rooms');
        $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rooms_users');
    }
}
