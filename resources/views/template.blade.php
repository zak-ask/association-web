<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notre_style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('acceuil.index')}}">Association</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('acceuil.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('acceuil.create')}}">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

<!-- hna n ajoutiw chi footer generale  -->
<!-- FOOTER -->

<footer class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">
                            <h2>Association</h2>
                            <p>
                                Notre association fait beaucoup d'efforts pour aider les familles et les enfants réfugiés du 
                                monde entier à traverser leurs difficultés, nous sommes bien connus et fiables, basés sur kénitra maroc,<br>
                                Avec votre hospitalité nous restons.
                            </p>
                            <hr>
                            <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-3">
                                <div class="footer-text two">
                                    <h3>LIENS RAPIDES</h3>
                                    <ul>
                                        <li><a href="http://lravel-project.test/acceuil">Accueil</a></li>
                                        <li><a href="http://lravel-project.test/acceuil#causes">Causes</a></li>
                                        <li><a href="{{route('acceuil.create')}}">Donate</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-text one">
                                    <h3>CONTACTEZ NOUS</h3>
                                    <ul>
                                        <li><i class="material-icons">Kénitra </i> Maamora rue 12 résidence Asmaa</li>
                                        <li><i class="material-icons">email</i>contact@lravel-project.test</li>
                                        <li><i class="material-icons">téléphone</i>+212999999999</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer_bottom">
                <p>Copyright @ 2022 | Touts droits résérvés </p>
         </div>
    </div>

</body>

</html>