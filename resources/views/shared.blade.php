<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>CESFAM Home</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/shared.css')}}" rel="stylesheet">
    @yield('shared-links')
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">

  <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        
          <img class="bi me-2" width="100" height="100" src="{{asset('img/cesfam-logo.png')}}">
        <nav class="nav nav-masthead justify-content-center float-md-end nav-color nav-gap">
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a class="btn btn-primary btn-games btn-nav" href="/gestor">Inicio administrativo</a></li>
            <li><a class="btn btn-primary btn-games btn-nav" href="/home">Sección de juegos</a></li>
            @yield('navigator')
          </ul>
        </nav>
          @guest    
          <nav class="navbar">
              <a class="btn btn-primary btn-auth" href="/login" role="button">Iniciar Sesion</a>
              <a class="btn btn-primary btn-auth" href="/register" role="button">Registrarse</a>
          </nav>
      @endguest
      @auth
          @if(auth()->user()->user_type != 3)
              <nav class="navbar">
                  <div class="dropdown show btn-user" style="margin-right: 20px">
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
  

      <main class="px-3">
          @yield('main-content')
      </main>
      <div>
        @yield('content')
      </div>

      <footer class="mt-auto text-white-50">
        
      </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>  
  @yield('js')
  </body>
</html>
