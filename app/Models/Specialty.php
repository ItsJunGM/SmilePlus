<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialty extends Model
{
    use HasFactory;

    # Disable timestamps
    public $timestamps = false;
    
    # Name of the table in the database
    protected $table = 'specialties'; 

    # The attributes that are mass assignable.
    protected $fillable = [
        'name',
    ];

    public function dentists()
    {
        return $this->hasMany(Dentist::class);
    }
}
