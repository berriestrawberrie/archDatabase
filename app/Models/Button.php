<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    //
    protected $fillable = [
        'has_photo',
        'photo',
        'entered_date',
        'change_date',
        'checkout_by',
        'changed_by',
        'artifact_id',
        'collection',
        'collection_id',
        'token',
        'notes',
        'isValid',
        'Added By',
        'entered_by',
        'created_at',
        'completeness',
        'artifact_count',
        'material',
        'button_type',
        'button_shape',
        'manufacturing_technique',
        'button_color',
        'eye',
        'shank_style',
        'metal_color',
        'post_manu_mod',
        'back_stamp',
        'burned',
        'conservation',
        'inlay_material',
        'decorative_color',
        'decorative_technique',
        'decorative_motif',
        'shank_material',
        'shank_condition',
        'face_material',
        'face_manu_tech',
        'button_join',
        'button_length',
        'button_diameter',
        'button_width',
        'button_height',
        'button_weight',
        'start_date',
        'end_date'


    ];

    protected $table = 'button_tables';
}
