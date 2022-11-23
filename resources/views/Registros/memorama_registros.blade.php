@extends('shared')

@section('shared-links')
    <link href="{{asset('css/data-table.css')}}" rel="stylesheet">
@endsection

@section('main-content')
<div>
    <a href="/gestor/registros"><img class="back-img" src="{{asset('img/back.png')}}" width="50" alt="back icon" style="padding-bottom: 15px"></a>
    <h1 class="h1-titles" style="display: inline">&nbsp;&nbsp;Registros Memorama</h1>
</div><br>

        {{-- <div class="form-group form-pd search">
            <input type="text" class="form-control form-rut" id="InputName" placeholder="Ingresar Nombre" name="name">
            <a href="" class="btn btn-success btn-search"><b>Buscar por nombre</b></a>
        </div><br><br> --}}

    <div class="container-fluid table-responsive">
        <table class="table table-bordered" id="memorama-table">
            <thead>
                <tr class="table-info">
                    <th scope="col">Puntaje</th>
                    <th scope="col">Nombre completo</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Fecha de juego</th>
                </tr>
            </thead>    
            <tbody>          
                @foreach($registros as $registro)
                <tr class="bg-primary">
                    <th>{{$registro->score}}</th>
                    <th>{{$registro->fullname}}</th>
                    <th>{{$registro->username}}</th>
                    <th>{{$registro->created_at}}</th>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#memorama-table').dataTable( {
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