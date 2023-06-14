<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BookSeat;
use App\Models\AdminAddFlight;
use App\Models\FlightClass;
use App\Models\BookSeatFlightClass;
class BookingController extends Controller
{
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'departure' => 'required',
            'destination' => 'required',
            'date' => 'required',
            'time' => 'required',
            'passengers' => 'required|integer',
            'message' => 'nullable',
            'airline_name' => 'required|in:Emirates,Singapore Airlines,Qatar Airways,Cathay Pacific,Lufthansa,Air France,British Airways,American Airlines,Delta Air Lines,United Airlines,Southwest Airlines,Ryanair,EasyJet,Air Canada,Japan Airlines,Qantas',
            'passport'=> 'required|mimes:pdf,doc,docx,jpeg,jpg,png|max:10000',
            'flight_class_id' => 'required',
        ]);
    
        $validatedData['status'] = 'Booked';
        $BookSeat = new BookSeat();
        if ($request->file('passport')->isValid()) {
            $filename = time().'.'.$request->passport->extension();
            $request->passport->storeAs('public', $filename);
            $cp = $request->input('class_id');
            $bsfc  = new BookSeatFlightClass;
         
            $BookSeat->name = $validatedData['name'];
            $BookSeat->email = $validatedData['email'];
            $BookSeat->phone = $validatedData['phone'];
            $BookSeat->departure = $validatedData['departure'];
            $BookSeat->destination = $validatedData['destination'];
            $BookSeat->date = $validatedData['date'];
            $BookSeat->time = $validatedData['time'];
            $BookSeat->passengers = $validatedData['passengers'];
            $BookSeat->message = $validatedData['message'];
            $BookSeat->airline_name = $validatedData['airline_name'];
            $BookSeat->status = $validatedData['status'];
            $BookSeat->passport = $filename;
            $BookSeat->flight_class_id = $validatedData['flight_class_id'];
            $BookSeat->save();
           
       
         $pdf = PDF::loadView('booking.ticket', compact('BookSeat'));
         $ticketFilename = 'ticket_' . uniqid() . '.pdf';
         $pdf->save(storage_path('app/public/' . $ticketFilename));
            return redirect('/checkout')
                ->with('success', 'Your Seat Booked Successfully at ID '.$BookSeat->id.' Remember this ID you can Download Ticket ')
                ->with('BookSeat', $BookSeat);
        }
      
      
        return redirect()->back()->with('error', 'Failed to upload passport.');
    }
    
    public function download(Request $request)
    {
        $id = $request->input('ticket_id');
        $BookSeat = DB::table('bookseat')
        ->where('id', $id)
        ->get();
       
    
        // Generate the PDF ticket
        $pdf = PDF::loadView('booking.ticket', compact('BookSeat'));
    
        // Generate a unique filename for the ticket
        $filename = 'ticket_' . uniqid() . '.pdf';
    
        // Save the PDF file in the storage directory
        $pdf->save(storage_path('app/public/' . $filename));
    
        // Provide a download link to the user
        return response()->download(storage_path('app/public/' . $filename));
    }

public function show()
{
    
     
    $flight = BookSeat::all();
    $addflight = AdminAddFlight::all();
    $flightclass = FlightClass::all();

    if (!$flight) {
        return redirect()->back()->with('error', 'No currently booked flight found.');
    }

    return view('admin.show', compact('flight', 'addflight', 'flightclass'));
}
public function edit($id) {

    $bookSeat = BookSeat::find($id); 
    return view('booking.edit', compact('bookSeat'));
    }
    public function update(Request $request, $id) {

       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'departure' => 'required',
            'destination' => 'required',
            'date' => 'required',
            'time' => 'required',
            'passengers' => 'required|integer',
            'airline' => 'required|in:Emirates,Singapore Airlines,Qatar Airways,
            Cathay Pacific,Lufthansa,Air France,British Airways,American Airlines,
            Delta Air Lines,United Airlines,Southwest Airlines,Ryanair,EasyJet,Air Canada,
            Japan Airlines,Qantas',
            'message' => 'nullable',
            
        ]);
    
        $bookSeat = BookSeat::find($id);
        $bookSeat->name = $request->name;
        $bookSeat->email = $request->email;
        $bookSeat->phone = $request->phone;
        $bookSeat->departure = $request->departure;
        $bookSeat->destination = $request->destination;
        $bookSeat->date = $request->date;
        $bookSeat->time = $request->time;
        $bookSeat->passengers = $request->passengers;
        $bookSeat->airline_name = $request->airline;
        $bookSeat->message = $request->message;
        $bookSeat->status = 'Booked';
        $bookSeat->save();
       

        return redirect()->route('flight.show')->with('status', 'Your booking details updated successfully!');
// --------------------------------------
}
public function delete($id) {
    // Delete the row pointed to by this CNIC
    BookSeat::destroy($id);
    
    
    return redirect('airline/admin')->with('status', 'Your Booked Seat with id '.$id.' Delated Successfully ');
    // --------------------------------------
    }
    public function assignFlightClasses(BookSeat $bookSeat)
    {
        $flightClasses = FlightClass::all();
        return view('booking.assign_flight_classes', compact('bookSeat', 'flightClasses'));
    }

    public function storeAssignedFlightClasses(Request $request, BookSeat $bookSeat)
    {
        $bookSeat->flightClasses()->sync($request->flight_classes);

        return redirect()->route('booking.show')->with('success', 'Flight classes assigned successfully.');
    }

    public function searchBookSeat(Request $request)
{
    $name = $request->input('name');

$bookseatData = DB::table('bookseat')
    ->join('flight_classes', 'bookseat.flight_class_id', '=', 'flight_classes.id')
    ->select('bookseat.*', 'flight_classes.*', 'flight_classes.class_name AS flight_class_name')
    ->where('bookseat.name', $name)
    ->get();


    return view('booking.data', ['bookseatData' => $bookseatData]);
}

}
