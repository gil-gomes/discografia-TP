@extends('layouts.app')

@section('title', "Álbum - $album->name")

@section('content')

<section class="d-flex justify-content-between mt-5 mb-3">
    <header class="mx-auto">
        <h2>Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}</h2>
    </header>
    <div>
        <a href="{{ route('album.track.create', $album->id) }}" class="btn btn-primary" data-bs-toggle="tooltip" data-toggle="tooltip" title="Adicionar nova Faixa">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</section>

<section>
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
</section>

@stop