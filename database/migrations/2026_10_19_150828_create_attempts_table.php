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
        Schema::create('attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('module_id')->nullable()->constrained()->nullOnDelete();
            $table->string('type', 20)->default('module');
            $table->decimal('earned', 8, 2)->default(0);
            $table->decimal('max_points', 8, 2)->default(0);
            $table->decimal('percentage', 5, 2)->default(0);
            $table->json('breakdown');
            $table->timestamps();

            $table->index(['user_id', 'module_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempts');
    }
};
