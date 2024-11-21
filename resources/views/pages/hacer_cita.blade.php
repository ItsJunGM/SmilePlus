@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-info" style="background-color: #f0f8ff;">
                    <div class="card-body p-5">
                        <h3 class="card-title text-center text-info mb-4 font-weight-bold"
                            style="font-family: 'Poppins', sans-serif; color: #333;">¡Bienvenido! Agende su cita dental</h3>
                        <p class="text-center mb-5" style="font-size: 1.2em; color: #555; line-height: 1.6;">Complete el
                            formulario con sus datos y preferencias para agendar su consulta. Asegúrese de llenar todos los
                            campos correctamente para confirmar su cita de manera rápida y sencilla.</p>

                        <!-- Formulario de agendar cita -->
                        <form action="{{ route('appointment.store') }}" method="POST">
                            @csrf

                            <!-- Campos de texto: Nombre, Apellido, Teléfono -->
                            <div class="form-row mb-4">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="font-weight-semibold">Nombre</label>
                                    <input type="text" class="form-control rounded-pill shadow-sm" id="nombre"
                                        name="patient_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="apellido" class="font-weight-semibold">Apellido</label>
                                    <input type="text" class="form-control rounded-pill shadow-sm" id="apellido"
                                        name="patient_lastname" required>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="telefono" class="font-weight-semibold">Teléfono</label>
                                <input type="tel" class="form-control rounded-pill shadow-sm" id="telefono"
                                    name="patient_phone" required>
                            </div>

                            <!-- Menú desplegable: Servicios -->
                            <div class="form-group mb-4">
                                <label for="servicio_id" class="font-weight-semibold">Servicios dentales</label>
                                <select class="form-control rounded-pill shadow-sm" id="servicio" name="service_id"
                                    required>
                                    <option value="">Seleccione un servicio</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Menú de selección: Fecha (con calendario) -->
                            <div class="form-group mb-4">
                                <label for="fecha" class="font-weight-semibold" style="color: #333;">Selecciona la
                                    fecha</label>
                                <input type="date" class="form-control rounded-pill shadow-sm" id="fecha"
                                    name="date" required>
                            </div>

                            <!-- Menú de selección: Hora -->
                            <div class="form-group mb-4">
                                <label for="hora" class="font-weight-semibold" style="color: #333;">Selecciona la
                                    hora</label>
                                <!-- Menú de selección: Hora -->
                                <div class="form-group mb-4">
                                    <label for="hora" class="font-weight-semibold" style="color: #333;">Selecciona la
                                        hora</label>
                                    <select class="form-control rounded-pill shadow-sm" id="hora" name="hora"
                                        required>
                                        <option value="">Seleccione la hora</option>
                                        @foreach (range(9, 18) as $hour)
                                            <option value="{{ $hour }}:00">{{ $hour }}:00 AM</option>
                                            <option value="{{ $hour }}:30">{{ $hour }}:30 AM</option>
                                        @endforeach
                                    </select>
                                </div>



                            </div>

                            <button type="submit" class="btn btn-info btn-block rounded-pill py-2 shadow-lg"
                                style="font-size: 1.1em; background-color: #5bc0de; border-color: #5bc0de; color: white; transition: background-color 0.3s, border-color 0.3s;">Agendar
                                cita</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
