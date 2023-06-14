   <!-- ======= Book A Table Section ======= -->
   <section id="book-a-table" class="book-a-table">
       <div class="container" data-aos="fade-up">

           <div class="section-title">
               <h2>Flight Reservation</h2>
               <div class="row">
                   <div class="col-md-6">
                       <p>Book a Flight</p>
                   </div>
                   <div class="col-md-6 d-flex justify-content-end">

                       <button class="btn btn-success ms-2 "><a href="{{ url('/booking/flightsearch') }}"
                               class="text-light">Search Booking
                           </a> </button>
                   </div>
               </div>


           </div>

           <form action="{{ route('flight.book') }}" method="post" role="form" class="php-email-form"
               data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
               @csrf
               <div class="row">
                   <div class="col-lg-4 col-md-6 form-group">
                       <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                           data-rule="minlen:4" data-msg="Please enter at least 4 characters">
                       <span class="text-danger">
                           @error('name')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

                   <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                       <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                           data-rule="email" data-msg="Please enter a valid email">
                       <span class="text-danger">
                           @error('email')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

                   <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                       <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                           data-rule="minlen:4" data-msg="Please enter at least 4 characters">
                       <span class="text-danger">
                           @error('phone')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

                   <div class="col-lg-4 col-md-6 form-group mt-3">
                       <input type="text" name="departure" class="form-control" id="departure"
                           placeholder="Departure" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
                       <span class="text-danger">
                           @error('departure')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

                   <div class="col-lg-4 col-md-6 form-group mt-3">
                       <input type="text" class="form-control" name="destination" id="destination"
                           placeholder="Destination" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
                       <span class="text-danger">
                           @error('destination')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

                   <div class="col-lg-4 col-md-6 form-group mt-3">
                       <input type="date" class="form-control" name="date" id="date" placeholder="Date">
                       <span class="text-danger">
                           @error('date')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

                   <div class="col-lg-4 col-md-6 form-group mt-3">
                       <input type="time" class="form-control" name="time" id="time" placeholder="Time">
                       <span class="text-danger">
                           @error('time')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

                   <div class="col-lg-4 col-md-6 form-group mt-3">
                       <input type="number" class="form-control" name="passengers" id="passengers"
                           placeholder="# of passengers" data-rule="min:1" data-msg="Please enter at least 1 passenger">
                       <span class="text-danger">
                           @error('passengers')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>
                   <div class="col-lg-4 col-md-6 form-group mt-3">
                       <select class="form-control" id="airline_name" name="airline_name" class="bg-dark text-light"
                           selected>
                           <option value="" class="bg-dark text-light">Select an Airline</option>
                           <option value="Emirates" class="bg-dark text-light">Emirates</option>
                           <option value="Singapore Airlines" class="bg-dark text-light">Singapore Airlines</option>
                           <option value="Qatar Airways" class="bg-dark text-light">Qatar Airways</option>
                           <option value="Cathay Pacific" class="bg-dark text-light">Cathay Pacific</option>
                           <option value="Lufthansa" class="bg-dark text-light">Lufthansa</option>
                           <option value="Air France" class="bg-dark text-light">Air France</option>
                           <option value="British Airways" class="bg-dark text-light">British Airways</option>
                           <option value="American Airlines" class="bg-dark text-light">American Airlines</option>
                           <option value="Delta Air Lines" class="bg-dark text-light">Delta Air Lines</option>
                           <option value="United Airlines" class="bg-dark text-light">United Airlines</option>
                           <option value="Southwest Airlines" class="bg-dark text-light">Southwest Airlines</option>
                           <option value="Ryanair" class="bg-dark text-light">Ryanair</option>
                           <option value="EasyJet" class="bg-dark text-light">EasyJet</option>
                           <option value="Air Canada" class="bg-dark text-light">Air Canada</option>
                           <option value="Japan Airlines" class="bg-dark text-light">Japan Airlines</option>
                           <option value="Qantas" class="bg-dark text-light">Qantas</option>
                       </select>

                   </div>

               </div>
               <div class="form-group mt-3">
                   <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                   <span class="text-danger">
                       @error('message')
                           {{ $message }}
                       @enderror
                   </span>

               </div>
               <div class="row">


                   <div class="col-md-6 mt-2">
                       <label for="passport" class="mb-2">Upload Passport</label><br>
                       <input type="file" name="passport" id="passport">
                   </div>
                   <div class="col-md-6">
                       <label for="class_id"></label>

                       <input type="number" name="flight_class_id" id="" class="border border-white"
                           placeholder="Flight class id i.e b=1, e=2, f=3" style="width:630px !important">
                       <span class="text-danger">
                           @error('flight_class_id')
                               {{ $message }}
                           @enderror
                       </span>
                   </div>

               </div>
               <div class="text-center">
                   <button class="btn btn-success text-light" type="submit">Book Flight </button>

               </div>


           </form>
           
       </div>
       <div class="row">
        <div class="col-md-4"></div>
        <div class=" col-md-4 mt-4" id="">
            <div class="card card-body" style="width: 500px !important;">
                <form action="{{ route('reservations.download') }}" method="GET">
                    <div class="row">
                        <div class="col-md-8">
                            <input class="form-control me-2" type="search" placeholder="Enter your id"
                                aria-label="Search" name="ticket_id">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-outline-success" type="submit" style="width:150px !important">Download Ticket</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
   </section><!-- End Book A Table Section -->
