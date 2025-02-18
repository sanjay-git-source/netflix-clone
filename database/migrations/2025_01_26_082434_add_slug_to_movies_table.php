<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration {
    public function up(): void {
        Schema::table('movies', function (Blueprint $table) {
            $table->string('slug')->nullable(); // Add without unique constraint
        });


        // Add the unique constraint
        Schema::table('movies', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    public function down(): void {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};
