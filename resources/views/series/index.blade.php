@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
<a href="/series/create" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="form-group">
        @foreach($series as $serie)      
            <li class="list-group-item"><?= $serie; ?></li>
        @endforeach
    </ul>
@endsection