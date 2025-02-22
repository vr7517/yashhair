@extends('layouts.app')
@section('page_title', 'About')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

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

@endsection
