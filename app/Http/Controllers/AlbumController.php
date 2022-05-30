<?php

namespace App\Http\Controllers;

use App\Interfaces\AlbumsRepositoryInterface;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    private $albumRepository;
    
    public function __construct(AlbumsRepositoryInterface $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }

    public function index()
    {
        $albums = $this->albumRepository->getAllAlbums();
        // return $albums[0]->traks;
        return view('pages.discography.index', compact('albums'));
    }
}
