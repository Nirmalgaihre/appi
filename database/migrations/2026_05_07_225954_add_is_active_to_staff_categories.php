<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('staff_categories', function (Blueprint $blueprint) {
            // Add the column here
            $blueprint->boolean('is_active')->default(true)->after('title');
        });
    }

    public function down(): void
    {
        Schema::table('staff_categories', function (Blueprint $blueprint) {
            // Remove the column if we rollback
            $blueprint->dropColumn('is_active');
        });
    }
};