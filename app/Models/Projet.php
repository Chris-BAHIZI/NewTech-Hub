<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'title',
        'texte',
        'image',
        'count_views',
    ];
}
