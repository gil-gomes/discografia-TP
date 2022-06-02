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
            'record_company' => 'Globo',
        ])->each(function ($album, $n = 1) {
            Track::create([
                'album_id' => $album->id,
                'number' => $n+1,
                'title' => 'Faixa teste',
                'duration' => 1.5,
                'file_name' => 'testando',
            ]);
        });

        Album::create([
            'name' => 'Album',
            'launch' => date($format = 'Y-m-d', strtotime('2001-10-30')),
            'record_company' => 'Som Mucic',
        ])->each(function ($album, $n = 1) {
            Track::create([
                'album_id' => $album->id,
                'number' => $n+1,
                'title' => 'Faixa teste 2',
                'duration' => 2,
                'file_name' => 'testando 2',
            ]);
        });
    }
}
