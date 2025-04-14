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
        Schema::create('ceramic_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('artifact_id');
            $table->integer('artifact_count');
            $table->set('material', [
                'coarse earthenware',
                'porcelain',
                'refined earthenware',
                'stoneware',
                'unidentifiable'
            ])->nullable();
            $table->set('manufacturing_technique', [
                'handbuild coil',
                'handbuild unidentifiable',
                'missing',
                'not applicable',
                'press molded',
                'slip cast',
                'unidentifiable',
                'wheel thrown'
            ])->nullable();
            $table->set('ware', [
                'afro-caribbean ware',
                'agate refined',
                'american stoneware',
                'astbury type',
                'bennington/rockingham',
                'black basalt',
                'british stoneware',
                'buckley',
                'burslem',
                'canary ware',
                'carolina creamware',
                'coarse earthenware unidentified',
                'colonware',
                'creamware',
                'delftware dutch/british',
                'derbyshire',
                'faience',
                'frechen brown',
                'french coarse earthenware',
                'fulham type',
                'german stoneware',
                'iberian ware',
                'ironstone/white granite',
                'jackfield type',
                'jasperware',
                'native american/unidentified',
                'north devon gravel tempered',
                'north devon plain',
                'nottingham',
                'pearlware',
                'porcelain chinese',
                'porcelain english bone china',
                'porcelain french',
                'porcelain japanese',
                'porcelain unidentifiable',
                'porcellaneous english hard paste',
                'post-medieval london-area redware',
                'red agate coarse',
                'red agated refined',
                'red sandy ware',
                'redware',
                'redware refined',
                'refined earthenware modern',
                'refined earthenware unidentifiable',
                'refined stoneware unidentifiable',
                'rosso antico',
                'shaw stoneware',
                'slip dip',
                'slipware north italian',
                'slipware north midlands/staffordshire',
                'spanish coarse earthenware',
                'staffordshire brown stoneware',
                'staffordshire mottled glaze',
                'stoneware unidentifiable',
                'tin-enameled unidentified',
                'turner type',
                'unidentifable',
                'wedgwood green',
                'westerwald/rhenish',
                'whieldon-type ware',
                'white salt gaze',
                'whiteware',
                'yellow ware'
            ])->nullable();
            $table->set('vessel_category', ['hollow', 'flat', 'unidentifiable'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceramic_tables');
    }
};
