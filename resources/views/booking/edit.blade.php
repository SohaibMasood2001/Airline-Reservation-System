<!DOCTYPE html>
<html>

<head>
    <title>Update Bookings</title>
    <style>
        .up-ctn {
            background-color: black !important;
            color: white !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            width: fit-content !important;
            padding: 20px !important;
        }
    </style>
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
ss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>

<body style="background: url('{{ asset('assets/img/update_bg.jpg') }}');">
    <h2 style="border: 5px solid rgb(17, 169, 0); background-color:rgb(0, 0, 0); 
    text-align:center; color:white !important; padding:10px">
        Update Booked Flight
    </h2>
    <div class="container up-ctn h-100">
        <form action="{{ route('flight.update', $bookSeat->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $bookSeat->name }}" required class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $bookSeat->email }}" required class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" value="{{ $bookSeat->phone }}" required class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="departure">Departure:</label>
                    <input type="text" name="departure" value="{{ $bookSeat->departure }}" required class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="destination">Destination:</label>
                    <input type="text" name="destination" value="{{ $bookSeat->destination }}" required class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="date">Date:</label>
                    <input type="text" name="date" value="{{ $bookSeat->date }}" required class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="time">Time:</label>
                    <input type="text" name="time" value="{{ $bookSeat->time }}" required class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="passengers">Passengers:</label>
                    <input type="number" name="passengers" value="{{ $bookSeat->passengers }}" required class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <label for="airline">Airline:</label>
                <input type="text" name="airline" value="{{ $bookSeat->airline_name }}" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="message">Message:</label>
                    <textarea name="message" class="form-control">{{ $bookSeat->message }}</textarea>
                </div>
                
            </div>
            
            <div class="row" style="margin-top: 10px !important">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success text-light">Update</button>
                </div>
            </div>
        </form>
        
        
        
    </div>

</body>

</html>
