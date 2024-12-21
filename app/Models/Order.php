<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Order extends Model
{
    protected $fillable = ['user_id', 'artwork_id', 'amount', 'status', 'transaction_id', 'payment_status'];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
    use HasFactory;
}

