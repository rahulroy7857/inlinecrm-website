<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('course', 50)->nullable();
            $table->string('country', 35)->nullable();
            $table->string('state', 35)->nullable();
            $table->string('place', 50)->nullable();
            $table->text('message')->nullable();
            $table->string('source', 30)->nullable();
            $table->string('page', 100)->nullable();
            $table->integer('status')->comment('1:new,2:duplicate')->nullable();
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
        Schema::dropIfExists('enquiries');
    }
}
