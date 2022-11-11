<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Memorama</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/memorama.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    

    <header class="header">

        <a href="/home"><img src="{{asset('img/volver.png')}}" alt="" width="100px" height="100px"></a>


        <div>
        <h3>puntaje:<p id="puntajehtml">0</p></h3>
        <h3>conteo:<p id="conteohtml">0</p> </h3>
        </div>
        <div>
            
        </div>

   

        
        
    </header>

    <!-- HTML -->
    <!-- estructura visual -->

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