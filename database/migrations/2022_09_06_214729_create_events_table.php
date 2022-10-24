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
        Schema::create('events', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('media')->nullable();
            $table->string('description')->nullable();
            $table->string('date')->nullable();
            $table->string('url')->default('url')->nullable();
            $table->unsignedBigInteger('photo_id');
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('events');
    }
};
