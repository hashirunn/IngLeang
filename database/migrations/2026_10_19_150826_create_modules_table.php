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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')->constrained()->cascadeOnDelete();
            $table->unsignedTinyInteger('module_order');
            $table->string('slug');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('summary');
            $table->json('objectives');
            $table->json('sections');
            $table->json('vocabulary');
            $table->string('icon', 24)->nullable();
            $table->timestamps();

            $table->unique(['level_id', 'module_order']);
            $table->unique(['level_id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
