<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade'); 
            $table->string('name', 100)->nullable();
            $table->string('full_name', 220)->nullable();
            $table->string('slug', 100)->unique();
            $table->string('logo', 50)->nullable();
            $table->text('eligibility')->nullable();
            $table->string('duration', 200)->nullable();
            $table->string('university', 200)->nullable();
            $table->integer('status')->default(1)->comment('1:show,2:hide');
            $table->integer('type')->comment('1:UG,2:PG')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
