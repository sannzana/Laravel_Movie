@extends('layout.layout')

@section('title', 'HOME')

@section('content')


<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">Makaan</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="property-list.html" class="dropdown-item">Property List</a>
                            <a href="property-type.html" class="dropdown-item">Property Type</a>
                            <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Login</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->






    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">

            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">

                </div>
            </div>
        </div>
    </div>









    <!-- home -->

            <section id="mission" class="full-section _100vh nopad">



                <div class="flexv h100">

                    <div data-w-id="4c1d23d0-da24-682a-478f-5854eff80c83" class="max20vh  ">





                        @foreach($upperGalleryImages as $image)

                        <img src="{{ asset('image/upper/' . $image) }}" loading="lazy" sizes="(max-width: 479px) 30vw, 25vw"
                             class="max25" style="will-change: transform; transform: translate3d(-170%, 0px, 0px) scale3d(1, 1, 1)
                 rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                             alt="Gallery Image">

                        @endforeach
                    </div>
                    <div class="filmreelsectioncontent">

                        <div class="centeredcontent">


                            <div class="ImageVideoCarousel_carouselCon__jaPvM">
                                <div class="ImageVideoCarousel_overlayBorder__yN6tN">
                                    <div class="ImageVideoCarousel_carouselWrap___L6yE">
                                        <div class="ImageVideoCarousel_sfWrap__SFWnc">
                                            <div>
                                                <img src="https://assetscdn1.paytm.com/images/catalog/view_item/2572723/1710834731786.jpg?format=webp&amp;imwidth=500" decoding="sync" loading="eager" class="bgImg" width="500" height="100%" alt="">
                                            </div>
                                        </div>
                                        <div class="ImageVideoCarousel_sfWrap__SFWnc">
                                            <div>
                                                <img decoding="async" class="bgImg" width="500" height="100%" fetchpriority="auto" alt="" src="https://assetscdn1.paytm.com/images/catalog/view_item/2586826/1711174722268.jpg?format=webp&amp;imwidth=500">
                                            </div>
                                        </div>
                                        <div class="ImageVideoCarousel_sfWrap__SFWnc">
                                            <div>
                                                <img decoding="async" class="bgImg" width="500" height="100%" fetchpriority="auto" alt="" src="https://assetscdn1.paytm.com/images/catalog/view_item/2592470/1711698402246.jpg?format=webp&amp;imwidth=500">
                                            </div>
                                        </div>
                                        <div class="ImageVideoCarousel_sfWrap__SFWnc">
                                            <div>
                                                <img decoding="async" class="bgImg" width="500" height="100%" fetchpriority="auto" alt="" src="https://assetscdn1.paytm.com/images/catalog/view_item/2573052/1710850133656.jpg?format=webp&amp;imwidth=500">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ImageVideoCarousel_dotsWrap__7ld_K">
                                        <div class="ImageVideoCarousel_dot__rFKhv">

                                        </div>
                                        <div class="ImageVideoCarousel_dot__rFKhv">

                                        </div>
                                        <div class="ImageVideoCarousel_dot__rFKhv">

                                        </div>
                                        <div class="ImageVideoCarousel_dot__rFKhv ImageVideoCarousel_active__nu46Q">

                                        </div>
                                    </div>
                                    <div class="">

                                    </div>
                                </div>
                            </div>





                        </div>
                        <div class="texture paper on-dark">

                        </div>
                    </div>
                    <div data-w-id="01e3cd60-2e06-862c-5746-f9dffc2ec7d8" class="max20vh gallery-strip bottomline">


                        @foreach($lowerGalleryImages as $image)

                        <img src="{{ asset('image/lower/' . $image) }}" loading="lazy"
                             sizes="(max-width: 479px) 30vw, 25vw"  class="max25"
                             style="will-change: transform; transform: translate3d(10%, 0px, 0px)
                     scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                             alt="Gallery Image">

                        @endforeach

                    </div>

                </div>
            </section>

    <!--home -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <!-- <div class="container"> -->
        <div class="row g-2">
            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0 py-3">
                            <option selected>Property Type</option>
                            <option value="1">Property Type 1</option>
                            <option value="2">Property Type 2</option>
                            <option value="3">Property Type 3</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0 py-3">
                            <option selected>Location</option>
                            <option value="1">Location 1</option>
                            <option value="2">Location 2</option>
                            <option value="3">Location 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-dark border-0 w-100 py-3">Search</button>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- Search End -->


    <!-- Category Start -->
    <div class="container-xxl py-5">
        <!-- <div class="container"> -->
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Property Types</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                        </div>
                        <h6>Apartment</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                        </div>
                        <h6>Villa</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                        </div>
                        <h6>Home</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-housing.png" alt="Icon">
                        </div>
                        <h6>Office</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-building.png" alt="Icon">
                        </div>
                        <h6>Building</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-neighborhood.png" alt="Icon">
                        </div>
                        <h6>Townhouse</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-condominium.png" alt="Icon">
                        </div>
                        <h6>Shop</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="img/icon-luxury.png" alt="Icon">
                        </div>
                        <h6>Garage</h6>
                        <span>123 Properties</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- Category End -->



