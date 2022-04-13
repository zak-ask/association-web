<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/92265a4cc3.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/notre_style.css') }}" rel="stylesheet"> -->

</head>

<body>
    <div class="top-header py-2">
        <div class="container text-center">
            <h1><i class="fa fa-duotone fa-seedling"></i></i><strong>Association</strong></h1>
        </div>
    </div>
    <!-- barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top bg-gradient">

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
                        <a class="nav-link" href="{{route('acceuil.index')}}#causes">Causes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contactez nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- hna n ajoutiw chi footer generale  -->
    <!-- FOOTER -->

    <footer class="footer bg-dark text-white text-center col-md-12" id="footer">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-uppercase mb-3"><i class="fa fa-duotone fa-seedling"></i>Association</h2>
                    <p>
                        Notre association fait beaucoup d'efforts pour aider les familles et les enfants réfugiés du
                        monde entier à traverser leurs difficultés, nous sommes bien connus et fiables, basés sur kénitra maroc,<br>
                        Avec votre hospitalité nous restons.
                    </p>

                </div>
                <div class="col-md-4">
                    <h3 class="text-uppercase mb-3"><i class="fa fa-regular fa-link"></i>  LIENS RAPIDES</h3>
                    <ul class="list-unstyled mb-0">
                        <li><a class="text-reset" href="{{route('acceuil.index')}}">Accueil</a></li>
                        <li><a class="text-reset" href="{{route('acceuil.index')}}">Causes</a></li>
                        <li><a class="text-reset" href="{{route('acceuil.create')}}">Donate</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-uppercase mb-3"><i class="fa fa-light fa-at"></i>  CONTACTEZ NOUS</h3>
                    <ul class="list-unstyled mb-0">
                        <li><i class="material-icons">Kénitra</i> Maamora rue 12 résidence Asmaa</li>
                        <li><i class="material-icons">email :</i> contact@lravel-project.test</li>
                        <li><i class="material-icons">téléphone :</i> +212999999999</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>Copyright @ 2022 | Touts droits résérvés </p>
            </div>
        </div>
    </footer>

</body>

</html>