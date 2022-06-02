@extends('layouts.app')

@section('title', "Álbum - $album->name")

@section('content')

<div class="d-flex justify-content-between">
    <div>
        <h4>Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}</h4>
    </div>
    <div class="">
        <a href="{{ route('album.track.create', $album->id) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-toggle="tooltip" title="Adicionar nova Faixa">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</div>

@if($album->tracks->count() > 0)
    <table class="table table-borderless">
        <thead class="text-center">
            <tr>
                <th scope="col">Nº</th>
                <th scope="col">Faixa</th>
                <th scope="col">Duração</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

    @foreach ($album->tracks as $track)

        <div class="tracks">

            <tbody class="text-center">
                <tr>
                    <th scope="row">{{ $track->number }}</th>
                    <td>{{ $track->title }}</td>
                    <td>{{ $track->duration }}</td>
                    <td>
                        <a href="{{ route('album.track.player',$track->id) }}"class="play-track btn btn-warning" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a>
                        <button class="btn btn-danger" ata-bs-toggle="tooltip" data-bs-placement="top" title="Excluir Faixa">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </td>
                </tr>
            </tbody>

        </div>

    @endforeach

    </table>
    @else
    <p class="text-center">Álbum sem Faixas</p class="text-center">
    @endif

@stop