<!DOCTYPE html>
<html>

<head>
    <title>Add New Student</title>
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.
css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        form {

            border-radius: 1rem;
            background-color: hsl(0, 100%, 78%);
            border: 4px solid hsl(0, 0%, 90%);
            display: flex;
            flex-direction: column !important;

        }

        input {
            height: 35px;
            margin-bottom: -10px;
        }

        .main-ctn {}

        .sub-btn {
            background-color: rgb(132, 132, 255) !important;
            color: white !important;

            margin-bottom: 20px !important;

        }
    </style>
</head>

<body>
    <h2 style="border: 1px solid rgb(254, 240, 240); background-color:rgb(56, 152, 0); text-align:center; color:white">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-check"
            viewBox="0 0 16 16">
            <path
                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
            <path
                d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
        </svg>
        Add New Class
    </h2>

    <!-- For Redirecting With Flashed Session Data when 'Submit' button -->
    <!-- is pressed in the 'create.blade.php' view which calls the relevant -->
    <!-- function 'store' in the StudentController and then this -->
    <!-- view, 'create.blade.php' is again called -->
    <!-- START -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status') }}
        </div>
    @endif
    <!-- END -->
    <div class="container main-ctn">
        <form action="{{ route('admin_add_class') }}" method="post">
            @csrf
        
            <label for="class_name">Class Name: &nbsp;</label>
            <input type="text" id="class_name" name="class_name" value=""><br>
            <span class="text-danger">
                @error('class_name')
                    {{ $message }}
                @enderror
            </span><br><br>
        
            <label for="description">Description: &nbsp;</label>
            <input type="text" id="description" name="description" value=""><br>
            <span class="text-danger">
                @error('description')
                    {{ $message }}
                @enderror
            </span><br><br>
        
            <label for="capacity">Capacity: &nbsp;</label>
            <input type="text" id="capacity" name="capacity" value=""><br>
            <span class="text-danger">
                @error('capacity')
                    {{ $message }}
                @enderror
            </span><br><br>
        
            <label for="fare">Fare: &nbsp;</label>
            <input type="text" id="fare" name="fare" value=""><br>
            <span class="text-danger">
                @error('fare')
                    {{ $message }}
                @enderror
            </span><br><br>
        
            <label for="amenities">Amenities: &nbsp;</label>
            <input type="text" id="amenities" name="amenities" value=""><br>
            <span class="text-danger">
                @error('amenities')
                    {{ $message }}
                @enderror
            </span><br><br>
        
            <label for="extra_baggage_fee">Extra Baggage Fee: &nbsp;</label>
            <input type="text" id="extra_baggage_fee" name="extra_baggage_fee" value=""><br>
            <span class="text-danger">
                @error('extra_baggage_fee')
                    {{ $message }}
                @enderror
            </span><br><br>
        
            <label for="priority_boarding">Priority Boarding: &nbsp;</label>
            <input type="text" id="priority_boarding" name="priority_boarding" value=""><br>
            <span class="text-danger">
                @error('priority_boarding')
                    {{ $message }}
                @enderror
            </span><br><br>
        
            <input type="submit" value="Submit" class="sub-btn">
            <a class="btn btn-success p-3" href="{{ url('/airline/admin') }}">View</a>
        
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </form>
        
    </div>

</body>

</html>
