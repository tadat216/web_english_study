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
        Schema::table('questions', function (Blueprint $table) {
            $table->string('text')->nullable()->change();
        });

        Schema::table('question_groups', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('text')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->string('text')->nullable(false)->change();
        });

        Schema::table('question_groups', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->string('text')->nullable(false)->change();
        });
    }
};
