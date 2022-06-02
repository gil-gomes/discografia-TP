@extends('layouts.app')

@section('title', 'Cadastrar Álbum')

@section('content')

<section class="form-album mt-5 mb-3 mx-auto w-70">

    @include('includes.message')

    <form action="{{ route('album.store') }}" method="POST">
        @csrf
        <header class="text-center mb-5">
            <h2>Cadastro de Álbum</h2>
        </header>

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

        <button type="submit" class="btn btn-primary mb-3 w-100">Cadastrar</button>
    </form>
</section>

@stop