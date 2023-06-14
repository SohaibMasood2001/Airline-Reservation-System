<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightClass extends Model
{
    use HasFactory;

    protected $table = 'flight_classes';

    protected $fillable = ['class_name', 'description', 'capacity', 'fare', 'amenities', 'extra_baggage_fee', 'priority_boarding'];

    
}

