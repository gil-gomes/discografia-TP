<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumStoreRequest;
use App\Interfaces\AlbumRepositoryInterface;
use App\Services\AlbumService;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    private $albumRepository;
    private $albumService;
    
    public function __construct(AlbumRepositoryInterface $albumRepository, AlbumService $albumService)
    {
        $this->albumRepository = $albumRepository;
        $this->albumService = $albumService;
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
        
        $this->albumService->createAlbum($request->all());

        return redirect()->route('index')->with('success', 'Álbum cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $album = $this->albumRepository->getAlbumById($id);
        return view('pages.album.edit', compact('album'));
    }

    public function update($id, AlbumStoreRequest $request)
    {
        $this->albumService->updateAlbum($id, $request->all());
        return redirect()->route('index')->with('success', 'Álbum editado com sucesso!');
    }

    public function delete($id)
    {
        $this->albumService->deleteAlbum($id);
        return redirect()->route('index')->with('success', 'Álbum excluido com sucesso!');
    }
}
