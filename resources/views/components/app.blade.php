 <!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nail Art</title>
    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/animate.min.css') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/swiper.min.css') }}">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap-datepicker3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap-iso.css') }}">
    <!-- Custome Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/responsive.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset ('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('booking/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    @stack('styles')
</head>

<body>
    <a href="javascript:;" id="return-to-top"> <i class="fas fa-angle-double-up"></i></a>
    <!--  Index-one -->
    <!-- preloader start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('assets/images/loader.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- preloder end -->

    <!-- Index-one -->
    <!--  header-start  -->
    <!-- top-header -->
    {{-- <div class="top-header-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center text-lg-left">
                    <div class="top-location float-left">
                        <ul class="d-flex justify-content-center justify-content-lg-start">
                            <li><a href="javascript:;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    121 Waldeck Street, NY, USA
                                </a></li>
                            <li><a href="javascript:;">
                                    <i class="far fa-clock"></i>
                                    Mon-Sat: 9am to 6pm
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="social-icon float-left">
                        <ul class="float-left">
                            <li><a href="javascript:;">
                                    <i class="fab fa-facebook-f"></i>
                                </a></li>
                            <li><a href="javascript:;">
                                    <i class="fab fa-twitter"></i>
                                </a></li>
                            <li><a href="javascript:;">
                                    <i class="fab fa-instagram"></i>
                                </a></li>
                            <li><a href="javascript:;">
                                    <i class="fab fa-pinterest-p"></i>
                                </a></li>
                            <li><a href="javascript:;">
                                    <span data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</span>
                                    /
                                    <span data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Register</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- main-header -->
    <div class="main-header-wrapper float-left">
        <div class="main-menu float-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-10 col-md-6 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('index') }}">Home</a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('services') }}">Services </a>                                                                     
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="javascript:;">Shortcode
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                        <div class="sub-menu mega-menu">
                                            <ul>
                                                <li><a href="accordion.html">
                                                        Accordion
                                                    </a></li>
                                                <li><a href="alert.html">
                                                        Alert
                                                    </a></li>
                                                <li><a href="button.html">
                                                        Button
                                                    </a></li>
                                                <li><a href="client.html">
                                                        Client
                                                    </a></li>
                                                <li><a href="counter.html">
                                                        Counter
                                                    </a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="form.html">
                                                        Form
                                                    </a></li>
                                                <li><a href="icon.html">
                                                        Icon
                                                    </a></li>
                                                <li><a href="list.html">
                                                        List
                                                    </a></li>
                                                <li><a href="pricing.html">
                                                        Pricing Table
                                                    </a></li>
                                                <li><a href="social-icon.html">
                                                        Social Icon
                                                    </a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="tab.html">
                                                        Tab
                                                    </a></li>
                                                <li><a href="team.html">
                                                        Team
                                                    </a></li>
                                                <li><a href="testimonial.html">
                                                        Testimonial
                                                    </a></li>
                                                <li><a href="gallery-short.html">
                                                        Gallery
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <div class="search">
                                            <div class="search-box">
                                                <input type="search" class="search-input" placeholder="Search Here">
                                                <a href="javascript:;" class="search-btn"><i
                                                        class="fas fa-search"></i></a>

                                            </div>
                                        </div>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('appointment') }}">
                                            <div class="main-btn">
                                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Get
                                                    An Appointment</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 d-xl-none d-lg-none">
                        <button class="nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                            aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="nav-toggle__text">Toggle Menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- sidebar-start -->
    <div class="mobile-menu-wrapper">
        <div id="sidebar">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
            </div>
            <div id="toggle-close">&times;</div>
            <div id="cssmenu">
                <input type="search" placeholder="Search Here....">
                <ul class="float-left">
                    <li class="has-sub">
                        <a href="{{route('index')}}">Home</a>
                       
                    </li>
                    <li class="has-sub">
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('about')}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>
                <div class="sidebar-social float-left">
                    <ul class="float-left">
                        <li><a href="javascript:;">
                                <i class="fab fa-facebook-f"></i>
                            </a></li>
                        <li><a href="javascript:;">
                                <i class="fab fa-twitter"></i>
                            </a></li>
                        <li><a href="javascript:;">
                                <i class="fab fa-instagram"></i>
                            </a></li>
                        <li><a href="javascript:;">
                                <i class="fab fa-pinterest-p"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- sidebar-end -->

    <!-- header-end -->

     @yield('content')
 
 <!-- footer-section-start -->

    <div class="footer-wrapper float-left">
        <div class="container">
            <div class="row footer-main  animated wow fade-up">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div>
                        <div class="footer-logo">
                            <img src="{{ asset('assets/images/footer-logo.png') }}" alt="img">
                        </div>
                        <div class="footer-pera">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since.</p>
                        </div>
                        <div class="footer-icon">
                            <ul>
                                <li><a href="javascript:;">
                                        <i class="fab fa-facebook-f"></i>
                                    </a></li>
                                <li><a href="javascript:;">
                                        <i class="fab fa-twitter"></i>
                                    </a></li>
                                <li><a href="javascript:;">
                                        <i class="fab fa-instagram"></i>
                                    </a></li>
                                <li><a href="javascript:;">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer-link-wrapper">
                        <h5>Useful links</h5>
                        <ul>
                            <li><a href="{{route('index')}}">
                                    <span><i class="fas fa-chevron-right"></i></span> Home
                                </a></li>
                            <li><a href="{{route('services')}}">
                                    <span><i class="fas fa-chevron-right"></i></span> Services
                                </a></li>
                            <li><a href="{{route('about')}}">
                                    <span><i class="fas fa-chevron-right"></i></span>  About Us
                                </a></li>
                            <li><a href="{{route('contact')}}">
                                    <span><i class="fas fa-chevron-right"></i></span> Contact Us
                                </a></li>
                            <li><a href="{{route('appointment')}}">
                                    <span><i class="fas fa-chevron-right"></i></span> Get An Appointment
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-insta">
                        <h5>Instagram post</h5>
                        <ul>
                            <li>
                                <a href="javascript:;"><img src="{{ asset('assets/images/insta-blog1.png') }}" alt="img">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>

                            </li>
                            <li class="insta-post-gap">
                                <a href="javascript:;"> <img src="{{ asset('assets/images/insta-blog4.png') }}" alt="img">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="{{ asset('assets/images/insta-blog2.png') }}" alt="img">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>

                            </li>
                            <li class="insta-post-gap">
                                <a href="javascript:;"> <img src="{{ asset('assets/images/insta-blog5.png') }}" alt="img">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="{{ asset('assets/images/insta-blog3.png') }}" alt="img">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="insta-post-gap">
                                <a href="javascript:;"><img src="{{ asset('assets/images/insta-blog6.png') }}" alt="img">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-contact">
                        <h5>Contact Info</h5>
                        <ul>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="address-content">
                                    <a href="javascript:;">
                                        <span>Address</span>
                                        Accra, Ghana
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="address-content">
                                    <a href="javascript:;">
                                        <span>PHONE</span>
                                       +233 24 000 0000
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="address-content">
                                    <a href="javascript:;">
                                        <span>EMAIL</span>
                                        nailsalon@example.com
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p>Copyright © 2025 Nail Salon </p>
            </div>
        </div>
    </div>

    <!-- footer-section-end -->
     <!-- Register Modal -->
    <div class="login-wrapper">
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close login-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel"><span>Register</span></h3>
                    </div>
                    <div class="modal-body">
                        <div class="register-body">
                            <form>
                                <div>
                                    <input type="text" placeholder="User Name*">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Password*">
                                </div>
                                <div>
                                    <input type="password" placeholder="Confirm Password*">
                                </div>
                                <div>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes, I understand and agree
                                        <a href="javascript:;">Terms & Conditions.</a> </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="sign-btn">
                            <a href="javascript:;" class="main-btn-red">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Sign Up
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- javascript -->
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Animation Js -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- contact form js start -->
    <script src="{{ asset('assets/js/contact_form.js') }}"></script>
    @stack('scripts')
</body>

</html>