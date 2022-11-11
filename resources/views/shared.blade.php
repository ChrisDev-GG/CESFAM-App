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
                  <div class="dropdown show btn-user">
                      <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @auth
                      <b>{{auth()->user()->username}}</b>
                      @endauth
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="/logout">Gestionar Registros</a>
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
  @yield('js')
  </body>
</html>
