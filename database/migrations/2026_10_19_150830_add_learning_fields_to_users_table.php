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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('streak_count')->default(0)->after('password');
            $table->date('last_active_date')->nullable()->after('streak_count');
            $table->foreignId('recommended_level_id')->nullable()->after('remember_token')
                ->constrained('levels')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('recommended_level_id');
            $table->dropColumn(['streak_count', 'last_active_date']);
        });
    }
};
