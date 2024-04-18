<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Requests\ArtworkRequest;
use App\Models\Artist;
use App\Models\Artwork;
use App\Services\ArtworkService;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller
{
    protected $artworkService;
    protected $categoryService;

    public function __construct(ArtworkService $artworkService, CategoryService $categoryService)
    {
        $this->artworkService = $artworkService;
        $this->categoryService = $categoryService;
    }

    // public function showall()
    // {
    //     $artworks = $this->artworkService->all();
    //     return view('artworks.artist-artworks', compact('artworks'));
    // }
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the artist associated with the authenticated user
        $artist = $user->artist;

        // Fetch artworks associated with the artist
        $artworks = $artist->artworks;

        return view('artworks.artist-artworks', compact('artworks'));
    }
    public function showModal(Request $request, $id)
    {
        $artwork = Artwork::findOrFail($id); // Assuming Artwork is your model

        // Return a view with the modal content, passing the artwork data
        return View::make('artworks.modal', ['artwork' => $artwork]);
    }

    public function create()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('artworks.create', compact('categories'));
    }

    // public function store(ArtworkRequest $request)
    // {

    //     $artwork = $this->artworkService->create($request->validated());
    //     return redirect()->route('artworks.show', $artwork->id)->with('success', 'Artwork created successfully.');
    // }
    public function store(ArtworkRequest $request)
    {
        // Retrieve the authenticated user's ID
        $userId = auth()->id();

        // Retrieve the artist ID based on the user ID
        $artistId = Artist::where('user_id', $userId)->value('id');

        // Merge the artist_id and category_id into the validated data
        $validatedData = array_merge($request->validated(), [
            'artist_id' => $artistId,
            'category_id' => $request->category_id,
        ]);
        if ($request->hasFile('image')) {
            $imageName = 'artwork_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->move(public_path("storage/artwork_images"),$imageName);
            // $imagePath->move(public_path("storage/category_images"),$imageName);
            $validatedData['image_url'] = $imagePath->getFilename();
            //dd($imagePath->getFilename());dd()
         
        }
        // Create the artwork
        $artwork = $this->artworkService->create($validatedData); 
        // Attach the artwork to the artist
        $artist = Artist::findOrFail($artistId);
        $artist->artworks()->attach($artwork->id);

        // Redirect to the artwork's show page
        return redirect()->route('artworks.index', $artwork->id)->with('success', 'Artwork created successfully.');
    }


    public function show($id)
    {
        $artwork = $this->artworkService->find($id);
        return view('artworks.show', compact('artwork'));
    }

    public function edit($id)
    {
        $artwork = $this->artworkService->find($id);
        return view('artworks.edit', compact('artwork'));
    }

    public function update(ArtworkRequest $request, $id)
    {
        $this->artworkService->update($id, $request->validated());
        return redirect()->route('artworks.show', $id)->with('success', 'Artwork updated successfully.');
    }

    public function destroy($id)
    {
        $this->artworkService->delete($id);
        return redirect()->route('artworks.index')->with('success', 'Artwork deleted successfully.');
    }
    public function showArtworks()
    {
        $artworks = DB::table('artworks')
            ->join('artists', 'artworks.artist_id', '=', 'artists.id')
            ->join('users', 'artists.user_id', '=', 'users.id')
            ->select('artworks.*', 'users.name as artist_name')
            ->get();

        return view('dashboard.artworks', compact('artworks'));
    }
}
