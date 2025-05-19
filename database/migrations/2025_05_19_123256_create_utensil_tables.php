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
        Schema::create('utensil_tables', function (Blueprint $table) {
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
            $table->char('completeness', length: 100)->nullable();
            $table->char('material', length: 100)->nullable();
            $table->char('utensil_form', length: 100)->nullable();
            $table->char('plating', length: 100)->nullable();
            $table->char('handle_decoration', length: 100)->nullable();
            $table->char('manufacturing_technique', length: 100)->nullable();
            $table->char('spoon_rat', length: 100)->nullable();
            $table->char('mended', length: 100)->nullable();
            $table->char('post_manu_mod', length: 100)->nullable();
            $table->char('burned', length: 100)->nullable();
            $table->char('shape', length: 100)->nullable();
            $table->char('fork_tines', length: 100)->nullable();
            $table->char('part', length: 100)->nullable();
            $table->char('mark', length: 100)->nullable();
            $table->char('conservation', length: 100)->nullable();
            $table->decimal('object_length', total: 8, places: 2)->nullable();
            $table->decimal('object_width', total: 8, places: 2)->nullable();
            $table->decimal('object_weight', total: 8, places: 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utensil_tables');
    }
};
