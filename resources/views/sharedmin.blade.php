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
    @yield('sharedmin-links')
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">

  <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

            @yield('instructions')
  
          <div class="col-md-3 text-end btn-flex">
              <a class="btn btn-primary" href="/login">Iniciar Sesión</a>
              <a class="btn btn-primary" href="register">Registrarse</a>
          </div>
      </header>
  

      <main class="px-3">
          @yield('main-content')
      </main>

      <footer class="mt-auto text-white-50">
        
      </footer>
  </div>
  @yield('minjs')
  </body>
</html>
