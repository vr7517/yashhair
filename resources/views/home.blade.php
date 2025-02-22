@extends('layouts.app')
@section('page_title', 'Home')

@section('content')
    <!-- Hero Start -->
    <div class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-text">
                        <h1 class="text-[3BBA9C]-500">Yash Hair Patch Studio | Jabalpur </h1>
                        <p>
                            At Yash Hair Patch Studio, we specialize in natural-looking hair patches, wigs, and non-surgical
                            hair replacement solutions to give you a flawless look.
                        </p>
                        <a class="btn" href="https://htmlcodex.com/barber-shop-template"> Contact Us</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{ asset('assets/images/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                data-target="#videoModal">
                <span></span>
            </button>
        </div>
    </div>

    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/about.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Learn About Us</p>
                        <h2>Revive Your Confidence with Yash Hair Patch Studio</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            With advanced techniques, premium materials, and personalized care, we help you achieve a
                            flawless, undetectable look. Whether you’re dealing with hair thinning, baldness, or just want a
                            new style, Yash Hair Patch Studio is your trusted destination for hair restoration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- gallary Start -->
    <div class="gallery">
        <div class="container">
            <div class="section-header text-center">
                <p>Gallery</p>
                <h2>Our Best Collection</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Cut</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-1.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Wash</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-2.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Color</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-3.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Shave</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-4.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Straight</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-5.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Facial</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-6.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Shampoo</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-7.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Beard Trim</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallary End -->

    <!-- Pricing Start -->
    <div class="price">
        <div class="container ">
            <p>
            <div class="container">
                <div class="small-container text-center">
                    <h3 class="text-center mb-4">Why Choose <span class="text-success">Yash Hair Patch
                            Studio?</span></h3>
                    <ul class="list-group list-unstyled mt-3">
                        <li class="list-group-item">✔ Natural & Undetectable Hair Patches</li>
                        <li class="list-group-item">✔ Customized Solutions for Men & Women</li>
                        <li class="list-group-item">✔ Painless, Non-Surgical Hair Fixing</li>
                        <li class="list-group-item">✔ Expert Consultation & Personalized Service</li>
                        <li class="list-group-item">✔ Affordable & Long-Lasting Results</li>
                    </ul>
                </div>
            </div>
            </p>
        </div>
        <div class="container ">
            <div class="section-header text-center">
                <p>Our Best Pricing</p>
                <h2>We Provide Best Price in the City</h2>
            </div>
            <div class="row mx-1">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card ">
                            <img src="{{ asset('assets/images/price-1.png') }}" class="card-img-top p-2" alt="..." height="140px">
                            <div class="card-body px-10 py-0">
                                <h6 class="card-title ">Hair cut</h6>
                                <p class="card-text">₹150</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/images/price-2.png') }}" class="card-img-top p-2" alt="..." height="140px">
                            <div class="card-body px-10 py-0">
                                <h6 class="card-title">Hair patch</h6>
                                <p class="card-text">₹1200</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/images/price-3.png') }}" class="card-img-top p-2" alt="..." height="140px">
                            <div class="card-body px-10 py-0">
                                <h6 class="card-title">Hair color</h6>
                                <p class="card-text">₹250</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/images/price-3.png') }}" class="card-img-top p-2" alt="..." height="140px">
                            <div class="card-body px-10 py-0">
                                <h6 class="card-title">Hair cut</h6>
                                <p class="card-text">₹150</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <p>
                        "Amazing service! I got a stylish haircut and a beard trim, and the staff did an excellent job. They
                        listened to my preferences and suggested a style that suited me perfectly. The salon is clean and
                        well-maintained. Highly recommend!"
                    </p>
                    <h2>Sandeep kourav</h2>
                    <h3>clerk</h3>
                </div>
                <div class="testimonial-item">
                    <p>
                        "The overall experience was great. I opted for a hair spa, and my hair feels much healthier now. The
                        staff was polite and professional. The only reason I'm giving four stars instead of five is that I
                        had to wait a bit longer than expected."
                    </p>
                    <h2>vivek rajpoot</h2>
                    <h3>manager</h3>
                </div>
                <div class="testimonial-item">
                    <p>
                        "Best salon in Jabalpur! I went for a keratin treatment, and the results were beyond my
                        expectations. My hair is super smooth and frizz-free now. The pricing is reasonable for the quality
                        of service they provide. Will definitely visit again!"
                    </p>
                    <h2>Tulsi</h2>
                    <h3>developer</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Salon Services</p>
                <h2>Best Salon and Barber Services for You</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/service-1.jpeg') }}" alt="Image">
                        </div>
                        <h3>Hair Cut</h3>
                        <p>
                            Stay trendy with our professional haircuts and styling for both men and women.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/service-2.jpeg') }}" alt="Image">
                        </div>
                        <h3>Hair Patch</h3>
                        <p>
                            Restore your confidence with natural hair patches. non-surgical
                            solutions for a perfect blend with your natural hair.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/service-3.png') }}" alt="Image">
                        </div>
                        <h3>Bridal & Party Makeovers</h3>
                        <p>
                            Look your best on your special day with our custom bridal and party makeover services.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

 

    <!-- Contact Start -->
    <div class="contact">
        <div class="container-fluid flex">
            <div class="container">
                <div class="row align-items-center">
                    <div class="img">
                        <img src="{{ asset('assets/images/contact.png') }}" alt="" >
                    </div>
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
