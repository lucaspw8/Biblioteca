@extends('templates.template')

@section('conteudo')

<h1 class="titulo-pg">Lista de Cursos</h1>
<a href="{{route('curso.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span>Cadastrar</a>
<table class="table table-striped"> 
    <tr>
        <td><b>Nome</b></td>
        <td><b>Coordenador</b></td>
        
        <td><b>Ações</b></td>
    </tr>   
    @foreach($listaC as $lista)
    <tr>

        <td>{{$lista->nome}}</td>
        <td>{{$lista->coordenador}}</td>
        
        <td>
            
            <a href="{{route('curso.edit',$lista->id)}}" class="acao editar">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="{{route('curso.show',$lista->id)}}" class="acao deletar">
                <span class="glyphicon glyphicon-eye-open"></span>
            </a>
            
        </td>
    </tr>
    @endforeach 
     
</table>


@endsection