<!--    ongoing movie-->







    <!-- About Start -->
    <div class="container-xxl py-5">
        <!-- <div class="container"> -->
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="img/about.jpg">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- About End -->


    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <!-- <div class="container"> -->
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Property Listing</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">$12,345</h5>
                                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- Property List End -->


    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded p-3">
                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
                            </div>
                            <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                            <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Property Agents</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Clients Say!</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Photo Gallery</h5>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>


@endsection


@section('styles')
<style>
    .gallery-strip,.galartstrip {
        /* existing styles */
        position: relative; /* This ensures that the z-index is applied correctly. */
        z-index: 1; /* Raise the z-index to ensure the shadow is above other elements. */
        box-shadow: 0 -8px 15px rgba( 0, 0, 0.6), /* Shadow above */
        0 -8px 15px rgba(, 0, 0, 0.6); /* Shadow below */
       /* Add some space above the strip for the top shadow to be visible. */
        margin-bottom: 10px; /* Add some space below the strip for the bottom shadow to be visible. */
    }
    .galartstrip
    {
        /* existing styles */
        position: relative; /* This ensures that the z-index is applied correctly. */
        z-index: 1; /* Raise the z-index to ensure the shadow is above other elements. */
        box-shadow: 0 -8px 15px rgba(, 0, 0, 0.6), /* Shadow above */
        0 -8px 15px rgba(, 0, 0, 0.6); /* Shadow below */
        /* Add some space above the strip for the top shadow to be visible. */
         /* Add some space below the strip for the bottom shadow to be visible. */
    }






    element.style {
    }
    @media screen and (max-width: 991px)
    .full-section._100vh.nopad {
        height: auto;
    }
    .full-section._100vh.nopad, .full-section.nopad {
        padding: 0;
    }
    .full-section._100vh {
        height: 100vh;
        min-height: auto;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .full-section {
        min-height: 100vh;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 64px;
        display: flex;
        position: relative;
    }
    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block;
    }
    * {
        box-sizing: border-box;
    }
    user agent stylesheet
    section {
        display: block;
        unicode-bidi: isolate;
    }
    @media screen and (max-width: 991px)
    body {
        font-size: 16px;
    }
    body {
        background-color: var(--black-2);
        color: #fff;
        font-family: europa, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.7;
    }
    body {
        min-height: 100%;
        color: #333;
        background-color: #fff;
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 14px;
        line-height: 20px;
    }
    :root {
        --black-2: #00151e;
        --white: white;
        --dark-bg: #202020;
        --light-bg: #c7cfd0;
        --dark-accent: #2b2b2b;
        --dark-goldenrod: #9d8743;
        --midnight-blue: #1c2c33;
        --cardoutline: #d6d7df;
        --maroon-2: #580719;
        --saddle-brown: #644b00;
        --brown: #961e38;
        --brand-2: #ebbc30;
        --black: black;
        --alert: #eb4949;
        --lime-green: #00bb54;
        --brand: #002b77;
        --light-accent: #9be5ef;
        --shadow-a24: rgba(0, 0, 0, .24);
        --shadow-a12: rgba(0, 0, 0, .12);
        --black-3: #1d1d1d;
        --maroon: #6c0000;
        --dark-goldenrod-2: #8d6a00;
        --dark-slate-grey: #42474c;
        --whitebg: #fafafa;
        --dark-grey: #a0a8ab;
        --black-4: #0e1419;
        --ivory: #f4f2e4;
        --midnight-blue-2: #1c2c33;
    }
    html {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        font-family: sans-serif;
    }



    filmreelsectioncontent {
        z-index: 1;
        border-top: 8px solid var(--dark-goldenrod);
        border-bottom: 8px solid var(--dark-goldenrod);
        flex-direction: row;
        flex: 1;
        justify-content: center;
        align-self: stretch;
        align-items: center;
        display: flex;
        position: relative;
        box-shadow: inset 0 28px 50px rgba(0,0,0,.9), 0 0 50px #000;
    }
    .centeredcontent {
        z-index: 1;
        text-align: center;
        flex-direction: column;
        align-items: center;
        display: flex;
        position: relative;
    }

    /*.heading-2, .heading-3 {*/
    /*    font-size: 5rem;*/
    /*}*/
    .full-section._100vh {
        height: 100vh;
        min-height: auto;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    .flexv {
        flex-direction: column;
        justify-content: space-between;
        display: flex;
    }




    /*.filmreelsectioncontent {*/
    /*    !* This will help ensure that the content scales down on smaller screens *!*/
    /*    text-align: center; !* Center the content for small screens *!*/
    /*}*/

    .heading-3 {
        font-size: 2.5rem; /* Adjust size as needed */
        margin: 0.5em 0; /* Give some space around the heading */
    }

    .subtitle1 {
        font-size: 1.5rem; /* Adjust size as needed */
        margin-bottom: 1em; /* Space after the subtitle */
    }

    .block-quote {
        font-size: 1rem; /* Adjust size as needed */
        margin-bottom: 1em; /* Space after the blockquote */
        padding: 0 1em; /* Padding for smaller screens */
        overflow-wrap: break-word; /* To prevent long words from breaking the layout */
    }

    .divider {
        margin: 1em auto; /* Center the divider and give space */
    }

    /* Responsive Styles */
    @media screen and (max-width: 991px) {
        .heading-3 {
            font-size: 2rem; /* Smaller font size on tablets */
        }

        .subtitle1 {
            font-size: 1.25rem;
        }

        .block-quote {
            font-size: 0.9rem;
        }
    }

    @media screen and (max-width: 767px) {
        .heading-3 {
            font-size: 1.5rem; /* Even smaller font size on mobile */
        }

        .subtitle1 {
            font-size: 1rem;
        }

        .block-quote {
            font-size: 0.8rem;
        }
    }

    @media screen and (max-width: 479px) {
        .heading-3,
        .subtitle1,
        .block-quote {
            padding: 0 10%; /* Add padding on the smallest screens to avoid text hitting the edges */
        }
    }






    .ImageVideoCarousel_carouselCon__jaPvM {
        overflow: hidden;
        position: relative;
        margin: 0 auto; /* Center the carousel */
        padding: 0 5%; /* Padding to ensure the side images are partially visible */
    }

    /* The wrapper for each individual item */
    .ImageVideoCarousel_carouselWrap___L6yE {
        display: flex;
        overflow-x: scroll;
        scroll-snap-type: x mandatory; /* Enable snapping */
        -ms-scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS devices */
        gap: 20px; /* Gap between items */
        padding: 20px 0; /* Padding top and bottom */
    }

    /* Hide the scrollbar */
    .ImageVideoCarousel_carouselWrap___L6yE::-webkit-scrollbar {
        display: none;
    }

    /* The individual carousel item */
    .ImageVideoCarousel_sfWrap__SFWnc {
        flex: 0 0 auto; /* Use 'auto' for the flex-basis to handle variable widths */
        scroll-snap-align: center; /* Ensure the item snaps in the center */
        transition: transform 0.5s ease; /* Smooth transition for scaling */
        width: 80%; /* Adjust the width to fit the carousel container */
        margin-right: 10px; /* Right margin between items */
        margin-left: 10px; /* Left margin between items */
        position: relative; /* Needed for absolute positioning of pseudo-elements */
    }

    /* Styling for the images */
    .ImageVideoCarousel_sfWrap__SFWnc img {
        width: 100%; /* Full width of the parent container */
        height: auto; /* Maintain aspect ratio */
        object-fit: cover; /* Cover the area, may crop if necessary */
        border-radius: 10px; /* Slight border radius on all corners */
        box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Soft shadow for depth */
    }

    /* Pseudo-elements for gradient overlays */
    .ImageVideoCarousel_carouselCon__jaPvM::before,
    .ImageVideoCarousel_carouselCon__jaPvM::after {
        content: '';
        position: absolute;
        top: 0;
        height: 100%;
        pointer-events: none;
        z-index: 2;
        width: 50px; /* Fixed width for gradient overlays */
    }

    .ImageVideoCarousel_carouselCon__jaPvM::before {
        left: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.5), transparent);
    }

    .ImageVideoCarousel_carouselCon__jaPvM::after {
        right: 0;
        background: linear-gradient(to left, rgba(0,0,0,0.5), transparent);
    }

    /* Media queries for responsive adjustments */
    @media (max-width: 1024px) {
        .ImageVideoCarousel_sfWrap__SFWnc {
            width: 85%; /* Adjust item width for better visibility on tablets */
        }
    }

    @media (max-width: 768px) {
        .ImageVideoCarousel_sfWrap__SFWnc {
            width: 90%; /* Adjust item width for better visibility on smaller tablets */
        }
    }

    @media (max-width: 480px) {
        .ImageVideoCarousel_sfWrap__SFWnc {
            width: 95%; /* Adjust item width for better visibility on mobile */
        }
    }



