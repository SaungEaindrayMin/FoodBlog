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
            // Add category_id foreign key
            $table->foreignId('category_id')->after('id')->constrained()->onDelete('cascade');
            
            // Remove the old ingredient column
            $table->dropColumn('ingredient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('receipes', function (Blueprint $table) {
            // Add back the ingredient column
            $table->text('ingredient')->after('paragraph');
            
            // Remove the category_id foreign key
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
