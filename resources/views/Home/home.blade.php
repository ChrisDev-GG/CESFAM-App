@extends('shared')

@section('navigator')
<h2 class="title-cesfam">CESFAM</h2>
@endsection

@section('main-content')
    <div class="container">
        <div class="center-play">
            <img class="speaker-logo" src="{{asset('img/speaker.png')}}" alt="Speaker icon">
            <button type="button" id="play-instructions" class="btn-play">
                <img class="play-logo" src="{{asset('img/play.png')}}" alt="Play logo">
            </button>

        </div>
    </div>
    <div class="container">
        <div class="row center-cards">
            <div class="card col-3 spacing">
            <img class="card-img-top" src="{{asset('img/game1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title txt-color">Game 1</h5>
                    <p class="card-text txt-color"></p>
                    <a href="/ddcolorsgame" class="btn btn-primary btn-game"><h3 class="btn-text">Jugar</h3></a>
                </div>
            </div>
            <div class="card col-3 spacing">
            <img class="card-img-top" src="{{asset('img/game1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title txt-color">Game 2</h5>
                    <p class="card-text txt-color"></p>
                    <a href="/cardgame" class="btn btn-primary btn-game"><h3 class="btn-text">Jugar</h3></a>
                </div>
            </div>
            <div class="card col-3 spacing">
            <img class="card-img-top" src="{{asset('img/game1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title txt-color">Game 3</h5>
                    <p class="card-text txt-color"></p>
                    <a href="#" class="btn btn-primary btn-game"><h3 class="btn-text">Jugar</h3></a>
                </div>
          </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('js/textToSpeech.js')}}"></script>
@endsection