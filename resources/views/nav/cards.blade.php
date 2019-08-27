@extends('nav.layout')

@section('title', 'Cards')

@section('style')
    <style>
        .card-img-top {
            width: 35rem;
            height: 11rem;
        }

        .picture {
            margin-top: -90px;
            border: 1px solid #ddd;
            background-color: #FDEDEC;
        }
    </style>
@endsection

@section('content')
    <div class="container text-center pt-5">
        <h1 class="display-4" style="font-family: Raleway;">They are seeing you</h1>
        <p class="display-2"><i class="fa fa-paw"></i> <i class="fa fa-paw"></i></p>
    </div>

    <!-- Cards -->
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="../img/back.jpg" class="card-img-top img-fluid" alt="...">
                <div class="text-center">
                    <img src="../img/omg.png" class="img-fluid picture img-thumbnail rounded-circle" height="120px"
                         width="140px">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer text-center">
                    <a><i class="fab fa-facebook-f fa-2x mx-1"></i></a>
                    <a><i class="fab fa-twitch fa-2x mx-1"></i></a>
                    <a><i class="fab fa-instagram fa-2x mx-1"></i></a>
                </div>
            </div>
            <div class="card">
                <img src="../img/back.jpg" class="card-img-top img-fluid" alt="...">
                <div class="text-center">
                    <img src="../img/angry.png" class="img-fluid picture img-thumbnail rounded-circle" height="120px"
                         width="140px">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                </div>
                <div class="card-footer text-center">
                    <a><i class="fas fa-mail-bulk fa-2x mx-1"></i></a>
                </div>
            </div>
            <div class="card">
                <img src="../img/back.jpg" class="card-img-top img-fluid" alt="...">
                <div class="text-center">
                    <img src="../img/fuck.png" class="img-fluid picture img-thumbnail rounded-circle" height="120px"
                         width="140px">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>
                <div class="card-footer text-center">
                    <a><i class="fab fa-twitter fa-2x mx-1"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards Fin -->
@endsection
