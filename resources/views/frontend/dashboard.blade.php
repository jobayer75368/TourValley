@extends('frontend.frontend_master')
@section('frontend_content')

<!-- Header Start -->
<!-- <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Dashboard</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Dashboard</li>
            </ol>
    </div>
</div> -->
<!-- Header End -->
<section class="customer-dashboard py-5 mt-5">
    <div class="container py-4">
        <div class="row g-4">

            <!-- ============ SIDEBAR ============ -->
            <div class="col-lg-3">
                <div class="bg-light rounded p-4 position-sticky" style="top: 100px;">

                    <div class="text-center border-bottom pb-3 mb-3">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center fs-2 fw-semibold mb-2"
                            style="width: 80px; height: 80px;">J</div>
                        <h5 class="mb-0">Jobayerul Islam</h5>
                        <small class="text-muted">jobayer@example.com</small>
                    </div>

                    <nav class="d-grid gap-1">
                        <a href="#" class="cd-link active d-flex align-items-center rounded px-3 py-2 text-decoration-none text-dark">
                            <i class="fas fa-th-large text-primary me-3"></i>Overview
                        </a>
                        <a href="#" class="cd-link d-flex align-items-center rounded px-3 py-2 text-decoration-none text-dark">
                            <i class="fas fa-suitcase-rolling text-primary me-3"></i>My Bookings
                        </a>
                        <a href="#" class="cd-link d-flex align-items-center rounded px-3 py-2 text-decoration-none text-dark">
                            <i class="fas fa-heart text-primary me-3"></i>Wishlist
                        </a>
                        <a href="#" class="cd-link d-flex align-items-center rounded px-3 py-2 text-decoration-none text-dark">
                            <i class="fas fa-star text-primary me-3"></i>My Reviews
                        </a>
                        <a href="#" class="cd-link d-flex align-items-center rounded px-3 py-2 text-decoration-none text-dark">
                            <i class="fas fa-user-cog text-primary me-3"></i>Profile Settings
                        </a>
                        <a href="#" class="cd-link cd-logout d-flex align-items-center rounded px-3 py-2 text-decoration-none text-danger">
                            <i class="fas fa-power-off me-3"></i>Log Out
                        </a>
                    </nav>
                </div>
            </div>

            <!-- ============ MAIN CONTENT (Overview) ============ -->
            <div class="col-lg-9">

                <!-- Welcome -->
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                    <div>
                        <h2 class="mb-1">Welcome back, Jobayerul</h2>
                        <p class="text-muted mb-0">Here is a quick look at your trips and bookings.</p>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">
                        <i class="fas fa-search me-2"></i>Find a Tour
                    </a>
                </div>

                <!-- Stat cards -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="cd-stat bg-light rounded p-3 d-flex align-items-center gap-3 h-100">
                            <div class="cd-stat-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 fs-5"
                                style="width: 52px; height: 52px;">
                                <i class="fas fa-suitcase-rolling"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">6</h3>
                                <small>Total Bookings</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="cd-stat bg-light rounded p-3 d-flex align-items-center gap-3 h-100">
                            <div class="cd-stat-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 fs-5"
                                style="width: 52px; height: 52px;">
                                <i class="fas fa-hourglass-half"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">1</h3>
                                <small>Pending</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="cd-stat bg-light rounded p-3 d-flex align-items-center gap-3 h-100">
                            <div class="cd-stat-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 fs-5"
                                style="width: 52px; height: 52px;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">3</h3>
                                <small>Confirmed</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="cd-stat bg-light rounded p-3 d-flex align-items-center gap-3 h-100">
                            <div class="cd-stat-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 fs-5"
                                style="width: 52px; height: 52px;">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">1</h3>
                                <small>Cancelled</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming and previous trips -->
                <div class="row g-4 mb-4">

                    <!-- Upcoming -->
                    <div class="col-md-6">
                        <div class="bg-light rounded p-4 h-100">
                            <h5 class="mb-3"><i class="fas fa-plane-departure text-primary me-2"></i>Upcoming Trips</h5>

                            <div class="d-flex gap-3">
                                <img src="img/homepage_cover.jpg" alt="Sajek Valley"
                                    class="rounded flex-shrink-0" style="width: 90px; height: 70px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-1">Sajek Valley 3 Days Adventure</h6>
                                    <small class="text-muted d-block"><i class="far fa-calendar-alt me-1"></i>12 Nov to 14 Nov 2026</small>
                                    <small class="text-muted"><i class="fas fa-user-friends me-1"></i>2 travelers</small>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border-top pt-3 mt-3">
                                <img src="img/homepage_cover.jpg" alt="Bandarban"
                                    class="rounded flex-shrink-0" style="width: 90px; height: 70px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-1">Bandarban Trekking Weekend</h6>
                                    <small class="text-muted d-block"><i class="far fa-calendar-alt me-1"></i>3 Dec to 5 Dec 2026</small>
                                    <small class="text-muted"><i class="fas fa-user-friends me-1"></i>1 traveler</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Previous -->
                    <div class="col-md-6">
                        <div class="bg-light rounded p-4 h-100">
                            <h5 class="mb-3"><i class="fas fa-history text-primary me-2"></i>Previous Trips</h5>

                            <div class="d-flex gap-3">
                                <img src="img/homepage_cover.jpg" alt="Cox's Bazar"
                                    class="rounded flex-shrink-0" style="width: 90px; height: 70px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-1">Cox's Bazar Family Trip</h6>
                                    <small class="text-muted d-block"><i class="far fa-calendar-alt me-1"></i>8 Aug to 10 Aug 2026</small>
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill mt-1 py-0 px-3">Write a review</a>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border-top pt-3 mt-3">
                                <img src="img/homepage_cover.jpg" alt="Sylhet"
                                    class="rounded flex-shrink-0" style="width: 90px; height: 70px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-1">Sylhet Tea Garden Tour</h6>
                                    <small class="text-muted d-block"><i class="far fa-calendar-alt me-1"></i>2 May to 4 May 2026</small>
                                    <small class="text-success"><i class="fas fa-check me-1"></i>Reviewed</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent bookings -->
                <div class="bg-light rounded p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0"><i class="fas fa-receipt text-primary me-2"></i>Recent Bookings</h5>
                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">View all</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless align-middle mb-0 cd-table">
                            <thead>
                                <tr class="border-bottom">
                                    <th>Reference</th>
                                    <th>Package</th>
                                    <th>Travel Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>TV-20261005-0042</b></td>
                                    <td>Sajek Valley 3 Days</td>
                                    <td>12 Nov 2026</td>
                                    <td>৳ 15,998</td>
                                    <td><span class="badge rounded-pill bg-warning text-dark">Pending</span></td>
                                    <td class="text-end text-nowrap">
                                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">View</a>
                                        <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-3">Cancel</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>TV-20260928-0037</b></td>
                                    <td>Bandarban Trekking</td>
                                    <td>3 Dec 2026</td>
                                    <td>৳ 6,500</td>
                                    <td><span class="badge rounded-pill bg-success">Confirmed</span></td>
                                    <td class="text-end text-nowrap">
                                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">View</a>
                                        <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-3">Cancel</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>TV-20260801-0019</b></td>
                                    <td>Cox's Bazar Family Trip</td>
                                    <td>8 Aug 2026</td>
                                    <td>৳ 24,000</td>
                                    <td><span class="badge rounded-pill bg-primary">Completed</span></td>
                                    <td class="text-end text-nowrap">
                                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>TV-20260715-0008</b></td>
                                    <td>Saint Martin Weekend</td>
                                    <td>20 Jul 2026</td>
                                    <td>৳ 9,800</td>
                                    <td><span class="badge rounded-pill bg-danger">Cancelled</span></td>
                                    <td class="text-end text-nowrap">
                                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Status colors: Pending bg-warning, Confirmed bg-success, Processing bg-info,
                         Completed bg-primary, Cancelled bg-danger.
                         Show the Cancel button only for Pending and Confirmed bookings. -->
                </div>

            </div>
        </div>
    </div>
</section>

@endsection