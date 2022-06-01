@extends('layouts.app')

@section('title', 'Discografica Tião Carreiro e Pardinho')

@section('content')

    <div class="search mx-auto w-100">

        @include('includes.message')

        <div class="search-header d-flex w-100 mb-3">
            <div class="">
                <h3>Pesquise por um Álbum</h3>
            </div>

            <div class="ml-10">
                <a href="{{ route('album.create') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-toggle="tooltip" title="Adicionar novo Álbum">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>
        </div>

        <form action="{{ route('album.search') }}">
            <div class="row">
                <div class="col-11 col-md-10">
                    <input type="text" class="form-control" name="search" placeholder="Buscar">
                </div>

                <div class="col-1 col-md-2">
                    <button type="submit" class="btn btn-primary btn-search w-100">Procurar</button>
                </div>
            </div>
        </form>

        <div class="list-albums mt-5">
            @foreach ($albums as $album)

                <div class="album mb-5">
                    <div class="header-album d-flex align-items-center justify-content-between">
                        <a href="{{ route('album.show', $album->id) }}" class="text-dark">
                            <div class="album-details">
                                <h5>
                                    <strong>
                                        Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}
                                    </strong>
                                </h5>
                                <span>Gravadora: {{ $album->record_company }}</span>
                            </div>
                        </a>
                        
                        <div class="ml-10">  
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modal-delete" data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Excluir Álbum">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            @php
                                $message = "Excluir o Álbum $album->name"
                            @endphp
                            <x-modals.confirm-action :message="$message" :id="$album->id"/>
                        </div>
                    </div>

                    @if(count($album->tracks) > 0)
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
                                        <a href=""
                                        class="btn btn-danger"
                                        ata-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Excluir Faixa">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </div>

                        @endforeach

                        </table>
                    @else
                        <p class="text-center">Álbum sem Faixas</p class="text-center">
                    @endif
                    
                    <hr>

                </div>

            @endforeach

            @if ($albums->links())
            <div class="link-paginate d-flex justify-content-center">
                {{ $albums->links() }}
            </div>
            @endif
        </div>
    </div>

    <!-- Modal -->

    

@stop