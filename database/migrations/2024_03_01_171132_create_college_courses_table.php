<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->foreign('college_id')->references('id')->on('colleges')->onDelete('cascade'); 
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); 
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade'); 
            $table->string('course_name', 200)->nullable();
            $table->integer('type')->comment('1:UG,2:PG')->nullable();
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
        Schema::dropIfExists('college_courses');
    }
}
