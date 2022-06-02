<?php

namespace App\Services;

use App\Interfaces\AlbumsRepositoryInterface;

class AlbumService
{
    private $albumRepository;
    
    public function __construct(AlbumsRepositoryInterface $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }

    public function createTrack(array $data)
    {
        return $this->albumRepository->createAlbum($data);
    }

    public function deleteTrack(int $id)
    {
        return $this->albumRepository->deleteAlbum($id);
    }
}