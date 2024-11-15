<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dentist extends Model
{
    use HasFactory;
    public $timestamps = false;

    # Name of the table in the database
    protected $table = 'dentists';

    # The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'LastName',
        'email',
        'phone',
        'specialty_id',
    ];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
