<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

    </style>

    
    <!-- Custom styles  -->
    <link href="{{asset('css/auth.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    
        <main class="form-signin w-100 m-auto">
          <form action="/login" method="POST">
              @csrf
              <img class="login-img" src="{{asset('img/cesfam-logo.png')}}" width="140" height="140">
              <h1 class="h3 mb-3 fw-normal"><b>Iniciar Sesión</b></h1>
              @include('Messages.users-msg')
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Nombre de usuario</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Contraseña</label>
              </div>

              <div class="checkbox mb-3">
                <label>
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
              <p class="mt-5 mb-3 text-muted"> <!-- &copy; 2022 --></p>
              <a href="/home"><img class="back-img" src="{{asset('img/back.png')}}" width="50" alt="back icon"></a>
          </form>
        </main>

  </body>
</html>
