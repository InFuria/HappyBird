@extends('nav.layout')

@section('title', 'Testimonios')

@section('style')
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }

        @media (min-width: 992px) {
            .miniaturas {
                position: relative;
                margin-top: -50px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="tab-content">
            <!-- Elemento -->
            <div class="tab-pane active" id="element-1" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img src="../img/fork.jpg" alt="" class="img-fluid" width="250px" height="250px">
                    </div>
                    <div class="col-8 mb-4">
                        <h4 class="lead">Lorem ipsum dolor sit amet.</h4>
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur delectus, ea
                            ex iure labore laudantium nobis provident sequi soluta!</p>
                    </div>
                </div>
            </div>
            <!-- Fin elemento -->

            <!-- Elemento -->
            <div class="tab-pane" id="element-2" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img src="../img/fuck.png" alt="" class="img-fluid" width="250px" height="250px">
                    </div>
                    <div class="col-8 mb-4">
                        <h4 class="lead">Lorem ipsum dolor sit amet.</h4>
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur delectus, ea
                            ex iure labore laudantium nobis provident sequi soluta!</p>
                    </div>
                </div>
            </div>
            <!-- Fin elemento -->

            <!-- Elemento -->
            <div class="tab-pane" id="element-3" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img src="../img/lolipop.png" alt="" class="img-fluid" width="250px" height="250px">
                    </div>
                    <div class="col-8 mb-4">
                        <h4 class="lead">Lorem ipsum dolor sit amet.</h4>
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur delectus, ea
                            ex iure labore laudantium nobis provident sequi soluta!</p>
                    </div>
                </div>
            </div>
            <!-- Fin elemento -->
        </div>

        <!-- miniaturas -->
        <div class="row miniaturas">
            <div class="offset-lg-4 col-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#element-1" role="tab"
                           aria-controls="home" aria-selected="true">
                            <img src="../img/fork.jpg" class="img-fluid" alt="" height="125px" width="125px">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#element-2" role="tab"
                           aria-controls="profile" aria-selected="false">
                            <img src="../img/fuck.png" class="img-fluid" alt="" height="125px" width="125px">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#element-3" role="tab"
                           aria-controls="messages" aria-selected="false">
                            <img src="../img/lolipop.png" class="img-fluid" alt="" height="125px" width="125px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Fin miniaturas -->
    </div>
@endsection
