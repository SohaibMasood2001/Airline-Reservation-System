  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact ">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Contact</h2>
              <p>Contact Us</p>
          </div>
      </div>

      <div data-aos="fade-up">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26600.644055769546!2d72.80622008354362!3d33.551284552925175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df999324e8b081%3A0x4436b8765030008!2sIslamabad%20International%20Airport!5e0!3m2!1sen!2s!4v1685222559247!5m2!1sen!2s"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

          <div class="row mt-5">

              <div class="col-lg-4">
                  <div class="info">
                      <div class="address">
                          <i class="bi bi-geo-alt"></i>
                          <h4>Location:</h4>
                          <p>New Islamabad, Airport Road, Islamabad, Rawalpindi, Islamabad Capital Territory</p>
                      </div>

                      <div class="open-hours">
                          <i class="bi bi-clock"></i>
                          <h4>Open Hours:</h4>
                          <p>
                              Monday-Saturday:<br>
                              11:00 AM - 2300 PM
                          </p>
                      </div>

                      <div class="email">
                          <i class="bi bi-envelope"></i>
                          <h4>Email:</h4>
                          <p>info@example.com</p>
                      </div>

                      <div class="phone">
                          <i class="bi bi-phone"></i>
                          <h4>Call:</h4>
                          <p>+92 330 565655</p>
                      </div>

                  </div>

              </div>

              <div class="col-lg-8 mt-5 mt-lg-0 ">

                  <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                    @csrf
                      <div class="row">
                          <div class="col-md-6 form-group">
                              <input type="text" name="name" class="form-control" id="name"
                                  placeholder="Your Name" >
                                  <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                                  
                          </div>
                          <div class="col-md-6 form-group mt-3 mt-md-0">
                              <input type="email" class="form-control" name="email" id="email"
                                  placeholder="Your Email" >
                                  <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 form-group">
                              <input type="text" name="subject" class="form-control" id="subject"
                                  placeholder="Your subject" >
                                  <span class="text-danger">
                                    @error('subject')
                                        {{ $message }}
                                    @enderror
                                </span>
                          </div>
                          <div class="col-md-6 form-group mt-3 mt-md-0">
                              <input type="text" class="form-control" name="phone" id="phone"
                                  placeholder="Your Phone" >
                                  <span class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                          </div>
                      </div>

                      <div class="form-group mt-3">
                          <textarea class="form-control" name="message" rows="8" placeholder="Message" ></textarea>
                          <span class="text-danger">
                            @error('message')
                                {{ $message }}
                            @enderror
                        </span>
                      </div>

                      <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                  @if (session('contact_message'))
                      <div class="alert alert-success alert-dismissible fade show text-center mt-4" role="alert">
                          {{ session('contact_message') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  @endif
              </div>

          </div>

      </div>
  </section><!-- End Contact Section -->
