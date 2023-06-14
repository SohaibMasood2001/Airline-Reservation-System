<?php

namespace App\Http\Controllers;

use App\Models\FlightClass;

use Illuminate\Http\Request;

class FlightClassController extends Controller
{
    public function index()
    {
        
        return view('admin.classes.add_class');
    }



    // ...
    
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            'description' => 'required',
            'capacity' => 'required|numeric',
            'fare' => 'required|numeric',
            'amenities' => 'required',
            'extra_baggage_fee' => 'required|numeric',
            'priority_boarding' => 'required'
        ]);
    
        // Create a new flight class record
        $flightClass = new FlightClass();
        $flightClass->class_name = $request->class_name;
        $flightClass->description = $request->description;
        $flightClass->capacity = $request->capacity;
        $flightClass->fare = $request->fare;
        $flightClass->amenities = $request->amenities;
        $flightClass->extra_baggage_fee = $request->extra_baggage_fee;
        $flightClass->priority_boarding = $request->priority_boarding;
    
        // Save the flight class record
        $flightClass->save();
    
        // Redirect to the desired page with success message
        return redirect('airline/admin')->with('success', 'Flight class added successfully.');
    }

    public function edit($id)
{
    $adminaddclass = FlightClass::find($id);

    if ($adminaddclass) {
        return view('admin.classes.edit', compact('adminaddclass'));
    } else {
        return redirect('airline/admin')->with('error', 'Flight Class not found.');
    }
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'class_name' => 'required',
        'description' => 'required',
        'capacity' => 'required|numeric',
        'fare' => 'required|numeric',
        'amenities' => 'required',
        'extra_baggage_fee' => 'required|numeric',
        'priority_boarding' => 'required',
    ]);

    $flightclassupdate = FlightClass::find($id);

    if ($flightclassupdate) {
        $flightclassupdate->class_name = $request->input('class_name');
        $flightclassupdate->description = $request->input('description');
        $flightclassupdate->capacity = $request->input('capacity');
        $flightclassupdate->fare = $request->input('fare');
        $flightclassupdate->amenities = $request->input('amenities');
        $flightclassupdate->extra_baggage_fee = $request->input('extra_baggage_fee');
        $flightclassupdate->priority_boarding = $request->input('priority_boarding');

        $flightclassupdate->save();

        return redirect()->route('flight.show')->with('flight-class-update', 'Flight Class updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Flight not found.');
    }
}


    public function delete($id) {
        // Delete the row pointed to by this CNIC
        FlightClass::destroy($id);
        
        
        return redirect()->back()->with('delete-success2', 'Flight Class with id '.$id.' Delated Successfully ');
        // --------------------------------------
        }
    
}
