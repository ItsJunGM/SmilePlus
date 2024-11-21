@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Jorge Abraham, jefe de área -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="card shadow-lg border-warning p-4 mx-auto" style="max-width: 900px;">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('images/jorge_abraham.jpg') }}" class="img-fluid rounded-circle"
                                alt="Jorge Abraham Avila Rodriguez">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title font-weight-bold text-warning">Jorge Abraham Avila Rodriguez</h2>
                                <h5 class="card-text">Jefe de Área | Especialista en Ortodoncia</h5>
                                <p class="card-text">Egresado de la Universidad de Oxford (Reino Unido)</p>
                                <p class="card-text">Egresado en el 20 de abril de 1889</p>
                                <p class="card-text font-italic">"Si vas a estar siempre en mi mente al menos ponte ropa"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- El resto de los dentistas -->
        <div class="row">
            @foreach ([
            ['nombre' => 'Jose Julian Elizarraras Gaytan', 'especialidad' => 'Endodoncista', 'universidad' => 'Universidad Mayor de San Francisco Xavier de Chuquisaca (Bolivia)', 'frase' => 'Como me mama romper relaciones en guadalajara', 'foto' => 'jose_julian.jpg', 'fecha_egreso' => '2 de octubre del 1968'],
            ['nombre' => 'Luis Antonio Mejia Valtierra', 'especialidad' => 'Periodoncista', 'universidad' => 'Universidad de Amsterdam (Paises Bajos)', 'frase' => 'Hacer el amor, no es lo mismo que hacer el sexo.', 'foto' => 'luis_antonio.jpg', 'fecha_egreso' => '19 de septiembre de 1985'],
            ['nombre' => 'Juan Diego Baylon Lopez', 'especialidad' => 'Cirujano Oral', 'universidad' => 'Universidad de Barcelona (España)', 'frase' => 'Gracias a Dios, soy Ateo.', 'foto' => 'juan_diego.jpg', 'fecha_egreso' => '7 de junio de 1942'],
            ['nombre' => 'Angel Mikkel Gonzalez', 'especialidad' => 'Cirujano Oral', 'universidad' => 'Universidad de Lisboa (Portugal)', 'frase' => 'Si no se lavaron los dientes mejor al chile ni vengan.', 'foto' => 'angel_mikkel.jpg', 'fecha_egreso' => '30 de abril de 1945'],
            ['nombre' => 'Sergio Adame Mina', 'especialidad' => 'Odontopediatra', 'universidad' => 'Instituto Politécnico de Grenoble (Francia)', 'frase' => 'Ya les he dicho que no me llamen webi puta madre. 
            - El webi wabo', 'foto' => 'sergio_adame.jpg', 'fecha_egreso' => '6 de agosto de 1945'],
            ['nombre' => 'Diego Salazar Murillo', 'especialidad' => 'Odontología General', 'universidad' => 'Universidad de Freiburg (Alemania)', 'frase' => 'Fan incodicional de anuel BRRRRR', 'foto' => 'diego_salazar.jpg', 'fecha_egreso' => '4 de abril 1969'],
            ['nombre' => 'Daniel Tellez', 'especialidad' => 'Prostodoncia', 'universidad' => 'Universidad de Guadalajara (México)', 'frase' => 'Mi pelos, hoy andas de suerte. Tengo comezon en el miembro y te dare el honor de que me lo rasques.', 'foto' => 'daniel_tellez.jpg', 'fecha_egreso' => '5 de agosto de 1983'],
            ['nombre' => 'Jose Alberto Cervantes Vejar', 'especialidad' => 'Odontología General', 'universidad' => 'Universidad Autónoma de Toronto (Canada)', 'frase' => 'Dame we.', 'foto' => 'jose_alberto.jpg', 'fecha_egreso' => '25 de mayo del 2010'],
            ['nombre' => 'David Rascon', 'especialidad' => 'Ortodoncia', 'universidad' => 'Universidad de Columbia (Estados unidos)', 'frase' => 'Viva el gym, las fiestas, las morras y JavaScript.', 'foto' => 'david_rascon.jpg', 'fecha_egreso' => '11 de septiembre del 2001'],
        ] as $dentista)
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-light">
                        <img src="{{ asset('images/' . $dentista['foto']) }}" class="card-img-top"
                            alt="{{ $dentista['nombre'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $dentista['nombre'] }}</h5>
                            <p class="card-text">{{ $dentista['especialidad'] }}</p>
                            <p class="card-text">Egresado de {{ $dentista['universidad'] }}</p>
                            <p class="card-text">Egresado en el {{ $dentista['fecha_egreso'] }}</p>
                            <p class="card-text font-italic">"{{ $dentista['frase'] }}"</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
