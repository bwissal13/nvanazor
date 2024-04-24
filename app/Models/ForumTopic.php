<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(ForumPost::class,'topic_id');
    }
    use HasFactory;
}
