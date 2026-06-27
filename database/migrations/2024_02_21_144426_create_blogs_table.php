<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200)->nullable();
            $table->string('category', 100)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('author', 100)->nullable();
            $table->string('meta_title', 200)->nullable();
            $table->text('meta')->nullable();
            $table->string('slug', 200)->unique();
            $table->text('content')->nullable();
            $table->string('image', 50)->nullable();
            $table->string('resized_image', 50)->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
