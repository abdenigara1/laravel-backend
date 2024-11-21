<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showcase extends Model
{
    use HasFactory;
    protected $fillable = [
        'showA',
        'linkA',
        'showB',
        'linkB',
        'showC',
        'linkC',
        'showD',
        'linkD',

    ];

}
