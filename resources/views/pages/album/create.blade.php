@extends('layouts.app')

@section('title', 'Cadastrar Álbum')

@section('content')

<div class="form-album mx-auto">

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('album.store') }}" method="POST">
        @csrf
        <h2>Álbum</h1>

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Nome do Álbum" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="launch" class="form-label">Data de Lançamento</label>
            <input type="date" class="form-control" name="launch" value="{{ old('launch') }}">
        </div>

        <div class="mb-4">
            <label for="record-company" class="form-label">Gravadora</label>
            <input type="text" class="form-control" name="record_company" placeholder="Nome da Gravadora"
            value="{{ old('record_company') }}">
        </div>

        <button type="submit" class="btn btn-primary mb-3 btn-cad">Cadastrar</button>
    </form>
</div>

@stop