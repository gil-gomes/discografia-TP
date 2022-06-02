<?php

namespace App\Services;

use App\Http\Requests\FormTrackRequest;
use App\Interfaces\TrackRepositoryInterface;
use App\Models\Track;
use Exception;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class TrackService
{
    private $trackRepository;

    public function __construct(TrackRepositoryInterface $trackRepository)
    {
        $this->trackRepository = $trackRepository;
    }

    public function createTrack(int $album_id, FormTrackRequest $data)
    {
        if($data->hasFile('track_file')){
            $file = $data->file('track_file');
            $extension = $file->getClientOriginalExtension();
            $file_name = Uuid::uuid4() . '.' . $extension;
            $file->storeAs('public/tracks', $file_name);
            $newData = [
                'number' => $data->number,
                'title' => $data->title,
                'duration' => $data->duration,
                'file_name' => $file_name,
            ];
           
            return $this->trackRepository->createTrack($album_id, $newData);
        }
    }

    /**
     * Pegar o arquivo de uma determinada faixa
     * @return base64 do arquivo mp3
     */
    public function getBase64Track(Track $track)
    {
        try{
            $patch = Storage::disk('public')->get('tracks/' . $track->file_name);
    
            $track_base64 = base64_encode($patch);
    
            return $track_base64;
            
        } catch (Exception $exception) {
            return false;
        }
    }

    public function deleteTrack(int $id)
    {
        $this->trackRepository->deleteTrack($id);
    }
}