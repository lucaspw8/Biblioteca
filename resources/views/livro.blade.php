@extends('templates.template')

@section('conteudo')

<h1 class="titulo-pg">Lista de livros Cadastrados</h1>
<a href="{{route('livro.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span>Cadastrar</a>
<table class="table table-striped"> 
    <tr>    
        <td> <b>Titulo</b></td>
        <td><b>Autor</b></td>
        <td><b>Quantidade</b></td>
        <td><b>Disponibilidade</b></td>
        <td><b>Ações</b></td>
    </tr>   
    @foreach($listaLivro as $lista)
    <tr>

        <td>{{$lista->titulo}}</td>
        <td>{{$lista->autor}}</td>
        <td>{{$lista->qtd}}</td>
        <td>{{$lista->disponivel}}</td>
        <td>
            
            <a href="{{route('livro.edit',$lista->id)}}" class="acao editar">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="{{route('livro.show',$lista->id)}}" class="acao deletar">
                <span class="glyphicon glyphicon-eye-open"></span>
            </a>
            
        </td>
    </tr>
    @endforeach 
     
</table>

{{$listaLivro->links()}}

@endsection