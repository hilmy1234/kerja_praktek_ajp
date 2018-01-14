<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyprofile extends Migration
{
    public function up()
    {
        Schema::create('companyprofile', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('slug')->nullable();
            $table->longtext('content')->nullable();
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companyprofile');
    }
}
