@extends('shared')

@section('shared-links')
    <link href="{{asset('css/data-table.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<div>
    <a href="/gestor/usuarios"><img class="back-img" src="{{asset('img/back.png')}}" width="50" alt="back icon" style="padding-bottom: 15px"></a>
    <h1 class="h1-titles" style="display: inline">Usuarios Administrativos</h1>
</div>
        <div>
            <a href="/gestor/usuarios/admins/create" class="btn btn-primary">Registrar un nuevo Administrador</a>
        </div><br><br>

        {{-- <div class="form-group form-pd search">
            <input type="text" class="form-control form-rut" id="InputName" placeholder="Ingresar Nombre" name="name">
            <a href="" class="btn btn-success btn-search"><b>Buscar por nombre</b></a>
        </div><br><br> --}}
        
    <div class="container-fluid table-responsive">
        <table class="table table-bordered" id="users-table">

            <thead>
                <tr class="table-info">
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombre de Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col" >Modificar</th>
                </tr>
            </thead>    
                <tbody>          
                    @foreach($registros as $registro)
                        @if($registro->active)
                            <tr class="bg-primary">
                        @else
                            <tr class="bg-danger">
                        @endif
                        
                            <th>{{$registro->names}}</th>
                            <th>{{$registro->surenames}}</th>
                            <th>{{$registro->username}}</th>
                            <th>{{$registro->email}}</th>
                            <th>{{$registro->birth_date}}</th>
                            @if($registro->user_type != 1)
                            <th class="d-flex justify-content-center"><a href="/gestor/usuarios/admins/{{$registro->id}}/edit"><button class="btn btn-info btn-p">Editar</button></a>
                                <a>
                                @if($registro->active)
                                    <form action="/gestor/usuarios/admins/{{$registro->id}}/deactivate" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-p">Desactivar</button></th>
                                    </form>
                                @else
                                    <form action="/gestor/usuarios/admins/{{$registro->id}}/activate" method="POST">
                                        @csrf
                                        {{-- Same name but it activates it if it`s deactivated --}}
                                        <button type="submit" class="btn btn-success btn-p">Activar</button></th>
                                    </form>
                                @endif
                                    </a>
                            @else
                                <th>---</th>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div><br><br>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#users-table').dataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                dom: 'ftip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "iDisplayLength": 30,
            });
        });
    </script>
@endsection