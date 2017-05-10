@extends('templates.template')

@section('conteudo')
<h1 ><b>Descrição completa de {{$disc->nome}}</b></h1>
<p><b>Nome:</b> {{$disc->nome}}</p>
<p><b>Semestre:</b> {{$disc->id_sem}}</p>
<hr>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif


<form method="POST" name="apagarDisc" action= {{route('disciplina.destroy',$disc->id)}}>
    {{method_field('DELETE')}}
    {{csrf_field()}}
                      
    <input class="btn btn-danger" type="submit" onclick=" return confirm('Tem certeza que quer Apagar {{$disc->nome}}?');" value="Deletar {{$disc->nome}}">
    </form>

@endsection




