
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Simon dice - By parzibyte</title>
    <script src="{{asset('js/simon_d3.min.js')}}"></script>
    <script src="{{asset('js/simon_sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/simon_bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleJuego2.css')}}">
    <body>
    
<header class="header">

    <button id="flecha" class="btn  btn-lg"><a href="/home"><img src="{{asset('img/flecha.png')}}" alt="" width="100px" height="100px"></a>
</button>
</header>
   
         
   
<main class="container-fluid">
    <div class="row text-center">
       
        <div class="col-12 table-responsive">

            <p class="instrucciones">Bienvenido, mira los colores que se van iluminando, continue la secuencia en el orden correcto, buena suerte...</p>

            <button id="btn-speak" class="btn btn-info btn-lg"> <img src="../img/sonido1.png" alt="" width="100px" height="100px"> </button>
            <br>
            
            <button id="comenzar" class="btn btn-primary btn-lg">Comenzar juego</button>
          
           

            <div id="contenedorJuego"></div>
            <br>

            <input type="text" id="token" name="token" value="{{ csrf_token() }}" hidden>
            <input type="text" id="url" name="url" value="{{ url('/send/simon') }}" hidden>
            <form id="simonForm" method="post" action="" hidden>
                @csrf
                <input type="text" id="score" name="score" value="" hidden>
            </form>
           
        </div>
    </div>
</main>

<script src="{{asset('js/simon_game.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    function sendData(puntaje){
    let token = $('meta[name="csrf-token"]').attr('content');
    let route = document.getElementById('url').value;
        $('#simonForm').attr('action', route+`/${puntaje}`);
        $('#score').attr('value', puntaje);
        document.getElementById('simonForm').submit();
    }
</script>
</body>
</html>