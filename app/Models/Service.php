<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Service extends Model
{


    use HasFactory;

    # Disable timestamps
    public $timestamps = false;

    # Name of the table in the database
    protected $table = 'services';

    # The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'description',
        'price',
        'specialty_id',
    ];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

}
