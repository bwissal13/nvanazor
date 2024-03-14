<?php
namespace App\Repositories;

use App\Models\Artwork;

class ArtworkRepository implements ArtworkRepositoryInterface
{
    public function all()
    {
        return Artwork::all();
    }

    public function find($id)
    {
        return Artwork::findOrFail($id);
    }

    public function create(array $data)
    {
        return Artwork::create($data);
    }

    public function update($id, array $data)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->update($data);
        return $artwork;
    }

    public function delete($id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->delete();
    }
}