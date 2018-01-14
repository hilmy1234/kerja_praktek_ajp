<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallery extends Migration
{
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->text('excerpt')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gallery');
    }
}
