<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'ach',
        'header',
        'subHeader'
        ,'banner',
        'is_active'
    ];
}
