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
        Schema::table('posts', function (Blueprint $table) {
            $table->index(['is_published', 'published_at']);
            $table->index('is_featured');
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->index('category');
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropIndex(['is_published', 'published_at']);
            $table->dropIndex(['is_featured']);
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->dropIndex(['category']);
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropIndex(['is_active']);
        });
    }
};
