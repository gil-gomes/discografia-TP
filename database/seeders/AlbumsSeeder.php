<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Track;
use Illuminate\Database\Seeder;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
            'name' => 'Album',
            'launch' => date($format = 'Y-m-d', strtotime('2000-05-30')),
        ])->each(function ($album, $n = 1) {
            Track::create([
                'album_id' => $album->id,
                'number' => $n+1,
                'name' => 'Faixa teste',
                'duration' => 1.5,
            ]);
        });

        Album::create([
            'name' => 'Album',
            'launch' => date($format = 'Y-m-d', strtotime('2001-10-30')),
        ])->each(function ($album, $n = 1) {
            Track::create([
                'album_id' => $album->id,
                'number' => $n+1,
                'name' => 'Faixa teste 2',
                'duration' => 2,
            ]);
        });
    }
}
