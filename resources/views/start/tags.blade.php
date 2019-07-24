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

        body{
            position: relative;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar-menu">
<!-- SLIDER -->
<section class="container-fluid slider d-flex justify-content-center align-items-center">
    <h1 class="display-4 rounded-pill p-2">Bootstrap 4</h1>
</section>
<!-- End Slider -->

<!-- NAV -->
<nav class="navbar navbar-dark bg-dark shadow-sm navbar-expand-sm {{--sticky-top--}}">
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
            <a class="nav-item nav-link active" href="/index">Inicio</a>
            <a class="nav-item nav-link" href="/about">Nosotros</a>
            <a class="nav-item nav-link" href="/services">Servicios</a>
            <a class="nav-item nav-link" href="/contact">Contacto</a>
            <a class="nav-item nav-link" href="/tags">Tags</a>
        </div>

        <div class="d-flex flex-row justify-content-center">
            <a href="#" class="btn btn-outline-primary mr-2">Facebook</a>
            <a href="#" class="btn btn-outline-danger">Youtube </a>
        </div>
    </div>
</nav>
<!-- End Navs-->


<nav id="navbar-menu" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav nav-pills mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#section1">Seccion 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section2">Seccion 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section3">Seccion 3</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container">
    <div id="section1" class="pt-5">
        <h1 class="display-4">Seccion 1</h1>
        <img src="../img/bloom.jpg" alt="" class="img-fluid">
    </div>
    <div id="section2" class="pt-5">
        <h1 class="display-4">Seccion 2</h1>
        <img src="../img/fearless.jpg" alt="" class="img-fluid">
    </div>
    <div id="section3" class="pt-5">
        <h1 class="display-4">Seccion 3</h1>
        <img src="../img/steps.jpg" alt="" class="img-fluid">
    </div>
</div>

<div class="separator"></div>

<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="../js/app.js"></script>
</html>
