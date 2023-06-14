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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
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






    <main id="main">


        <section class="inner-page" style="margin-top: 50px !important;">

            <a href="{{ route('flight_add_by_admin') }}" class="btn btn-primary"> Add New Flight</a>
            <a class="btn btn-success" href="{{ route('class_add_by_admin') }}">Add New Class</a>

            <table class="table table-hover text-dark " id="EmpTable">
                <thead>
                    <tr class="tb-head pe-4">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Departure</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>No of Passengers</th>
                        <th>Airline Name</th>
                        <th>Messege</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <p id="forDeleteCode"></p>
                    <!-- Using Blade Loop. -->
                    @foreach ($flight as $f)
                        <tr>
                            <td>{{ $f->id }}</td>
                            <td>{{ $f->name }}</td>
                            <td>{{ $f->email }}</td>
                            <td>{{ $f->phone }}</td>
                            <td>{{ $f->departure }}</td>
                            <td>{{ $f->destination }}</td>
                            <td>{{ $f->date }}</td>
                            <td>{{ $f->time }}</td>
                            <td>{{ $f->passengers }}</td>
                            <td>{{ $f->airline_name }}</td>
                            <td>{{ $f->message }}</td>
                            <td>{{ $f->status }}</td>
                            <td>
                                <a class="btn btn-primary text-light" style="border: 1px solid;"
                                    href="{{ URL::to('airline/admin/edit', $f->id) }}"
                                    title="Edit -> {{ $f->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></a>

                                <a class="btn btn-success text-light" style="border: 1px solid;"
                                    href="{{ URL::to('airline/admin/delete', $f->id) }}"
                                    onclick="return confirm ('Are you sure to delete the Passenger {{ $f->name }} having id {{ $f->id }}?')"
                                    title="Delete -> {{ $f->id }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-trash"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            @if (session('status'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('status') }}
                </div>
            @elseif(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('success') }}
                </div>
            @endif

        </section>

        <section class="inner-page" style="margin-top: 50px !important;">



            <table class="table table-hover text-dark " id="EmpTable">
                <thead>
                    <tr class="tb-head pe-4">
                        <th>Id</th>
                        <th>Class Name</th>
                        <th>Description</th>
                        <th>Capacity</th>
                        <th>Fare</th>
                        <th>Amenities</th>
                        <th>Extra Baggage Fee</th>
                        <th>Priority Boarding</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <p id="forDeleteCode"></p>
                    <!-- Using Blade Loop. -->
                    @foreach ($flightclass as $f)
                        <tr>
                            <td>{{ $f->id }}</td>
                            <td>{{ $f->class_name }}</td>
                            <td>{{ $f->description }}</td>
                            <td>{{ $f->capacity }}</td>
                            <td>{{ $f->fare }}</td>
                            <td>{{ $f->amenities }}</td>
                            <td>{{ $f->extra_baggage_fee }}</td>
                            <td>{{ $f->priority_boarding }}</td>

                            <td>
                                <a class="btn btn-primary text-light" style="border: 1px solid;"
                                    href="{{ URL::to('airline/admin/flightclass/edit', $f->id) }}"
                                    title="Edit -> {{ $f->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></a>

                                <a class="btn btn-success text-light" style="border: 1px solid;"
                                    href="{{ URL::to('airline/admin/flightclass/delete', $f->id) }}"
                                    onclick="return confirm ('Are you sure to delete the Passenger {{ $f->name }} having id {{ $f->id }}?')"
                                    title="Delete -> {{ $f->id }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-trash"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


            @if (session('flight-class-update'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('success') }}
                </div>
            @elseif (session('delete-success2'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('delete-success2') }}
                </div>
            @endif
        </section>
        <section class="inner-page " style="margin-top: 50px !important; margin-left:-20px !important;">


            <table class="table table-hover text-dark " id="EmpTable">
                <thead>
                    <tr class="tb-head pe-4">
                        <th>Id</th>
                        <th>Flight Name</th>
                        <th>Seats</th>
                        <th>Departure</th>
                        <th>Destination</th>
                        <th>Class</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <p id="forDeleteCode"></p>
                    <!-- Using Blade Loop. -->
                    @foreach ($addflight as $f)
                        <tr>
                            <td>{{ $f->id }}</td>
                            <td>{{ $f->name }}</td>
                            <td>{{ $f->seats }}</td>
                            <td>{{ $f->departure }}</td>
                            <td>{{ $f->destination }}</td>
                            <td>{{ $f->class }}</td>

                            <td>
                                <a class="btn btn-primary text-light" style="border: 1px solid;"
                                    href="{{ URL::to('airline/admin/addflight/edit', $f->id) }}"
                                    title="Edit -> {{ $f->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></a>

                                <a class="btn btn-success text-light" style="border: 1px solid;"
                                    href="{{ URL::to('airline/admin/addflight/delete', $f->id) }}"
                                    onclick="return confirm ('Are you sure to delete the Passenger {{ $f->name }} having id {{ $f->id }}?')"
                                    title="Delete -> {{ $f->id }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-trash"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            @if (session('delete-success'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('delete-success') }}
                </div>
            @endif

        </section>


    </main><!-- End #main -->


    <!-- ======= Footer ======= -->



    <div id="preloader"></div>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-
                                            pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
