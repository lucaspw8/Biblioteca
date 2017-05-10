@extends('templates.template')

@section('conteudo')
<h1 ><b>Descrição completa de {{$curso->nome}}</b></h1>
<p><b>Nome:</b> {{$curso->nome}}</p>
<p><b>Coordenador:</b> {{$curso->coordenador}}</p>
<hr>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif


<form method="POST" name="apagarCurso" action= {{route('curso.destroy',$curso->id)}}>
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      
                      <input class="btn btn-danger" type="submit" onclick=" return confirm('Tem certeza que quer Apagar {{$curso->nome}}?');" value="Deletar {{$curso->nome}}">
                    </form>

@endsection




