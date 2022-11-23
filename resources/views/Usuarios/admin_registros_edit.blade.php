@extends('shared')

@section('main-content')
<div>
    <a href="/gestor/usuarios"><img class="back-img" src="{{asset('img/back.png')}}" width="50" alt="back icon" style="padding-bottom: 15px"></a>
    <h1 class="h1-titles" style="display: inline">Usuarios Administrativos</h1>
</div><br>

<div>
    <main class="form-signin w-100 m-auto form-max">
        <form action="#" method="POST">
            @csrf
            @method('put')
            <img class="login-img" src="{{asset('img/cesfam-logo.png')}}" width="140" height="140">
            <h1 class="h3 mb-3 fw-lg"><b>Actualizar datos del Administrador</b></h1><br>
            @include('Messages.users-msg')
            <form>
              <div class="form-group">
                <label for="nombres" class="h4 mb-3 fw-md">Nombres - <b>Antiguo: {{$registro}}</b></label>
                <input type="text" class="form-control" id="nombres" placeholder="Ingrese sus nombres" name="nombres" value="{{old('nombres')}}">
              </div>
              <div class="form-group">
                <label for="apellidos" class="h4 mb-3 fw-md">Apellidos - <b>Antiguo: {{$registro}}</b></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese sus apellidos" name="apellidos" value="{{old('apellidos')}}">
              </div>
              <div class="form-group">
                <label for="email" class="h4 mb-3 fw-md">Correo - <b>Antiguo: {{$registro}}</b></label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su email" name="email" value="{{old('email')}}">
              </div>
              <div class="form-group">
                <label for="nombre_usuario" class="h4 mb-3 fw-md" class="h4 mb-3 fw-md">Nombre de Usuario - <b>Antiguo: {{$registro}}</b></label>
                <input type="text" class="form-control" id="nombre_usuario" placeholder="Crear nombre de usuario" name="nombre_de_usuario" value="{{old('nombre_de_usuario')}}">
              </div>

              <div class="form-group">
                <label for="date" class="h4 mb-3 fw-md">Fecha de nacimiento - <b>Antiguo: {{$registro}}</b></label>
                <input type="date" class="form-control" id="date" placeholder="Seleccionar fecha" name="fecha_de_nacimiento" required>
              </div>

              <div class="form-group">
                <label for="contraseña" class="h4 mb-3 fw-md"><b>Cambiar contraseña</b></label>
                <input type="password" class="form-control" id="contraseña" placeholder="Crear contraseña" name="contraseña">
              </div>
              
              <div class="checkbox mb-3">
                <label>
                </label>
              </div>
              <input type="hidden" name="user_type" id="user_type" value="3">
              <button class="w-100 btn btn-lg btn-primary" type="submit">Modificar datos</button>
              <a href="/home"><img class="back-register" src="{{asset('img/back.png')}}" width="50" alt="back icon"></a>
            </form>
            
            <p class="mt-5 mb-3 text-muted"> <!-- &copy; 2022 --></p>
            
        </form>
      </main>
</div>
@endsection

@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
@endsection