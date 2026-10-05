{{-- resources/views/frontend/booking.blade.php --}}
{{-- Only the booking section. Navbar, hero and footer stay in your layout. --}}
{{-- Route idea: GET /packages/{package}/book  (auth middleware)  and  POST /packages/{package}/book --}}
{{-- All data below is dummy. Later replace with $package->..., auth()->user()->... --}}
@extends('frontend.frontend_master')
@section('frontend_content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Booking</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Booking</li>
            </ol>
    </div>
</div>
<!-- Header End -->
<section class="booking-page py-5">
    <div class="container py-4">
        <div class="row g-5">

            {{-- ============ LEFT: PACKAGE SUMMARY ============ --}}
            <div class="col-lg-5">
                <div class="bk-box position-sticky" style="top: 100px;">
                    <img src="{{ asset('frontend/assets/img/packages/sajek-1.jpg') }}" class="bk-cover mb-3" alt="Sajek Valley Tour">

                    <h4 class="mb-1">Sajek Valley 3 Days Adventure</h4>
                    <p class="text-muted mb-3"><i class="fas fa-map-marker-alt text-primary me-2"></i>Sajek Valley</p>

                    <div class="bk-row"><span><b>Duration</b></span><span>3 Days / 2 Nights</span></div>
                    <div class="bk-row"><span><b>Start date</b></span><span>12 Nov 2026</span></div>
                    <div class="bk-row"><span><b>End date</b></span><span>14 Nov 2026</span></div>
                    <div class="bk-row"><span><b>Seats left</b></span><span>12</span></div>
                    <div class="bk-row">
                        <span><b>Price per person</b></span>
                        <span>
                            <del class="text-muted small">৳ 9,500</del>
                            <strong class="text-primary ms-1">৳ 7,999</strong>
                        </span>
                    </div>

                    {{-- Later: route('packages.show', $package->id) --}}
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill mt-3">
                        <i class="fas fa-arrow-left me-1"></i>Back to package
                    </a>
                </div>
            </div>

            {{-- ============ RIGHT: BOOKING FORM ============ --}}
            <div class="col-lg-7">
                <h2 class="mb-2">Book Your Tour</h2>
                <p class="text-muted mb-0">
                    Fill in your details below. Your booking stays <b>Pending</b> until our team confirms it.
                </p>

                {{-- Later: action="{{ route('bookings.store', $package->id) }}" --}}
                <form action="#" method="POST" id="bookingForm" novalidate>
                    @csrf

                    {{-- Step 1: contact --}}
                    <h5 class="bk-step"><span>1</span>Your contact details</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                {{-- Later: value="{{ auth()->user()->name }}" --}}
                                <input type="text" class="form-control bg-light border-0" id="contact_name"
                                    name="contact_name" placeholder="Your Name" value="Jobayerul Islam" readonly>
                                <label for="contact_name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-0" id="contact_email"
                                    name="contact_email" placeholder="Your Email" value="jobayer@example.com" readonly>
                                <label for="contact_email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="contact_phone"
                                    name="contact_phone" placeholder="Phone Number" required>
                                <label for="contact_phone">Phone Number</label>
                                @error('contact_phone') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="travel_date"
                                    value="12 Nov 2026 to 14 Nov 2026" readonly>
                                <label for="travel_date">Travel Date</label>
                                {{-- If a package has many departures, change this to a select named travel_date --}}
                            </div>
                        </div>
                    </div>

                    {{-- Step 2: number of travelers --}}
                    <h5 class="bk-step"><span>2</span>Number of travelers</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-light border-0" id="travelerCount" name="traveler_count">
                                    {{-- Later: @for($i = 1; $i <= min($package->available_seats, $package->max_travelers); $i++) --}}
                                    <option value="1">1 Traveler</option>
                                    <option value="2">2 Travelers</option>
                                    <option value="3">3 Travelers</option>
                                    <option value="4">4 Travelers</option>
                                    <option value="5">5 Travelers</option>
                                    <option value="6">6 Travelers</option>
                                    <option value="7">7 Travelers</option>
                                    <option value="8">8 Travelers</option>
                                    <option value="9">9 Travelers</option>
                                    <option value="10">10 Travelers</option>
                                    <option value="11">11 Travelers</option>
                                    <option value="12">12 Travelers</option>
                                    {{-- @endfor --}}
                                </select>
                                <label for="travelerCount">Persons</label>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <small class="text-muted">Only 12 seats are left for this date.</small>
                        </div>
                    </div>

                    {{-- Step 3: traveler info (filled by JS) --}}
                    <h5 class="bk-step"><span>3</span>Traveler information</h5>
                    <div id="travelerList"></div>

                    {{-- Step 4: request + summary --}}
                    <h5 class="bk-step"><span>4</span>Special request and summary</h5>
                    <div class="form-floating mb-4">
                        <textarea class="form-control bg-light border-0" placeholder="Special Request"
                            id="special_request" name="special_request" style="height: 110px"></textarea>
                        <label for="special_request">Special Request (optional)</label>
                    </div>

                    <div class="bk-total d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <div class="small" id="summaryText">1 traveler x ৳ 7,999</div>
                            <div>Total amount</div>
                        </div>
                        <div class="bk-total-amount" id="totalAmount">৳ 7,999</div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="agree" required>
                        <label class="form-check-label text-muted" for="agree">
                            I checked the details above and agree to the booking and cancellation terms.
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-3">Confirm Booking</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {

        const PRICE = 7999;

        const countSelect = document.getElementById('travelerCount');
        const list = document.getElementById('travelerList');
        const totalEl = document.getElementById('totalAmount');
        const summaryEl = document.getElementById('summaryText');

        const money = n => '৳ ' + n.toLocaleString('en-US');

        function travelerCard(i) {
            return `
            <div class="traveler-card">
                <h6 class="mb-3">Traveler ${i + 1}${i === 0 ? ' (you)' : ''}</h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control border-0" id="t_name_${i}"
                                   name="travelers[${i}][name]" placeholder="Full name" required>
                            <label for="t_name_${i}">Full name</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-floating">
                            <input type="number" min="1" max="100" class="form-control border-0" id="t_age_${i}"
                                   name="travelers[${i}][age]" placeholder="Age" required>
                            <label for="t_age_${i}">Age</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-floating">
                            <select class="form-select border-0" id="t_gender_${i}" name="travelers[${i}][gender]">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="t_gender_${i}">Gender</label>
                        </div>
                    </div>
                </div>
            </div>`;
        }

        function render() {
            const n = parseInt(countSelect.value, 10);

            // Keep what the user already typed when the number changes
            const old = {};
            list.querySelectorAll('input, select').forEach(el => old[el.name] = el.value);

            list.innerHTML = Array.from({
                length: n
            }, (_, i) => travelerCard(i)).join('');
            list.querySelectorAll('input, select').forEach(el => {
                if (old[el.name] !== undefined) el.value = old[el.name];
            });

            summaryEl.textContent = n + (n === 1 ? ' traveler' : ' travelers') + ' x ' + money(PRICE);
            totalEl.textContent = money(PRICE * n);
        }

        countSelect.addEventListener('change', render);
        render();

        // Basic front-end check. The real validation belongs in your Form Request.
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            if (!this.checkValidity()) {
                e.preventDefault();
                this.reportValidity();
            }
        });
    })();
</script>
@endsection