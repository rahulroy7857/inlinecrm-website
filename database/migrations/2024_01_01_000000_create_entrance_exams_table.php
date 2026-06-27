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
        Schema::create('entrance_exams', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('full_name');
            $table->string('short_name');
            $table->string('conducted_by');
            $table->text('purpose');
            $table->text('eligibility');
            $table->longText('exam_pattern');
            $table->string('mode');
            $table->string('duration')->nullable();
            $table->text('admission_process');
            $table->boolean('status')->default(true);
            $table->string('meta_title')->nullable();
            $table->string('meta')->nullable();
            $table->timestamps();
        });

        Schema::create('course_entrance_exam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('entrance_exam_id');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('entrance_exam_id')->references('id')->on('entrance_exams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrance_exams');
        Schema::dropIfExists('course_entrance_exam');
    }
}; 