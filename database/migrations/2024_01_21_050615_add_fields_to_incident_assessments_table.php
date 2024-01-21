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
                $table->string('ranger_in_charge')->after('evidence_file')->nullable();
                $table->string('mode_of_transport')->after('ranger_in_charge')->nullable();
                $table->string('no_vehicle_used')->after('mode_of_transport')->nullable();
                $table->string('fuel')->after('no_vehicle_used')->nullable();
                $table->string('no_rangers')->after('fuel')->nullable();
                $table->string('batteries')->after('no_rangers')->nullable();
                $table->string('combo_rations')->after('batteries')->nullable();
                $table->string('fresh_rations')->after('combo_rations')->nullable();
                $table->string('ammunition')->after('fresh_rations')->nullable();
                $table->string('rounds')->after('ammunition')->nullable();
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
                $table->dropColumn('ranger_in_charge');
                $table->dropColumn('mode_of_transport');
                $table->dropColumn('no_vehicle_used');
                $table->dropColumn('fuel');
                $table->dropColumn('no_rangers');
                $table->dropColumn('batteries');
                $table->dropColumn('combo_rations');
                $table->dropColumn('fresh_rations');
                $table->dropColumn('ammunition');
                $table->dropColumn('rounds');
            }
        );
    }
};
