<form action="{{ route('registered') }}" method="post" class="php-email-form">
    @csrf
    <h3>Register Here </h3>
    <p>Fill relevant fields by providing information</p>
    <div class="row gy-3">

        <div class="col-md-12">
            <input type="text" name="name" class="form-control" placeholder="Name">
            <span class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="col-md-12 ">
            <input type="text" class="form-control" name="email" placeholder="Email">
            <span class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="phone" placeholder=" Phone number">
            <span class="text-danger">
                @error('phone')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-12">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="text-danger">
                @error('password')
                {{ $message }}
                @enderror
            </span>
            
        </div>

        <div class="col-md-12">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            <span class="text-danger">
                @error('password_confirmation')
                {{ $message }}
                @enderror
            </span>
        </div>



        <div class="col-md-12 text-center">


            <button type="submit">Register</button>
        </div>
        <div class="col-md-12 text-center">
            Already Registered ? <a href="/">Login</a>
        </div>
        <div class="col-md-12">
            @if (session('success-r'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{ session('success-r') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
            @endif
        </div>
    </div>
</form>
