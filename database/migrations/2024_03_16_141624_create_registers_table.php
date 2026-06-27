<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('number', 25)->nullable();
            $table->string('alternative_number', 25)->nullable();
            $table->string('dob', 25)->nullable();
            $table->string('gender', 20)->nullable();
            $table->string('father', 100)->nullable();
            $table->string('mother', 100)->nullable();
            $table->string('father_no', 20)->nullable();
            $table->string('mother_no', 20)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('post', 20)->nullable();
            $table->string('course', 100)->nullable();
            $table->string('tenth', 25)->nullable();
            $table->string('twelth', 25)->nullable();
            $table->string('high_qualification', 25)->nullable();
            $table->string('high_qualification_name', 100)->nullable();
            $table->string('compitative_exam', 100)->nullable();
            $table->string('counselor_name', 100)->nullable();
            $table->string('register_for', 100)->nullable();
            $table->string('college', 100)->nullable();
            $table->string('year_appearence', 50)->nullable();
            $table->string('counselor_email', 100)->nullable();
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
        Schema::dropIfExists('registers');
    }
}
