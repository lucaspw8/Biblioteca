<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
    </head>
    
    <body>
        <h1>Lista de Cursos</h1>
        </br>
        
       
        @foreach($listaC as $curso)
        <tr>
            <td>{{$curso->nome}}</td>
        </tr>
        @endforeach 
    </body>
    
</html>