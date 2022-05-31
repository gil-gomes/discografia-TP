<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumStoreRequest;
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
        return view('pages.album.index', compact('albums'));
    }

    public function create()
    {
        return view('pages.album.create');
    }

    public function show($id)
    {
        $album = $this->albumRepository->getAlbumById($id);
        return view('pages.album.show', compact('album'));
    }

    public function showByName(Request $request)
    {
        $search = $request->input('search');
        
        $albums = $this->albumRepository->getAlbumByName($search);

        return view('pages.album.index', compact('albums'));
    }

    public function store(AlbumStoreRequest $request)
    {
        $request->validated();
        
        $this->albumRepository->createAlbum($request->all());
        return redirect()->route('album.index')->with('success', 'Álbum cadastrado com sucesso!');
    }

    public function delete($id)
    {
        $this->albumRepository->deleteAlbum($id);
       
        return redirect()->route('album.index')->with('success', 'Álbum excluido com sucesso!');
    }
}
