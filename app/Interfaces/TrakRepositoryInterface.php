<?php

namespace App\Repositories;

interface  TrakRepositoryInterface
{
    public function getTrakById(int $album_id);
    public function createTrak(int $album_id);
    public function deleteTrak(int $trak_id);
}