@extends('layout')

@section('cabecalho')
    Adicionar Serie
@endsection

@section('conteudo')
    @include('erros', compact('errors'))
    
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col col-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col col-2">
                <label for="qtd_temporadas">#Temporadas</label>
                <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
            </div>
            <div class="col col-2">
                <label for="ep_por_temporada">#Episodios</label>
                <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection