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
        Schema::create('_table__people__tourment_round', function (Blueprint $table) {
            $table->id();
            $table->foreign('people_id')->nullable()->references('id')->on('peoples')->onDelete('cascade');
            $table->foreign('tourment_round_id')->nullable()->references('id')->on('tourment_rounds')->onDelete('cascade');
            $table->foreignId('score_id')->nullable()->constrained('scores')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_table__people__tourment_round');
    }
};
