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
        Schema::create('latests', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name')->default(null);
            $table->string('author')->default(null);
            $table->string('description')->default(null);
            $table->string('date_publication')->default(null);
            $table->string('url')->default(null);
            $table->unsignedBigInteger('photo_id')->default(0);
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->unsignedBigInteger('type_id')->default(1);
            $table->foreign('type_id')->references('id')->on('typelatest')->default(1);
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
        Schema::dropIfExists('latests');
    }
};
