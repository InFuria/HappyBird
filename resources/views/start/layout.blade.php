<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/app.css" type="text/css">
    <title>@yield('title')</title>

    <style>
        .slider {
            background: url("../img/autumn.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .rounded-pill {
            background: sandybrown;
            opacity: 0.8;
        }

        .separator{
            height: 30rem;
        }
    </style>
</head>

<body>
<!-- SLIDER -->
<section class="container-fluid slider d-flex justify-content-center align-items-center">
    <h1 class="display-4 rounded-pill p-2">Bootstrap 4</h1>
</section>
<!-- End Slider -->

<!-- NAV -->
<nav class="navbar navbar-dark bg-dark shadow-sm navbar-expand-sm sticky-top">
    <!-- logo -->
    <a class="navbar-brand" href="/index">
        <img src="../img/bootstrap.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap
    </a>

    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#title-collapse"
            aria-controls="title-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- menu -->
    <div class="collapse navbar-collapse" id="title-collapse">
        <div class="navbar-nav mr-auto ml-auto text-center">
            <a class="nav-item nav-link active" href="{{ route('start.index') }}">Inicio</a>
            <a class="nav-item nav-link" href="{{ route('start.about') }}">Nosotros</a>
            <a class="nav-item nav-link" href="{{ route('start.services') }}">Servicios</a>
            <a class="nav-item nav-link" href="{{ route('start.contact') }}">Contacto</a>
            <a class="nav-item nav-link" href="{{ route('start.tags') }}">Tags</a>
        </div>

        <div class="d-flex flex-row justify-content-center">
            <a href="#" class="btn btn-outline-primary mr-2">Facebook</a>
            <a href="#" class="btn btn-outline-danger">Youtube </a>
        </div>
    </div>
</nav>
<!-- End Navs-->

@yield('content')
<div class="separator"></div>

<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../js/app.js"></script>
</html>
