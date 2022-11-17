<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

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

      form label{
        font-size: 1.1rem;
        margin-bottom: 8px;
      }
      .form-group{
        margin-bottom: 8px;
      }
      .fw-normal{
        font-size: 2rem;
      }
      h1{
        margin-bottom: 10px;
      }

    </style>

    
    <!-- Custom styles  -->
    <link href="{{asset('css/auth.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    
        <main class="form-signin w-100 m-auto form-max">
          <form action="/register" method="POST">
              @csrf
              <img class="login-img" src="{{asset('img/cesfam-logo.png')}}" width="140" height="140">
              <h1 class="h3 mb-3 fw-lg"><b>Crear Cuenta</b></h1><br>
              @include('Messages.users-msg')
              <form>
                <div class="form-group">
                  <label for="nombres" class="h4 mb-3 fw-md"><b>Nombres</b></label>
                  <input type="text" class="form-control" id="nombres" placeholder="Ingrese sus nombres" name="nombres" value="{{old('nombres')}}">
                </div>
                <div class="form-group">
                  <label for="apellidos" class="h4 mb-3 fw-md"><b>Apellidos</b></label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese sus apellidos" name="apellidos" value="{{old('apellidos')}}">
                </div>
                <div class="form-group">
                  <label for="email" class="h4 mb-3 fw-md"><b>Correo (opcional)</b></label>
                  <input type="email" class="form-control" id="email" placeholder="Ingrese su email" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                  <label for="nombre_usuario" class="h4 mb-3 fw-md" class="h4 mb-3 fw-md"><b>Nombre de Usuario</b></label>
                  <input type="text" class="form-control" id="nombre_usuario" placeholder="Crear nombre de usuario" name="nombre_usuario" value="{{old('nombre_usuario')}}">
                </div>

                <div class="form-group">
                  <label for="date" class="h4 mb-3 fw-md"><b>Fecha de nacimiento</b></label>
                  <input type="date" class="form-control" id="date" placeholder="Seleccionar fecha" name="fecha_de_nacimiento" required>
                </div>

                <div class="form-group">
                  <label for="contraseña" class="h4 mb-3 fw-md"><b>Contraseña</b></label>
                  <input type="password" class="form-control" id="contraseña" placeholder="Crear contraseña" name="contraseña">
                </div>
                
                <div class="form-group">
                  <label for="confirmar_contraseña" class="h4 mb-3 fw-md"><b>Confirmar contraseña</b></label>
                  <input type="password" class="form-control" id="confirmar_contraseña" placeholder="Confirmar contraseña" name="confirmar_contraseña">
                </div>
                <div class="checkbox mb-3">
                  <label>
                  </label>
                </div>
                <input type="hidden" name="user_type" id="user_type" value="3">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
                <a href="/home"><img class="back-register" src="{{asset('img/back.png')}}" width="50" alt="back icon"></a>
              </form>
              
              <p class="mt-5 mb-3 text-muted"> <!-- &copy; 2022 --></p>
              
          </form>
        </main>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <script>
          $(function () {
              $('#datetimepicker1').datetimepicker();
          });
        </script>
  </body>
</html>
