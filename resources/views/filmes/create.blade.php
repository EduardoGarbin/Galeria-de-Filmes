@extends('templates.base')
@section('title', 'Inserir Produto')
@section('h1', 'Inserir Produto')

@section('content')
<div class="row">
    <div class="col-4">

        <form method="post" action="{{ route('filme.create') }}" enctype='multipart/form-data'>
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value='{{old('nome')}}'>
                @error('nome')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descricao</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value='{{old('descricao')}}'>
                @error('descricao')
                    <span>{{$message}}</span>
                @enderror
            </div>
           


            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem">
                @error('imagem')
                    <span>{{$message}}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" value='{{old('genero')}}'>
                @error('genero')
                    <span>{{$message}}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="trailer" class="form-label">Link Trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer" value='{{old('trailer')}}'> 
                @error('trailer')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>

    </div>
</div>
@endsection