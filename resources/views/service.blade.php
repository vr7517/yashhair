@extends('layouts.app')
@section('page_title', 'service')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Services</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

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

@endsection
