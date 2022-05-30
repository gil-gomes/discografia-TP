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
        return $this->model->with('traks')->get();
    }

    /**
     * Retorna um album específico pelo seu id
     */
    public function getAlbumById(int $id)
    {
        
    }

    /**
     * Retorna a o resultado da consulta dos albuns pelo seu nome
    */
    public function getAlbumByName(string $search)
    {

    }

    /**
     * Exlui um album específico pelo seu id
     */
    public function deleteAlbum(int $id)
    {

    }
}