<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Appointment extends Model
{

    use HasFactory;
    public $timestamps = false;

    # Name of the table in the database
    protected $table = 'appointments';

    # The attributes that are mass assignable.
    protected $fillable = [
        'dentist_id',
        'service_id',
        'date',
        'hour',
        'patient_name',
        'patient_lastname',
        'patient_phone',
    ];

    public function dentist()
    {
        return $this->belongsTo(Dentist::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
