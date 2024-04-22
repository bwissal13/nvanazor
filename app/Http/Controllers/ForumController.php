<?php
namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\ForumTopic;
use App\Services\ForumService;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    // protected $forumService;

    // public function __construct(ForumService $forumService)
    // {
    //     $this->forumService = $forumService;
    // }
    public function show()
    {
        $topics = ForumTopic::all();
        $posts = ForumPost::all();
        $topics = ForumTopic::all(); 
        return view('forum.forum',compact('topics','posts'));
    }
    public function showTopic($topicId)
    {
        $topic = ForumTopic::findOrFail($topicId);
        // Fetch posts and comments related to the topic as needed
        return view('forum.topic', compact('topic'));
    }

    public function addComment(Request $request)
    {
        // Validate request data

        $commentData = [
            'content' => $request->input('content'),
            'post_id' => $request->input('post_id')
        ];

        $this->forumService->createComment($commentData);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
    public function search(Request $request)
    {
        // Validate search query
        $request->validate([
            'query' => 'required|string|max:255',
        ]);
    
        // Get the search query from the request
        $query = $request->input('query');
    
        // Perform search on topics
        $topics = ForumTopic::where('name', 'like', '%' . $query . '%')->get();
    
        // Return the search results in JSON format
        return response()->json(['topics' => $topics]);
    }
}
