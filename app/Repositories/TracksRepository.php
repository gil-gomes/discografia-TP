<?php

namespace App\Repositories;

use App\Interfaces\TrackRepositoryInterface;
use App\Models\Track;

class TracksRepository implements TrackRepositoryInterface
{
    private $model;

    public function __construct(Track $track)
    {
        $this->model = $track;
    }
    /**
     * Retorna uma faixa específica pelo seu id
     */
    public function getTrackById(int $track_id)
    {
        return $this->model->findOrFail($track_id);
    }

    /**
     * Insere uma faixa no banco de dados passando o id do album
     * @param int $album_id id do album que a faixa pertence
     */
    public function createTrack(int $album_id, array $data)
    {
        return $this->model->create([
            'album_id' => $album_id,
            'number' => $data['number'],
            'title' => $data['title'],
            'duration' => $data['duration'],
        ]);
    }

    public function deleteTrack(int $track_id)
    {

    }
}