<?php


namespace App\Repositories;

use App\Models\Artist;
use App\Repositories\ArtistRepositoryInterface;

class ArtistRepository implements ArtistRepositoryInterface
{
    public function find($id)
    {
        return Artist::find($id);
    }
    public function findWithArtworks($id){
        return Artist::with('artworks')->find($id);
    }
    public function all()
    {
        return Artist::all();
    }
    public function create(array $data)
    {
        return Artist::create($data);
    }

    public function update($id, array $data)
    {
        $artist = $this->find($id);

        if ($artist) {
            $artist->update($data);
        }

        return $artist;
    }

    public function delete($id)
    {
        $artist = $this->find($id);

        if ($artist) {
            $artist->delete();
        }

        return $artist;
    }
}

// namespace App\Repositories;

// use App\Models\Artist;

// class ArtistRepository
// {
//     public function find($id)
//     {
//         return Artist::find($id);
//     }

//     public function create(array $data)
//     {
//         return Artist::create($data);
//     }

//     public function update($id, array $data)
//     {
//         $artist = $this->find($id);

//         if ($artist) {
//             $artist->update($data);
//         }

//         return $artist;
//     }

//     public function delete($id)
//     {
//         $artist = $this->find($id);

//         if ($artist) {
//             $artist->delete();
//         }

//         return $artist;
//     }
// }
