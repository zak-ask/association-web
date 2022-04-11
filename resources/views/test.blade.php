<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
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
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="{{asset('img/pic3.jpg')}}" alt="">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>

            <div class="item">
                <img src="{{asset('img/pic3.jpg')}}" alt="">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
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
    <div class="container col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Donation</div>
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="form-label" for="prenom">Prénom</label>
                        <input type="text" id="prenom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nom">Nom</label>
                        <input type="text" id="nom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="email">l'adresse email</label>
                        <input type="email" class="form-control" id="email" placeholder="nom@exemple.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Selectionner votre cause</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>La guerre ukrainienne</option>
                            <option>La faim au Yémen</option>
                            <option>Catastrophes naturelles en asie</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">100 DH</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">500 DH</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">1000 DH</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">10,000 DH</label>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Donate">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container col-md-12">
        <h2>Panel Heading</h2>
        <div class="panel panel-default">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">Panel Content</div>
        </div>
    </div>
</body>

</html>