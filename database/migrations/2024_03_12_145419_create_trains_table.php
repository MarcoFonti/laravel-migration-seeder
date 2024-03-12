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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Company', 20);
            $table->string('Departure_station', 20);
            $table->string('Arrival_station', 20);
            $table->time('Departure_time');
            $table->time('Arrival_time');
            $table->char('Train_Code', 8);
            $table->tinyInteger('Number_of_Carriages');
            $table->time('On_time');
            $table->boolean('Cancelled', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};