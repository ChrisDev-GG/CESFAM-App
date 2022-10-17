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
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img class="bi me-2" width="60" height="60" src="{{asset('img/cesfam-logo.png')}}">
            <h3 class="title-cesfam">CESFAM</h3>
            </a>
            
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                @yield('navigator')
            </ul>
    
            <div class="col-md-3 text-end btn-flex">
                <button type="button" class="btn btn-outline-primary me-2">Iniciar Sesión</button>
                <button type="button" class="btn btn-primary">Registrarse</button>
            </div>
        </header>
    

    <main class="px-3">
        @yield('main-content')
    </main>

    <footer class="mt-auto text-white-50">
       
    </footer>
</div>

    
  </body>
</html>
