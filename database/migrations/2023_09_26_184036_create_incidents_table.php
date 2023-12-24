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
            'incidents', function (Blueprint $table) {
                $table->id();
                $table->string('name_of_affected', 25);
                $table->foreignId('ob_id')->constrained('obs');
                $table->foreignId('compensation_animal_id')->constrained('compensation_animals');
                $table->string('compensationable')->default('yes');
                $table->date('date_of_incident');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
