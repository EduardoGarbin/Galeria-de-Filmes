@extends('templates.base')
@section('title', 'Visualizar produto')

@section('content')
<h1>{{ $filme->nome }}</h1>
<img src="{{ $filme->image_url }}" alt="" height="500">

<h3>{{ $filme->descricao }}</h3>
<p>Genero: {{ $filme->genero }}</p>
<a href="{{ $filme->trailer }}">Trailer</a>
@endsection