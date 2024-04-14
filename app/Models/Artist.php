<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{ 
    use HasFactory;
    protected $fillable = [
        'user_id','bio','image_url', 'external_url'
    ];
   
    public function artworks()
    {
        return $this->belongsToMany(Artwork::class, 'artist_artwork', 'artist_id', 'artwork_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
