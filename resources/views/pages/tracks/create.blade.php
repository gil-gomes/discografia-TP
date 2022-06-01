@extends('layouts.app')

@section('title', 'Cadastrar Álbum')

@section('content')

<div class="form-create-track mx-auto w-70">

    @include('includes.message')

    <form id="form-cad-track" action="{{ route('album.track.store', $album_id) }}" method="POST">
        @csrf
        @include('includes.form-track')
        <button form="form-cad-track" type="submit" class="btn btn-primary w-100">
            Salvar
        </button>
    </form>

</div>
@stop