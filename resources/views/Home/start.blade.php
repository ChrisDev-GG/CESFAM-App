<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos Cognitivos</title> 
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/start.css')}}">
    <style>
        .navbar{
            margin-right: 135px;
        }
    </style>

</head>
<body>
     
    <header class="header">
        <div class="cesfam-logo">
            <a class="logo">
                <img src="{{asset('img/logo2.png')}}" class="cesfam-logo" alt="home-img">
            </a>
        </div>
        @guest    
            <nav class="navbar">
                <a class="btn btn-primary btn-auth" href="/login" role="button">Iniciar Sesion</a>
                <a class="btn btn-primary btn-auth" href="/register" role="button">Registrarse</a>
            </nav>
        @endguest
        @auth
            @if(auth()->user()->user_type != 3)
                <nav class="navbar">
                    <div class="dropdown show btn-user">
                        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @auth
                        <b>{{auth()->user()->username}}</b>
                        @endauth
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/gestor">Gestionar Registros</a>
                            <a class="dropdown-item" href="/logout">Cerrar Sesión</a>
                        </div>
                    </div>
                </nav>
            @else
                <nav class="navbar">
                    <div class="dropdown show btn-user">
                        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @auth
                        <b>{{auth()->user()->username}}</b>
                        @endauth
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/logout">Cerrar Sesión</a>
                        </div>
                    </div>
                </nav>
            @endif
        @endauth
    </header>

    <section class="home" id="home">
        <div class="content text-center">
            <h1 class="heading"> Juegos <span>Cognitivos</span> </h1>
            <div class="center-play">
                <p class="instruccion">Bienvenido Presione alguno de los botones que se encuentran debajo para entrar a uno de los juegos</p>
                <button type="button" id="play-instructions" class="btn-play">
                    <img class="play-logo" src="{{asset('img/sonido1.png')}}" width="80" alt="Play logo">
                </button>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <div class="box-container">
            <div class="box">
                <a href="/memorama">  <img src="{{asset('img/memorama.png')}}" class="play-btn" alt=""></a>
                <a href="/memorama"><p>Memorama</p></a>
            </div>
            <div class="box">
                <a href="/simondice"> <img src="{{asset('img/simon_dice1.png')}}" class="play-btn" alt=""> </a>
                <a href="/simondice"><p>Simon Dice</p></a>
            </div>
            <div class="box">
                <a href="/golpeatopo"><img src="{{asset('img/mole.png')}}" class="play-btn" alt=""></a>
                <a href="/golpeatopo"><p>pegale al topo</p></a>
            </div>
        </div>
    </section>
    <footer>
        <section class="footer">
            <div class="share">
                <a href="https://www.facebook.com/people/Cesfam-Fray-Jorge/100064059278452/" target="_blank">
                    <img src="{{asset('img/fb-logo.webp')}}"  width="50" class="fb-logo" alt="Facebook logo">
                </a>
            </div>
            <div class="links">
                <a href="../images/logo.jpg"></a>
            </div>
            <div class="credit">créditos a <span>Desing Project & Digital Company</span> | Todos los derechos reservados</div>
        </section>
    </footer>

<script src="{{asset('js/start.js')}}"></script>
<script src="{{asset('js/textToSpeech.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>