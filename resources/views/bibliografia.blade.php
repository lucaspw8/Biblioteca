@extends('templates.template')

@section('conteudo')

 <form class="form" action="{{route('bibliografia.store')}}" method="post">
<div class="form-group">
        <select name="curso_id" class="form-control">
            
            <option>Selecionar Curso</option>
            @foreach($curso as $cur)
            <option value="{{$cur->id}}">{{$cur->nome}}</option>
            
            @endforeach
        </select>

    </div>
   
         <button class="btn btn-primary">Filtrar</button>
         {{csrf_field()}}
    </form>



<h1 class="titulo-pg">Bibliografia</h1>
<table class="table table-striped"> 
    <tr>
        <td><b>Curso</b></td>
        <td><b>Disciplina</b></td>
        <td><b>Semestre</b></td>
        <td><b>Titulo Livro</b></td>
        <td><b>Quantidade</b></td>
        <td><b>Disponibilidade</b></td>
        
       
    </tr>   
    @foreach($bibliografia as $lista)
    <tr>

        <td>{{$lista->curso}}</td>
        <td>{{$lista->disciplina}}</td>
        <td>{{$lista->semestre}}</td>
        <td>{{$lista->titulo}}</td>
        <td>{{$lista->qtd}}</td>
        <td>{{$lista->disponivel}}</td>
        
        
    </tr>
    @endforeach 
     
</table>
    
@endsection