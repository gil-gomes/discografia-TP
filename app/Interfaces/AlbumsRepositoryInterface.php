<?php

namespace App\Interfaces;

interface AlbumsRepositoryInterface
{
    public function getAllAlbums();
    public function getAlbumById(int $album_id);
    public function createAlbum(array $data);
    public function getAlbumByName(string $search);
    public function deleteAlbum(int $album_id);
}