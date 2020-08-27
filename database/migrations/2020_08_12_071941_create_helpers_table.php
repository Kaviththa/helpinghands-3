<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade');
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('n/p')->nullable();
            $table->string('nic')->nullable();
            $table->string('passport')->nullable();
            $table->string('copy')->nullable();
            $table->string('job')->nullable();
            $table->decimal('income',6,2)->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('helpers');
    }
}
