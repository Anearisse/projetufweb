<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Bien extends Model
{

    protected $fillable = [
        'content',
        'numberroom',
        'type',
        'surfacearea',
        'localisation',
        'price',
        'image'
    ];
}
