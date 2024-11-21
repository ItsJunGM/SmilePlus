<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Dentist;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Obtener el servicio seleccionado
        $service = Service::find($request->service_id);

        // Obtener el dentista relacionado con la especialidad del servicio
        $dentist = $service->specialty->dentists()->first(); 

        // Crear la cita
        $appointment = new Appointment();
        $appointment->date = $request->date;
        $appointment->hour = $request->hora;  // Asegúrate de que se llama correctamente 'hour'
        $appointment->patient_name = $request->patient_name;
        $appointment->patient_lastname = $request->patient_lastname;
        $appointment->patient_phone = $request->patient_phone;
        $appointment->service_id = $request->service_id;
        $appointment->dentist_id = $dentist ? $dentist->id : null; // Asignar el dentista, o null si no hay dentista disponible

        $appointment->save();

        return view('pages.cita_pendiente', [
            'appointment' => $appointment,
            'service' => $service,
            'dentist' => $dentist
        ]);

    }
}
