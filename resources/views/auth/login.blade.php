<form action="{{ route('loginuser') }}" method="post" class="php-email-form">
    @csrf
    <h2 class="text-center mb-2 ">Login Here </h2>
    <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim
        linead sero park flows.</p>
    <div class="row gy-3">



        <div class="col-md-12 ">
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <span class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </span>
        <div class="col-md-12">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <span class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
        </span>
        <div class="row ">
            <div class="col-md-4">
                <input class="" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <div class="col-md-4"></div>
            {{-- <div class="col-md-4">
                <a href="{{ url('/forgot-password') }}">Forgot password?</a>
            </div> --}}
        </div>




        <div class="col-md-12 text-center mt-2">


            <button type="submit">Login</button>
        </div>
        <div class="col-md-12">
            <h3 class="text-center">OR</h3>
        </div>
        <div class="col-md-12 text-center">
           
           
              <a class="btn btn-lg btn-block btn-primary mb-2" href="{{ url('auth/google') }}"
              style="background-color: #dd4b39;"> Google</a>
                <a class="btn btn-lg btn-block btn-primary mb-2" href="{{ url('auth/facebook') }}" 
                style="background-color: #3b5998;"></i>Facebook</a>
                
        </div>
        <div class="col-md-12 text-center mt-2">
            Registered Now <a href="{{ url('/register') }}">SignUp</a>
        </div>

    </div>
    @if (Session::has('l-success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ Session::get('l-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Session::has('l-error'))
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            {{ Session::get('l-error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</form>
