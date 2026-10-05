<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="m-0">
            <img src="{{ asset('frontend/assets/logo/nav_logo.png') }}" alt="Logo">
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('destination') }}" class="nav-item nav-link">Destination</a>
            <a href="{{ route('packages') }}" class="nav-item nav-link">Packages</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="booking.html" class="dropdown-item">Travel Booking</a>
                    <a href="{{route('package_details')}}" class="dropdown-item">Package Details</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
        </div>
        <a href="{{ route('booking') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
    </div>
</nav>