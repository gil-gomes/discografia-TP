<?php

namespace App\Services;

use App\Interfaces\AlbumRepositoryInterface;

class AlbumService
{
    private $albumRepository;
    
    public function __construct(AlbumRepositoryInterface $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }

    public function createAlbum(array $data)
    {
        return $this->albumRepository->createAlbum($data);
    }

    public function updateAlbum(int $album_id, array $data)
    {
        return $this->albumRepository->updateAlbum($album_id, $data);
    }

    public function deleteAlbum(int $id)
    {
        return $this->albumRepository->deleteAlbum($id);
    }
}