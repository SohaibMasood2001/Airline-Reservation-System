<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddFlight;

class AdminAddFlightController extends Controller
{
    public function index() {
        return view ("admin.add_flight"); 
       }

       public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'seats' => 'required|numeric',
            'departure'=> 'required',
            'destination' => 'required',
            'class' => 'required',
            
        ]);

        $adminaddflight = new AdminAddFlight; // Must import the Model file: use App\Student;
        $adminaddflight->name= $request->get('name');
        $adminaddflight->seats= $request->get('seats');
        $adminaddflight->departure= $request->get('departure');
        $adminaddflight->destination= $request->get('destination');
        $adminaddflight->class= $request->get('class');
        

    
        $adminaddflight->save(); /* Store data inside the table */
         

        return redirect('airline/admin')->with('success', 'Add Flight successfully.');
       }
       public function edit($id)
{
    $adminaddflight = AdminAddFlight::find($id);

    if ($adminaddflight) {
        return view('admin.edit', compact('adminaddflight'));
    } else {
        return redirect('airline/admin')->with('error', 'Flight not found.');
    }
}

       public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'seats' => 'required|numeric',
        'departure' => 'required',
        'destination' => 'required',
        'class' => 'required',
    ]);

    $adminaddflight = AdminAddFlight::find($id);

    if ($adminaddflight) {
        $adminaddflight->name = $request->get('name');
        $adminaddflight->seats = $request->get('seats');
        $adminaddflight->departure = $request->get('departure');
        $adminaddflight->destination = $request->get('destination');
        $adminaddflight->class = $request->get('class');
        
        $adminaddflight->save();

        return redirect('airline/admin')->with('success', 'Flight updated successfully.');
    } else {
        return redirect('airline/admin')->with('error', 'Flight not found.');
    }
}

       public function delete($id) {
        // Delete the row pointed to by this CNIC
        AdminAddFlight::destroy($id);
        
        
        return redirect()->back()->with('delete-success', 'Flight with id '.$id.' Delated Successfully ');
        // --------------------------------------
        }
}
