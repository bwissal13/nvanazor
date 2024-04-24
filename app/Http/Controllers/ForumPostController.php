<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\ForumTopic;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user's ID
        $userId = Auth::id();
        
        // Fetch posts created by the authenticated user
        $posts = ForumPost::where('creator_id', $userId)->get();
        
        // Pass the posts data to the view
        return view('forum.my_posts', ['posts' => $posts]);
    }
    public function edit($id)
{
    // Find the post to be edited
    $post = ForumPost::findOrFail($id);

    // Check if the authenticated user is the creator of the post
    if (Auth::id() !== $post->creator_id) {
        // If not the creator, return unauthorized response or redirect
        return response()->json(['error' => 'Unauthorized'], 403);
        // Or you can redirect to a different route or show an error message
    }

    // Fetch all topics for the dropdown
    $topics = ForumTopic::all();

    // Pass the post and topics data to the edit view
    return view('forum.edit_post', compact('post', 'topics'));
}

    public function create()
    {
        $topics = ForumTopic::all();
        return view('forum.add_post', compact('topics'));
    }
    public function update(Request $request, $id)
    {
        $post = ForumPost::findOrFail($id);

        // Check if the authenticated user is the creator of the post
        if (Auth::id() !== $post->creator_id) {
            // If not the creator, return unauthorized response or redirect
            return response()->json(['error' => 'Unauthorized'], 403);
            // Or you can redirect to a different route or show an error message
        }

        // Validation rules for updating a post
        $request->validate([
            'topic_id' => 'required|exists:forum_topics,id',
            'content' => 'required|string',
        ]);

        // Update the post with new data
        $post->title=$request->title;
        $post->topic_id = $request->topic_id;
        $post->content = $request->content;
        // Update other fields as needed...

        // Save the updated post
        $post->save();

        return redirect()->route('forum.my_posts')->with('success', 'Post updated successfully.');
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
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'date' => $date,
            'creator_id' => $creator
        ]);

        return redirect()->route('forum.show')->with('success', 'Post added successfully.');
    }
    public function show()
    {
        $posts = ForumPost::all();
        return view('dashboard.posts', compact('posts'));
    }
    public function destroy($id)
    {
        $post = ForumPost::findOrFail($id);
        if (Auth::id() !== $post->creator_id && !Auth::user()->isAdmin()) {
            // If not the creator or an admin, return unauthorized response or redirect
            return response()->json(['error' => 'Unauthorized'], 403);
            // Or you can redirect to a different route or show an error message
        }
        $post->delete();  
        return redirect()->back()->with('success', 'Post added successfully.');
    }
}
