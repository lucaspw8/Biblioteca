
@extends('templates.template')

@section('conteudo')

  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
		<div class="item active">
          <img src="{{url('assets/site/img/biblioteca02.png')}}" alt="slide02" style="width:100%;">
      </div>
      <div class="item">
          <img src="{{url('assets/site/img/biblioteca01.jpg')}}" alt="slide01" style="width:100%;">
        <div class="carousel-caption">
          <h1>Bem vindo ao site da biblioteca</h1>
          <p>Aqui você pode verificar a bibliografia dos cursos</p>
        </div>
      </div>
	<div class="item">
          <img src="{{url('assets/site/img/biblioteca03.jpg')}}" alt="slide03" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection	 

