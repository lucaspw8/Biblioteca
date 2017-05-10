@extends('templates.template')

@section('conteudo')

<h1 class="titulo-pg">Lista de Usuarios</h1>
<a href="{{route('usuario.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span>Cadastrar</a>
<table class="table table-striped"> 
    <tr>
        <td> <b>Login</b></td>
        <td><b>Senha</b></td>
        <td><b>Email</b></td>
        
        <td><b>Ações</b></td>
    </tr>   
    @foreach($listaUser as $User)
    <tr>

        <td>{{$User->login}}</td>
        <td>{{$User->senha}}</td>
        <td>{{$User->email}}</td>
        
        <td>
            
            <a href="{{route('usuario.edit',$User->id)}}" class="acao editar">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="{{route('usuario.show',$User->id)}}" class="acao deletar">
                <span class="glyphicon glyphicon-eye-open"></span>
            </a>
        </td>
    </tr>
    @endforeach 
     
</table>

{{$listaUser->links()}}

@endsection