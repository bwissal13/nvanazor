<?php

namespace App\Http\Controllers;

use App\Models\ForumTopic;
use Illuminate\Http\Request;

class ForumTopicController extends Controller
{
    public function show()
    {
        $topics = ForumTopic::all();
        return view('forum.topic', compact('topics'));
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

        return redirect()->route('forum.topic.show')->with('success', 'Topic added successfully.');
    }
    public function destroy($id)
    {
        $topic = ForumTopic::findOrFail($id);
        // Delete associated posts
        $topic->posts()->delete();
        $topic->delete();
        return redirect()->back()->with('success', 'Topic deleted successfully.');
    }

    public function edit($id)
    {
        $topic = ForumTopic::findOrFail($id);
        return view('forum.edit_topic', compact('topic'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $topic = ForumTopic::findOrFail($id);
        $topic->name = $request->name;
        $topic->save();

        return redirect()->route('forum.topic.show', $id)->with('success', 'Topic updated successfully.');
    }
}
