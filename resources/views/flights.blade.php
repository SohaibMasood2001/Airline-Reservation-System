 <!-- ======= Specials Section ======= -->
 <section id="specials" class="specials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Airline Reservation</h2>
            <p>Choose Your Seat Class</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Economy Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Business Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">First Class</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Economy Class</h3>
                                <p class="fst-italic">Enjoy a comfortable flight in our economy class seats.</p>
                                <p>Our economy class provides affordable and comfortable seating for your travel
                                    needs. With ample legroom and a range of amenities, you can relax and enjoy your
                                    journey.</p>
                                <p>Features of our Economy Class:</p>
                                <ul>
                                    <li>Comfortable seats with adequate legroom</li>
                                    <li>In-flight entertainment options</li>
                                    <li>Complimentary meals and beverages</li>
                                    <li>Access to onboard Wi-Fi</li>
                                    <li>Friendly and attentive cabin crew</li>
                                </ul>
                               <form action="" method="get">
                                    @csrf
                                    <input type="hidden" name="seat_class"
                                        value="Economy Class">

                                    <button class="btn btn-warning text-dark" type="submit">View
                                        Details</button>
                                </form>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assets/img/specials-1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>Business Class</h3>
                                <p class="fst-italic">Experience luxury and comfort in our business class seats.
                                </p>
                                <p>Upgrade your travel experience with our Business Class. Enjoy premium amenities
                                    and personalized service throughout your journey.</p>
                                <p>Features of our Business Class:</p>
                                <ul>
                                    <li>Spacious and comfortable seating</li>
                                    <li>Priority check-in and boarding</li>
                                    <li>Exclusive access to airport lounges</li>
                                    <li>Enhanced in-flight dining experience</li>
                                    <li>Extra baggage allowance</li>
                                </ul>
                                <form action="" method="get">
                                    @csrf
                                    <input type="hidden" name="seat_class"
                                        value="">

                                    <button class="btn btn-warning text-dark" type="submit">View
                                        Details</button>
                                </form>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assets/img/specials-2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>First Class</h3>
                                <p class="fst-italic">Indulge in luxury and personalized service in our first-class
                                    cabins.</p>
                                <p>Experience the epitome of luxury travel in our First Class. From spacious seating
                                    to exquisite dining options, every aspect of your journey is designed to provide
                                    the utmost comfort and sophistication.</p>
                                <p>Features of our First Class:</p>
                                <ul>
                                    <li>Luxurious and spacious private suites</li>
                                    <li>Dedicated onboard concierge service</li>
                                    <li>Gourmet dining with premium wine selection</li>
                                    <li>Access to exclusive airport lounges</li>
                                    <li>Priority baggage handling</li>
                                </ul>
                                <form action="" method="get">
                                    @csrf
                                    <input type="hidden" name="seat_class"
                                        value="">

                                    <button class="btn btn-warning text-dark" type="submit">View
                                        Details</button>
                                </form>
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>