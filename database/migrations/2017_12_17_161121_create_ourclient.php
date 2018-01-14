<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurclient extends Migration
{
    public function up()
    {
        Schema::create('ourclient', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('image')->nullable();
            $table->text('excerpt')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ourclient');
    }
}
