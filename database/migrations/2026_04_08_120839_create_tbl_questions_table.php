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
        Schema::create('tbl_questions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_quiz');
        $table->text('content');
        $table->integer('points')->default(10);
        $table->timestamps();

        $table->foreign('id_quiz')->references('id')->on('tbl_quizzes')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_questions');
    }
};
