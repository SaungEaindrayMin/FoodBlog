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
        Schema::dropIfExists('contact_mails');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Removed the table creation code to streamline the mail handling process
    }
};
