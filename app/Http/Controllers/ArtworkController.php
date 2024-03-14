<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtworkRequest;
use App\Models\Artist;
use App\Services\ArtworkService;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    protected $artworkService;

    public function __construct(ArtworkService $artworkService)
    {
        $this->artworkService = $artworkService;
    }

    public function index()
    {
        $artworks = $this->artworkService->all();
        return view('artworks.index', compact('artworks'));
    }

    public function create()
    {
        return view('artworks.create');
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

        // Merge the artist_id into the validated data
        $validatedData = array_merge($request->validated(), ['artist_id' => $artistId]);

        // Create the artwork
        $artwork = $this->artworkService->create($validatedData);
        // Attach the artwork to the artist
        $artist = Artist::findOrFail($artistId);
        $artist->artworks()->attach($artwork->id);
        // Redirect to the artwork's show page
        return redirect()->route('artworks.show', $artwork->id)->with('success', 'Artwork created successfully.');
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
}
