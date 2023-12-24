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
            'obs', function (Blueprint $table) {
                $table->id();
                $table->string('ob_number', 25);
                $table->string('reporting_name', 25)->nullable();
                $table->string('id_number', 25)->nullable();
                $table->foreignId('incident_type')->constrained('incident_types');
                $table->string('name_of_affected', 25);
                $table->text('narrative')->nullable();
                $table->foreignId('user_id')->constrained('users');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obs');
    }
};
