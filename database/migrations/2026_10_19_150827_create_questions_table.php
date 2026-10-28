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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->constrained()->cascadeOnDelete();
            $table->unsignedTinyInteger('question_order');
            $table->string('type', 20);
            $table->string('skill', 20);
            $table->text('prompt')->nullable();
            $table->text('audio_text')->nullable();
            $table->json('options')->nullable();
            $table->json('answer')->nullable();
            $table->json('accepted')->nullable();
            $table->json('pairs')->nullable();
            $table->text('target')->nullable();
            $table->text('hint')->nullable();
            $table->text('explanation')->nullable();
            $table->boolean('is_placement')->default(false);
            $table->timestamps();

            $table->index(['module_id', 'question_order']);
            $table->index(['skill', 'is_placement']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
