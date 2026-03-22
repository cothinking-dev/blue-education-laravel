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
        if (! Schema::hasColumn('posts', 'deleted_at')) {
            Schema::table('posts', fn (Blueprint $table) => $table->softDeletes());
        }

        if (! Schema::hasColumn('testimonials', 'deleted_at')) {
            Schema::table('testimonials', fn (Blueprint $table) => $table->softDeletes());
        }

        if (! Schema::hasColumn('faqs', 'deleted_at')) {
            Schema::table('faqs', fn (Blueprint $table) => $table->softDeletes());
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', fn (Blueprint $table) => $table->dropSoftDeletes());
        Schema::table('testimonials', fn (Blueprint $table) => $table->dropSoftDeletes());
        Schema::table('faqs', fn (Blueprint $table) => $table->dropSoftDeletes());
    }
};
