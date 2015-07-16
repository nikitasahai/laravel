<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('username');
            $table->string('pw');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chat_users');
    }
}
