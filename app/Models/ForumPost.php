<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    protected $fillable = ['title','content','image', 'date', 'creator_id', 'topic_id'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

   
    public function comments()
    {
        return $this->hasMany(ForumComment::class, 'post_id'); // Assuming 'post_id' is the foreign key in the forum_comments table
    }

    public function topic()
    {
        return $this->belongsTo(ForumTopic::class);
    }
}
