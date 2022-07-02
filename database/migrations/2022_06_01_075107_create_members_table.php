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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->integer('member_old');
            $table->string('member_gender');
            $table->string('team_name');
            $table->string('member_phone');
            $table->string('member_detail');
            $table->string('member_image');
            $table->string('member_facebook')->nullable();
            $table->string('member_twitter')->nullable();
            $table->string('member_instagram')->nullable();
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
        Schema::dropIfExists('members');
    }
};
