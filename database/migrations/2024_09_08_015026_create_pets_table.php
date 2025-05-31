<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('petsName');

            $table->unsignedBigInteger('id_breeds'); 
            $table->foreign('id_breeds')->references('id')->on('breeds'); 

            $table->unsignedBigInteger('id_color'); 
            $table->foreign('id_color')->references('id')->on('colors');

            $table->unsignedBigInteger('id_age'); 
            $table->foreign('id_age')->references('id')->on('ages');

            $table->unsignedBigInteger('id_vaccination'); 
            $table->foreign('id_vaccination')->references('id')->on('vaccinations');

            $table->unsignedBigInteger('id_owner'); 
            $table->foreign('id_owner')->references('id')->on('owners');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
