<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="sortcut icon" href="{{url('assets/site/img/Books-icon.png')}}" type="image/png" />
        <title>{{$title or 'Biblioteca'}}</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('assets/site/css/estilo.css')}}">
        <link rel="stylesheet" href="{{url('assets/site/css/style.css')}}">
        <script src="{{url('assets/site/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/site/js/bootstrap.min.js')}}"></script> 
         
        <link rel="stylesheet" href="{{url('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    </head>

    <body>

<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
        <div class="form-login">
         
            
                <h4>Bem vindo.</h4>
                @if(isset($erro))
                <div class="alert alert-danger">

                    <p>{{$erro}}</p>

                </div>
                @endif
            <form action="{{route('login.teste')}}" method="POST">
            <input type="text" name="login" class="form-control input-sm chat-input" placeholder="Login" />
            </br>
            <input type="password" name="senha" class="form-control input-sm chat-input" placeholder="Senha" />
            </br>
            <div class="wrapper">
                <input class="btn btn-primary btn-md " type="submit" name="ok" value="Login">
            </div>
             {{csrf_field()}}
            </form>
           
            </div>
        
        </div>
    </div>
</div>
 
</body>

</html>
