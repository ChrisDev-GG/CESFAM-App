@extends('shared')

@section('main-content')
<div>
    <a href="/gestor/usuarios"><img class="back-img" src="{{asset('img/back.png')}}" width="50" alt="back icon" style="padding-bottom: 15px"></a>
    <h1 class="h1-titles" style="display: inline">Usuarios registrados en la aplicación web</h1>
</div><br>

        <div class="form-group form-pd search">
            <input type="text" class="form-control form-rut" id="InputName" placeholder="Ingresar Nombre" name="name">
            <a href="" class="btn btn-success btn-search"><b>Buscar por nombre</b></a>
        </div><br><br>

    <div class="container-fluid table-responsive">
        <table class="table table-bordered" >

            <thead>
                <tr class="table-info">
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombre de Usuario</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Modificar</th>
                </tr>
            </thead>    
            <tbody>          
                @foreach($registros as $registro)
                    <tr class="bg-primary">
                        <th>{{$registro->names}}</th>
                        <th>{{$registro->surenames}}</th>
                        <th>{{$registro->username}}</th>
                        <th>{{$registro->phone ?? '---'}}</th>
                        <th>{{$registro->email ?? '---'}}</th>
                        <th>{{$registro->birth_date}}</th>
                        <th class="table-btn d-flex justify-content-center"><a href="/registros/alumnos/{{$registro->id}}/edit"><button class="btn btn-info btn-p">Editar</button></a>
                            <a>
                        @if($registro->active)
                            <form action="/gestor/usuarios/users/{{$registro->id}}/deactivate" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-p">Desactivar</button></th>
                            </form>
                        @else
                            <form action="/gestor/usuarios/users/{{$registro->id}}/activate" method="POST">
                                @csrf
                                {{-- Same name but it activates it if it`s deactivated --}}
                                <button type="submit" class="btn btn-success btn-p">Activar</button></th>
                            </form>
                        @endif
                            </a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection