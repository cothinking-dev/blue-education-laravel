<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('redirects')) {
            return;
        }

        DB::table('redirects')->whereColumn('from_path', 'to_path')->delete();
    }

    public function down(): void
    {
        // Irreversible: dropped rows were Wix-import artefacts (self-loops) that
        // caused infinite redirect loops in production. Recreating them would
        // restore the bug.
    }
};
