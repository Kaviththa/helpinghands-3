<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiversTable extends Migration
{

    public function up()
    {
        Schema::create('receivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name', 100);
            $table->string('dob');
            $table->string('nic')->unique();
            $table->string('job');
            $table->string('income')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('mobile');
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('avatar');
            $table->string('nic_copy');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('family_details')->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('receivers');
    }
}
