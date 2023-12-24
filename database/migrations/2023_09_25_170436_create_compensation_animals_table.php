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
            'compensation_animals', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedBigInteger('incident_type_id');
                $table->timestamps();
    
                $table->foreign('incident_type_id')
                    ->references('id')
                    ->on('incident_types')
                    ->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compensation_animals');
    }
};
