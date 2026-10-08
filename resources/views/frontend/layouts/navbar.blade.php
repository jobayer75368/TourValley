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
            <a @class(['nav-link', 'active'=> request()->routeIs(['home'])]) href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a @class(['nav-link', 'active'=> request()->routeIs(['destination'])]) href="{{ route('destination') }}" class="nav-item nav-link">Destination</a>
            <a @class(['nav-link', 'active'=> request()->routeIs(['packages'])]) href="{{ route('packages') }}" class="nav-item nav-link">Packages</a>
            <a @class(['nav-link', 'active'=> request()->routeIs(['about'])]) href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a @class(['nav-link', 'active'=> request()->routeIs(['contact'])]) href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('packages') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
    </div>
</nav>