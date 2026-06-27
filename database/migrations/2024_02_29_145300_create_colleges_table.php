<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('slug', 200)->unique();
            $table->string('meta_title', 200)->nullable();
            $table->text('meta')->nullable();
            $table->string('logo', 50)->nullable();
            $table->string('image', 50)->nullable();
            $table->string('resized_image', 50)->nullable();
            $table->string('slider_text', 250)->nullable();
            $table->text('about')->nullable();
            $table->text('overview')->nullable();
            $table->text('facilities')->nullable();
            $table->text('facilities2')->nullable();
            $table->string('side_image1', 50)->nullable();
            $table->string('side_image2', 50)->nullable();
            $table->string('side_image3', 50)->nullable();
            $table->string('side_image4', 50)->nullable();
            $table->string('youtube_id', 50)->nullable();
            $table->text('campus_images')->nullable();
            $table->integer('status')->default(1)->comment('1:show,2:hide');
            $table->integer('type')->default(1)->comment('1:College,2:PU College');
            $table->string('affiliation', 100)->nullable();
            $table->string('established', 50)->nullable();
            $table->string('location', 100)->nullable();
            $table->text('specializations')->nullable();
            $table->text('fees')->nullable();
            $table->text('placements')->nullable();
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
        Schema::dropIfExists('colleges');
    }
}
