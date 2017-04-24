<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>{{$title or 'Biblioteca'}}</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('assets/site/css/estilo.css')}}">
    </head>

    <body>
        <div class="container">
        @yield('conteudo')
        </div>
    </body>

</html>