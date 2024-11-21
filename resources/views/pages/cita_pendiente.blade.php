@extends('layouts.app')

@section('content')
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center"
        style="background: linear-gradient(to bottom right, #fff5f7, #ffe6e8);">
        <div class="row w-100">
            <div class="col-lg-10 mx-auto">
                <!-- Tarjeta épica -->
                <div class="card shadow-lg border-0"
                    style="background-color: rgba(255, 255, 255, 0.97); border-radius: 30px;">
                    <div class="card-body p-5">
                        <!-- Título -->
                        <h1 class="text-center mb-5"
                            style="font-family: 'Pacifico', cursive; font-weight: bold; color: #ff6f61; text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);">
                            ¡Tu Cita Está Pendiente!
                        </h1>

                        <div class="row">
                            <div class="col-md-6 d-flex flex-column align-items-center">
                                <!-- Foto del dentista mejorada -->
                                <div class="border border-primary shadow-lg p-2"
                                    style="width: 300px; height: 400px; background-color: rgba(255, 255, 255, 0.9);">
                                    @if ($dentist->id == 1)
                                        <img src="{{ asset('images/jorge_abraham.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 2)
                                        <img src="{{ asset('images/jose_julian.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 3)
                                        <img src="{{ asset('images/luis_antonio.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 4)
                                        <img src="{{ asset('images/juan_diego.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 5)
                                        <img src="{{ asset('images/angel_mikkel.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 6)
                                        <img src="{{ asset('images/sergio_adame.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 7)
                                        <img src="{{ asset('images/diego_salazar.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 8)
                                        <img src="{{ asset('images/daniel_tellez.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 9)
                                        <img src="{{ asset('images/jose_alberto.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @elseif($dentist->id == 10)
                                        <img src="{{ asset('images/david_rascon.jpg') }}" alt="Dentista"
                                            class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%;">
                                    @endif
                                </div>
                                <h3 class="text-center text-primary mt-4" style="font-weight: bold;">Dr.
                                    {{ $dentist->name }} {{ $dentist->lastname }}</h3>
                                <p class="text-center text-dark" style="font-size: 18px;">Especialista en <span
                                        class="font-italic">{{ $service->specialty->name }}</span></p>
                            </div>

                            <div class="col-md-6">
                                <!-- Detalles de la cita -->
                                <div class="p-4"
                                    style="background: #fff7f8; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                                    <h4 class="mb-4 text-secondary"
                                        style="font-family: 'Roboto', sans-serif; font-weight: bold;">Detalles de tu cita:
                                    </h4>
                                    <ul class="list-unstyled text-dark" style="font-size: 18px;">
                                        <li class="mb-3">
                                            <strong>Motivo de la cita:</strong> <span
                                                class="font-weight-bold text-info">{{ $service->name }}</span>
                                        </li>
                                        <li class="mb-3">
                                            <strong>Costo:</strong> ${{ number_format($service->price, 2) }}
                                        </li>
                                        <li class="mb-3">
                                            <strong>Fecha:</strong>
                                            {{ \Carbon\Carbon::parse($appointment->date)->format('d-m-Y') }}
                                        </li>
                                        <li>
                                            <strong>Hora:</strong> {{ $appointment->hour }}
                                        </li>
                                    </ul>
                                    <div class="alert alert-warning mt-4" role="alert" style="font-size: 18px;">
                                        <strong>¡Recuerda!</strong> Llega con 10 minutos de anticipación para un mejor
                                        servicio.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botón para regresar -->
                        <div class="text-center mt-5">
                            <a href="{{ route('inicio') }}" class="btn btn-lg btn-warning rounded-pill"
                                style="font-weight: bold; padding: 20px 50px; font-size: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);">
                                Volver al Inicio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Fondo animado más limpio */
        body {
            background: linear-gradient(to bottom right, #ffe6e8, #ffedf0);
            animation: gradientBG 8s infinite alternate;
        }

        @keyframes gradientBG {
            0% {
                background: linear-gradient(to bottom right, #ffe6e8, #fff5f7);
            }

            100% {
                background: linear-gradient(to bottom right, #ffedf0, #ffe6e8);
            }
        }

        /* Efecto para botón en hover */
        .btn-warning:hover {
            background-color: #ffc107;
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.4);
        }

        /* Animación sutil en la tarjeta */
        .card {
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
@endsection
