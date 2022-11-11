
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Simon dice - By parzibyte</title>
    <script src="{{asset('js/simon_d3.min.js')}}"></script>
    <script src="{{asset('js/simon_sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/simon_bootstrap.min.css')}}">
    <style>
        .boton {
            cursor: pointer;
        }

        body {
            padding-bottom: 70px;
            padding-top: 70px;
        }

        .btn-play{
            background: transparent;
            border: none;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" target="_blank" href="">Simon dice</a>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
            </ul>            
        </div>
    </nav>
<main class="container-fluid">
    <div class="row text-center">
        <div class="col-12">
            <h1>Simon dice</h1>
        </div>
        <div class="col-12 table-responsive">
            <button id="comenzar" class="btn btn-primary btn-lg">Comenzar juego</button>
            <br><br>
            
            <img class="speaker-logo" src="{{asset('img/speaker.png')}}" width="50" alt="Speaker icon">
            <button type="button" id="btn-speak" class="btn-play">
                <img class="play-logo" src="{{asset('img/play.png')}}" width="80" alt="Play logo">
            </button>
            <br><br>
            {{-- <button id="btn-speak" class="btn btn-info btn-lg">hablar</button> --}}
            <div id="contenedorJuego"></div>
            <br>
            <a href="/home"><button id="" class="btn btn-danger btn-lg">Regresar</button></a>

        </div>
    </div>
</main>
<footer class="px-2 py-2 fixed-bottom bg-primary">
        <span class="text-white">Simon dice game. Written by
            <a class="text-white" href="//parzibyte.me/blog">Parzibyte</a>
            &nbsp;|&nbsp;
        </span>
</footer>
<script src="{{asset('js/simon_game.js')}}"></script>
</body>
</html>