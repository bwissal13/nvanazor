<?php
namespace App\Http\Controllers;

use App\Models\ForumComment;
use App\Models\ForumPost;
use Illuminate\Http\Request;

class ForumCommentController extends Controller
{
   
    public function create($postId)
    {
        $post = ForumPost::findOrFail($postId);
         // Get the topic ID of the current post
    $topicId = $post->topic_id;

    // Fetch similar posts with the same topic
    $similarPosts = ForumPost::where('topic_id', $topicId)
                             ->where('id', '!=', $post->id) // Exclude the current post
                             ->limit(3) // Limit the number of similar posts to show
                             ->get();

    return view('forum.add_comment', compact('post', 'similarPosts'));
    }
    
    public function store(Request $request)
    {
    //   dd($request->all());
        $request->validate([
            // 'post_id' => 'required|exists:forum_posts,id',
            // 'content' => 'required|string',
        ]);

        ForumComment::create([
            'post_id' => $request->post_id,
            'user_id'=>$request->user_id,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
