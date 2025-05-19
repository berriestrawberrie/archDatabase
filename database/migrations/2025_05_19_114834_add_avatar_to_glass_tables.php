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
        Schema::table('glass_tables', function (Blueprint $table) {
            //
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
            $table->tinytext('glass_marks')->nullable();
            $table->char('completeness', length: 100)->nullable();
            $table->char('material', length: 100)->nullable();
            $table->char('glass_color', length: 100)->nullable();
            $table->char('vessel_category', length: 100)->nullable();
            $table->char('manufacturing_technique', length: 100)->nullable();
            $table->char('mold_type', length: 100)->nullable();
            $table->char('mended', length: 100)->nullable();
            $table->char('post_manu_mod', length: 100)->nullable();
            $table->char('solarized', length: 100)->nullable();
            $table->char('weather_eroded', length: 100)->nullable();
            $table->char('pontil_mark', length: 100)->nullable();
            $table->char('burned', length: 100)->nullable();
            $table->char('conservation', length: 100)->nullable();
            $table->char('decorative_technique', length: 100)->nullable();
            $table->char('stylistic_element', length: 100)->nullable();
            $table->char('bottle_element', length: 100)->nullable();
            $table->char('element_shape', length: 100)->nullable();
            $table->char('element_manu_fact', length: 100)->nullable();
            $table->char('element_treatment', length: 100)->nullable();
            $table->char('stemware_body', length: 100)->nullable();
            $table->char('stemware_foot', length: 100)->nullable();
            $table->char('applied_color', length: 100)->nullable();
            $table->char('stem_shape', length: 100)->nullable();
            $table->char('mark_location', length: 100)->nullable();
            $table->decimal('stem_length', total: 8, places: 2)->nullable();
            $table->decimal('container_height', total: 8, places: 2)->nullable();
            $table->decimal('sherd_thickness', total: 8, places: 2)->nullable();
            $table->decimal('sherd_size', total: 8, places: 2)->nullable();
            $table->decimal('sherd_weight', total: 8, places: 2)->nullable();
            $table->decimal('mended_sherd_weight', total: 8, places: 2)->nullable();
            $table->decimal('rim_length', total: 8, places: 2)->nullable();
            $table->decimal('rim_diameter', total: 8, places: 2)->nullable();
            $table->decimal('mended_rim_diameter', total: 8, places: 2)->nullable();
            $table->decimal('base_length', total: 8, places: 2)->nullable();
            $table->decimal('base_diameter', total: 8, places: 2)->nullable();
            $table->decimal('mended_base_diameter', total: 8, places: 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('glass_tables', function (Blueprint $table) {
            //
        });
    }
};
