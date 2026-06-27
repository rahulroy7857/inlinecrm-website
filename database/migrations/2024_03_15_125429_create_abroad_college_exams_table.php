<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbroadCollegeExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abroad_college_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->foreign('college_id')->references('id')->on('abroad_colleges')->onDelete('cascade'); 
            $table->string('exam', 200)->nullable();
            $table->string('full_name', 200)->nullable();
            $table->string('start_date', 15)->nullable();
            $table->string('end_date', 15)->nullable();
            $table->string('mode', 200)->nullable();
            $table->text('details')->nullable();
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
        Schema::dropIfExists('abroad_college_exams');
    }
}
