<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buckle extends Model
{
    //
    protected $fillable = [
        'start_date',
        'token',
        'end_date',
        'Added By',
        'entered_by',
        'created_at',
        'completeness',
        'material',
        'artifact_count',
        'buckle_type',
        'frame_plating',
        'manufacturing_technique',
        'buckle_form',
        'element_type',
        'shape',
        'post_manu_mod',
        'buckle_part',
        'buckle_width',
        'buckle_length',
        'decorative_technique',
        'mended',
        'decorative_motif',
        'burned',
        'marks',
        'mark_notes',
        'obj_weight',
        'conservation',
        'hasphoto',
        'photo',
        'entered_date',
        'change_date',
        'checkout_by',
        'changed_by',
        'artifact_id',
        'collection',
        'collection_id',
        'notes',
        'isValid',
    ];

    protected $table = 'buckle_tables';
}
