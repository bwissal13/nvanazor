<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    protected $fillable = ['content', 'post_id','user_id'];

    public function post()
    {
        return $this->belongsTo(ForumPost::class, 'post_id'); // Assuming 'post_id' is the foreign key in the forum_comments table
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}


