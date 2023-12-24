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
            'incident_assessments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('incident_id')->constrained('incidents');
                $table->text('warden_dispatched');
                $table->text('narrative');
                $table->text('discussion_with_community');
                $table->text('monitoring_and_survey');
                $table->json('actions_taken')->nullable();
                $table->string('evidence_file')->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident_assessments');
    }
};
