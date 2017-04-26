@extends('templates.template')

@section('conteudo')
<h1 ><b>Descrição completa de {{$livro->titulo}}</b></h1>
<p><b>Titulo:</b> {{$livro->titulo}}</p>
<p><b>Autor:</b> {{$livro->autor}}</p>
<p><b>Quantidade:</b> {{$livro->qtd}}</p>
<p><b>Disponibilidade:</b> {{$livro->disponivel}}</p>
<hr>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form method="POST" action={{route('livro.destroy',$livro->id)}}>
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      <input class="btn btn-danger"type="submit" value="Deletar {{$livro->titulo}}">
                    </form>

@endsection


