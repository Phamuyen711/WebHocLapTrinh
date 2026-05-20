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
        Schema::create('tbl_quiz_results', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_user');
        $table->unsignedBigInteger('id_quiz');
        $table->integer('score');
        $table->boolean('is_passed');
        $table->timestamps();

        $table->foreign('id_user')->references('id')->on('tbl_users')->onDelete('cascade');
        $table->foreign('id_quiz')->references('id')->on('tbl_quizzes')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_quiz_results');
    }
};
