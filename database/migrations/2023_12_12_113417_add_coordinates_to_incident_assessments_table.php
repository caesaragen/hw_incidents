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
                $table->string('latitude')->after('time_of_incident')->nullable();
                $table->string('longitude')->after('latitude')->nullable();
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
                $table->dropColumn('latitude');
                $table->dropColumn('longitude');
            }
        );
    }
};
