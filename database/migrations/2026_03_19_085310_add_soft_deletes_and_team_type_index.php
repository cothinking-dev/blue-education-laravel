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
            $table->softDeletes();
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('team_members', function (Blueprint $table) {
            $table->softDeletes();
            $table->index('team_type');
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('team_members', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropIndex(['team_type']);
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
