<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Glass extends Model
{
    //
    protected $fillable = [
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
        'artifact_count',
        'material',
        'glass_color',
        'vessel_category',
        'manufacturing_technique',
        'mold_type',
        'mended',
        'post_manu_mod',
        'solarized',
        'weather_eroded',
        'pontil_mark',
        'burned',
        'conservation',
        'decorative_technique',
        'stylistic_element',
        'bottle_element',
        'element_shape',
        'element_manu_fact',
        'element_treatment',
        'stemware_body',
        'stemware_foot',
        'applied_color',
        'stem_shape',
        'glass_marks',
        'mark_location',
        'stem_length',
        'container_height',
        'sherd_thickness',
        'sherd_size',
        'sherd_weight',
        'mended_sherd_weight',
        'rim_length',
        'rim_diameter',
        'mended_rim_diameter',
        'base_length',
        'base_diameter',
        'mended_base_diameter',
        'collection_id',
        'start_date',
        'end_date',
        'Added By',
        'token',
        'patination',
        'form'
    ];

    protected $table = 'glass_tables';
}
