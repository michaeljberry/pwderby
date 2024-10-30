<?php

use App\Enums\AwardType;
use App\Enums\AwardCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type')->default(AwardType::VERBAL->value);
            $table->unsignedInteger('category')->default(AwardCategory::OTHER->value);
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
