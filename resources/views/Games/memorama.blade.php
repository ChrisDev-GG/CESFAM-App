<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Memorama</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/memorama_sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/memorama.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body> 

    

    <header class="header">

        <a href="/home"><img src="{{asset('img/flecha.png')}}" alt="" width="100px" height="100px"></a>

    </header>


    <div class="count">
        Puntaje: <span id = "puntajehtml">0</span> &nbsp;
		Conteo : <span id = "conteohtml">0</span>
        </div>
        <div>
    </div>
    <div class="sonido">
        <p>Bienvenido al Memorama, En este juego tendras que encontrar los pares de imagenes, tienes 28 intentos para completar el juego, sino pierdes, buena suerte!</p>
        <button id="btn-speak"> <img src="../img/sonido1.png" alt="" width="100px" height="100px"> </button>
    </div>

    <div id="tablero">
    </div>

    <br>

    <div class="nuevo-juego" onclick="location.reload()">
        Nuevo Juego
    </div>

    <!-- JS -->
    <!-- parte lógica -->
    <script src="{{asset('js/memorama.js')}}"></script>
</body>

</html>
<?php



?>