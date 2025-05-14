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
        Schema::create('button_tables', function (Blueprint $table) {
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
            $table->char('material', length: 100)->nullable();
            $table->char('button_type', length: 100)->nullable();
            $table->char('button_shape', length: 100)->nullable();
            $table->char('manufacturing_technique', length: 100)->nullable();
            $table->char('button_color', length: 100)->nullable();
            $table->char('eye', length: 100)->nullable();
            $table->char('shank_style', length: 100)->nullable();
            $table->char('metal_color', length: 100)->nullable();
            $table->char('post_manu_mod', length: 100)->nullable();
            $table->char('back_stamp', length: 100)->nullable();
            $table->char('burned', length: 100)->nullable();
            $table->char('conservation', length: 100)->nullable();
            $table->char('inlay_material', length: 100)->nullable();
            $table->char('decorative_color', length: 100)->nullable();
            $table->char('decorative_technique', length: 100)->nullable();
            $table->char('decorative_motif', length: 100)->nullable();
            $table->char('shank_material', length: 100)->nullable();
            $table->char('shank_condition', length: 100)->nullable();
            $table->char('face_material', length: 100)->nullable();
            $table->char('face_manu_tech', length: 100)->nullable();
            $table->char('button_join', length: 100)->nullable();
            $table->decimal('button_length', total: 8, places: 2)->nullable();
            $table->decimal('button_diameter', total: 8, places: 2)->nullable();
            $table->decimal('button_width', total: 8, places: 2)->nullable();
            $table->decimal('button_height', total: 8, places: 2)->nullable();
            $table->decimal('button_weight', total: 8, places: 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('button_tables');
    }
};
