@extends('layouts.app')

@section('title', "Álbum - $album->name")

@section('content')

@include('includes.message')

<section class="d-flex justify-content-between mt-5 mb-3" id="header-show-album">

    <header class="mx-auto">
        <h2>Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}</h2>
    </header>
    <div>
        <a href="{{ route('album.track.create', $album->id) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-toggle="tooltip" title="Adicionar nova Faixa">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</section>

@include('includes.list-tracks')

@stop