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
        Schema::create('service_appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('apptDate');

            $table->unsignedBigInteger('id_pet'); 
            $table->foreign('id_pet')->references('id')->on('pets'); 
           
            $table->unsignedBigInteger('id_groomer'); 
            $table->foreign('id_groomer')->references('id')->on('groomers'); 

            $table->unsignedBigInteger('id_service'); 
            $table->foreign('id_service')->references('id')->on('services');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_appointments');
    }
};
