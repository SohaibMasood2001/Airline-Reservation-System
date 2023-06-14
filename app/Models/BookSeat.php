<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSeat extends Model
{
    use HasFactory;

    protected $table = "bookseat";
    protected $fillable = ['name', 'email', 'phone', 'departure', 'destination', 'date', 'time', 'passengers', 'message', 'airline_name', 'passport', 'status'];

    public function flightClasses()
    {
        return $this->belongsToMany(FlightClass::class, 'bookseat_flight_class', 'bookseat_id', 'flight_class_id');
    }
}
