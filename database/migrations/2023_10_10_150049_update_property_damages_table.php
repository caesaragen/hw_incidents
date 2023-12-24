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
        Schema::table('property_damages', function (Blueprint $table) {
            $table->dropForeign(['assessment_id']);  // Drop the foreign key constraint
            $table->dropColumn('assessment_id');     // Drop the column
            $table->foreignId('claimant_id')->constrained()->onDelete('cascade')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('property_damages', function (Blueprint $table) {
            $table->foreignId('assessment_id')->constrained('incident_assessments')->after('id');
            $table->dropForeign(['claimant_id']);
            $table->dropColumn('claimant_id');
        });
    }
};
