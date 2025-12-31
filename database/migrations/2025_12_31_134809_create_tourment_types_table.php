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
        Schema::create('tourment_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_ranked')->default(false);
            $table->boolean('is_asign_points')->default(false);
            $table->decimal('points-porcentage', 5, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourment_types');
    }
};
