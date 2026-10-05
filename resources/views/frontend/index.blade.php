@extends('frontend.frontend_master')
@section('frontend_content')

<!-- Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="hero-header" style="--hero-img: url('{{ asset('frontend/assets/breadcumb/homepage_cover.jpg') }}');">
        <div class="hero-overlay">
            <div class="p-3 text-center" style="max-width: 900px;">
                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                <h1 class="display-2 text-capitalize text-white mb-4">Let's The World Together!</h1>
                <p class="mb-5 fs-5 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- search  -->
<div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
    <div class="container">
        <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: var(--bs-primary);">
            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
        </div>
    </div>
</div>
<!-- About Start -->
@include('frontend.includes.about')
<!-- About End -->

<!-- Services Start -->
@include('frontend.includes.services')
<!-- Services End -->

<!-- Destination Start -->
@include('frontend.includes.destination')
<!-- Destination End -->

<!-- Explore Tour Start -->
@include('frontend.includes.explore')
<!-- Explore Tour Start -->

<!-- Packages Start -->
@include('frontend.includes.packages')
<!-- Packages End -->

<!-- Tour Booking Start -->
@include('frontend.includes.booking')
<!-- Tour Booking End -->

<!-- Testimonial Start -->
@include('frontend.includes.testimonial')
<!-- Testimonial End -->
@endsection