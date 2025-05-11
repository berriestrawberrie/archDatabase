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
        Schema::create('pipe_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinytext('entered_by')->nullable();
            $table->date('entered_date')->nullable();
            $table->date('change_date')->nullable();
            $table->char('checkout_by', length: 100)->nullable();
            $table->char('changed_by', length: 100)->nullable();
            $table->integer('artifact_id');
            $table->integer('artifact_count');
            $table->tinytext('collection')->nullable();
            $table->tinytext('notes')->nullable();
            $table->tinyInteger('isValid')->default(0);
            $table->tinyInteger('has_photo')->default(0);
            $table->binary('photo')->nullable();
            $table->tinytext('mark_notes')->nullable();
            $table->tinytext('slogan')->nullable();
            $table->char('non_plastic_inclu', length: 100)->nullable();
            $table->char('material', length: 100)->nullable();
            $table->char('manufacturing_technique', length: 100)->nullable();
            $table->char('glaze_type', length: 100)->nullable();
            $table->char('paste_color', length: 100)->nullable();
            $table->char('bowl_base_type', length: 100)->nullable();
            $table->char('mouthpiece_form', length: 100)->nullable();
            $table->char('glaze_color', length: 100)->nullable();
            $table->char('maker', length: 100)->nullable();
            $table->char('post_manu_mod', length: 100)->nullable();
            $table->char('conservation', length: 100)->nullable();
            $table->char('mended', length: 100)->nullable();
            $table->char('manufact_location', length: 100)->nullable();
            $table->char('conserved', length: 100)->nullable();
            $table->char('motif_location', length: 100)->nullable();
            $table->char('decorative_motif', length: 100)->nullable();
            $table->char('mark_type', length: 100)->nullable();
            $table->char('motif_manu_method', length: 100)->nullable();
            $table->char('text_location', length: 100)->nullable();
            $table->char('text_frame_motif', length: 100)->nullable();
            $table->decimal('bowl_volume', total: 8, places: 2)->nullable();
            $table->decimal('stem_length', total: 8, places: 2)->nullable();
            $table->decimal('exterior_stem_diameter', total: 8, places: 2)->nullable();
            $table->decimal('bore_diameter', total: 8, places: 2)->nullable();
            $table->decimal('64_bore_diameter', total: 8, places: 2)->nullable();
            $table->decimal('bowl_height', total: 8, places: 2)->nullable();
            $table->decimal('max_bowl_diameter', total: 8, places: 2)->nullable();
            $table->decimal('bowl_rim_diameter', total: 8, places: 2)->nullable();
            $table->decimal('weight', total: 8, places: 2)->nullable();
            $table->decimal('max_sherd', total: 8, places: 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pipe_tables');
    }
};
