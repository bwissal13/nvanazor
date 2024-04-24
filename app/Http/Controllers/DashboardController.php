<?php


namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\ForumPost;
use App\Models\ForumTopic;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\RoleChangeRequestNotification;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
{
    $posts=ForumPost::all();
    $topics=ForumTopic::all();
    $categories = Category::all();
    $artworks = Artwork::all();
    $usersWithRoleChangeRequests = User::where('role_change_requested', true)->get();
    $maxArtworksArtist = Artist::withCount('artworks')->orderBy('artworks_count', 'desc')->first();

    // Retrieve the most used category
    $mostUsedCategory = Category::withCount('artworks')->orderByDesc('artworks_count')->first();

    $mostDiscussedTopic = ForumTopic::select(DB::raw('*, (SELECT COUNT(*) FROM forum_posts WHERE forum_topics.id = forum_posts.topic_id) AS posts_count'))
    ->orderByDesc('posts_count')
    ->first();

    return view('dashboard.dashboard', compact('categories', 'artworks', 'usersWithRoleChangeRequests', 'maxArtworksArtist', 'mostUsedCategory', 'mostDiscussedTopic','posts','topics'));
}
    public function processRoleChangeRequest(Request $request, $userId)
    {
        // Process role change request
        $user = User::findOrFail($userId);
        $user->assignRole('artist');
        $user->role_change_requested = false;
        $user->save();

        // Notify the user
        $user->notify(new RoleChangeRequestNotification('Your role change request has been approved.'));

        return redirect()->back()->with('success', 'Role change request processed successfully!');
    }
}
