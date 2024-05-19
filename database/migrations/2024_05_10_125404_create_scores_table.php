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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('score_name');
            $table->float('score_a');
            $table->float('score_b');
            $table->float('score_c');
            $table->unsignedBigInteger('subject_id');
            $table->float('result_four');
            $table->float('result_ten');

            $table->string('status');
            $table->timestamps();



            $table->foreign('subject_id')->references('id')->on('register_courses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
