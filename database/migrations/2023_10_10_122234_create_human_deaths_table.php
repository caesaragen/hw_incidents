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
        Schema::create('human_deaths', function (Blueprint $table) {
            $table->id();
            $table->foreignId('claimant_id')->constrained()->onDelete('cascade');
            $table->string('place_of_death');
            $table->string('animal_responsible');
            $table->string('inside_outside_pa');
            $table->string('gps_coordinates');
            $table->date('date_of_incident');
            $table->time('time_of_incident');
            $table->text('circumstances');
            $table->string('verifying_officer');
            $table->string('est_no');
            $table->text('warden_details');
            // $table->string('name');
            // $table->date('verification_date');
            $table->string('designation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('human_deaths');
    }
};
