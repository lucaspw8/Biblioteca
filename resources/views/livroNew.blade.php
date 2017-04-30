@extends('templates.template')

@section('conteudo')
<h1 class="titulo-pg">Cadastrar Livros</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form class="form" method="post" action="{{route('livro.store')}}">
    <div class="form-group">
        <b>Titulo:</b><input type="text" name="titulo" placeholder="Titulo" class="form-control" value="{{old('titulo')}}">
    </div>
    <div class="form-group">
        <input type="text" name="autor" placeholder="Autor" class="form-control" value="{{old('autor')}}">
    </div>
    <div class="form-group">
        <input type="text" name="qtd" placeholder="Quantidade" class="form-control" value="{{old('qtd')}}">
    </div>
    <div class="form-group">
        <select name="disponivel" class="form-control">
            <option>Disponibilidade</option>
            <option value="Fisico">Fisico</option>
            <option value="Virtual">Virtual</option>
            <option value="Não Disponivel">Não Disponivel</option>

        </select>
    </div>
    {{csrf_field()}}
    <button class="btn btn-primary">Cadastrar</button>
</form>
@endsection
