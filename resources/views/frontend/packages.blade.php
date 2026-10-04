@extends('frontend.frontend_master')
@section('frontend_content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Travel Packages</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Packages</li>
            </ol>
    </div>
</div>
<!-- Header End -->
<!-- Packages Start -->
@include('frontend.includes.packages')
<!-- Packages End -->

<!-- Tour Booking Start -->
@include('frontend.includes.booking')
<!-- Tour Booking End -->
@endsection