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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('timer_disconnected_warning');
            $table->integer('track_length');
            $table->enum('time_precision', ['0.001', '0.0001']);
            $table->integer('previous_heat_linger_time');
            $table->string('full_group_name')->default('Pack');
            $table->string('sub_group_name')->default('Den');
            $table->boolean('display_full_racer_name')->default(true);
            $table->boolean('max_one_trophy_per_racer')->default(true);
            $table->boolean('max_one_aware_per_racer')->default(true);
            $table->boolean('use_exclusive_by_award')->default(false);
            $table->string('exclusive_by_award_name')->default('Exclusively By Scout');
            $table->enum('now_racing_photo_display', ['No photos', 'Racer Photos', 'Car Photos']);
            $table->boolean('on_deck_photo_display')->default(true);
            $table->boolean('racer_results_display_racer')->default(true);
            $table->boolean('racer_results_display_car')->default(true);
            $table->boolean('interleave_heats_from_all_sub_groups')->default(false);
            $table->boolean('race_by_points_instead_of_times')->default(false);
            $table->boolean('single_run_per_car_schedule')->default(false);
            $table->enum('scoring_method', ['Average all heat times', 'Drop slowest heat', 'Take single fastest heat'])->default('Average all heat times');
            $table->boolean('racing')->default(false);
            $table->enum('image_set', ['Default', 'Cub Scouts'])->default('Default');
            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
