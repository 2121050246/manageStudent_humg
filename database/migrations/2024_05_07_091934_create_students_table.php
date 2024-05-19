<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_code')->unique();
            $table->string('student_name');
            $table->string('student_birth');
            $table->string('student_gender');
            $table->string('student_phone');

            $table->string('student_nation');
            $table->string('student_year');
            $table->string('student_status');
            $table->string('student_address');


            $table->string('student_path')->nullable();
            $table->string('student_path_full')->nullable();

            $table->string('student_slug')->nullable();


            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('major_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
