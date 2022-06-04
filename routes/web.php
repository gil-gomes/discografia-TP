<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AlbumController::class, 'index'])->name('index');

Route::name('album.')->prefix('album')->group(function() {
    Route::post('/', [AlbumController::class, 'store'])->name('store');
    Route::get('/cadastrar', [AlbumController::class, 'create'])->name('create');
    Route::get('/buscar', [AlbumController::class, 'showByName'])->name('search');
    Route::get('/{id}', [AlbumController::class, 'show'])->name('show');
    Route::get('/atualizar/{id}', [AlbumController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AlbumController::class, 'update'])->name('update');
    Route::delete('/{id}', [AlbumController::class, 'delete'])->name('delete');

    Route::name('track.')->group(function() {
        Route::get('/{album_id}/cadastrar-faixa', [TrackController::class, 'create'])->name('create');
        Route::post('/{album_id}/track', [TrackController::class, 'store'])->name('store');
        Route::get('/player/{track_id}', [TrackController::class, 'playerTrack'])->name('player');
        Route::delete('{album_id}/excluir-faixa/{track_id}', [TrackController::class, 'delete'])->name('delete');
    });
    
});
