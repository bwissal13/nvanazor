<?php

namespace App\Services;

use App\Repositories\ArtworkRepositoryInterface;

class ArtworkService
{
    protected $artworkRepository;

    public function __construct(ArtworkRepositoryInterface $artworkRepository)
    {
        $this->artworkRepository = $artworkRepository;
    }

    public function all()
    {
        return $this->artworkRepository->all();
    }

    public function find($id)
    {
        return $this->artworkRepository->find($id);
    }

    public function create(array $data)
    {
        return $this->artworkRepository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->artworkRepository->update($id, $data);
    }

    public function delete($id)
    {
        $this->artworkRepository->delete($id);
    }
}
