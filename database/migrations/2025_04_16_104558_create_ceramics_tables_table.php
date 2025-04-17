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
        Schema::create('ceramics_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('artifact_id');
            $table->integer('artifact_count');
            $table->char('material', length: 100)->nullable();
            $table->char('manufacturing_technique', length: 100)->nullable();
            $table->char('ware', length: 100)->nullable();
            $table->char('vessel_category', length: 100)->nullable();
            $table->char('form', length: 100)->nullable();
            $table->char('mended_form', length: 100)->nullable();
            $table->char('completeness', length: 100)->nullable();
            $table->char('paste_color', length: 20);
            $table->char('exterior_surface', length: 100)->nullable();
            $table->char('exterior_color', length: 20);
            $table->char('interior_surface', length: 100)->nullable();
            $table->char('interior_color', length: 20)->nullable();
            $table->char('oxidized_vs_reduced_fabric', length: 100)->nullable();
            $table->char('evidence_of_burning', length: 100)->nullable();
            $table->char('mended', length: 100)->nullable();
            $table->char('post_manufacturing_mod', length: 100)->nullable();
            $table->tinytext('Added By')->nullable();
            $table->tinytext('changed_by')->nullable();
            $table->date('change_date')->nullable();
            $table->tinyText('notes')->nullable();
            $table->char('interior_exterior', length: 100)->nullable();
            $table->char('location', length: 100)->nullable();
            $table->char('decorative_technique', length: 100)->nullable();
            $table->char('decoration_color', length: 20)->nullable();
            $table->char('stylistic_element', length: 100)->nullable();
            $table->tinyInteger('stylistic_element_number')->nullable();
            $table->char('motif', length: 100)->nullable();
            $table->char('pattern_name', length: 100)->nullable();
            $table->text('pattern_notes')->nullable();
            $table->tinyText('pattern_reference')->nullable();
            $table->char('genre', length: 100)->nullable();
            $table->char('base_mark', length: 100)->nullable();
            $table->tinyText('base_mark_ref')->nullable();
            $table->char('base_mark_color', length: 20)->nullable();
            $table->char('colonoware', length: 100)->nullable();
            $table->char('colono_rim_form', length: 100)->nullable();
            $table->char('colono_rim_angle', length: 100)->nullable();
            $table->decimal('max_rim_width', total: 8, places: 2)->nullable();
            $table->char('colono_decoration_mode', length: 100)->nullable();
            $table->char('colono_base_form', length: 100)->nullable();
            $table->char('colono_footring_form', length: 100)->nullable();
            $table->char('non_plastic_paste_inclusions', length: 100)->nullable();
            $table->char('total_paste_inclusion_density', length: 100)->nullable();
            $table->char('wear_location', length: 100)->nullable();
            $table->char('ceramic_completeness', length: 100)->nullable();
            $table->char('wear_pattern', length: 100)->nullable();
            $table->decimal('sherd_thickness', total: 8, places: 2)->nullable();
            $table->decimal('max_sherd_measurement', total: 8, places: 2)->nullable();
            $table->decimal('sherd_weight', total: 8, places: 2)->nullable();
            $table->decimal('mended_sherd_weight', total: 8, places: 2)->nullable();
            $table->decimal('rim_length', total: 8, places: 2)->nullable();
            $table->decimal('rim_diameter', total: 8, places: 2)->nullable();
            $table->decimal('mended_rim_diameter', total: 8, places: 2)->nullable();
            $table->decimal('base_length', total: 8, places: 2)->nullable();
            $table->decimal('base_diameter', total: 8, places: 2)->nullable();
            $table->decimal('mended_base_diameter', total: 8, places: 2)->nullable();
            $table->binary('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceramics_tables');
    }
};
