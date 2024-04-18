<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ['user_id','artwork_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
    public function items()
    {
        return $this->hasMany(Artwork::class);
    }
}
