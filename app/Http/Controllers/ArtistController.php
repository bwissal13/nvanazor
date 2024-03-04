<?php


namespace App\Http\Controllers;

use App\Http\Requests\UpdateArtistRequest;
use App\Services\ArtistService;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    protected $artistService;

    public function __construct(ArtistService $artistService)
    {
        $this->middleware('role:artist')->except(['showProfile']);
        $this->artistService = $artistService;
    }
    

    public function showProfile($id)
    {
        $artist = $this->artistService->find($id);

        if (!$artist) {
            return redirect()->route('home')->with('error', 'Artist not found');
        }

        return view('artists.profile', compact('artist'));
    }

    public function updateProfile(UpdateArtistRequest $request, $id)
    {
        $data = $request->validated();

        $this->artistService->updateArtist($id, $data);

        return redirect()->route('artists.showProfile', $id)->with('status', 'Profile updated successfully');
    }

    public function create()
    {
        return view('artists.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'bio' => 'nullable|string|max:255',
            'image_url' => 'nullable|url',
            'external_url' => 'nullable|url',
        ]);
    
        // Assuming you have an authenticated user
        $user = auth()->user();
    
        // Save the artist information for the authenticated user
        $this->artistService->createArtistInfo($user->id, $data);
    
        return redirect()->route('artists.showProfile', ['id' => $user->id])->with('status', 'Artist information added successfully');
    }
    public function deleteProfile($id)
    {
        $this->artistService->deleteArtist($id);

        return redirect()->route('home')->with('status', 'Artist profile deleted successfully');
    }
}
