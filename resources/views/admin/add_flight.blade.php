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
input{
  height: 35px;
  margin-bottom: -10px;
}
.main-ctn{

}
.sub-btn{
  background-color: rgb(132, 132, 255) !important;
  color: white !important;
 
  margin-bottom: 20px !important;
  
}
 </style>
</head>
<body>
 <h2 style="border: 1px solid rgb(254, 240, 240); background-color:rgb(56, 152, 0); text-align:center; color:white">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
  </svg>
 Add New Flight
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
  <form action="{{ route ('admin_add_flight') }}" method="post">
    @csrf
   

    <label for="name">Name: &nbsp;</label>
    <input type="text" id="name" name="name" value=""><br><br>
    <span class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </span>
    <label for="seats">Seats &nbsp;</label>
    <input type="text" id="seats" name="seats" value=""><br><br>
    <span class="text-danger">
        @error('seats')
            {{ $message }}
        @enderror
    </span>
    <label for="departure">Departure</label>

    <input type="text" name="departure" id="departure"><br><br>
    
    <span class="text-danger">
        @error('departure')
            {{ $message }}
        @enderror
    </span>
    <label for="destination">Destination: &nbsp;</label>
    <input type="text" id="destination" name="destination" value=""><br><br>
    <span class="text-danger">
        @error('destination')
            {{ $message }}
        @enderror
    </span>
    <label for="class">Class &nbsp;</label>
    <input type="text" id="class" name="class" value=""><br><br>
    <span class="text-danger">
        @error('class')
            {{ $message }}
        @enderror
    </span>
    
    <input type="submit" value="Submit" class="sub-btn">
   <a class="btn btn-success p-3 " href=" {{url('/airline/admin')}} " >view</a>

 
    </form>
 </div>
 
</body>
</html>