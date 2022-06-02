@extends('layouts.app')

@section('title', 'Cadastrar Álbum')

@section('content')

<section class="form-create-track mt-5 mb-3 mx-auto w-70">
    <header class="text-center mb-5">
        <h2>Cadastro de Faixa Musical</h2>
    </header>

    @include('includes.message')

    <form id="form-cad-track" action="{{ route('album.track.store', $album_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('includes.forms.form-track')
        <button form="form-cad-track" type="submit" class="btn btn-primary w-100">
            Salvar
        </button>
    </form>

</section>
@stop