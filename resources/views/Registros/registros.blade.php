@extends('shared')

@section('navigator')

@endsection

@section('main-content')
    <div height="30">
        
    </div>
    <div class="container">
        <div class="row center-cards img-game">
            <div class="card col-3 spacing">
            <img class="card-img-top" src="{{asset('img/memorama.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title txt-color">Registros</h5>
                    <p class="card-text txt-color">Revisar los registros del juego "Memorama".</p>
                    <a href="/registros/memorama" class="btn btn-primary btn-game"><h4 class="btn-text">Visitar</h4></a>
                </div>
            </div>

            <div class="card col-3 spacing">
            <img class="card-img-top img-game simon" src="{{asset('img/simon-dice.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title txt-color">Registros</h5>
                    <p class="card-text txt-color">Revisar los registros del juego "Simon dice".</p>
                    <a href="/registros/simon" class="btn btn-primary btn-game"><h4 class="btn-text">Visitar</h3></a>
                </div>
            </div>

            <div class="card col-3 spacing img-game">
                <img class="card-img-top topo" src="{{asset('img/topo.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title txt-color">Registros</h5>
                        <p class="card-text txt-color">Revisar los registros del juego "Golpea al topo"</p>
                        <a href="/registros/topo" class="btn btn-primary btn-game"><h4 class="btn-text">Visitar</h3></a>
                    </div>
                </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('js/textToSpeech.js')}}"></script>
@endsection