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
        Schema::create('tourment_rounds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('tourment_id')->nullable()->references('id')->on('tourments')->onDelete('cascade');
            $table->date('scheduled_date');
            $table->time('start_time');
            $table->integer('participant_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourment_rounds');
    }
};
