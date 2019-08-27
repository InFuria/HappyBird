<!doctype html>
<html lang="es">
<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Curso de Bootstrap Gratis">
    <meta name="keywords" content="HTML, CSS, XML, Javascript">
    <meta name="author" content="Eliana Gimenez">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/app.css" type="text/css">

    <style>
        .slider{
            background: url("../img/rainbow.png");
            background-size: cover;
            background-position: center;
            height: 400px;
        }
    </style>
</head>
<body>

<!-- Menu -->
<div class="container-fluid bg-dark sticky-top text-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container shadow-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../img/bootstrap.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Bootstrap
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link mr-md-4" href="#">Pricing</a>
                <div><a href="#" class="btn btn-danger">Contacto</a></div>
            </div>
        </div>
    </nav>
</div>
<!-- Fin Menu -->

@yield('content')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../js/app.js"></script>
</body>
</html>
