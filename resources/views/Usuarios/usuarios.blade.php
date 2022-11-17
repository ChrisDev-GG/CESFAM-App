@extends('shared')

@section('navigator')

@endsection

@section('main-content')
    <div height="30">
        
    </div>
    <div class="container">
        <div class="row center-cards img-game">
            <div class="card col-3 spacing">
            <img class="card-img-top admin-img" src="{{asset('img/admin.png')}}" alt="Card image cap" style="max-width: 170px; margin:auto;">
                <div class="card-body">
                    <h5 class="card-title txt-color">Usuarios Administrativos</h5>
                    <p class="card-text txt-color">Revisar los datos de los usuarios con permisos administrativos.</p>
                    <a href="/gestor/usuarios/admins" class="btn btn-primary btn-game"><h4 class="btn-text">Visitar</h4></a>
                </div>
            </div>

            <div class="card col-3 spacing">
            <img class="card-img-top img-game simon" src="{{asset('img/users.webp')}}" alt="Card image cap" style="max-width: 290px; margin:auto;">
                <div class="card-body">
                    <h5 class="card-title txt-color">Personas Registradas</h5>
                    <p class="card-text txt-color">Revisar los datos de los usuarios que se han registrado en la aplicación.</p>
                    <a href="/gestor/usuarios/users" class="btn btn-primary btn-game"><h4 class="btn-text">Visitar</h3></a>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('js/textToSpeech.js')}}"></script>
@endsection