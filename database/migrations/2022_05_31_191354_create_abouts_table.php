<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('Address')->nullable();
            $table->string('Description')->nullable();
            $table->string('Quote')->nullable();
            $table->string('Gmail')->nullable();
            $table->integer('Whatsapp')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Linkedin')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
