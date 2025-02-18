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
        Schema::table('movies', function (Blueprint $table) {
            // Add category_id column for foreign key
            $table->foreignId('category_id')
                  ->nullable()
                  ->constrained('categories') // Explicitly specify the referenced table
                  ->onDelete('cascade'); // Cascade delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            // Drop the foreign key and the column
            $table->dropConstrainedForeignId('category_id');
        });
    }
};
