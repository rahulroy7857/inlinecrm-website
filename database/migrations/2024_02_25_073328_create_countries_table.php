<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('meta_title', 200)->nullable();
            $table->text('meta')->nullable();
            $table->text('overview')->nullable();
            $table->string('slug', 200)->unique();
            $table->string('image', 50)->nullable();
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
        Schema::dropIfExists('countries');
    }
}
