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
        Schema::create(
            'property_damages', function (Blueprint $table) {
                $table->id();
                $table->foreignId('assessment_id')->constrained('incident_assessments');
                $table->text('circumstances');
                $table->integer('no_of_adult')->nullable();
                $table->decimal('estimated_value', 8, 2)->nullable();
                $table->string('animal_responsible');
                $table->decimal('total_estimated_value', 8, 2);
                $table->string('place_of_incident');
                $table->date('date_of_incident');
                $table->time('time_of_incident');
                $table->string('verified_by_name');
                $table->string('est_no');
                $table->text('details_of_incident');
                $table->string('insideOrOutsidePA');
                // $table->date('date_verified');
                $table->string('designation');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_damages');
    }
};
