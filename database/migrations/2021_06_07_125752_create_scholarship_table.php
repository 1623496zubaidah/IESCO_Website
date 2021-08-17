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
        Schema::create('scholarships', function (Blueprint $table) {
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
            $table->string('total_credit');
            $table->string('Total_years');
            $table->string('credit_hours_done');
            $table->string('tuition_fee');
            $table->string('transport_cost');
            $table->string('books_cost');
            $table->string('room_cost');
            $table->string('No_family_members');
            $table->string('monthly_income');
            $table->string('situation');            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('scholarships');
    }
}
