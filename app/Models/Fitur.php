<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;
    protected $fillable = [
        'header',
        'logo',
        'logoA',
        'logoB',
        'logoC',
        'judul',
        'judulA',
        'judulB',
        'judulC',
        'deskripsi',
        'deskripsiA',
        'deskripsiB',
        'deskripsiC',
        'link',
        'linkA',
        'linkB',
        'linkC',
        'is_active'
    ];
}
