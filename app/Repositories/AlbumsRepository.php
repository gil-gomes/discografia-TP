<?php

namespace App\Repositories;

use App\Interfaces\AlbumsRepositoryInterface;
use App\Models\Album;

class AlbumsRepository implements AlbumsRepositoryInterface
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
        return $this->model->with('traks')
        ->paginate(5);
    }

    /**
     * Retorna um album específico pelo seu id
     */
    public function getAlbumById(int $album_id): Album
    {
        return $this->model->where('id', $album_id)->with('traks')->first();
    }

    /**
     * Retorna a o resultado da consulta dos albuns pelo seu nome
    */
    public function getAlbumByName(string $search)
    {
        return $this->model->where('name', 'LIKE', '%' . $search . '%')
        ->with('traks')
        ->paginate(5);
    }

    /**
     * Insere um album no Banco de Dados
     */
    public function createAlbum(array $data)
    {
        $this->model->create($data);
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