<?php


namespace App\Services;

use App\Repositories\ArtistRepository;

class ArtistService
{
    protected $artistRepository;

    public function __construct(ArtistRepository $artistRepository)
    {
        $this->artistRepository = $artistRepository;
    }

    public function find($id)
    {
        return $this->artistRepository->find($id);
    }
    public function findWithArtworks($id){
        return $this->artistRepository->findWithArtworks($id);
    }
    
    public function all()
    {
        return $this->artistRepository->all();
    }

    // App\Services\ArtistService.php

public function createArtistInfo($userId, array $data)
{
    // Assuming you have an Artist model and repository
    $artist = $this->artistRepository->create([
        'user_id' => $userId,
        'bio' => $data['bio'],
        'image_url' => $data['image_url'],
        'external_url' => $data['external_url'],
    ]);

    return $artist;
}

    public function createArtist(array $data)
    {
      
        return $this->artistRepository->create($data);
    }

    public function updateArtist($id, array $data)
    {
        return $this->artistRepository->update($id, $data);
    }

    public function deleteArtist($id)
    {
        return $this->artistRepository->delete($id);
    }
}
