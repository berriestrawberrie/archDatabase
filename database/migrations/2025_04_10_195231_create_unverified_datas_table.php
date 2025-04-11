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
        Schema::create('unverified_datas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyText('collection');
            $table->string('sequence_number');
            $table->tinyText('abundance');
            $table->tinyText('abundance_2');
            $table->tinyText('abundance_3');
            $table->tinyText('abundance_4');
            $table->tinyText('abundance_5');
            $table->tinyInteger('assigned_student');
            $table->decimal('base_diameter', total: 8, places: 2);
            $table->decimal('base_preserved', total: 8, places: 2);
            $table->decimal('base_width', total: 8, places: 2);
            $table->tinyText('core_munsell');
            $table->tinyText('entered_by');
            $table->date('date');
            $table->date('date_collected');
            $table->date('date_recorded');
            $table->date('dating_description');
            $table->text('decoration_description');
            $table->text('drawings');
            $table->date('end_date');
            $table->tinyText('end_period');
            $table->text('fabric_description');
            $table->tinyText('fabric_group');
            $table->tinyText('firing');
            $table->tinyText('form');
            $table->text('form_description');
            $table->tinyText('hardness');
            $table->integer('household_number');
            $table->tinyText('inclusion');
            $table->tinyText('inclusion_2');
            $table->tinyText('inclusion_3');
            $table->tinyText('inclusion_4');
            $table->tinyText('inclusion_5');
            $table->tinyText('joins_to');
            $table->tinyText('level');
            $table->text('other_comment');
            $table->text('other_dimension');
            $table->text('other');
            $table->tinyText('part');
            $table->binary('photo');
            $table->tinyText('production');
            $table->tinyText('recorder');
            $table->tinyText('revised_by');
            $table->decimal('rim_pct', total: 8, places: 2);
            $table->decimal('rim_diameter', total: 8, places: 2);
            $table->decimal('rim_preserved', total: 8, places: 2);
            $table->tinyText('roundness');
            $table->tinyText('roundness_2');
            $table->tinyText('roundness_3');
            $table->tinyText('roundness_4');
            $table->tinyText('roundness_5');
            $table->decimal('sherd_count', total: 8, places: 2);
            $table->integer('site_number');
            $table->tinyText('size');
            $table->tinyText('size_2');
            $table->tinyText('size_3');
            $table->tinyText('size_4');
            $table->tinyText('size_5');
            $table->date('start_date');
            $table->date('start_period');
            $table->tinyText('structure_number');
            $table->tinyText('surface_description');
            $table->text('texture');
            $table->decimal('thickness', total: 8, places: 2);
            $table->tinyText('unit');
            $table->integer('vessel_count');
            $table->tinyText('ware');
            $table->tinyText('weight');
            $table->decimal('width', total: 8, places: 2);
            $table->boolean('to_draw');
            $table->boolean('separate_photo');
            $table->boolean('isReviewed');
            $table->boolean('rdyDrop');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unverified_datas');
    }
};
