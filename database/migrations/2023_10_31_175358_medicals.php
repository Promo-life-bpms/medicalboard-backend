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
        Schema::create('medicals', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('tag')->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('status');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('user_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('img')->nullable();
            $table->string('site')->nullable();
            $table->string('location')->nullable();
            $table->string('type');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('url');
            $table->string('more_information');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('event_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('status');
            $table->timestamps();
        });

        Schema::create('event_invited', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->longText('users');
            $table->foreign('event_id')->references('id')->on('events');
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
        Schema::dropIfExists('user_logs');
        Schema::dropIfExists('event_logs');
        Schema::dropIfExists('event_invited');
        Schema::dropIfExists('medicals');
        Schema::dropIfExists('events');
    }
};
