<!-- resources/views/pages/inicio.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Banner o encabezado -->
    <header class="banner">
        <div class="container text-center">
            <h1>Bienvenido a SmilePlus</h1>
            <p>Ofrecemos servicios dentales de calidad para toda la familia. Cuida tu sonrisa con nosotros.</p>
            <a href="{{ route('citas') }}" class="btn btn-light">Agenda tu cita</a>
        </div>
    </header>


    <!-- Descripción de los servicios -->
    <!-- Ejemplo de cambio en la sección "¿Qué hacemos en SmilePlus?" -->
    <section class="about-us py-5">
        <div class="container-fluid text-center">
            <h2 class="text-primary">¿Qué hacemos en SmilePlus?</h2>
            <p>¡Tu salud dental es nuestra pasión! En SmilePlus, no solo tratamos tus dientes, transformamos tu sonrisa...
            </p>
            <p>¿Estás listo para un cambio? Ven y descubre cómo podemos ayudarte a alcanzar la sonrisa perfecta.</p>
            <a href="{{ route('citas') }}" class="btn btn-warning">Descubre nuestros servicios</a>
        </div>
    </section>






    <!-- Beneficios o características -->
    <section class="benefits py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-4 text-primary">¿Por qué elegir SmilePlus?</h3>
            <p class="text-center mb-5">Porque no somos solo un consultorio, somos tu aliado en salud dental. Aquí no solo
                cuidamos tus dientes, ¡cuidamos tu confianza!</p>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-user-md fa-3x mb-3"></i>
                    <h4>Expertos en lo que hacemos</h4>
                    <p>Nos encanta lo que hacemos, y eso se nota en cada consulta. Somos dentistas apasionados por ofrecer
                        resultados sorprendentes.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-heartbeat fa-3x mb-3"></i>
                    <h4>Te hacemos sentir como en casa</h4>
                    <p>No solo venimos a trabajar, venimos a crear una experiencia dental inolvidable. Sentirás que estás en
                        las mejores manos.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-clinic-medical fa-3x mb-3"></i>
                    <h4>Tecnología que sorprende</h4>
                    <p>¿Por qué quedarnos atrás? Contamos con lo último en tecnología para que cada tratamiento sea rápido,
                        eficaz y sin dolor.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="our-goal py-5">
        <div class="container text-center">
            <h2 class="text-primary">Nuestro Objetivo: ¡Tu Sonrisa Perfecta!</h2>
            <p>En SmilePlus no solo tratamos dientes, ¡tratamos personas! Nuestro objetivo es que cada paciente se sienta
                increíble después de cada visita, con una sonrisa más brillante, más sana y más feliz.</p>
            <p>Nos apasiona lo que hacemos, y cada día trabajamos para brindarte una atención sin igual, usando lo último en
                tecnología, en un ambiente cómodo y cálido.</p>
            <a href="{{ route('citas') }}" class="btn btn-warning">Haz de tu sonrisa nuestro objetivo</a>
        </div>
    </section>



    <section class="testimonials py-5 bg-light">
        <div class="container text-center">
            <h2 class="text-primary">Lo que dicen nuestros pacientes</h2>
            <p>Ellos confiaron en nosotros y ahora no solo sonríen más, ¡también viven con más confianza!</p>
            <div class="row">
                <div class="col-md-4">
                    <blockquote>
                        <p>"Desde que empecé a venir a SmilePlus, mi sonrisa ha cambiado por completo. Me siento más seguro
                            y feliz cada vez que me miro al espejo."</p>
                        <footer>- Ana Martínez, paciente feliz</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote>
                        <p>"El trato es excelente. Me sentí como en casa desde el primer momento, y el tratamiento fue
                            rápido y sin dolor. ¡Recomendado al 100%!"</p>
                        <footer>- Carlos Gómez, cliente satisfecho</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote>
                        <p>"Mi familia y yo venimos aquí desde hace años, y nunca hemos tenido una experiencia negativa.
                            ¡Siempre recibimos lo mejor!"</p>
                        <footer>- Juan Pérez, paciente de confianza</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>



    <!-- Llamado a la acción para agendar citas -->
    <section class="cta py-5 text-center bg-primary text-white">
        <div class="container">
            <h2 class="display-4">¡Es hora de transformar tu sonrisa!</h2>
            <p class="lead">No dejes pasar más tiempo, agenda tu cita con nosotros y descubre cómo podemos mejorar tu
                salud dental. ¡No esperes más para lucir la sonrisa que mereces!</p>
            <a href="{{ route('citas') }}" class="btn btn-warning btn-lg text-dark mt-4">¡Agenda tu cita ahora!</a>
        </div>
    </section>
@endsection
