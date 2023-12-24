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
            'next_of_kins', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignId('claimant_id')->constrained()->onDelete('cascade');
                $table->string('id_passport_no');
                $table->string('address');
                $table->string('post_code');
                $table->string('county');
                $table->string('sub_county');
                $table->string('location');
                $table->string('sub_location');
                $table->string('constituency');
                $table->string('tel_no');
                $table->string('email');
                $table->unsignedInteger('age');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('next_of_kins');
    }
};
