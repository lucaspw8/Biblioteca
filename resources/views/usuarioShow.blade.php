@extends('templates.template')

@section('conteudo')
<h1 ><b>Descrição completa do usuário {{$user->login}}</b></h1>
<p><b>Login:</b> {{$user->login}}</p>
<p><b>Senha:</b> {{$user->senha}}</p>
<p><b>Email:</b> {{$user->email}}</p>

<hr>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form method="POST" action={{route('usuario.destroy',$user->id)}}>
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      <input class="btn btn-danger"type="submit" onclick="return confirm('Tem certeza que quer Apagar {{$user->login}}?');" value="Deletar {{$user->login}}">
                    </form>

@endsection



