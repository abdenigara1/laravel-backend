<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eco extends Model
{
    use HasFactory;
    protected $fillable = [
        'achA',
        'achB',
        'achC',
        'header',
        'subHeader'
        ,'banner',
        'is_active'
    ];
}


