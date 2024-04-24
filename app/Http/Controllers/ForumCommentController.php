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
    public function update(Request $request, $id)
{
    $comment = ForumComment::findOrFail($id);

    // Check if the authenticated user is the creator of the comment
    if ($request->user()->id !== $comment->user_id) {
        // If not the creator, return unauthorized response or redirect
        return response()->json(['error' => 'Unauthorized'], 403);
        // Or you can redirect to a different route or show an error message
    }

    // Validation rules for updating a comment
    $request->validate([
        'content' => 'required|string',
    ]);

    // Update the comment with new data
    $comment->content = $request->content;
    // Update other fields as needed...

    // Save the updated comment
    $comment->save();

    return redirect()->back()->with('success', 'Comment updated successfully.');
}

public function destroy($id)
{
    $comment = ForumComment::findOrFail($id);

    // Check if the authenticated user is the creator of the comment
    if (auth()->id() !== $comment->user_id) {
        // If not the creator, return unauthorized response or redirect
        return response()->json(['error' => 'Unauthorized'], 403);
        // Or you can redirect to a different route or show an error message
    }

    $comment->delete();  
    return redirect()->back()->with('success', 'Comment deleted successfully.');
}


}
