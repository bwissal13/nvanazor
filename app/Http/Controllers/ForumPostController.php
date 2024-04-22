<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\ForumTopic;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ForumPostController extends Controller
{
    public function create()
    {
        $topics = ForumTopic::all();
        return view('forum.add_post', compact('topics'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'topic_id' => 'required|exists:forum_topics,id',
            'content' => 'required|string',
        ]);

        $date = Carbon::now();
        $creator = auth()->user()->id;
        ForumPost::create([
            'topic_id' => $request->topic_id,
            'title'=>$request->title,
            'content' => $request->content,
            'image'=>$request->image,
            'date' => $date,
            'creator_id' => $creator
        ]);

        return redirect()->route('forum.add_post')->with('success', 'Post added successfully.');
    }
}
