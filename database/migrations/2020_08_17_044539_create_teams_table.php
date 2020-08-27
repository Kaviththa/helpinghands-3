<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('organization');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade');
            $table->string('lane');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('area')->nullable();
            $table->string('startup');
            $table->text('achievement');
            $table->string('phone')->nullable();
            $table->string('moblie')->nullable();
            $table->string('website')->nullable();
            $table->string('avatar')->nullable();
            $table->string('proof')->nullable();
            $table->timestamp('approved_at')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
