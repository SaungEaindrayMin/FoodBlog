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
        Schema::create('instructions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receipe_id')->constrained('receipes')->onDelete('cascade');
            $table->string('title');
            $table->integer('step_order');
            $table->timestamps();
        });

        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receipe_id')->constrained('receipes')->onDelete('cascade');
            $table->string('title');
            $table->string('quantity')->nullable();
            $table->string('unit')->nullable();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Pivot table for many-to-many relationship between recipes and categories
        Schema::create('category_receipe', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('receipe_id')->constrained('receipes')->onDelete('cascade');
            $table->primary(['category_id', 'receipe_id']);
        });

        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_receipe');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('ingredients');
        Schema::dropIfExists('instructions');
        Schema::dropIfExists('mails');
    }
}; 