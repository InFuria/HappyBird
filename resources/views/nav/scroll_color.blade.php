@extends('nav.layout')

@section('title', 'Scroll')

@section('style')
    <style>
        .background-1 {
            height: 400px;
            background: darkred;
        }

        .background-2 {
            height: 400px;
            background: sandybrown;
        }

        .background-3 {
            height: 400px;
            background: coral;
        }

        #menu {
            transition: all 1.5s ease-in;
        }
    </style>
@endsection

@section('content')
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="menu" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
            </div>
        </div>
    </nav>
    <!-- Nav Fin -->

    <!-- Container -->
    <div class="container background-1"></div>
    <div class="container background-2"></div>
    <div class="container background-3"></div>
    <!-- Fin Container -->
@endsection

@section('js')
    <script>
        $(window).scroll(function () {
            if ($("#menu").offset().top > 56) {
                $("#menu").addClass("bg-dark navbar-dark");
            } else {
                $("#menu").removeClass("bg-dark navbar-dark");
            }
        });
    </script>
@endsection
