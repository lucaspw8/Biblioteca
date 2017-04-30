@extends('templates.template')

@section('conteudo')
<h1>Cadastrar Cursos</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form class="form" method="post" action="{{route('curso.store')}}">
    <div class="form-group">
    <input type="text" name="nome" placeholder="Nome" class="form-control" value="{{old('nome')}}">
    </div>
    <div class="form-group">
        <input type="text" name="coordenador" placeholder="Coordenador" class="form-control" value="{{old('coordenador')}}">
    </div>
    
    {{csrf_field()}}
    <button class="btn btn-primary">Cadastrar</button>
</form>
@endsection
