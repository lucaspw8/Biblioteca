@extends('templates.template')

@section('conteudo')

    <form class="form" method="post" action="{{route('disc_livro.insert')}}">
       <div class="form form-group">
        <select name="id_livro" class="form-control">
        <option>Selecione um Livro</option>
         @foreach($livro as $liv)
         <option value="{{$liv->id}}">{{$liv->titulo}}</option>
         @endforeach
        </select>
           <input name="id" type="hidden" value="{{$id}}">
            
        </div>
        <button class="btn btn-primary">Associar </button>
        {{csrf_field()}}
    </form>
    
@endsection