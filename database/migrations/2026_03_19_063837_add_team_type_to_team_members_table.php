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
        Schema::table('team_members', function (Blueprint $table) {
            $table->string('team_type')->default('general')->after('region');
        });

        // Backfill existing records
        DB::table('team_members')
            ->whereIn('name', ['Mansheel Kaur', 'Arwinder Pal Singh'])
            ->update(['team_type' => 'legal']);

        DB::table('team_members')
            ->where('name', 'Sonia Ong')
            ->update(['team_type' => 'leadership']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn('team_type');
        });
    }
};
