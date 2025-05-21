@extends('components.app')
@section('content')
    <main>
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

         <div class="about-wrapper about-page float-left animated wow fade-up">
        <div class="container">
            <div class="row fade-up">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-content py-0">
                        <h5>About US</h5>
                        <h3>Why We Are The Best?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution
                            of letters, as opposed to using 'Content here, content here.</p>

                        <p class="about-pera">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also
                            the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply
                            dummy
                            text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy
                            text ever since the 1500s.</p>

                        <div class="about-btn-page">
                            <a href="appointment.html" class="main-btn-red">
                                <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Make An
                                    Appointment
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-img mt-lg-0 mt-md-4 mt-4">
                        <span>
                            <img src="{{ asset ('assets/images/staff-2.png') }}" alt="img" class="img-fluid w-100">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about-section-end -->

    <!-- extraodinary-start -->

    <div class="ordinary-about-wrapper float-left">
        <div class="container">
            <div class="ordinary-head animated wow fade-up">
                <h5>Extraordinary Experience In Nail Care</h5>
                <h3>Our Nail Salon IS THE MOST POPULAR, CLEAN
                    AND RECOMMENDED NAIL SALON</h3>
            </div>
            <div class="ordinary-vdo animated wow fade-box">
                <div class="ordinary-img">
                    <a id="play-video" class="video-play-button youtube-link" href="javascript:void(0);"
                        youtubeid="JMJ4yrchiZ4">
                        <div class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="wrapper">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>

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
                                        <img src="{{ asset ('assets/images/testimonial-2.png') }}" alt="img">
                                        <h5>Pamela Adams</h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-box">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has
                                                been the industry's standard dummy text ever since the 1500s, when an
                                                unknown printer took a
                                                galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                        <img src="{{ asset ('assets/images/testimonial-1.png') }}" alt="img">
                                        <h5>Pamela Adams</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- news-section-start -->

    <div class="news-wrapper float-left">
        <div class="container">
            <div class="row">
                <div class="news-head animated wow fade-up">
                    <h5>Newsletter</h5>
                    <h3>LATEST NAIL TRENDS AND DESIGNS FOR YOU</h3>
                </div>
                <div class="subscribe-form animated wow fade-up">
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