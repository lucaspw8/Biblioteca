<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>{{$title or 'Biblioteca'}}</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('assets/site/css/estilo.css')}}">
        <link rel="stylesheet" href="{{url('assets/site/css/style.css')}}">
         <div class="menu">
             <a class="menuu" href="{{route('livro.index')}}"><div class="sub">Livros</div></a>
		<a class="menuu" href="#"><div class="sub">Disciplinas</div></a>
		<a class="menuu" href="{{route('curso.index')}}"><div class="sub">Cursos</div></a>
	</div>
        <link rel="stylesheet" href="{{url('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    </head>

    <body>
       
        <div class="container">
            
        @yield('conteudo')
        </div>
    </body>

</html>