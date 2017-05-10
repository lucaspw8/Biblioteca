@extends('templates.template')

@section('conteudo')
<h1>Cadastrar Disciplinas</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form class="form" method="post" action="{{route('disciplina.store')}}">
    
    <div class="form-group">
    <input type="text" name="nome" placeholder="Disciplina" class="form-control" value="{{old('nome')}}">
    </div>
    <div class="form-group">
        <select name="id_sem" class="form-control">
            
            <option>Selecionar Semestre</option>
            
            <option value="1">1 </option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            </select>
    </div>
    <div class="form-group">
        <select name="curso_id" class="form-control">
            
            <option>Selecionar Curso</option>
            @foreach($curso as $cur)
            <option value="{{$cur->id}}">{{$cur->nome}}</option>
            
            @endforeach
        </select>
    </div>
    
    {{csrf_field()}}
    <button class="btn btn-primary">Cadastrar</button>
</form>
@endsection
