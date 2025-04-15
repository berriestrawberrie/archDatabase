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
            $table->set('form', [
                'basket',
                'berry dish',
                'bottle',
                'bottle blacking',
                'bowl',
                'bowl punch',
                'bowl slop',
                'box',
                'castor',
                'chafing dish',
                'chamberpot',
                'coffee pot',
                'colander',
                'creamer',
                'cup',
                'cup lidded',
                'dish (>10" diameter)',
                'dish (7"-10" diameter)',
                'drinking pot',
                'drug jar/salve pot',
                'flower pot',
                'gaming piece',
                'griddle',
                'inkwell',
                'jar',
                'jar mustard',
                'jug',
                'kiln furniture',
                'lid',
                'milk pan',
                'mold jelly',
                'mug/can',
                'not applicable',
                'not mended',
                'not recorded',
                'patty pan',
                'pipkin',
                'pitcher/ewer',
                'plate',
                'platter',
                'porringer',
                'pot/butter pot',
                'saucer',
                'sea kale pot',
                'serving dish misc',
                'storage jar',
                'storage vessel',
                'strainer',
                'tankard',
                'tea caddy',
                'teabowl',
                'teacup',
                'teapot',
                'tureen',
                'unid: tableware',
                'unid:teware',
                'unid:utilitarian',
                'unidentifable',
                'vegetable dish',
                'water cooler'
            ])->nullable();
            $table->set('mended_form', [
                'basket',
                'berry dish',
                'bottle',
                'bottle blacking',
                'bowl',
                'bowl punch',
                'bowl slop',
                'box',
                'castor',
                'chafing dish',
                'chamberpot',
                'coffee pot',
                'colander',
                'creamer',
                'cup',
                'cup lidded',
                'dish (>10" diameter)',
                'dish (7"-10" diameter)',
                'drinking pot',
                'drug jar/salve pot',
                'flower pot',
                'gaming piece',
                'griddle',
                'inkwell',
                'jar',
                'jar mustard',
                'jug',
                'kiln furniture',
                'lid',
                'milk pan',
                'mold jelly',
                'mug/can',
                'not applicable',
                'not mended',
                'not recorded',
                'patty pan',
                'pipkin',
                'pitcher/ewer',
                'plate',
                'platter',
                'porringer',
                'pot/butter pot',
                'saucer',
                'sea kale pot',
                'serving dish misc',
                'storage jar',
                'storage vessel',
                'strainer',
                'tankard',
                'tea caddy',
                'teabowl',
                'teacup',
                'teapot',
                'tureen',
                'unid: tableware',
                'unid:teware',
                'unid:utilitarian',
                'unidentifable',
                'vegetable dish',
                'water cooler'
            ])->nullable();
            $table->set('completeness', [
                'base',
                'base/body',
                'base/body/handle',
                'base/body/rim',
                'body',
                'body/handle',
                'body/hand/rim',
                'body/handle/terminal',
                'body/handle/spout',
                'body/rim',
                'body/shoulder',
                'body/shoulder/neck',
                'body/spout',
                'detached glaze',
                'finial',
                'finial lid',
                'foot',
                'handle',
                'handle terminal',
                'lid',
                'neck',
                'neck/handle terminal/rim',
                'neck/rim',
                'not applicable',
                'not recorded',
                'rim',
                'shoulder',
                'shoulder/handle/terminal',
                'shoulder/neck',
                'shoulder/neck/rim',
                'spout',
                'unidentifiable'
            ])->nullable();
            $table->char('paste_color', length: 20);
            $table->set('exterior_surface', [
                'albany slip',
                'alkaline glaze',
                'bristol glaze',
                'feldspathic glaze',
                'glaze unidentifiable',
                'lead glaze',
                'missing',
                'not applicable',
                'not recorded',
                'salt glaze',
                'tin glaze',
                'unglazed/bisque',
                'unidentifiable',
                'wash',
                'zinc emulsion glaze'
            ])->nullable();
            $table->char('exterior_color', length: 20);
            $table->set('interior_surface', [
                'albany slip',
                'alkaline glaze',
                'bristol glaze',
                'feldspathic glaze',
                'glaze unidentifiable',
                'lead glaze',
                'missing',
                'not applicable',
                'not recorded',
                'salt glaze',
                'tin glaze',
                'unglazed/bisque',
                'unidentifiable',
                'wash',
                'zinc emulsion glaze'
            ])->nullable();
            $table->char('interior_color', length: 20)->nullable();
            $table->set('oxidized_vs_reduced_fabric', [
                'not recorded',
                'not reduced',
                'reduced',
                'unidentifiable'
            ])->nullable();
            $table->set('evidence_of_burning', [
                'both interior and exterior',
                'exterior burned',
                'interior burned',
                'not recorded',
                'sides burned',
                'unburned',
            ])->nullable();
            $table->set('mended', ['yes', 'no', 'not recorded'])->nullable();
            $table->set('post_manufacturing_mod', [
                'yes',
                'no',
                'not recorded'
            ])->nullable();
            $table->tinytext('Added By')->nullable();
            $table->tinytext('changed_by')->nullable();
            $table->date('change_date')->nullable();
            $table->tinyText('notes')->nullable();
            $table->set('interior_exterior', ['exterior', 'interior', 'perforate'])->nullable();
            $table->set('location', [
                'base',
                'body',
                'finial',
                'foot ring',
                'handle',
                'lid',
                'neck',
                'proximal rim',
                'rim',
                'shoulder',
                'spout',
                'terminal',
                'unidentified'
            ])->nullable();
            $table->set('decorative_technique', [
                'applied clay',
                'applied powder/crystals',
                'bulls eye inlay',
                'burnished (w/ visible facets)',
                'cord marked',
                'cut',
                'decalcomania',
                'dendritic',
                'dipped',
                'impressed',
                'impressed/ fabric',
                'impressed/ fingerprints',
                'incised/free hand'
            ])->nullable();
            $table->char('decoration_color', length: 20)->nullable();
            $table->set('stylistic_element_1', [
                'acanthus leaves',
                'angular edge',
                'animal  ',
                'bamboo',
                'band  ',
                'barley',
                'basket weave  ',
                'basketwork',
                'bead and reel',
                'beaded band  ',
                'bird',
                'bird stylized',
                'boat',
                'botanical band  ',
                'botanical composite',
                'botanical sprig',
                'botanical  ',
                'bridge',
                'bulls eye',
                'butterfly',
                'cable band  ',
                'cartouche  ',
                'cats eye combed',
                'cats eye single',
                'checkerboard band  ',
                'checkerboard/diamonds',
                'checkerboard/dot',
                'child',
                'chinese characters',
                'church christian',
                'circle  ',
                'circle band  ',
                'circle open',
                'cloud band  ',
                'clouded',
                'columns',
                'combed',
                'common cable',
                'cord and hanging fern',
                'cord and herringbone',
                'cordoned',
                'cordoned wavy',
                'crab stock',
                'crenelated edge'
            ])->nullable();
            $table->set('stylistic_element_2', [
                'dart band  ',
                'dash band  ',
                'dendritic',
                'dentil band  ',
                'diamond band  ',
                'diaper/1 dot',
                'diaper/4 dot',
                'diaper/5 dot',
                'diaper/dot band  ',
                'diaper/star',
                'diced squares',
                'dogtooth band  ',
                'dot band  ',
                'dot cluster',
                'dot dash band  ',
                'dot plume edge',
                'dots',
                'dotted/terraced rectangle',
                'facet/panel',
                'fanning',
                'feather edge',
                'fence',
                'fish',
                'fish roe  ',
                'fish roe band  ',
                'flag/banner',
                'floral medallion',
                'floral radiating bloom  ',
                'fluted',
                'folded rim',
                'fruit',
                'garland  ',
                'geometric band  ',
                'geometric circle',
                'geometric column  ',
                'geometric  ',
                'granulated band',
                'grass',
                'grass and leaves molded edge',
                'half-circle band  '
            ])->nullable();
            $table->tinyInteger('stylistic_element_number')->nullable();
            $table->set('motif', [
                'adjacent combination a',
                'adjacent combination b',
                'adjacent/stacked combo a',
                'adjacent/stacked combo b',
                'individual a',
                'individual b',
                'individual c',
                'individual d',
                'individual e',
                'individual f',
                'individual g',
                'individual h',
                'individual i',
                'individual j',
                'individual repeated a',
                'individual repeated b',
                'individual repeated c',
                'not applicable',
                'scene combination a',
                'scene combination b',
                'stacked combination a',
                'stacked combination b'
            ])->nullable();
            $table->set('pattern_name', [
                'goat',
                'altar of love (valentine)',
                'asiatic plants',
                'belzoni',
                'caledonia',
                'canton',
                'chevy chase',
                'chinese landscape pattern 1',
                'cornflower',
                'cyrene',
                'dagoty et honore paris',
                'dogs on the scent',
                'famille rose',
                'famille verte',
                'fitzhugh',
                'flower basket',
                'flower/ scroll/ medallion (1820)',
                'flowers and leaves',
                'genoa',
                'grape/ bamboo/ and squirrel',
                'grecian pattern',
                'nanking',
                'not applicable',
                'oriental',
                'pinwheel pattern',
                'pomerania',
                'spanish procession',
                'sydenham',
                'syrian',
                'unidentifiable',
                'wild rose',
                'willow pattern'
            ])->nullable();
            $table->text('pattern_notes')->nullable();
            $table->tinyText('pattern_reference')->nullable();
            $table->set('genre', [
                'an hua',
                'applied powder crystals purple',
                'barley',
                'bartmann',
                'batavian',
                'bead and reel',
                'blue and gray',
                'blue molded/stamped/incised',
                'cauliflower',
                'decalcomania',
                'dot/diaper/basketweave',
                'feather edge',
                'flow transfer print blue',
                'flow transfer print purple/black',
                'handpainted blue',
                'imari',
                'littlers blue',
                'luster decoration',
                'molded edge decoration other',
                'not applicable',
                'overglaze handpainted',
                'polychrome cool',
                'polychrome other',
                'polychrome warm',
                'purple molded/stamped/incised',
                'queens shape',
                'royal pattern',
                'scratch blue',
                'scratch brown',
                'shell edge blue',
                'shell edge green',
                'shell edge mulberry',
                'shell edge unidentifiable',
                'slipware factory made',
                'sponge/spatter',
                'transfer print over',
                'transfer print under black',
                'transfer print under blue',
                'transfer print under brown',
                'transfer print under gray',
                'transfer print under green',
                'transfer print under light blue',
                'transfer print under pink',
                'transfer print under polychrome',
                'transfer print under purple',
                'transfer print under red',
                'transfer print under unidentifiable',
                'victorian majolica'
            ])->nullable();
            $table->set('base_mark', [
                'impressed',
                'incised',
                'not applicable',
                'painted',
                'printed',
                'unidentifiable'
            ])->nullable();
            $table->tinyText('base_mark_ref')->nullable();
            $table->char('base_mark_color', length: 20)->nullable();
            $table->set('colonoware', [
                'base',
                'body',
                'finial',
                'finial lid',
                'foot',
                'handle',
                'handle terminal',
                'lid',
                'neck',
                'rim',
                'shoulder',
                'spout',
                'unidentifiable'
            ])->nullable();
            $table->set('colono_rim_form', [
                'everted',
                'inverted',
                'not applicable',
                'straight',
                'unidentifiable'
            ])->nullable();
            $table->set('colono_rim_angle', [
                '0',
                '15',
                '20',
                '25',
                '30',
                '35',
                '40',
                '45',
                '50',
                '55',
                '60',
                '65',
                '70',
                '75',
                '80',
                '85',
                '90',
                '95',
                '100',
                '105',
                'not applicable',
                'unmeasurable'
            ])->nullable();
            $table->decimal('max_rim_width', total: 8, places: 2)->nullable();
            $table->set('colono_decoration_mode', [
                'brushed',
                'burnished',
                'combed',
                'cut',
                'impressed cord',
                'impressed corn cob',
                'impressed fabric',
                'impressed finger',
                'impressed net',
                'impressed thimble',
                'impressed unidentifiable',
                'incised',
                'not applicable',
                'notched',
                'painted',
                'pierced',
                'punctate',
                'scalloped edge',
                'slip unidentifed',
                'slipped black',
                'slipped red/red',
                'slipped self',
                'stamped check',
                'stamped complicated curvilinear',
                'stamped complicated rectilinear',
                'stamped simple',
                'stamped unidentifiable'
            ])->nullable();
            $table->set('colono_base_form', [
                'flat',
                'footring',
                'not applicable',
                'round',
                'unidentifiable'
            ])->nullable();
            $table->set('colono_footring_form', [
                'footring',
                'no footring',
                'not applicable',
                'pedestal footring',
                ''
            ])->nullable();
            $table->set('non_plastic_paste_inclusions', [
                'back crypto-crystalline',
                'grog',
                'hematite',
                'limestone',
                'mica'
            ])->nullable();
            $table->set('total_paste_inclusion_density', [
                'greater than 7.5 less than 15',
                'greater than or equal to 15',
                'less than or equal to 7.5',
                'not applicable',
                'unidentifiable'
            ])->nullable();
            $table->set('wear_location', [
                'exterior',
                'interior',
                'not applicable',
                'unidentifiable'
            ])->nullable();
            $table->set('ceramic_completeness', [
                'base',
                'body',
                'finial',
                'finial lid',
                'foot',
                'handle',
                'handle terminal',
                'lid',
                'neck',
                'rim',
                'shoulder',
                'spout',
                'unidentifiable'
            ])->nullable();
            $table->set('wear_pattern', [
                'base abrasion',
                'fire-clouding',
                'partial missing surface',
                'residue/soot',
                'spalling',
                'toothbrush abrasion',
                'utensil wear',
                'worn/abraded'
            ])->nullable();
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
        }); //END HERE
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceramic_tables');
    }
};
