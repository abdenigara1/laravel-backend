<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'iconA',
        'textA',
        'linkA',

        'iconB',
        'textB',
        'linkB',

        'iconC',
        'textC',
        'linkC',

        'iconD',
        'textD',
        'linkD',

    ];
}
