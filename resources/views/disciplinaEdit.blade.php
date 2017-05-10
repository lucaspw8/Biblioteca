@extends('templates.template')

@section('conteudo')
<h1 class="titulo-pg">Editar Livros</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form class="form" method="post" action="{{route('disciplina.update', $disciEdit->id)}}">
    
     <div class="form-group">
    
    <input type="text" name="nome" placeholder="Disciplina" class="form-control" value="{{$disciEdit->nome or old('nome')}}">
    </div>
    <div class="form-group">
        <select name="id_sem" class="form-control">
            
            <option>Selecionar Semestre</option>
            
            <option value="1" @if($disciEdit->id_sem == "1") selected @endif>  1 </option>
            <option value="2" @if($disciEdit->id_sem == "2") selected @endif>2</option>
            <option value="3" @if($disciEdit->id_sem == "3") selected @endif>3</option>
            <option value="4" @if($disciEdit->id_sem == "4") selected @endif>4</option>
            <option value="5" @if($disciEdit->id_sem == "5") selected @endif>5</option>
            <option value="6" @if($disciEdit->id_sem == "6") selected @endif>6</option>
            <option value="7" @if($disciEdit->id_sem == "7") selected @endif>7</option>
            <option value="8" @if($disciEdit->id_sem == "8") selected @endif>8</option>
            </select>
    </div>
    
    {{method_field('PUT')}}
    {{csrf_field()}}
    <button class="btn btn-primary">Editar Disciplina</button>
</form>

@endsection


