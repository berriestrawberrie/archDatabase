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
        Schema::create('bone2_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('calcaneus', length: 100)->nullable();
            $table->char('capitate', length: 100)->nullable();
            $table->char('cuboid', length: 100)->nullable();
            $table->char('distPhalanges', length: 100)->nullable();
            $table->char('distPhalanges2', length: 100)->nullable();
            $table->char('femur_dist', length: 100)->nullable();
            $table->char('femur_epid', length: 100)->nullable();
            $table->char('femur_epip', length: 100)->nullable();
            $table->char('femur_mid', length: 100)->nullable();
            $table->char('femur_prox', length: 100)->nullable();
            $table->char('fibula_dist', length: 100)->nullable();
            $table->char('fibula_epid', length: 100)->nullable();
            $table->char('fibula_epip', length: 100)->nullable();
            $table->char('fibula_mid', length: 100)->nullable();
            $table->char('fibula_prox', length: 100)->nullable();
            $table->char('hamate', length: 100)->nullable();
            $table->char('humerus_dist', length: 100)->nullable();
            $table->char('humerus_epid', length: 100)->nullable();
            $table->char('humerus_epip', length: 100)->nullable();
            $table->char('humerus_mid', length: 100)->nullable();
            $table->char('humerus_prox', length: 100)->nullable();
            $table->char('interCuneiform', length: 100)->nullable();
            $table->char('latCuneiform', length: 100)->nullable();
            $table->char('lunate', length: 100)->nullable();
            $table->char('medCuneiform', length: 100)->nullable();
            $table->char('metacarpals2', length: 100)->nullable();
            $table->char('metatarsals', length: 100)->nullable();
            $table->char('midPhalanges', length: 100)->nullable();
            $table->char('midPhalanges2', length: 100)->nullable();
            $table->char('navicular', length: 100)->nullable();
            $table->char('pisiform', length: 100)->nullable();
            $table->char('proxPhalanges', length: 100)->nullable();
            $table->char('proxPhalanges2', length: 100)->nullable();
            $table->char('radius_dist', length: 100)->nullable();
            $table->char('radius_epid', length: 100)->nullable();
            $table->char('radius_epip', length: 100)->nullable();
            $table->char('radius_mid', length: 100)->nullable();
            $table->char('radius_prox', length: 100)->nullable();
            $table->char('rfemur_dist', length: 100)->nullable();
            $table->char('rfemur_epid', length: 100)->nullable();
            $table->char('rfemur_epip', length: 100)->nullable();
            $table->char('rfemur_mid', length: 100)->nullable();
            $table->char('rfemur_prox', length: 100)->nullable();
            $table->char('rfibula_dist', length: 100)->nullable();
            $table->char('rfibula_epid', length: 100)->nullable();
            $table->char('rfibula_epip', length: 100)->nullable();
            $table->char('rfibula_mid', length: 100)->nullable();
            $table->char('rfibula_prox', length: 100)->nullable();
            $table->char('rhumerus_dist', length: 100)->nullable();
            $table->char('rhumerus_epid', length: 100)->nullable();
            $table->char('rhumerus_epip', length: 100)->nullable();
            $table->char('rhumerus_mid', length: 100)->nullable();
            $table->char('rhumerus_prox', length: 100)->nullable();
            $table->char('rradius_dist', length: 100)->nullable();
            $table->char('rradius_epid', length: 100)->nullable();
            $table->char('rradius_epip', length: 100)->nullable();
            $table->char('rradius_mid', length: 100)->nullable();
            $table->char('rradius_prox', length: 100)->nullable();
            $table->char('rtibia_dist', length: 100)->nullable();
            $table->char('rtibia_epid', length: 100)->nullable();
            $table->char('rtibia_epip', length: 100)->nullable();
            $table->char('rtibia_mid', length: 100)->nullable();
            $table->char('rtibia_prox', length: 100)->nullable();
            $table->char('rulna_dist', length: 100)->nullable();
            $table->char('rulna_epid', length: 100)->nullable();
            $table->char('rulna_epip', length: 100)->nullable();
            $table->char('rulna_mid', length: 100)->nullable();
            $table->char('rulna_prox', length: 100)->nullable();
            $table->char('scaphoid', length: 100)->nullable();
            $table->char('sesamoids', length: 100)->nullable();
            $table->char('sesamoids2', length: 100)->nullable();
            $table->char('talus', length: 100)->nullable();
            $table->char('tibia_dist', length: 100)->nullable();
            $table->char('tibia_epid', length: 100)->nullable();
            $table->char('tibia_epip', length: 100)->nullable();
            $table->char('tibia_mid', length: 100)->nullable();
            $table->char('tibia_prox', length: 100)->nullable();
            $table->char('trapezium', length: 100)->nullable();
            $table->char('trapezoid', length: 100)->nullable();
            $table->char('triquetral', length: 100)->nullable();
            $table->char('ulna_dist', length: 100)->nullable();
            $table->char('ulna_epid', length: 100)->nullable();
            $table->char('ulna_epip', length: 100)->nullable();
            $table->char('ulna_mid', length: 100)->nullable();
            $table->char('ulna_prox', length: 100)->nullable();
            $table->tinyInteger('calcaneus_num')->nullable();
            $table->tinyInteger('capitate_num')->nullable();
            $table->tinyInteger('cuboid_num')->nullable();
            $table->tinyInteger('distPhalanges_num')->nullable();
            $table->tinyInteger('distPhalanges2_num')->nullable();
            $table->tinyInteger('hamate_num')->nullable();
            $table->tinyInteger('interCuneiform_num')->nullable();
            $table->tinyInteger('latCuneiform_num')->nullable();
            $table->tinyInteger('lunate_num')->nullable();
            $table->tinyInteger('medCuneiform_num')->nullable();
            $table->tinyInteger('metacarpals2_num')->nullable();
            $table->tinyInteger('metatarsals_num')->nullable();
            $table->tinyInteger('midPhalanges_num')->nullable();
            $table->tinyInteger('midPhalanges2_num')->nullable();
            $table->tinyInteger('navicular_num')->nullable();
            $table->tinyInteger('pisiform_num')->nullable();
            $table->tinyInteger('proxPhalanges_num')->nullable();
            $table->tinyInteger('proxPhalanges2_num')->nullable();
            $table->tinyInteger('scaphoid_num')->nullable();
            $table->tinyInteger('sesamoids_num')->nullable();
            $table->tinyInteger('sesamoids2_num')->nullable();
            $table->tinyInteger('talus_num')->nullable();
            $table->tinyInteger('trapezium_num')->nullable();
            $table->tinyInteger('trapezoid_num')->nullable();
            $table->tinyInteger('triquetral_num')->nullable();
            $table->tinyInteger('unidentified_extermities')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
