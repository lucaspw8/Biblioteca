@extends('templates.template')

@section('conteudo')
<h1 class="titulo-pg">Editar Curso</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form class="form" method="post" action="{{route('curso.update', $curso->id)}}">
    
    <div class="form-group">
    <input type="text" name="nome" placeholder="Nome" class="form-control" value="{{$curso->nome or old('nome')}}">
    </div>
    <div class="form-group">
        <input type="text" name="coordenador" placeholder="Coordenador" class="form-control" value="{{$curso->coordenador or old('coordenador')}}">
    </div>
    
    
    {{method_field('PUT')}}
    {{csrf_field()}}
    <button class="btn btn-primary">Editar Curso</button>
</form>

@endsection
