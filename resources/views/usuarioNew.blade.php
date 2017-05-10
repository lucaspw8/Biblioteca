@extends('templates.template')

@section('conteudo')
<h1 class="titulo-pg">Cadastrar Usuários</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form class="form" method="post" action="{{route('usuario.store')}}">
    <div class="form-group">
        <input type="text" name="login" placeholder="Login" class="form-control" value="{{old('login')}}">
    </div>
    <div class="form-group">
        <input type="text" name="senha" placeholder="Senha" class="form-control" value="{{old('senha')}}">
    </div>
    <div class="form-group">
        <input type="text" name="email" placeholder="Email" class="form-control" value="{{old('email')}}">
    </div>
    
    {{csrf_field()}}
    <button class="btn btn-primary">Cadastrar</button>
</form>
@endsection
