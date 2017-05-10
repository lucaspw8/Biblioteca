@extends('templates.template')

@section('conteudo')

<h1 class="titulo-pg">Lista de Disciplinas</h1>
<a href="{{route('disciplina.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span>Cadastrar</a>
<table class="table table-striped"> 
    <tr>
        <td> <b>Curso</b></td>
        <td><b>Disciplina</b></td>
        <td><b>Semestre</b></td>
        
        <td><b>Ações</b></td>
    </tr>   
    @foreach($listaDisciplina as $lista)
    <tr>

        <td>{{$lista->nome_curso}}</td>
        <td>{{$lista->nome}}</td>
        <td>{{$lista->id_sem}}</td>
        
        <td>
            
            <a href="{{route('disciplina.edit',$lista->id)}}" class="acao editar">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="{{route('disciplina.show',$lista->id)}}" class="acao deletar">
                <span class="glyphicon glyphicon-eye-open"></span>
            </a>
            <a href="{{route('disc_livro',$lista->id)}}" class="acao deletar">
                <span class="glyphicon glyphicon-transfer"></span>
            </a>
        </td>
    </tr>
    @endforeach 
     
</table>

{{$listaDisciplina->links()}}

@endsection
