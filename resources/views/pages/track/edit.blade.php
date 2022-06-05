@extends('layouts.app')

@section('title', 'Atualizar Faixa')

@section('content')

<section class="form-edit-track mt-5 mb-3 mx-auto w-70">

    @include('includes.message')
    
    <header class="text-center mb-5">
        <h2>Editar Faixa {{ $track->title }}</h2>
    </header>

    <form action="{{ route('album.track.update', $track->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        @include('includes.forms.track.edit')
    
        <button  type="submit" class="btn btn-primary mb-3 w-100">
            Atualizar
        </button>
    
    </form>
</section>

@stop