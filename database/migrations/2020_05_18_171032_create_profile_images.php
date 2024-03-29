<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->bigInteger('profile_image_id')->unsigned();
            $table->foreign('profile_image_id')->references('id')->on('images');
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
        Schema::dropIfExists('profile_images');
    }
}
