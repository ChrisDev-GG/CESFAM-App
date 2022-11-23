@extends('shared-min')

@section('shared-links')
    <!-- Custom styles for this template -->
    <link href="{{asset('css/modals.css')}}" rel="stylesheet">
@endsection

@section('main-content')

</head>
<body>

<div class="modal modal-sheet position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSheet">
    <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
        <div class="modal-header border-bottom-0">
            <h1 class="modal-title fs-5">Apoderado suplente modificado</h1>
        </div>
        <div class="modal-body py-0">
            <p class="modal-title">Datos del apoderado suplente actualizados. Puede volver al inicio o continuar en la sección de apoderados.</p>
        </div>
        <div class="modal-footer flex-column border-top-0">
            <a href="/home" class="btn btn-lg btn-primary w-100 mx-0 mb-2"><i>Ir al inicio</i></a>
            <a href="/registros/suplentes" type="button" class="btn btn-lg btn-light w-100 mx-0"><i>Gestionar apoderados suplentes</i></a>
        </div>
    </div>
    </div>
</div>

@endsection