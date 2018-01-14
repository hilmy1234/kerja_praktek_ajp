<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKetslisde extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketslide', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('excerpt')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longtext('content')->nullable();
            $table->text('excerpt2')->nullable();
            $table->string('title2')->nullable();
            $table->longtext('content2')->nullable();
            $table->text('excerpt3')->nullable();
            $table->string('title3')->nullable();
            $table->longtext('content3')->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ketslide');
    }
}
