<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Airline Reservation System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <style>
        body {
            background-color: #fff !important;
        }

        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }

        table {
            margin: 25px;
        }

        th,
        td {
            padding: 5px;
        }

        .tb-head {
            background-color: black !important;
            color: white !important
        }

        #EmpTable_filter {
            margin: 10px !important;
            color: black !important;

        }

        #EmpTable_length {
            margin: 10px !important;
            color: black !important;
        }

        #EmpTable_info {
            margin-top: 10px !important;
        }

        #EmpTable_paginate {
            margin-top: 10px !important;
            color: black !important;
        }
    </style>

</head>

<body>

    <h1>Booking Data</h1>

    <!-- Search Form -->
    <form method="POST" action="{{ route('booking.search') }}" style="display: inline;">
        @csrf
        <div class="form-group" style="display: inline;">
            <label for="name">Search by Username:</label>
            <input type="text" name="name" class="form-control" style="width: 200px;" placeholder="Enter username">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    
 
    

    <!-- Display Search Results -->
    @if(isset($bookseatData))
        <h2>Search Results</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Departure</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Passengers</th>
                    <th>Airline Name</th>
                    <th>Message</th>
                    <th>Flight Class Name</th>
                    <th>Description</th>
                    <th>Capacity</th>
                    <th>Fare</th>
                    <th>Amenities</th>
                    <th>Extra Baggage Fee</th>
                    <th>Priority Boarding</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookseatData as $bookseat)
                    <tr>
                        <td>{{ $bookseat->name }}</td>
                        <td>{{ $bookseat->email }}</td>
                        <td>{{ $bookseat->phone }}</td>
                        <td>{{ $bookseat->departure }}</td>
                        <td>{{ $bookseat->destination }}</td>
                        <td>{{ $bookseat->date }}</td>
                        <td>{{ $bookseat->time }}</td>
                        <td>{{ $bookseat->passengers }}</td>
                        <td>{{ $bookseat->airline_name }}</td>
                        <td>{{ $bookseat->message }}</td>
                        <td>{{ $bookseat->flight_class_name }}</td>
                        <td>{{ $bookseat->description }}</td>
                        <td>{{ $bookseat->capacity }}</td>
                        <td>{{ $bookseat->fare }}</td>
                        <td>{{ $bookseat->amenities }}</td>
                        <td>{{ $bookseat->extra_baggage_fee }}</td>
                        <td>{{ $bookseat->priority_boarding }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Vendor JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#EmpTable').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "INPUT",
                    searchPlaceholder: "Search",
                }
            });
        });
    </script>

</body>

</html>
