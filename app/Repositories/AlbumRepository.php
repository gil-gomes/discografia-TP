<?php

namespace App\Repositories;

use App\Interfaces\AlbumRepositoryInterface;
use App\Models\Album;

class AlbumRepository implements AlbumRepositoryInterface
{
    private $model;

    public function __construct(Album $album)
    {
        $this->model = $album;
    }

    /**
     * Retorna todas os albuns cadastrados no Banco de Dados
     */
    public function getAllAlbums()
    {
        return $this->model->with('tracks')->get();
    }

    /**
     * Retorna um album específico pelo seu id
     */
    public function getAlbumById(int $album_id): Album
    {
        return $this->model->where('id', $album_id)->with('tracks')->first();
    }

    /**
     * Retorna a o resultado da consulta dos albuns pelo seu nome
    */
    public function getAlbumByName(string $search)
    {
        return $this->model->where('name', 'LIKE', '%' . $search . '%')
        ->with('tracks')
        ->paginate(5);
    }

    /**
     * Insere um album no Banco de Dados
     */
    public function createAlbum(array $data)
    {
        $this->model->create($data);
    }

    public function updateAlbum(int $album_id, array $data)
    {
        return $this->model->find($album_id)->update($data);
    }

    /**
     * Exlui um album específico pelo seu id
     */
    public function deleteAlbum(int $album_id)
    {
        $album = $this->getAlbumById($album_id);
        $album->delete();
    }
}