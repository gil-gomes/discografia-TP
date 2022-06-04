@extends('layouts.app')

@section('title', 'Discografica Tião Carreiro e Pardinho')

@section('content')

    <section class="mx-auto w-100" id="album-index">

        @include('includes.search-album')

        @include('components.list-albums')

    </section>
@stop