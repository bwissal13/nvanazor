<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = ['artist_id', 'title', 'description', 'image_url', 'price'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
