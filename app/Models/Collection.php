<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //MASS ASSIGNABLE COLUMNS
    protected $fillable = [
        'id',
        'collection',
        'collection_desc',
        'curator',
        'artifact_list',
    ];

    protected $table = 'collections';
}
