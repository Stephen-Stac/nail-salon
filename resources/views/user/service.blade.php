@extends('components.app')
@section('content')
    <main>
         <div class="inner-page-wrapper float-left">
        <div class="inner-head">
            <h1>Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- banner-section-end -->

    @if(session('success'))
    <div id="flash-message">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            var msg = document.getElementById('flash-message');
            if(msg) msg.style.display = 'none';
        }, 5000);
    </script>
@endif

    <!-- price-section-start -->

    <div class="price-wrapper float-left">
        <div class="container">
            <div class="price-head">
                <h3>Our Pricing Table</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="price-box-wrapper">
                        <div class="price-box-head">
                            <h3>MANICURE
                                TREATMENTS</h3>
                            <p>From <span>$30.99</span> </p>
                        </div>
                        <div class="price-menu">
                            <ul>
                                <li><i class="fas fa-check-square"></i> Color/Gel Removal</li>
                                <li><i class="fas fa-check-square"></i> Plain Manicure</li>
                                <li><i class="fas fa-check-square"></i> Single Colour</li>
                                <li><i class="fas fa-check-square"></i> Nail Art</li>
                            </ul>
                        </div>
                        <div class="book-btn">
                            <a href="{{ route('appointment') }}">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="price-box-wrapper">
                        <div class="price-box-head">
                            <h3>PediCURE
                                TREATMENTS</h3>
                            <p>From <span>$30.99</span> </p>
                        </div>
                        <div class="price-menu">
                            <ul>
                                <li><i class="fas fa-check-square"></i> Color/Gel Removal</li>
                                <li><i class="fas fa-check-square"></i> Plain Manicure</li>
                                <li><i class="fas fa-check-square"></i> Single Colour</li>
                                <li><i class="fas fa-check-square"></i> Nail Art</li>
                            </ul>
                        </div>
                        <div class="book-btn">
                            <a href="{{ route('appointment') }}">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="price-box-wrapper">
                        <div class="price-box-head price-response">
                            <h3> nail arts
                                TREATMENTS
                            </h3>
                            <p>From <span>$30.99</span> </p>
                        </div>
                        <div class="price-menu">
                            <ul>
                                <li><i class="fas fa-check-square"></i> Color/Gel Removal</li>
                                <li><i class="fas fa-check-square"></i> Plain Manicure</li>
                                <li><i class="fas fa-check-square"></i> Single Colour</li>
                                <li><i class="fas fa-check-square"></i> Nail Art</li>
                            </ul>
                        </div>
                        <div class="book-btn">
                            <a href="{{ route('appointment') }}">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="price-box-wrapper">
                        <div class="price-box-head price-response">
                            <h3>Paraffin
                                Hands</h3>
                            <p>From <span>$30.99</span> </p>
                        </div>
                        <div class="price-menu">
                            <ul>
                                <li><i class="fas fa-check-square"></i> Color/Gel Removal</li>
                                <li><i class="fas fa-check-square"></i> Plain Manicure</li>
                                <li><i class="fas fa-check-square"></i> Single Colour</li>
                                <li><i class="fas fa-check-square"></i> Nail Art</li>
                            </ul>
                        </div>
                        <div class="book-btn">
                            <a href="{{ route('appointment') }}">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- price-section-end -->

    <!-- service-section-start -->

    <div class="service-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="service-head-wrapper float-left">
                        <div class="service-content">
                            <h5>Our Services</h5>
                            <h3>What We Offer</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its
                                ayout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                of letters, as opposed to
                                using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        {{-- <div class="service-btn">
                            <a href="javascript:;" class="main-btn">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Read More
                                </span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="service-box-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="service-box">
                            <div class="service-img">
                                <div class="service-img-hvr">
                                    <a href="#">
                                        <img src="{{ asset ('assets/images/service-one.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <h5>Manicure</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="service-box">
                            <div class="service-img">
                                <div class="service-img-hvr">
                                    <a href="#">
                                        <img src="{{ asset ('assets/images/service-three.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <h5>Pedicure</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="service-box">
                            <div class="service-img">
                                <div class="service-img-hvr">
                                    <a href="#">
                                        <img src="{{ asset ('assets/images/service-two.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <h5>Nail Art</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="service-box">
                            <div class="service-img">
                                <div class="service-img-hvr">
                                    <a href="#">
                                        <img src="{{ asset ('assets/images/service-four.png') }}" alt="img">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <h5>Paraffin Hands</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service-section-end -->

    <!--testimonial-section-start -->

    <div class="testimonial-wrapper test-about float-left">
        <div class="testimonial-content-wrapper float-left">
            <div class="container">
                <div class="row">
                    <div class="testimonial-head">
                        <h5>Testimonial</h5>
                        <h3>What our client’s say</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9">
                        <div class="test-slider-wrapper float-left">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="testimonial-box">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <p>
                                                We provide exquisite service with some of the most talented and
                                                experienced artists in the industry.
                                                My team and I compliment the face using stunning hairdressing
                                                techniques, from up-do’s to fishtails.
                                                Whether you’re attending a red carpet event or hosting a TV show, my
                                                makeup services will ensure you look flawless.
                                            </p>
                                        </div>
                                        <img src="{{ asset ('assets/images/testimonial-1.png') }}" alt="img">
                                        <h5>Pamela Adams</h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-box">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <p>
                                                Treat yourself to one of our signature services.
                                                Our beauty experts will make you look more beautiful and feel better
                                                than ever before.
                                                The royal treatment for the hands of a queen.
                                                Join our membership for extra benefit. Get discount monthly.
                                                Charming, bubbly, relaxing atmosphere
                                                Extraordinary nail art designs
                                            </p>
                                        </div>
                                        <img src="{{ asset ('assets/images/testimonial-2.png') }}" alt="img">
                                        <h5>penter volly</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial-section-end -->

    <!-- news-section-start -->

    <div class="news-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="news-head">
                    <h5>Newsletter</h5>
                    <h3>LATEST NAIL TRENDS AND DESIGNS FOR YOU</h3>
                </div>
                <div class="subscribe-form">
                    <input type="email" placeholder="Enter Your Email">
                    <div class="suscribe-btn">
                        <a href="javascript:;" class="main-btn-red">
                            <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Subscribe Now
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection