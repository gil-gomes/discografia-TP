<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormTrackRequest;
use App\Interfaces\TrackRepositoryInterface;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    private $trackRepository;

    public function __construct(TrackRepositoryInterface $trackRepository)
    {
        $this->trackRepository = $trackRepository;
    }

    public function create($album_id)
    {
        return view('pages.tracks.create', compact('album_id'));
    }

    public function store(int $album_id, FormTrackRequest $request)
    {
        $request->validated();
        $this->trackRepository->createTrack($album_id, $request->all());
        return redirect()->back()->with('success', 'Faixa cadastrada com sucesso!');
    }
}
