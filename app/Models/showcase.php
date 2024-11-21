<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Showcase extends Model
{
    protected $fillable = ['link', 'show', 'is_active'];

    public function setShowAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['show'] = $value;
        } else {
            // Menyimpan file upload jika value adalah instance dari UploadedFile
            $this->attributes['show'] = $value->store('showcases');
        }
    }
}