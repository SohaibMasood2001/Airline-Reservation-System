<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    protected $fillable = [
        'name',
        'departure',
        'destination',
        'available_seats',
    ];
    public function flightClasses()
    {
        return $this->belongsToMany(FlightClass::class, 'flight_class_flight', 'flight_id', 'flight_class_id');
    }
    use HasFactory;
}
