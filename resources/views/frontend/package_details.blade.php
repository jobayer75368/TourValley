{{-- resources/views/frontend/package-details.blade.php --}}
{{-- Only the details section. Navbar, hero, subscribe and footer stay in your layout. --}}
{{-- All data below is dummy. Later replace with $package->name, $package->price, etc. --}}
@extends('frontend.frontend_master')
@section('frontend_content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Package Details</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Package Details</li>
            </ol>
    </div>
</div>
<!-- Header End -->
<section class="package-details py-5">
    <div class="container py-4">
        <div class="row g-4">

            {{-- ============ LEFT COLUMN ============ --}}
            <div class="col-lg-8">

                {{-- Cover image --}}
                <img src="{{ asset('frontend/assets/img/packages/sajek-1.jpg') }}" class="pd-main-img" alt="Sajek Valley Tour">

                {{-- Title and short badges --}}
                <div class="d-flex flex-wrap justify-content-between align-items-start gap-2 mt-4">
                    <h2 class="mb-0">Sajek Valley 3 Days Adventure</h2>
                    <span class="badge bg-primary fs-6 fw-normal py-2 px-3">Adventure</span>
                </div>

                <p class="mt-3 text-muted">
                    Wake up above the clouds in Sajek Valley. This three day trip takes you through the hills of
                    Rangamati with a local guide, a night at a hilltop resort, and enough free time to watch the
                    sunrise from the ridge.
                </p>
                <p class="text-muted">
                    Everything is arranged for you: travel from Dhaka, your stay, meals, and sightseeing. You only
                    need to choose a date and pack a light jacket.
                </p>

                {{-- Itinerary --}}
                <h4 class="pd-heading">Itinerary</h4>
                <div class="ms-2">
                    <div class="pd-day">
                        <h6 class="mb-1">Day 1: Dhaka to Sajek</h6>
                        <p class="mb-0 text-muted">Night bus departure from Dhaka, arrive in Khagrachari by morning.</p>
                    </div>
                    <div class="pd-day">
                        <h6 class="mb-1">Day 2: Konglak Para and Ruilui Para</h6>
                        <p class="mb-0 text-muted">Hill walk, village visit, and sunset from the viewpoint.</p>
                    </div>
                    <div class="pd-day">
                        <h6 class="mb-1">Day 3: Sunrise and return</h6>
                        <p class="mb-0 text-muted">Early sunrise, breakfast, and the journey back to Dhaka.</p>
                    </div>
                </div>

                {{-- Hotel, transport, food --}}
                <h4 class="pd-heading">Stay, Transport and Food</h4>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="pd-box h-100">
                            <h6><i class="fas fa-hotel text-primary me-2"></i>Hotel</h6>
                            <p class="mb-0 text-muted small">2 nights at Megh Machang Resort, twin sharing room.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pd-box h-100">
                            <h6><i class="fas fa-bus text-primary me-2"></i>Transportation</h6>
                            <p class="mb-0 text-muted small">AC bus from Dhaka and a Chander Gari for hill travel.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pd-box h-100">
                            <h6><i class="fas fa-utensils text-primary me-2"></i>Food</h6>
                            <p class="mb-0 text-muted small">2 breakfasts, 2 lunches and 2 dinners with local dishes.</p>
                        </div>
                    </div>
                </div>

                {{-- Included / Excluded --}}
                <div class="row g-4">
                    <div class="col-md-6">
                        <h4 class="pd-heading">Package Includes</h4>
                        <ul class="pd-list">
                            <li><i class="fas fa-check"></i>3 Days and 2 Nights stay</li>
                            <li><i class="fas fa-check"></i>Round trip transport</li>
                            <li><i class="fas fa-check"></i>Breakfast, lunch and dinner</li>
                            <li><i class="fas fa-check"></i>Local tour guide</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="pd-heading">Package Excludes</h4>
                        <ul class="pd-list excluded">
                            <li><i class="fas fa-times"></i>Personal expenses</li>
                            <li><i class="fas fa-times"></i>Extra snacks and drinks</li>
                            <li><i class="fas fa-times"></i>Camera or drone fees</li>
                            <li><i class="fas fa-times"></i>Travel insurance</li>
                        </ul>
                    </div>
                </div>

                {{-- Gallery --}}
                <h4 class="pd-heading">Gallery</h4>
                <div class="row g-3 pd-gallery">
                    {{-- Later: @foreach($package->images as $image) --}}
                    <div class="col-4">
                        <a href="{{ asset('img/homepage_cover.jpg') }}" target="_blank">
                            <img src="{{ asset('frontend/assets/img/packages/sajek-1.jpg') }}" alt="Gallery image 1">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ asset('img/homepage_cover.jpg') }}" target="_blank">
                            <img src="{{ asset('frontend/assets/img/packages/sajek-1.jpg') }}" alt="Gallery image 2">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="{{ asset('img/homepage_cover.jpg') }}" target="_blank">
                            <img src="{{ asset('frontend/assets/img/packages/sajek-1.jpg') }}" alt="Gallery image 3">
                        </a>
                    </div>
                    {{-- @endforeach --}}
                </div>

            </div>

            {{-- ============ RIGHT COLUMN ============ --}}
            <div class="col-lg-4">

                {{-- Package information --}}
                <div class="pd-box mb-4">
                    <h4 class="mb-3">Package Information</h4>

                    <div class="pd-price mb-3">
                        <del>৳ 9,500</del>
                        <strong class="ms-2">৳ 7,999</strong>
                        <span class="text-muted small">/ person</span>
                    </div>

                    <div class="pd-info-row"><span><b>Destination</b></span><span>Sajek Valley</span></div>
                    <div class="pd-info-row"><span><b>Duration</b></span><span>3 Days / 2 Nights</span></div>
                    <div class="pd-info-row"><span><b>Start date</b></span><span>12 Nov 2026</span></div>
                    <div class="pd-info-row"><span><b>End date</b></span><span>14 Nov 2026</span></div>
                    <div class="pd-info-row"><span><b>Available seats</b></span><span>12</span></div>
                    <div class="pd-info-row"><span><b>Max travelers</b></span><span>20</span></div>
                    <div class="pd-info-row">
                        <span><b>Rating</b></span>
                        <span>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <small class="text-muted">(4.0)</small>
                        </span>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        {{-- Later: href="{{ route('booking.create', $package->id) }}" --}}
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 flex-grow-1">Book This Package</a>

                        {{-- Later: Ajax toggle for the wishlist --}}
                        <button type="button" class="btn btn-outline-danger btn-wishlist rounded-circle"
                            style="width:46px;height:46px;" title="Add to wishlist" id="wishlistBtn">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                </div>

                {{-- Customer reviews --}}
                <div class="pd-box mb-4">
                    <h4 class="mb-3">Customer Reviews</h4>

                    {{-- Later: @forelse($package->reviews as $review) --}}
                    <div class="pd-review d-flex gap-3">
                        <img src="{{ asset('img/homepage_cover.jpg') }}" alt="Customer"
                            class="rounded-circle flex-shrink-0" style="width:50px;height:50px;object-fit:cover;">
                        <div>
                            <h6 class="mb-0">Rafi Ahmed</h6>
                            <div class="mb-1">
                                <i class="fas fa-star text-warning small"></i>
                                <i class="fas fa-star text-warning small"></i>
                                <i class="fas fa-star text-warning small"></i>
                                <i class="fas fa-star text-warning small"></i>
                                <i class="fas fa-star text-warning small"></i>
                            </div>
                            <p class="mb-0 text-muted small">Well organised trip. The sunrise was worth the early wake up.</p>
                        </div>
                    </div>
                    <div class="pd-review d-flex gap-3">
                        <img src="{{ asset('img/homepage_cover.jpg') }}" alt="Customer"
                            class="rounded-circle flex-shrink-0" style="width:50px;height:50px;object-fit:cover;">
                        <div>
                            <h6 class="mb-0">Nusrat Jahan</h6>
                            <div class="mb-1">
                                <i class="fas fa-star text-warning small"></i>
                                <i class="fas fa-star text-warning small"></i>
                                <i class="fas fa-star text-warning small"></i>
                                <i class="fas fa-star text-warning small"></i>
                                <i class="far fa-star text-warning small"></i>
                            </div>
                            <p class="mb-0 text-muted small">Good food and a friendly guide. The bus ride was a bit long.</p>
                        </div>
                    </div>
                    {{-- @empty: <p class="text-muted mb-0">No reviews yet.</p> --}}
                    {{-- @endforelse --}}

                    {{-- Only show to logged in customers who completed this tour --}}
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill mt-4">Write a review</a>
                </div>

                {{-- Call to action --}}
                <div class="pd-cta">
                    <h4 class="text-white mb-3">Plan Your Next Adventure Today!</h4>
                    <p class="mb-4">Have a question about this package? Talk to our team before you book.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-light rounded-pill py-2 px-4">Contact Us</a>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    // Visual toggle only. Replace with an Ajax call to your wishlist route.
    document.getElementById('wishlistBtn')?.addEventListener('click', function() {
        this.classList.toggle('active');
    });
</script>
@endsection