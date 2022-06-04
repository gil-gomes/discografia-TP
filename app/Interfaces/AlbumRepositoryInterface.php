<?php

namespace App\Interfaces;

interface AlbumRepositoryInterface
{
    public function getAllAlbums();
    public function getAlbumById(int $album_id);
    public function getAlbumByName(string $search);
    public function createAlbum(array $data);
    public function updateAlbum(int $album_id, array $data);
    public function deleteAlbum(int $album_id);
}