<div class="container">

    <!-- resources/views/components/whatsapp-button.blade.php -->
    @props(['phone' => '9981529550', 'message' => "Hello! I’d like to know more about your salon services. Could you share details and pricing?"])

    <a href="https://wa.me/{{ $phone }}?text={{ urlencode($message) }}" class="whatsapp-float" target="_blank">
        <img src="{{ asset('assets/images/whatsapp-icon.png') }}" alt="WhatsApp" class="whatsapp-icon">
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 60px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        .whatsapp-icon {
            width: 40px;
            /* height: 50px; */
        }
    </style>

    <div class="row">
        <div class="col-lg-7">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-contact">
                        <h2>Salon Address</h2>
                        <p><i class="fa fa-map-marker-alt"></i>Infront of Ashish Hospital, Chandrika Apartment, Home
                            Science College Rd, Napier Town, Jabalpur, Madhya Pradesh 482004</p>
                        <p><i class="fa fa-phone-alt"></i>099815 29550</p>
                        <p><i class="fa fa-envelope"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="f59c9b939ab5908d9498859990db969a98">[email&#160;protected]</a></p>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/p/Yash-Hair-Pacth-Studieo-Jabalpur-61556069313370/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/yashhairpatch/"><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-link">
                        <h2>Quick Links</h2>
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="footer-newsletter">
                <h2>Newsletter</h2>
                <p>
                    We are providing services to male and female like hair patches, hair extensions, hair topper, hair
                    bigs for cancer patients, silicon bonding, hair cutting, facial, Cline up, grooming (Male & Female)
                </p>
                <div class="form">
                    <input class="form-control" placeholder="Email goes here">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container copyright">
    <div class="row">
        <div class="col-md-6">
            <p>&copy; <a href="#">Yash Hair</a>, All Right Reserved.</p>
        </div>
        <div class="col-md-6">
            <p>Designed By <a href="https://htmlcodex.com">Rohit Namdeo</a></p>
        </div>
    </div>
</div>
