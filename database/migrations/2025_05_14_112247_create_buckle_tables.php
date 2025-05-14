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
        Schema::create('buckle_tables', function (Blueprint $table) {
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
            $table->char('buckle_type', length: 100)->nullable();
            $table->char('frame_plating', length: 100)->nullable();
            $table->char('manufacturing_technique', length: 100)->nullable();
            $table->char('buckle_form', length: 100)->nullable();
            $table->char('element_type', length: 100)->nullable();
            $table->char('shape', length: 100)->nullable();
            $table->char('post_manu_mod', length: 100)->nullable();
            $table->char('buckle_part', length: 100)->nullable();
            $table->char('decorative_technique', length: 100)->nullable();
            $table->char('mended', length: 100)->nullable();
            $table->char('decorative_motif', length: 100)->nullable();
            $table->char('burned', length: 100)->nullable();
            $table->char('marks', length: 100)->nullable();
            $table->char('conservation', length: 100)->nullable();
            $table->decimal('buckle_width', total: 8, places: 2)->nullable();
            $table->decimal('obj_weight', total: 8, places: 2)->nullable();
            $table->decimal('buckle_length', total: 8, places: 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buckle_tables');
    }
};
