<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {
        return view('flights.create');
    }

    public function store(Request $request)
    {
        $flight = new Flight();
        $flight->name = $request->name;
        $flight->seats = $request->seats;
        $flight->departure = $request->departure;
        $flight->destination = $request->destination;
        $flight->class = $request->class;
        // Set other fields as needed
        $flight->save();

        return redirect()->route('flights.index')->with('success', 'Flight created successfully.');
    }

    public function show(Flight $flight)
    {
        return view('flights.show', compact('flight'));
    }

    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

    public function update(Request $request, Flight $flight)
    {
        $flight->name = $request->name;
        $flight->seats = $request->seats;
        $flight->departure = $request->departure;
        $flight->destination = $request->destination;
        $flight->class = $request->class;
        // Update other fields as needed
        $flight->save();

        return redirect()->route('flights.index')->with('success', 'Flight updated successfully.');
    }

    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('flights.index')->with('success', 'Flight deleted successfully.');
    }
    
    public function search(Request $request)
    {
        $flightName = $request->input('flight_name');
        
        // Perform the flight search based on the flight name
        $flights = Flight::where('name', 'like', '%'.$flightName.'%')->get();
        
        return view('index')->with('flights', $flights);
    }
}
