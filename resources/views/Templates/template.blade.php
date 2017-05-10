<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="sortcut icon" href="{{url('assets/site/img/Books-icon.png')}}" type="image/png" />
        <title>{{$title or 'Biblioteca'}}</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('assets/site/css/estilo.css')}}">
        
        
        <script src="{{url('assets/site/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/site/js/bootstrap.min.js')}}"></script> 
         
        <link rel="stylesheet" href="{{url('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    </head>

    <body>
      <nav role="navigation" class="navbar navbar-default">
        
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">                    
                    <span class="sr-only">Navegação Responsiva</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                
                </button>                
                <a href="#" class="navbar-brand">Biblioteca</a>                
            </div>
             
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li @if($menu=="home") class="active" @endif><a href="#">Home</a></li>
                    <li @if($menu=="livro") class="active" @endif><a href="{{route('livro.index')}}">Livros</a></li>
                    <li @if($menu=="curso") class="active" @endif><a href="{{route('curso.index')}}">Cursos</a></li>
                    <li @if($menu=="usuario") class="active" @endif><a href="{{route('usuario.index')}}">Usuários</a></li>
                    <li @if($menu=="disciplina") class="active" @endif><a href="{{route('disciplina.index')}}">Disciplinas</a></li> 
                    <li @if($menu=="bibliografia") class="active" @endif><a href="{{route('disciplina.index')}}">Bibliografia</a></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login">Login</a></li>
                </ul>
            </div>
            
        </nav>
        <div class="container">
            
        @yield('conteudo')
        </div>
       
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/site/js/bootstrap.min.js"></script>
    </body>

</html>