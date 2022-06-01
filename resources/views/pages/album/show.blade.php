@extends('layouts.app')

@section('title', "Álbum - $album->name")

@section('content')

<div class="d-flex justify-content-between">
    <div>
        <h4>Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}</h4>
    </div>
    <div class="">
        <button class="btn btn-primary" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modal-form-trak" data-bs-toggle="tooltip" data-toggle="tooltip" title="Adicionar nova Faixa">
            <i class="fa-solid fa-plus"></i>
        </button>
        @php
            $title = "Teste"
        @endphp
        <x-modals.form-trak title="Teste">
            <button type="button" class="btn btn-primary">Salvar</button>
        </x-modals.form-trak>
    </div>
</div>

@if($album->traks->count() > 0)
    <table class="table table-borderless">
        <thead class="text-center">
            <tr>
                <th scope="col">Nº</th>
                <th scope="col">Faixa</th>
                <th scope="col">Duração</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

    @foreach ($album->traks as $trak)

        <div class="tracks">

            <tbody class="text-center">
                <tr>
                    <th scope="row">{{ $trak->number }}</th>
                    <td>{{ $trak->title }}</td>
                    <td>{{ $trak->duration }}</td>
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

@stop