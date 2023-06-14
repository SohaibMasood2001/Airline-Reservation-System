<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom styling for the ticket */
        .ticket {
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="ticket">
            <h2>Ticket Information</h2>
            <p>Name: {{ $BookSeat->first()->name }}</p>
            <p>Email: {{ $BookSeat->first()->email }}</p>
            <p>Flight Number: {{ $BookSeat->first()->phone }}</p>
            <p>Departure: {{ $BookSeat->first()->departure }}</p>
            <p>Destination: {{ $BookSeat->first()->destination }}</p>
            <p>Date: {{ $BookSeat->first()->date }}</p>
            <p>Airline Name: {{ $BookSeat->first()->airline_name }}</p>
            <p>Payment status: Paid</p>
        </div>
    </div>
</body>
</html>
