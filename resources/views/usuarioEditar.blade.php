@extends('templates.template')

@section('conteudo')
<h1 class="titulo-pg">Editar Usuario {{$userEdit->login}}</h1>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
    @endforeach
</div>
@endif
<form class="form" method="post" action="{{route('usuario.update', $userEdit->id)}}">
    
    <div class="form-group">
    <input type="text" name="login" placeholder="Login" class="form-control" value="{{$userEdit->login or old('login')}}">
    </div>
    <div class="form-group">
        <input type="text" name="senha" placeholder="Senha" class="form-control" value="{{$userEdit->senha or old('senha')}}">
    </div>
    <div class="form-group">
        <input type="text" name="email" placeholder="Email" class="form-control" value="{{$userEdit->email or old('email')}}">
    </div>
        
    
    
    {{method_field('PUT')}}
    {{csrf_field()}}
    <button class="btn btn-primary">Editar {{$userEdit->login}}</button>
</form>

@endsection

