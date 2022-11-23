@extends('shared')

@section('main-content')
<div>
    <a href="/gestor/usuarios/admins"><img class="back-img" src="{{asset('img/back.png')}}" width="50" alt="back icon" style="padding-bottom: 15px"></a>
    <h1 class="h1-titles" style="display: inline">Registrar Nuevo Administrador</h1>
</div><br>

<div>
    <main class="form-signin w-100 m-auto form-max">
        <form action="#" method="POST" class="admin-form">
            @csrf
            @method('put')
            @include('Messages.users-msg')
            <form>
              <div class="form-group sm-form">
                <label for="nombres" class="h4 mb-3 fw-md"><b>Nombres</b></label>
                <input type="text" class="form-control" id="nombres" placeholder="Ingrese sus nombres" name="nombres" value="{{old('nombres')}}">
              </div>
              <div class="form-group sm-form">
                <label for="apellidos" class="h4 mb-3 fw-md"><b>Apellidos</b></label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese sus apellidos" name="apellidos" value="{{old('apellidos')}}">
              </div>
              <div class="form-group sm-form">
                <label for="email" class="h4 mb-3 fw-md"><b>Correo</b></label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su email" name="email" value="{{old('email')}}">
              </div>
              <div class="form-group sm-form">
                <label for="nombre_usuario" class="h4 mb-3 fw-md" class="h4 mb-3 fw-md"><b>Nombre de Usuario</b></label>
                <input type="text" class="form-control" id="nombre_usuario" placeholder="Crear nombre de usuario" name="nombre_de_usuario" value="{{old('nombre_de_usuario')}}">
              </div>

              <div class="form-group sm-form">
                <label for="date" class="h4 mb-3 fw-md"><b>Fecha de nacimiento</b></label>
                <input type="date" class="form-control" id="date" placeholder="Seleccionar fecha" name="fecha_de_nacimiento" required>
              </div>

              <div class="form-group sm-form">
                <label for="contraseña" class="h4 mb-3 fw-md"><b>Crear contraseña</b></label>
                <input type="password" class="form-control" id="contraseña" placeholder="Crear contraseña" name="contraseña">
              </div>
              
              <div class="form-group sm-form">
                <label for="confirmar_contraseña" class="h4 mb-3 fw-md"><b>Confirmar contraseña</b></label>
                <input type="password" class="form-control" id="confirmar_contraseña" placeholder="Confirmar contraseña" name="confirmar_contraseña">
              </div>
              <div class="checkbox mb-3">
                <label>
                </label>
              </div>
              <input type="hidden" name="user_type" id="user_type" value="3">
              <button class="w-100 btn btn-lg btn-primary sm-form" type="submit">Registrar</button>
            </form>
            
            <p class="mt-5 mb-3 text-muted"> <!-- &copy; 2022 --></p>
            
        </form><br><br>
      </main>
</div>
@endsection

@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
@endsection