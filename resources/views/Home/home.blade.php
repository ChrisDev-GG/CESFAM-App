@extends('shared')

@section('navigator')
    <li><a href="#" class="nav-link px-2 link-secondary">Inicio</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">Actividades</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">Información</a></li>
@endsection

@section('main-content')
    <div class="container">
        <div class="row center-play">
        <h2>Reproducir</h2>
            <input type="image" class="play-logo" src="{{asset('img/play.png')}}" alt="Play image">
        </div>
    </div>
    <div class="container">
        <div class="row center-cards">
            <div class="card col-3 spacing">
            <img class="card-img-top" src="{{asset('img/game1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title txt-color">Game 1</h5>
                    <p class="card-text txt-color"></p>
                    <a href="#" class="btn btn-primary">Jugar</a>
                </div>
            </div>
            <div class="card col-3 spacing">
            <img class="card-img-top" src="{{asset('img/game1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title txt-color">Game 2</h5>
                    <p class="card-text txt-color"></p>
                    <a href="#" class="btn btn-primary">Jugar</a>
                </div>
            </div>
            <div class="card col-3 spacing">
            <img class="card-img-top" src="{{asset('img/game1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title txt-color">Game 3</h5>
                    <p class="card-text txt-color"></p>
                    <a href="#" class="btn btn-primary">Jugar</a>
                </div>
          </div>
        </div>
    </div>

@endsection