<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->integer('classes_id')->unsigned();

            $table->string('email');
            $table->string('password');
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('phone');
            $table->date('date_of_join');
            $table->tinyInteger('status');
            $table->date('last_login_date');
            $table->string('last_login_ip');

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
        Schema::dropIfExists('students');
    }
}
