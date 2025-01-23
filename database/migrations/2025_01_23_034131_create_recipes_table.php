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
        Schema::table('receipes', function (Blueprint $table) {
            // Add new columns if they don't exist
            if (!Schema::hasColumn('receipes', 'ingredients')) {
                $table->json('ingredients')->after('paragraph');
            }
            if (!Schema::hasColumn('receipes', 'instructions')) {
                $table->json('instructions')->after('ingredients');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('receipes', function (Blueprint $table) {
            $table->dropColumn(['ingredients', 'instructions']);
        });
    }
};
