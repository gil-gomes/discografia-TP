<?php

namespace App\Interfaces;

interface AlbumsRepositoryInterface
{
    public function getAllAlbums();
    public function getAlbumById(int $id);
    public function getAlbumByName(string $search);
    public function deleteAlbum(int $id);
}