<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade'); 
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade'); 
            $table->string('course_name', 200)->nullable();
            $table->string('fee', 30)->nullable();
            $table->string('mode', 30)->nullable();
            $table->string('seat', 30)->nullable();
            $table->string('exams', 200)->nullable();
            $table->text('eligibility')->nullable();
            $table->string('duration', 200)->nullable();
            $table->text('affiliation')->nullable();
            $table->integer('status')->default(1)->comment('1:show,2:hide');
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
        Schema::dropIfExists('school_classes');
    }
}
