@extends('layouts.app')

@section('title', 'Discografica Tião Carreiro e Pardinho')

@section('content')

    <div class="search mx-auto">

        <div class="search-header d-flex w-100">
            <div class="">
                <h2>Pesquise por um Álbum</h2>
            </div>

            <div class="ml-10">
                <button class="btn btn-primary" data-bs-toggle="tooltip" data-toggle="tooltip" title="Adicionar novo Álbum">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>

        <form action="">
            <div class="row">
                <div class="col-11">
                    <input type="text" class="form-control" placeholder="Buscar">
                </div>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary btn-search w-100">Procurar</button>
                </div>
            </div>
        </form>

        <div class="list-albums mt-4">
            @foreach ($albums as $album)

                <div class="album mb-5">

                    <div class="header-album d-flex align-items-center">
                        <div>
                            <h4>Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}</h4>
                        </div>
                        <div class="ml-10">
                            <form action="">
                                <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir Álbum">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>

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
                                <td>{{ $trak->name }}</td>
                                <td>{{ $trak->duration }}</td>
                                <td>
                                    <form action="">
                                        <button type="submit" class="btn btn-danger" ata-bs-toggle="tooltip" data-bs-placement="top" title="Excluir Faixa">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>

                        </div>

                    @endforeach

                    </table>

                </div>

            @endforeach
        </div>

    </div>

@stop