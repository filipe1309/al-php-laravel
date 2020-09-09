@extends('layout')

@section('cabecalho')
    Series
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <br>
    
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie->nome }} 
            <form action="/series/{{ $serie->id }}" method="post" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->nome) }}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Excluir</button>
                </form>
        @endforeach
    </ul>
@endsection
