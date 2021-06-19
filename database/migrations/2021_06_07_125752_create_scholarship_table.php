<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('nationality');
            $table->string('place_of_birth');
            $table->string('birthday');
            $table->string('passport_no');
            $table->string('marital_status');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phone_no');
            $table->string('photo');
            $table->string('uni_name');
            $table->string('edu_level');
            $table->string('course');
            $table->string('major');
            $table->string('matric_no');
            $table->string('cgpa');
            $table->integer('user_id');
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
        Schema::dropIfExists('scholarship');
    }
}
