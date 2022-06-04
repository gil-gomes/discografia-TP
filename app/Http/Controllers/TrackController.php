<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormTrackRequest;
use App\Interfaces\TrackRepositoryInterface;
use App\Services\TrackService;

class TrackController extends Controller
{
    private $trackRepository;
    private $trackService;

    public function __construct(TrackRepositoryInterface $trackRepository, TrackService $trackService)
    {
        $this->trackRepository = $trackRepository;
        $this->trackService = $trackService;
    }

    public function create($album_id)
    {
        return view('pages.tracks.create', compact('album_id'));
    }

    public function store(int $album_id, FormTrackRequest $request)
    {
        $request->validated();
        $this->trackService->createTrack($album_id, $request);
        return redirect()->route('album.show', $album_id)->with('success', 'Faixa cadastrada com sucesso!');
    }

    public function playerTrack($track_id)
    {
        $track = $this->trackRepository->getTrackById($track_id);

        $track_base64 = $this->trackService->getBase64Track(($track_id));
        
        return view('pages.tracks.player', compact('track', 'track_base64'));
    }

    public function delete($album_id, $track_id)
    {   
        $this->trackService->deleteTrack($track_id);
        return redirect()->route('album.show', $album_id)->with('success', 'Faixa exluida com sucesso!');
    }
}
