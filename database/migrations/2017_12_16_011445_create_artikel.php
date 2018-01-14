<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikel extends Migration
{
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('categories_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longtext('content')->nullable();
            $table->string('tags')->nullable();
            $table->integer('cms_users_id')->nullable();
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
