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
       Schema::create('tbl_quizzes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_course'); // Tạo cột trước
        $table->string('chapter');
        $table->string('title');
        $table->integer('passing_score')->default(80);
        $table->integer('time_limit')->default(15);
        $table->timestamps();

        // Gán khóa ngoại sau
        $table->foreign('id_course')->references('id')->on('tbl_courses')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_quizzes');
    }
};
