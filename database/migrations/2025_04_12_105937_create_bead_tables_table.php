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
        Schema::create('bead_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('artifact_id');
            $table->integer('artifact_count');
            $table->set('completeness', ['complete', 'incomplete', 'not recorded'])->nullable();
            $table->set('material', [
                'amber',
                'bone',
                'carnelian',
                'clay',
                'copper/copper alloy',
                'glass',
                'leather',
                'not recorded',
                'plastic',
                'porcelain',
                'shell',
                'silver',
                'stone/ stone unidentifiable',
                'unidentifiable'
            ])->nullable();
            $table->set('manufacturing_technique', [
                'blown',
                'cast',
                'cut/carved',
                'drawn',
                'mold pressed',
                'molded/ prosser',
                'not recorded',
                'unidentifiable',
                'wound'
            ])->nullable();
            $table->set('bead_structure', ['compound', 'not recorded', 'simple', 'unidentifiable'])->nullabe();
            $table->set('bead_form', [
                'not recorded',
                'straight curvilinear',
                'straight polyhedral',
                'twisted curvilinear',
                'twisted polyhedral',
                'unidentified'
            ])->nullabe();
            $table->set('bead_shape', [
                'barrel',
                'biconical',
                'collared spheroid',
                'disc',
                'faceted',
                'not recorded',
                'oval',
                'spherical',
                'square',
                'sub-spherical',
                'triangular',
                'tubular',
                'unidentifiable',
                'waisted'
            ])->nullabe();
            $table->set('complex_shape', [
                'alternating twist',
                'cornerless heptagonal',
                'cornerless hexagonal',
                'cornerless octagonal',
                'cornerless pentagonal',
                'heptagonal',
                'hexagonal',
                'not applicable',
                'octagonal',
                'pentagonal',
                'quadrangular',
                'raspberry',
                'scarab',
                'square',
                'teardrop/flat',
                'teardrop/inverted',
                'triangular',
                'unidentifiable'
            ])->nullable();
            $table->set('end_treatment', [
                'cut/sawn/ground flat',
                'not recorded',
                'rounded',
                'unfinished',
                'unidentifiable'
            ])->nullable();
            $table->set('heat_treated', ['yes', 'no', 'not applicable', 'not recorded', 'unidentifiable'])->nullable();
            $table->char('bead_color', length: 20);
            $table->integer('number_facets')->nullable();
            $table->set('diaphaneity', ['not applicable', 'opaque', 'translucent', 'transparent', 'unidentifiable'])->nullable();
            $table->set('mended', ['yes', 'no', 'not recorded'])->nullable();
            $table->char('conservation', length: 100)->nullable();
            $table->set('post-manufacturing mod', ['yes', 'no', 'not recorded'])->nullable();
            $table->tinytext('Added By')->nullable();
            $table->tinytext('changed_by')->nullable();
            $table->date('change_date')->nullable();
            $table->tinyText('notes')->nullable();
            $table->set('patination', ['yes', 'no', 'not applicable', 'not recorded'])->nullable();
            $table->set('eroded', ['yes', 'no', 'not applicable', 'not recorded'])->nullable();
            $table->set('burned', ['yes', 'no', 'not applicable', 'not recorded'])->nullable();
            $table->decimal('bead_length', total: 8, places: 2);
            $table->decimal('bead_height', total: 8, places: 2);
            $table->decimal('bead_width', total: 8, places: 2);
            $table->char('bead_weight', length: 10);
            $table->decimal('perforation_size1', total: 8, places: 2);
            $table->decimal('perforation_size2', total: 8, places: 2);
            $table->binary('image');
            $table->set('bead_decoration', [
                'combed designs',
                'crumbs',
                'eyes',
                'facets ground/cut',
                'facets paddle/pressed',
                'floral designs',
                'insets',
                'interwoven lines',
                'monochrome stripes',
                'multi-colored stripes',
                'nodes',
                'plated',
                'rings',
                'swirls',
                'trailed decoration',
                'unidentifiable',
                'wavy lines'
            ])->nullable();
            $table->char('applied_color', length: 20)->nullable();
            $table->text('decoration_description')->nullable();
            $table->set('bead_casing_layer', [
                '1(interior)',
                '2',
                '3',
                '4',
                '5',
                '6',
                '7',
                '8',
                '9',
                '10(exterior)'
            ])->nullable();
            $table->char('base_casing_color', length: 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bead_tables');
    }
};