</style>
@endsection





@section('scripts')
<script>




    document.addEventListener('DOMContentLoaded', function() {
        let lastScrollPosition = 0;
        let initialPositions = {};

        window.addEventListener('scroll', function() {
            const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            const scrollDirection = currentScrollPosition > lastScrollPosition ? 'down' : 'up';
            lastScrollPosition = currentScrollPosition;

            // Animating visible images in the upper and lower galleries
            animateGallery('.max20vh:not(.bottomline) img', scrollDirection, initialPositions, 'upper', 10);
            animateGallery('.max20vh.bottomline img', scrollDirection, initialPositions, 'lower', -10);

            // Animating hidden images
            animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_upper', 10, 'left');
            animateHiddenImages('.gallery-item.hidden img', scrollDirection, initialPositions, 'hidden_lower', -10, 'right');
        });
    });

    function animateGallery(selector, scrollDirection, positions, prefix, offset) {
        document.querySelectorAll(selector).forEach((img, index) => {
            let key = `${prefix}_${index}`;
            if (!positions[key]) {
                let match = getComputedStyle(img).transform.match(/matrix\((.+)\)/);
                positions[key] = match ? parseFloat(match[1].split(', ')[4]) : 0;
            }
            let newPosition = positions[key] + (scrollDirection === 'down' ? offset : -offset);
            img.style.transform = `translate3d(${newPosition}px, 0px, 0px)`;
        });
    }

    function animateHiddenImages(selector, scrollDirection, positions, prefix, offset, side) {
        document.querySelectorAll(selector).forEach((img, index) => {
            let key = `${prefix}_${index}`;
            if (!positions[key]) {
                positions[key] = side === 'left' ? -100 : 100; // Starting from -100% (left) or 100% (right)
            }
            // Depending on the direction, either move towards the center or away from it
            let newPosition = scrollDirection === 'down' ? positions[key] + offset : positions[key] - offset;
            // Ensure the position is within bounds (-100 to 100)
            newPosition = Math.min(100, Math.max(-100, newPosition));
            positions[key] = newPosition;
            img.style.transform = `translate3d(${newPosition}%, 0px, 0px)`;
        });
    }



    document.addEventListener('DOMContentLoaded', (event) => {
        const carouselWrap = document.querySelector('.ImageVideoCarousel_carouselWrap___L6yE');
        const slides = document.querySelectorAll('.ImageVideoCarousel_sfWrap__SFWnc');
        const totalSlides = slides.length;
        let autoSlideTimer; // Timer for auto-sliding

        // Clone first and last slides
        const firstSlideClone = slides[0].cloneNode(true);
        const lastSlideClone = slides[totalSlides - 1].cloneNode(true);
        carouselWrap.appendChild(firstSlideClone);
        carouselWrap.insertBefore(lastSlideClone, slides[0]);

        let index = 1; // Start from the first original slide (not a clone)

        // Function to go to a specific slide
        function goToSlide(slideIndex) {
            const slideWidth = slides[0].getBoundingClientRect().width;
            carouselWrap.scrollLeft = slideWidth * slideIndex;
            index = slideIndex;

            if (index === totalSlides + 1) { // After the last slide's clone
                index = 1; // Reset to the first original slide
                carouselWrap.scrollTo({left: slideWidth, behavior: 'instant'});
            } else if (index === 0) { // Before the first slide's clone
                index = totalSlides; // Move to the last original slide
                carouselWrap.scrollTo({left: slideWidth * totalSlides, behavior: 'instant'});
            }

            updateDots();
        }

        // Function to update the navigation dots
        function updateDots() {
            const dots = document.querySelectorAll('.ImageVideoCarousel_dot__rFKhv');
            dots.forEach(dot => dot.classList.remove('ImageVideoCarousel_active__nu46Q'));
            // Adjust the index for the dots since there's an extra (clone) slide at the beginning
            dots[(index - 1) % totalSlides].classList.add('ImageVideoCarousel_active__nu46Q');
        }

        // Function to initialize or reset automatic slide change
        function initializeAutoSlide() {
            clearInterval(autoSlideTimer); // Clear existing timer
            autoSlideTimer = setInterval(() => {
                if (index === totalSlides - 1) {
                    index = 0;
                } else {
                    index++;
                }
                goToSlide(index);
            }, 3000); // Change slide every 3 seconds
        }

        // Detect user interaction to reset auto-slide timer
        function onUserInteraction() {
            initializeAutoSlide(); // Reset the timer on user interaction
        }

        // Add event listeners for user interaction
        carouselWrap.addEventListener('scroll', onUserInteraction);

        // Initialize the position to the first original slide (skipping the first clone)
        carouselWrap.scrollTo({left: slides[0].getBoundingClientRect().width, behavior: 'instant'});
        initializeAutoSlide(); // Initialize auto-sliding
    });


</script>
@endsection






























