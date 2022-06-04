@extends('layouts.app')

@section('title', 'Cadastrar Álbum')

@section('content')

<section class="form-edit-album mt-5 mb-3 mx-auto w-70">

    @include('includes.message')

    <form action="{{route('album.update', $album->id)}}" method="POST">
        @method('PUT')
        @csrf

        <header class="text-center mb-5">
            <h2>Editar Álbum {{ $album->name }}</h2>
        </header>

        @include('includes.forms.album.edit')

        <button type="submit" class="btn btn-primary mb-3 w-100">Atualizar</button>

    </form>
</section>

@stop