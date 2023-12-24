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
        Schema::table(
            'incident_assessments', function (Blueprint $table) {
                $table->string('ob_number')->after('evidence_file'); // Add ob_number after evidence_file
                $table->time('time_of_incident')->after('ob_number'); // Add time_of_incident after ob_number
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(
            'incident_assessments', function (Blueprint $table) {
                $table->dropColumn(['ob_number', 'time_of_incident']);
            }
        );
    }
};
