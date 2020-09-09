@extends('layout')

@section('cabecalho')
    Adicionar Serie
@endsection

@section('conteudo')
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection