<?php

namespace App\Interfaces;

interface  TrackRepositoryInterface
{
    public function getTrackById(int $album_id);
    public function createTrack(int $album_id, array $data);
    public function deleteTrack(int $track_id);
}