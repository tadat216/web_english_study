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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exam_type_id');
            $table->unsignedBigInteger('plan_id');
            $table->string('title', 50);
            $table->text('description');
            $table->time('time_limit');
            $table->integer('max_score');
            $table->timestamps();

            $table->foreign('exam_type_id')->references('id')->on('exam_types');
            $table->foreign('plan_id')->references('id')->on('plans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
