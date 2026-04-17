<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('partners')
            ->where('category', 'overeast_college')
            ->update(['category' => 'overseas_college']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('partners')
            ->where('category', 'overseas_college')
            ->update(['category' => 'overeast_college']);
    }
};
