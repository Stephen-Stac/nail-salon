@extends('components.app')
@section('content')
    <main>
    <!-- banner-section-start -->
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

    <div class="float-left banner-wrapper">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <a href="javascript:;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <span>
                        <img src="{{ asset ('assets/images/slider-mini.png') }}" alt="img">
                    </span>
                </a>
                <a href="javascript:;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2">
                    <span>
                        <img src="{{ asset ('assets/images/slider-mini-2.png') }}" alt="img">
                    </span>
                </a>
                <a href="javascript:;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3">
                    <span>
                        <img src="{{ asset ('assets/images/slider-mini3.png') }}" alt="img">
                    </span>
                </a>
                <a href="javascript:;" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4">
                    <span>
                        <img src="{{ asset ('assets/images/slider-mini4.png') }}" alt="img">
                    </span>
                </a>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset ('assets/images/bg-slider-one.jpg') }}" class="d-block w-100" alt="img">
                    <div class="carousel-caption d-block d-md-block">
                        <div class="banner-head">
                            <h1 class="fadeInUpShorter appear-animate"> Choose The <span>Best Attitude</span>
                                And Services</h1>
                            <p class="fadeInUpShorter appear-animation-visible appear-animate">Change Your Nails Look
                                With Our Talented Stylists.</p>
                            <a href="{{route('appointment')}}"
                                class="banner-btn fadeInUpShorter appear-animation-visible appear-animate">
                                <div class="main-btn-red">
                                    <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Get
                                        An Appointment</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('assets/images/bg-slider-2.jpg') }}" class="d-block w-100" alt="img">
                    <div class="carousel-caption d-block d-md-block">
                        <div class="banner-head">
                            <h1 class="fadeInUpShorter appear-animate"> Shine That <span>Brightens</span>
                                Your Life</h1>
                            <p class="fadeInUpShorter appear-animation-visible appear-animate">Change Your Nails Look
                                With Our Talented Stylists.</p>
                            <a href="{{route('appointment')}}"
                                class="banner-btn fadeInUpShorter appear-animation-visible appear-animate">
                                <div class="main-btn-red">
                                    <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Get
                                        An Appointment</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('assets/images/bg-slider-3.jpg') }}" class="d-block w-100" alt="img">
                    <div class="carousel-caption d-block d-md-block">
                        <div class="banner-head">
                            <h1 class="fadeInUpShorter appear-animate">Get Your Nails <span>Done by A</span>
                                Skilled Nail Artist</h1>
                            <p class="fadeInUpShorter appear-animation-visible appear-animate">Change Your Nails Look
                                With Our Talented Stylists.</p>
                            <a href="{{route('appointment')}}"
                                class="banner-btn fadeInUpShorter appear-animation-visible appear-animate">
                                <div class="main-btn-red">
                                    <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Get
                                        An Appointment</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('assets/images/bg-slider-4.jpg') }}" class="d-block w-100" alt="img">
                    <div class="carousel-caption d-block d-md-block">
                        <div class="banner-head">
                            <h1 class="fadeInUpShorter appear-animate"> Get a <span>new look</span>
                                for your nails</h1>
                            <p class="fadeInUpShorter appear-animation-visible appear-animate">Change Your Nails Look
                                With Our Talented Stylists.</p>
                            <a href="{{route('appointment')}}"
                                class="banner-btn fadeInUpShorter appear-animation-visible appear-animate">
                                <div class="main-btn-red">
                                    <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Get
                                        An Appointment</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- banner-section-end -->

    <!-- extraordinary-section-start -->

    <div class="popular-wrapper float-left ptb-100 animated wow fadeInUp2" data-wow-delay="0.1s">
        <div class="experience">
            <h5>Extraordinary Experience In Nail Care</h5>
            <h3>Our Nail Salon IS THE MOST POPULAR, CLEAN
                AND RECOMMENDED NAIL SALON</h3>
            <a href="{{route('about')}}" class="read-btn">
                <div class="main-btn">
                    <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Read More
                    </span>
                </div>
            </a>
        </div>
    </div>

    <!-- extraordinary-section-end -->

    <!-- service-section-start -->
    <div class="service-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="service-head-wrapper float-left animated wow fade-up">
                        <div class="service-content">
                            <h5>Our Services</h5>
                            <h3>What We Offer</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its
                                ayout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                of letters, as opposed to
                                using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <a href="{{route('services')}}" class="service-btn">
                            <div class="main-btn">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Read More
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="service-box-wrapper animated wow fade-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="service-box">
                            <div class="service-img">
                                <div class="service-img-hvr">
                                    <a href="{{route('services')}}">
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
                                    <a href="{{route('services')}}">
                                        <img src="{{ asset ('assets/images/service-two.png') }}" alt="img">
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
                                    <a href="{{route('services')}}">
                                        <img src="{{ asset ('assets/images/service-three.png') }}" alt="img">
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
                                    <a href="{{route('services')}}">
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

    <!-- service-section-end  -->

    <!-- about-section-start -->

    <div class="about-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-content animated wow fade-up">
                        <h5>About US</h5>
                        <h3>Why We Are The Best?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English</p>
                        <div class="about-btn">
                            <a href="{{route('about')}}" class="main-btn-red">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Find Out More
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-img animated wow fade-up">
                        <img src="{{ asset ('assets/images/about-1.png') }}" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about-section-end -->

    <!--  team-section-start  -->

    {{-- <div class="team-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="team-head animated wow fade-up">
                        <h5>Our Staff</h5>
                        <h3>OUR PROFESSIONALS</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-box-wrapper animated wow fade-box">
                        <div class="team-img">
                            <span>
                                <img src="{{ asset ('assets/images/team-1.png') }}" alt="img" class="img-fluid">
                            </span>
                        </div>
                        <div class="team-name">
                            <div class="team-content">
                                <a href="our-team.html">
                                    <h5>Jordan Mike</h5>
                                </a>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-box-wrapper animated wow fade-box">
                        <div class="team-img">
                            <span>
                                <img src="{{ asset ('assets/images/team-2.png') }}" alt="img" class="img-fluid">
                            </span>
                        </div>
                        <div class="team-name">
                            <div class="team-content">
                                <a href="our-team.html">
                                    <h5>KELLEY MILES</h5>
                                </a>
                                <span>Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-box-wrapper animated wow fade-box">
                        <div class="team-img">
                            <span>
                                <img src="{{ asset ('assets/images/team-3.png') }}" alt="img" class="img-fluid">
                            </span>
                        </div>
                        <div class="team-name">
                            <div class="team-content">
                                <a href="our-team.html">
                                    <h5>Smith Dan</h5>
                                </a>
                                <span>Stylist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-box-wrapper animated wow fade-box">
                        <div class="team-img">
                            <span>
                                <img src="{{ asset ('assets/images/team-4.png') }}" alt="img" class="img-fluid">
                            </span>
                        </div>
                        <div class="team-name">
                            <div class="team-content">
                                <a href="our-team.html">
                                    <h5>Carolyn Olson</h5>
                                </a>
                                <span>Stylist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- team-section-end -->

    <!-- gellary-section-start -->

    <div class="gellary-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="gellary-head animated wow fade-up">
                    <h5>Our Gallery</h5>
                    <h3>AN INCREDIBLE Nail Art EXPERIENCE</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="gellary-grid-wrapper float-left animated wow fade-box">
        <div class="container">
            <div class="row">
                <div class="column">
                    <a href="images/gellary-1.png') }}" title="image" class="img-link">
                        <img src="{{ asset ('assets/images/gellary-1.png') }}" alt="img">
                    </a>
                    <a href="images/gellary-4.png') }}" title="image-4" class="img-link">
                        <img src="{{ asset ('assets/images/gellary-4.png') }}" alt="img">
                    </a>
                </div>
                <div class="column">
                    <a href="images/gellary-2.png') }}" title="image-2" class="img-link">
                        <img src="{{ asset ('assets/images/gellary-2.png') }}" alt="img">
                    </a>
                    <a href="images/gellary-5.png') }}" title="image-5" class="img-link">
                        <img src="{{ asset ('assets/images/gellary-5.png') }}" alt="img" class="last-img">
                    </a>
                </div>
                <div class="column">
                    <a href="images/gellary-3.png') }}" title="image-3" class="img-link">
                        <img src="{{ asset ('assets/images/gellary-3.png') }}" alt="img">
                    </a>
                    <a href="images/gellary-6.png') }}" title="image-6" class="img-link">
                        <img src="{{ asset ('assets/images/gellary-6.png') }}" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  gellary-section-end  -->

    <!-- testimonial-section-start -->

    <div class="testimonial-wrapper float-left">
        <div class="testimonial-content-wrapper float-left">
            <div class="container">
                <div class="row">
                    <div class="testimonial-head animated wow fade-up">
                        <h5>Testimonial</h5>
                        <h3>What our client’s say</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9">
                        <div class="test-slider-wrapper float-left animated wow fade-box">
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
                                        <h5>Kelley Miles</h5>
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
                <div class="news-head animated wow fade-up">
                    <h5>Newsletter</h5>
                    <h3>LATEST NAIL TRENDS AND DESIGNS FOR YOU</h3>
                </div>
                 <div class="subscribe-form animated wow fade-up">
                    <form action="{{ route('subscriber.save') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                        <div class="suscribe-btn">
                            <button type="submit" class="main-btn-red nn" >
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em>
                                <span>Subscribe Now</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- news-section-end -->

    <!-- blog-section-start -->

    {{-- <div class="blog-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="blog-head animated wow fade-up">
                        <h3>OUR BLOG</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box-wrapper animated wow fade-box">
                        <div class="blog-img">
                            <img src="{{ asset ('assets/images/staff-1.png') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="blog-name">
                            <div class="blog-content">
                                <p>27 April 2023</p>
                                <h5><a href="blog-detail.html">Ultra Glam Gold Nail Polishes
                                        for Holiday.</a></h5>
                                <a href="blog-detail.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box-wrapper animated wow fade-box">
                        <div class="blog-img">
                            <img src="{{ asset ('assets/images/staff-2-next.png') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="blog-name">
                            <div class="blog-content">
                                <p>22 April 2023</p>
                                <h5><a href="blog-detail.html">Coronavirus: 'Confused picture'
                                        over beauty salon openings</a></h5>
                                <a href="blog-detail.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-box-wrapper animated wow fade-box">
                        <div class="blog-img">
                            <img src="{{ asset ('assets/images/staff-3.png') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="blog-name">
                            <div class="blog-content">
                                <p>24 April 2023</p>
                                <h5><a href="blog-detail.html">Hair salon meets clothing
                                        boutique at new Lehigh</a></h5>
                                <a href="blog-detail.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- team-section-end -->

   

   
    </main>
@endsection