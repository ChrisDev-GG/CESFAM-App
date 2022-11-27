@extends('shared')

@section('navigator')
    
@endsection

@section('main-content')
    <div height="30">
        
    </div>
    <div class="container">
        <div class="row center-cards">
            <div class="card col-3 spacing">
            <a href="/gestor/usuarios"><img class="card-img-top registros-img" src="{{asset('img/usuarios.png')}}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title txt-color">Usuarios</h5>
                    <p class="card-text txt-color">Presione el boton de abajo para ir a la sección para gestionar usuarios.</p>
                    <a href="/gestor/usuarios" class="btn btn-primary btn-game"><h4 class="btn-text">Visitar</h4></a>
                </div>
            </div>
            <div class="card col-3 spacing">
            <a href="/gestor/registros"><img class="card-img-top" src="{{asset('img/registros.png')}}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title txt-color">Registros</h5>
                    <p class="card-text txt-color">Presione el boton de abajo para revisar los registros de quienes han jugado.</p>
                    <a href="/gestor/registros" class="btn btn-primary btn-game"><h4 class="btn-text">Visitar</h3></a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('js/textToSpeech.js')}}"></script>
@endsection