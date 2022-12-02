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
            <input type="text" id="token" name="token" value="{{ csrf_token() }}" hidden>
            <input type="text" id="url" name="url" value="{{ url('/send/memorama') }}" hidden>
            <form id="memoramaForm" method="post" action="" hidden>
                @csrf
                <input type="text" id="score" name="score" value="" hidden>
            </form>

    <div class="nuevo-juego" onclick="location.reload()">
        Nuevo Juego
    </div>

    <!-- JS -->
    <!-- parte lógica -->
    <script src="{{asset('js/memorama.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
    function sendData(puntaje){
    let token = $('meta[name="csrf-token"]').attr('content');
    let route = document.getElementById('url').value;
        /* $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token,
            }
        });
        $.ajax({
            url: route+`/${puntaje}`,
            type:"POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {score: puntaje, _token: token},
            success:function(data){
                alert(data);
            },error:function(){ 
                alert("error!!!!");
            }
        }); */
        $('#memoramaForm').attr('action', route+`/${puntaje}`);
        $('#score').attr('value', puntaje);
        document.getElementById('memoramaForm').submit();
    }
</script>
</body>

</html>
