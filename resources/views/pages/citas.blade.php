@extends('layouts.app')

@section('content')
<head>
    <!-- CSS llamado citas.css -->
    <link href="{{ asset('css/citas.css') }}" rel="stylesheet">
</head>
    <div class="container py-5">
        <div class="row">
            <!-- Sección "Hacer una cita" -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-primary">
                    <img src="{{ asset('images/hacer_cita.jpg') }}" class="card-img-top" alt="Hacer una cita">
                    <div class="card-body text-center">
                        <h3 class="card-title text-primary">Hacer una Cita</h3>
                        <p class="card-text">Programa tu consulta dental de manera fácil y rápida. Solo elige la fecha y hora que más te convenga.</p>
                        <a href="{{ route('hacer-cita') }}" class="btn btn-primary">Agendar cita</a>
                    </div>
                </div>
            </div>

            <!-- Sección "Consultar cita" -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-success">
                    <img src="{{ asset('images/consultar_cita.jpg') }}" class="card-img-top" alt="Consultar cita">
                    <div class="card-body text-center">
                        <h3 class="card-title text-success">Consultar Cita</h3>
                        <p class="card-text">¿Ya tienes una cita? Consulta los detalles de tu próxima consulta en cualquier momento.</p>
                        <a href="#" class="btn btn-success">Consultar cita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
