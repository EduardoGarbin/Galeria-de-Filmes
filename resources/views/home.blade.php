@extends('templates.base')
@section('title', 'Home')
@section('h1', 'Bem-vindos à página')

@section('content')
<div class="d-flex p-2" style='gap: 1em'>
@foreach ($filmes as $filme)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$filme->image_url}}">
        <div class="card-body">
        <h5 class="card-title">{{$filme->nome}}</h5>
        <p class="card-text">{{$filme->genero}}</p>
        <a href="{{ route('filme.show', ['id' => $filme->id]) }}" class="btn btn-primary">Expandir</a>
        </div>
    </div>
@endforeach
</div>
@endsection