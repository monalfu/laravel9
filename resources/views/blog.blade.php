@extends('template')

@section('content')
    <h1>Listado</h1>

    @foreach ($posts as $post)
    <p>
        {{--  cambiar de array a objeto->propiedad --}}
        <strong>{{ $post->id }}</strong>
        <a href="{{ route('post', $post->slug) }}">
            {{ $post->title }}
        </a>
    </p>
    @endforeach

@endsection


