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
    <h2
        style="border: 5px solid rgb(17, 169, 0); background-color:rgb(0, 0, 0); 
    text-align:center; color:white !important; padding:10px">
        Update Booked Flight
    </h2>
    <div class="container up-ctn h-100">
        <form action="{{ URL::to('airline/admin/addflight/update', $adminaddflight->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="name">Flight Name:</label>
                    <input type="text" name="name" value="{{ $adminaddflight->name }}" required
                        class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="email">seats:</label>
                    <input type="text" name="seats" value="{{ $adminaddflight->seats }}" required
                        class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="departure">Departure:</label>
                    <input type="text" name="departure" value="{{ $adminaddflight->departure }}" required
                        class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="destination">Destination:</label>
                    <input type="text" name="destination" value="{{ $adminaddflight->destination }}" required
                        class="form-control">
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="time">Class</label>
                    <input type="text" name="class" value="{{ $adminaddflight->class }}" required
                        class="form-control">
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
