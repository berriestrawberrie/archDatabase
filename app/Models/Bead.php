<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bead extends Model
{
    //
    protected $fillable = [
        'entered_by',
        'created_at',
        'Added By',
        'artifact_id',
        'start_date',
        'conservation',
        'end_date',
        'token',
        'completeness',
        'artifact_count',
        'collection',
        'collection_id',
        'start_date',
        'end_date',
        'notes',
        'material',
        'manufacturing_technique',
        'bead_struct',
        'bead_form',
        'has_photo',
        'photo',
        'bead_shape',
        'complex_shape',
        'end_treatment',
        'bead_color',
        'heat_treated',
        'number_facets',
        'diaphaneity',
        'mended',
        'post_man_mod',
        'patination',
        'weather_erode',
        'burned',
        'applied_color',
        'bead_decoration',
        'casing_layer',
        'casing_color',
        'decoration_desc',
        'perforation_1',
        'perforation_2',
        'bead_length',
        'bead_width',
        'bead_height',
        'bead_weight'

    ];

    protected $table = 'bead_tables';
}
