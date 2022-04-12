@extends('template')

@section('titre', 'Association - Accueil')

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/pic3.jpg')}}" alt="">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>La vraie charité, celle qui vient du coeur, ne se demande jamais dans quelles mains va tomber son aumône.</h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="{{route('acceuil.create')}}">Donate now</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/pic4.jpg')}}" alt="" srcset="">
        <div class="container">
        <div class="carousel-caption text-start">
            <h1>Ouvrez votre cœur à ceux qui en ont besoin</h1>
          
            <p><a class="btn btn-lg btn-primary" href="{{route('acceuil.create')}}">Donate</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="{{asset('img/image2.jpg')}}" alt="" srcset="">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Donner un coup de main pour apporter un sourire</h1>
            <p><a class="btn btn-lg btn-primary" href="{{route('acceuil.create')}}">Donate</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="{{asset('img/elon-musk.jpg')}}" class="rounded-circle" width="240" height="240" alt="">
        <h2>President</h2>
        <p><strong class="italic"> Our mission is to help people all over the world, regardless of who they are, their colors or their religions,</strong></p>
        <p><a class="btn btn-primary active" href="https://en.wikipedia.org/wiki/Elon_Musk" target="_blank">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

  <div id="causes">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Aider les réfugiés ukrainiens. <span class="text-muted">qui sont touchés par la guerre.</span></h2>
        <p class="lead">des millions d'ukrainiens ont quitté leur foyer et ont perdu la vie à cause de la guerre russo-ukrainienne. aider à leur faire un don afin que nous puissions les aider à traverser cette tragédie.</p>
      </div>
      <div class="col-md-5">
      <img src="{{asset('img/Ukrainiankids.jpg')}}" alt="" srcset="">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">La population yéménite souffre d'une <span class="text-muted">extrême pauvreté et de la faim</span></h2>
        <p class="lead">les yamaniens meurent à cause du manque de nourriture et d'eau, faites un don pour que nous puissions sauver des vies d'enfants.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{asset('img/yemen.png')}}" alt="" srcset="">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Les catastrophes naturelles <span class="text-muted">détruisent</span> les philippines</h2>
        <p class="lead">beaucoup de gens deviennent sans abri en quelques heures aux philippines à cause des typhons et des inondations, aidez à atténuer ces catastrophes en faisant un don</p>
      </div>
      <div class="col-md-5">
      <img src="{{asset('img/philipine.jpg')}}" alt="" srcset="">
      </div>
    </div>

    <hr class="featurette-divider">
    </div class="m-5" >
    

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection