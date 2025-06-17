<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utensil extends Model
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
        'notes',
        'isValid',
        'entered_by',
        'completeness',
        'material',
        'utensil_form',
        'plating',
        'handle_decoration',
        'manufacturing_technique',
        'spoon_rat',
        'mended',
        'post_manu_mod',
        'burned',
        'shape',
        'fork_tines',
        'part',
        'mark',
        'conservation',
        'object_length',
        'object_width',
        'object_weight',
        'token',
        'start_date',
        'end_date',
        'Added By',

    ];

    protected $table = 'utensil_tables';
}
