<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('number', 25)->nullable();
            $table->string('email', 50)->nullable();
            $table->integer('infrastructure')->nullable();
            $table->integer('academic')->nullable();
            $table->integer('placement')->nullable();
            $table->integer('value_money')->nullable();
            $table->integer('campus')->nullable();
            $table->integer('total')->nullable();
            $table->integer('type')->comment('1:college,2:abroad,3:school')->nullable();
            $table->integer('type_id')->nullable();
            $table->text('review')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
