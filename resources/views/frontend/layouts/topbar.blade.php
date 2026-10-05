{{-- resources/views/frontend/partials/topbar.blade.php --}}
{{-- Bootstrap classes only. Your existing .topbar class in style.css still gives the blue background. --}}

<div class="container-fluid px-lg-5 d-none d-lg-block topbar">
    <div class="row gx-0 align-items-center" style="min-height: 45px;">

        {{-- LEFT: contact info and social icons --}}
        <div class="col-lg-7 d-flex align-items-center">
            <a href="tel:+8801700000000" class="text-light text-decoration-none me-4">
                <small><i class="fa fa-phone-alt me-2"></i>+880 1700 000000</small>
            </a>
            <a href="mailto:info@tourvalley.com" class="text-light text-decoration-none me-4">
                <small><i class="fa fa-envelope me-2"></i>info@tourvalley.com</small>
            </a>

            <div class="vr bg-light opacity-50 me-3 d-none d-xl-block"></div>

            <div class="d-none d-xl-flex align-items-center">
                <a class="btn btn-outline-light btn-sm-square rounded-circle me-2" href="#" aria-label="Facebook"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-outline-light btn-sm-square rounded-circle me-2" href="#" aria-label="Instagram"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-outline-light btn-sm-square rounded-circle me-2" href="#" aria-label="YouTube"><i class="fab fa-youtube fw-normal"></i></a>
                <a class="btn btn-outline-light btn-sm-square rounded-circle" href="#" aria-label="Twitter"><i class="fab fa-twitter fw-normal"></i></a>
            </div>
        </div>

        {{-- RIGHT: account area --}}
        <div class="col-lg-5 d-flex justify-content-end align-items-center">

            {{-- Guests see Register and Login --}}
            @guest
            {{-- Later: route('register') and route('login') --}}
            <div class="d-flex gap-2">
                <a href="#" class="btn btn-light btn-sm rounded-pill px-3 fw-semibold">
                    <small><i class="fa fa-user-plus me-2"></i>Register</small>
                </a>
                <a href="#" class="btn btn-light btn-sm rounded-pill px-3 fw-semibold">
                    <small><i class="fa fa-sign-in-alt me-1"></i>Login</small>
                </a>
            </div>
            @endguest

            {{-- Logged in customers see their account menu --}}
            @auth
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-light text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="rounded-circle bg-light text-primary fw-bold d-inline-flex align-items-center justify-content-center me-2"
                        style="width: 28px; height: 28px; font-size: 13px;">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </span>
                    <small>{{ \Illuminate\Support\Str::limit(auth()->user()->name, 18) }}</small>
                </a>

                <div class="dropdown-menu dropdown-menu-end rounded shadow border-0 mt-2">
                    {{-- Later: route('dashboard'), route('bookings.index'), route('wishlist.index'), route('profile.edit') --}}
                    <a href="#" class="dropdown-item"><i class="fas fa-th-large me-2"></i>My Dashboard</a>
                    <a href="#" class="dropdown-item"><i class="fas fa-suitcase-rolling me-2"></i>My Bookings</a>
                    <a href="#" class="dropdown-item"><i class="fas fa-heart me-2"></i>Wishlist</a>
                    <a href="#" class="dropdown-item"><i class="fas fa-user-cog me-2"></i>Profile Settings</a>
                    <div class="dropdown-divider"></div>

                    {{-- Logout must be a POST form in Laravel --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="fas fa-power-off me-2"></i>Log Out
                        </button>
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>