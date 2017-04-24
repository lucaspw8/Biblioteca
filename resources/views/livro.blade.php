@extends('templates.template')

@section('conteudo')

<h1 class="titulo-pg">Lista de livros</h1>
<a href="{{route('livro.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span>Cadastrar</a>
<table class="table table-striped"> 
    <tr>
        <td>Titulo</td>
        <td>Autor</td>
        <td>Quantidade</td>
        <td>Disponibilidade</td>
        <td>Ações</td>
    </tr>   
    @foreach($listaLivro as $lista)
    <tr>

        <td>{{$lista->titulo}}</td>
        <td>{{$lista->autor}}</td>
        <td>{{$lista->qtd}}</td>
        <td>{{$lista->disponivel}}</td>
        <td>
            
            <a href="" class="acao editar">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="" class="acao deletar">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </td>
    </tr>
    @endforeach 
</table>


@endsection