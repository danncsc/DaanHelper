<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher');
            $table->enum('class', array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', 'none'));
            $table->enum('grade', array('gradeOne', 'gradeTwo', 'gradeThree', 'none'));
            $table->enum('date', array('mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'));
            $table->enum('time', array('morning', 'raising', '1', '2', '3', '4', 'rest', '5', '6', '7', '8'));
            //$table->enum('status', array('OK', 'delay', 'lack', 'waste', 'ill', 'public', 'thing', 'funeral')); //正常 遲 缺 曠 病 公 事 喪
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
        Schema::drop('students');
    }
}
