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
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Certificate', 'Trophy', 'Verbal'])->default('Verbal');
            $table->enum('category', ['Design', 'Speed', 'Other'])->default('Other');
            $table->foreignId('group_id')
                ->constrained()
                ->nullOnUpdate()
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awards');
    }
};
