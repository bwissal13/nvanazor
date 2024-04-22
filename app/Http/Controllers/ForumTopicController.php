<?php
namespace App\Http\Controllers;

use App\Models\ForumTopic;
use Illuminate\Http\Request;

class ForumTopicController extends Controller
{
    public function show($topicId)
    {
        $topic = ForumTopic::findOrFail($topicId);
        return view('forum.topic', compact('topic'));
    }

    public function create()
    {
        return view('forum.add_topic');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ForumTopic::create([
            'name' => $request->name,
        ]);

        return redirect()->route('forum.add_topic')->with('success', 'Topic added successfully.');
    }
}
