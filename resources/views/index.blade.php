@extends('layouts.main')
@section('bet-section')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>Airline Reservations</span></h1>
                    <h2>Book your flights with ease and convenience!</h2>

                    <div class="btns">
                        <a class=" btn-menu animated fadeInUp scrollto" data-bs-toggle="collapse" href="#collapseExample"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            Flight Search
                        </a>

                        <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Flight</a>
 
                        <div class="collapse mt-4" id="collapseExample">
                            <div class="card card-body" style="width: 350px !important;">
                                <form action="{{ route('flights.search') }}" method="GET">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="form-control me-2" type="search" placeholder="Search"
                                                aria-label="Search" name="flight_name">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show text-center mt-4" role="alert">
                            {{ session('success') }}
                           
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
    
                    @endif


                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="https://https://www.youtube.com/watch?v=RoKeSWzZAwA" class="glightbox play-btn"></a>
                </div>
            </div>
            @if (isset($flights))
                @if ($flights->count() > 0)
                    <div class="mt-4 col-md-12">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Flight Name</th>
                                    <th>Departure</th>
                                    <th>Destination</th>
                                    <th>Available Seats</th>
                                </tr>
                            </thead>
                            <tbody class="text-light border border-light">
                                @foreach ($flights as $flight)
                                    <tr>
                                        <td>{{ $flight->name }}</td>
                                        <td>{{ $flight->departure }}</td>
                                        <td>{{ $flight->destination }}</td>
                                        <td>{{ $flight->seats }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>No flights found for the provided search query.</p>
                @endif
            @endif
        </div>
    </section><!-- End Hero -->


    <main id="main">

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="assets/img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Experience seamless flight bookings with our reliable reservation system.</h3>
                        <p class="fst-italic">
                            Discover a hassle-free way to book flights and manage your travel plans. Our intuitive
                            reservation system allows you to search for the best flight options, compare fares, and secure
                            your bookings in just a few clicks. With our user-friendly interface and secure payment options,
                            you can trust us to handle your travel needs with utmost convenience and peace of mind.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Easy and convenient flight search and booking process.
                            </li>
                            <li><i class="bi bi-check-circle"></i> Secure payment options and data protection.</li>
                            <li><i class="bi bi-check-circle"></i> 24/7 customer support for any travel-related inquiries.
                            </li>
                        </ul>
                        <p>
                            Experience the joy of seamless flight bookings with our reliable reservation system. We strive
                            to provide the best travel experience for our customers, ensuring convenience, safety, and
                            exceptional service. Whether you're planning a business trip or a vacation, we've got you
                            covered.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Why Us</h2>
                    <p>Why Choose Our Airline Reservation System</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>01</span>
                            <h4>Easy Flight Search</h4>
                            <p>Effortlessly find and compare flights based on your preferences and travel needs. Our
                                intuitive search feature ensures a seamless experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>02</span>
                            <h4>Secure Booking Process</h4>
                            <p>Your security is our top priority. With our robust reservation system, you can book your
                                flights with confidence, knowing that your personal information is protected.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>03</span>
                            <h4>24/7 Customer Support</h4>
                            <p>We are here for you round the clock. Our dedicated support team is available 24/7 to assist
                                you with any queries or concerns you may have during your travel journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->


        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Menu</h2>
                    <p>Check Our Tasty Menu</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-starters">Starters</li>
                            <li data-filter=".filter-salads">Salads</li>
                            <li data-filter=".filter-specialty">Specialty</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Paneer Tikka</a><span>$5.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Marinated cottage cheese grilled with spices
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Biryani</a><span>$6.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Fragrant rice dish with aromatic spices and choice of meat
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Samosa</a><span>$3.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Crispy pastry filled with spiced potatoes and peas
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Chicken Karahi</a><span>$8.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Traditional Pakistani chicken curry cooked in a karahi
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Butter Chicken</a><span>$9.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Creamy tomato-based curry with tender chicken pieces
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Pani Puri</a><span>$4.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Hollow crispy puri filled with flavored water, tamarind chutney, and spices
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Aloo Tikki Chaat</a><span>$5.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Crispy potato patties topped with yogurt, chutneys, and sev
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Chicken Biryani</a><span>$10.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Fragrant rice dish with aromatic spices and tender chicken pieces
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Chicken Tikka Masala</a><span>$11.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Grilled chicken tikka cooked in a creamy tomato-based sauce
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Menu Section -->


        @include('flights')


        @include('bookflight')


        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What our customers are saying</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    I had an amazing experience flying with this airline. The staff was friendly and
                                    professional, and the service was top-notch. The in-flight amenities and entertainment
                                    options were impressive. I would definitely recommend this airline to others.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Frequent Flyer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    The airline exceeded my expectations in terms of comfort and convenience. The seats were
                                    spacious, and the in-flight meals were delicious. The cabin crew was attentive and made
                                    sure I had a pleasant journey. I look forward to flying with this airline again.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Frequent Flyer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    I had a wonderful experience with this airline. The customer service was exceptional,
                                    and the flights were always on time. The business class amenities were impressive, and I
                                    enjoyed the exclusive lounge access. I highly recommend this airline to anyone looking
                                    for a premium travel experience.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Business Traveler</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    I've been a loyal customer of this airline for years, and they never disappoint. The
                                    first-class experience is unmatched, with luxurious amenities and personalized service.
                                    The in-flight entertainment options and gourmet dining make every journey a memorable
                                    one. I wouldn't choose any other airline for my travels.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>First-Class Traveler</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    The airline's attention to detail and commitment to customer satisfaction are
                                    commendable. The economy class was comfortable, and the flight attendants were friendly
                                    and helpful. I had a smooth and enjoyable journey from start to finish. I highly
                                    recommend this airline for both short and long-haul flights.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Economy Traveler</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        @include('contact')


    </main><!-- End #main -->
@endsection
