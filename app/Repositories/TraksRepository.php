<?php

namespace App\Repositories;

use App\Models\Track;

class TraksRepository implements TrakRepositoryInterface
{
    private $model;

    public function __construct(Track $trak)
    {
        $this->model = $trak;
    }
    /**
     * Retorna uma faixa específica pelo seu id
     */
    public function getTrakById(int $trak_id)
    {
    

    }

    /**
     * Insere uma faixa no banco de dados passando o id do album
     * @param int $album_id id do album que a faixa pertence
     */
    public function createTrak(int $album_id)
    {

    }

    public function deleteTrak(int $trak_id)
    {

    }
}