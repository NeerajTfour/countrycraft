@extends('welcome')

@section('master')
    <main id="main">

        <section class="container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/assets/images/1660920837778.jpg" alt="" width="100%" height="290px">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 heading">
                        <h1 class="pb-3">Contact us</h1>
                        <!-- ======= Contact Section ======= -->
                        <section id="contact" class="contact mb-3">
                            <div class="container">
                                <div class="row gy-5 gx-lg-5">

                                    <div class="col-lg-4">

                                        <div class="info">
                                            <h3>Get in touch</h3>
                                            <p></p>

                                            <div class="info-item d-flex">
                                                <i class="fa fa-geo-alt flex-shrink-0"></i>
                                                <div>
                                                    <h4>Location:</h4>
                                                    <p> India Office : <br>
                                                        G 927- 928 Phase 4 Boranada, <br>
                                                        Jodhpur, Rajasthan 342012</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="info-item d-flex">
                                                <i class="fa fa-envelope flex-shrink-0"></i>
                                                <div>
                                                    <h4>Email:</h4>
                                                    <p>admin@countrycraftexports.com</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="info-item d-flex">
                                                <i class="fa fa-phone flex-shrink-0"></i>
                                                <div>
                                                    <h4>Call:</h4>
                                                    <p>+91 291 2951217</p>
                                                    <p>+91 9829027518</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                            <div class="info-item d-flex">
                                                <i class="fa fa-clock"></i>
                                                <div>
                                                    <h4>Open Hours:</h4>
                                                    <p>Mon-sat</p>
                                                    <p>10:Am to 7:Pm</p>
                                                </div>
                                            </div><!-- End Info Item -->

                                        </div>

                                    </div>

                                    <div class="col-lg-8">
                                        <form action="" method="POST" role="form" class="php-email-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Your Name" required>
                                                </div>
                                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Your Email" required>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject" required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                            </div>
                                            <div class="my-3">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                            </div>
                                            <div class="text-center">
                                                <button class="p-2 mt-3"
                                                    style="
                              background-color: #d35400;
                              border: 1px solid #d35400;
                              border-radius: 50px;
                              color: white;
                              width: 170px;
                            "
                                                    type="submit" value="" name="">
                                                    Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div><!-- End Contact Form -->

                                </div>

                            </div>
                        </section><!-- End Contact Section -->
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-12 col-sm-12 smt-30 xmt-30">
                        <div class="map-contacts">
                            <div id="googleMap">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14323.330076149523!2d72.9370856!3d26.1695834!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb5a559669c9b5c23!2sCountry%20Craft%20Exports%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1669878570810!5m2!1sen!2sin"
                                    width="100%" height="350px"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <P></P>
                    </div>
                </div>
            </div>

        </section>

    </main>
@endsection
