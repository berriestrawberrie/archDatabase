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
        Schema::table('bone_tables', function (Blueprint $table) {
            //
            $table->tinytext('entered_by')->nullable();
            $table->date('entered_date')->nullable();
            $table->date('change_date')->nullable();
            $table->char('checkout_by', length: 100)->nullable();
            $table->char('changed_by', length: 100)->nullable();
            $table->integer('artifact_id');
            $table->tinytext('notes')->nullable();
            $table->tinyInteger('isValid')->default(0);
            $table->tinyInteger('has_file')->default(0);
            $table->tinytext('file')->nullable();
            $table->char('provenience', length: 100)->nullable();
            $table->char('designated_id', length: 100)->nullable();
            $table->char('front_cranial_right', length: 100)->nullable();
            $table->char('parietal_left', length: 100)->nullable();
            $table->char('parietal_right', length: 100)->nullable();
            $table->char('occiptial_left', length: 100)->nullable();
            $table->char('occiptial_right', length: 100)->nullable();
            $table->char('temporal_left', length: 100)->nullable();
            $table->char('temporal_right', length: 100)->nullable();
            $table->char('tmj_left', length: 100)->nullable();
            $table->char('tmj_right', length: 100)->nullable();
            $table->char('mandible_left', length: 100)->nullable();
            $table->char('mandible_right', length: 100)->nullable();
            $table->char('zygomatic_left', length: 100)->nullable();
            $table->char('zygomatic_right', length: 100)->nullable();
            $table->char('maxilla_left', length: 100)->nullable();
            $table->char('maxilla_right', length: 100)->nullable();
            $table->char('nasal_left', length: 100)->nullable();
            $table->char('nasal_right', length: 100)->nullable();
            $table->char('lacrimal_left', length: 100)->nullable();
            $table->char('lacrimal_right', length: 100)->nullable();
            $table->char('inc_left', length: 100)->nullable();
            $table->char('inc_right', length: 100)->nullable();
            $table->char('palatine_left', length: 100)->nullable();
            $table->char('palatine_right', length: 100)->nullable();
            $table->char('sphenoid_left', length: 100)->nullable();
            $table->char('sphenoid_right', length: 100)->nullable();
            $table->char('ethmoid', length: 100)->nullable();
            $table->char('vomer', length: 100)->nullable();
            $table->char('hyoid', length: 100)->nullable();
            $table->char('thyroidcryoid', length: 100)->nullable();
            $table->char('ossicles', length: 100)->nullable();
            $table->tinyInteger('unidentified_cranial')->nullable();
            $table->tinyInteger('incisors_number')->nullable();
            $table->char('incisors', length: 100)->nullable();
            $table->tinyInteger('canines_number')->nullable();
            $table->char('canines', length: 100)->nullable();
            $table->tinyInteger('premolars_number')->nullable();
            $table->char('premolars', length: 100)->nullable();
            $table->tinyInteger('molars_number')->nullable();
            $table->char('molars', length: 100)->nullable();
            $table->tinyInteger('unidentified_teeth')->nullable();
            $table->char('cervical_1', length: 100)->nullable();
            $table->char('cervical_2', length: 100)->nullable();
            $table->char('cervical_36_num', length: 100)->nullable();
            $table->char('cervical_36', length: 100)->nullable();
            $table->char('cervical_7', length: 100)->nullable();
            $table->char('thoracic_19_num', length: 100)->nullable();
            $table->char('thoracic_19', length: 100)->nullable();
            $table->char('thoracic_10', length: 100)->nullable();
            $table->char('thoracic_11', length: 100)->nullable();
            $table->char('thoracic_12', length: 100)->nullable();
            $table->char('lumbar_14_num', length: 100)->nullable();
            $table->char('lumbar_14', length: 100)->nullable();
            $table->char('lumbar_5', length: 100)->nullable();
            $table->char('sacrum_num', length: 100)->nullable();
            $table->char('sacrum', length: 100)->nullable();
            $table->char('coccyx_num', length: 100)->nullable();
            $table->char('coccyx', length: 100)->nullable();
            $table->char('manubrium', length: 100)->nullable();
            $table->char('body', length: 100)->nullable();
            $table->char('xiphoid', length: 100)->nullable();
            $table->char('left_ribs_num', length: 100)->nullable();
            $table->char('left_ribs', length: 100)->nullable();
            $table->char('right_ribs_num', length: 100)->nullable();
            $table->char('right_ribs', length: 100)->nullable();
            $table->tinyInteger('unidentified_axial')->nullable();
            $table->char('scapula_left', length: 100)->nullable();
            $table->char('scapula_right', length: 100)->nullable();
            $table->char('glenoid_left', length: 100)->nullable();
            $table->char('glenoid_right', length: 100)->nullable();
            $table->char('clavicle_left', length: 100)->nullable();
            $table->char('clavicle_right', length: 100)->nullable();
            $table->char('med_epi_left', length: 100)->nullable();
            $table->char('med_epi_right', length: 100)->nullable();
            $table->char('ilium_left', length: 100)->nullable();
            $table->char('ilium_right', length: 100)->nullable();
            $table->char('auricular_left', length: 100)->nullable();
            $table->char('auricular_right', length: 100)->nullable();
            $table->char('pubis_left', length: 100)->nullable();
            $table->char('pubis_right', length: 100)->nullable();
            $table->char('symphysis_left', length: 100)->nullable();
            $table->char('symphysis_right', length: 100)->nullable();
            $table->char('ischium_left', length: 100)->nullable();
            $table->char('ischium_right', length: 100)->nullable();
            $table->char('acetabulum_left', length: 100)->nullable();
            $table->char('acetabulum_right', length: 100)->nullable();
            $table->char('patelia_left', length: 100)->nullable();
            $table->char('patelia_right', length: 100)->nullable();
            $table->tinyInteger('unidentified_append')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bone_tables', function (Blueprint $table) {
            //
        });
    }
};
