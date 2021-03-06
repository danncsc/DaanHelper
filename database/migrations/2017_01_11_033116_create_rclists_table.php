<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRclistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rclists', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('date', array('mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'));
            $table->enum('time', array('morning', 'raising', '1', '2', '3', '4', 'rest', '5', '6', '7', '8'));
            $table->string('stuEmail');
            $table->enum('status', array('OK', 'delay', 'lack', 'waste', 'ill', 'public', 'thing', 'funeral')); //正常 遲 缺 曠 病 公 事 喪
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
         Schema::drop('rclists');
    }
}
