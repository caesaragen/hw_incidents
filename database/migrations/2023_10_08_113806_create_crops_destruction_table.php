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
            'crops_destruction', function (Blueprint $table) {
                $table->id();
                $table->foreignId('claimant_id')->constrained()->onDelete('cascade');
                $table->text('circumstances');
                $table->string('crop_name');
                $table->string('animal_responsible');
                $table->enum('land_ownership_status', ['private', 'community', 'leased']);
                $table->string('acreage');
                $table->string('stage');
                $table->decimal('value', 8, 2);
                $table->text('measures');
                $table->string('place');
                $table->enum('location_status', ['inside', 'outside']);
                $table->date('date');
                $table->time('time');
                $table->string('verified_by');
                $table->string('est_no');
                $table->string('designation');
                $table->string('signature');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crops_destruction');
    }
};
