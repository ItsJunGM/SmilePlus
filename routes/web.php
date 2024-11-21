<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Models\Specialty;
use App\Http\Controllers\DataController;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Service;


Route::get('/', function () {
    return view('pages.inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('nosotros');

Route::get('/citas', function () {
    return view('pages.citas');
})->name('citas');

// Ruta para la pantalla de hacer una cita
Route::get('/hacer-cita', function () {
    $services = Service::all();
    $dentists = Dentist::all();
    return view('pages.hacer_cita', [
        'services' => $services,
        'dentists' => $dentists
    ]);
})->name('hacer-cita');

Route::post('/hacer_cita', [AppointmentController::class, 'store'])->name('appointment.store');
