<?php


namespace App\Http\Controllers;

use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist;
use App\Models\User;
use App\Services\ArtistService;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    protected $artistService;
    protected $categoryService;
    public function __construct(ArtistService $artistService, CategoryService $categoryService)
    {
        // $this->middleware('role:artist')->except(['showProfile']);
        $this->artistService = $artistService;
        $this->categoryService = $categoryService;
    }


    public function show($id)
    {
        $artist = $this->artistService->find($id);

        if (!$artist) {
            return redirect()->route('home')->with('error', 'Artist not found');
        }

        return view('artists.profile', compact('artist'));
    }
    public function showProfile($id)
    {
        $artist = $this->artistService->find($id);
        $artworks = $this->artistService->findWithArtworks($id);
        if (!$artist) {
            return redirect()->route('home')->with('error', 'Artist not found');
        }
        $categories = $this->categoryService->getAllCategories();

        // Set the initially selected category
        $selectedCategory = $categories->first()->id; // Example: default to the first category

        return view('artists.profileForElse', compact('artist', 'artworks', 'categories', 'selectedCategory'));
    }

    public function edit($id)
    {
        $user_id = auth()->id();
        $artist = $this->artistService->find($id);

        if (!$artist) {
            return redirect()->route('home')->with('error', 'Artist not found');
        }

        return view('artists.edit', compact('artist','user_id'));
    }

    public function updateProfile(UpdateArtistRequest $request, $id)
    {
        $data = $request->validated();

        $this->artistService->updateArtist($id, $data);

        return redirect()->route('artists.show', $id)->with('status', 'Profile updated successfully');
    }

    // public function create()
    // {

    //     return view('artists.create');
    // }
    public function create()
    {
        // Get the authenticated user's ID
        $userId = auth()->id();
    
        // Check if the user already has an entry in the artists table
        $existingArtist = Artist::where('user_id', $userId)->first();
    
        if ($existingArtist) {
            // If an entry already exists, redirect to the profile edit page
            return redirect()->route('artists.edit', ['artist' => $existingArtist->id]);
        }
    
        // If no existing entry found, render the create view
        return view('artists.create');
    }
    
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'bio' => 'nullable|string|max:255',
            'image_url' => 'nullable',
            'external_url' => 'nullable',
        ]);
        
        // Assuming you have an authenticated user
        $userId = auth()->id();
        // Merge user_id with validated data
        $data = array_merge($validatedData, ['user_id' => $userId]);

        // // Save the artist information for the authenticated user
        // $this->artistService->createArtistInfo($user->id, $data);
        // Save the artist information for the authenticated user
        $this->artistService->createArtistInfo($userId, $data);

        // return redirect()->route('artists.showProfile', ['id' => $user->id])->with('status', 'Artist information added successfully');
        return redirect()->route('profile', ['id' => $userId])->with('status', 'Artist information added successfully');
    }
   
    


    public function deleteProfile($id)
    {
        $this->artistService->deleteArtist($id);

        return redirect()->route('home')->with('status', 'Artist profile deleted successfully');
    }


    public function showArtistPage()
    {
        // Fetch artist records from the artist table where user_id exists in the users table
        $artists = Artist::whereExists(function ($query) {
            $query->select('id')
                ->from('users')
                ->whereColumn('users.id', 'artists.user_id');
        })->get();

        // Fetch the names of users based on their user_id
        foreach ($artists as $artist) {
            $user = User::find($artist->user_id);
            $artist->name = $user ? $user->name : 'Unknown';
        }

        return view('dashboard.artist', compact('artists'));
    }
}
