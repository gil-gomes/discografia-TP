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

        @include('includes.forms.album.create')

        <button type="submit" class="btn btn-primary mb-3 w-100">Cadastrar</button>
    </form>
</section>

@stop