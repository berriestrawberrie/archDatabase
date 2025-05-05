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
        Schema::create('_bead_tables', function (Blueprint $table) {
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
            $table->char('material', length: 100)->nullable();
            $table->char('manufacturing_technique', length: 100)->nullable();
            $table->char('bead_struct', length: 100)->nullable();
            $table->char('bead_form', length: 100)->nullable();
            $table->tinyInteger('has_photo')->default(0);
            $table->binary('photo')->nullable();
            $table->char('bead_shape', length: 100)->nullable();
            $table->char('complex_shape', length: 100)->nullable();
            $table->char('end_treatment', length: 100)->nullable();
            $table->char('bead_color', length: 100)->nullable();
            $table->char('heat_treatment', length: 100)->nullable();
            $table->tinyInteger('number_facets')->nullable();
            $table->char('diaphaneity', length: 100)->nullable();
            $table->char('mended', length: 100)->nullable();
            $table->char('post_man_mod', length: 100)->nullable();
            $table->char('patination', length: 100)->nullable();
            $table->char('weather_erode', length: 100)->nullable();
            $table->char('burned', length: 100)->nullable();
            $table->char('applied_color', length: 100)->nullable();
            $table->char('bead_decoration', length: 100)->nullable();
            $table->char('casing_layer', length: 100)->nullable();
            $table->char('casing_color', length: 100)->nullable();
            $table->char('decoration_desc', length: 100)->nullable();
            $table->decimal('perforation_1', total: 8, places: 2)->nullable();
            $table->decimal('perforation_2', total: 8, places: 2)->nullable();
            $table->decimal('bead_length', total: 8, places: 2)->nullable();
            $table->decimal('bead_width', total: 8, places: 2)->nullable();
            $table->decimal('bead_height', total: 8, places: 2)->nullable();
            $table->decimal('bead_weight', total: 8, places: 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_bead_tables');
    }
};
