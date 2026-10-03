<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TourValley - Tourism Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- favicon  -->

    <link rel="icon" href="{{ asset('frontend/assets/logo/favicon.png') }}" type="image/x-icon">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('frontend.layouts.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('frontend.layouts.navbar')

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('frontend/assets/img/carousel/carousel-2.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Let's The World Together!</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/assets/img/carousel/carousel-3.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">You Like To Go?</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
        <div class="container">
            <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: var(--bs-primary);">
                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!--********************************
			Start Main Content
    ********************************-->
    @yield('frontend_content')

    <!--********************************
			End Main Content
	******************************** -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('frontend.layouts.script')
</body>

</html>