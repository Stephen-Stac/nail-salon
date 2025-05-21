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
         <!-- banner-section-start -->

    <div class="inner-page-wrapper float-left">
        <div class="inner-head  animated wow fade-up">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- banner-section-end -->

    <!-- contact-section-start -->

    <div class="contact-wrapper">
        <div class="container">
            <div class="row animated wow fade-up">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-content">
                            <h3>Address</h3>
                            <a href="javascript:;">Accra, Ghana
                                Code: #010101</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h3>Phone</h3>
                            <a href="javascript:;">+233 24 00 000 000<br>
                               </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-content">
                            <h3>Email</h3>
                            <a href="mailto:nailsalon01@example.com">nailsalon01@example.com
                                nailsalon02@example.com</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="contact-content">
                            <h3>Website</h3>
                            <a href="mailto:www.nailsalon01.com">www.nailsalon01.com
                                www.nailsalon01.com</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.353468876326!2d-0.39345193174882004!3d5.514442521862913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdfbb9c0066e72b%3A0xbe299565004ed6e1!2sLizzy&#39;s%20Beauty%20Salon!5e0!3m2!1sen!2sgh!4v1747574744773!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="sidebar-head">
                    <h6>Have a Question?</h6>
                </div>
                <div class="sidebar-body form-head">
                    <form class="row" action="{{ route('question.save') }}" method="POST">
                        @csrf
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="email" class="form-control" name="email" id="contactemail" placeholder="Email" required="">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-input">
                                <textarea name="body" placeholder="Your Text" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-check">
                                <input type="checkbox" class="form-check-input" id="check" required="">
                                <label class="form-check-label" for="check" required="">I agree that my submitted data
                                    is being collected and stored.</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="tb_es_btn_div">
                                <div class="response center"></div>
                                <input type="hidden" name="form_type" value="contact" />
                                <div class="tb_es_btn_wrapper os_contact_input">
                                    <div class="contact-btn">
                                        <button type="submit" class="submitForm main-btn-red">
                                            <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em><span>Send
                                                Message
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- contact-section-end -->

    <!-- news-section-start -->

    <div class="news-wrapper float-left">
        <div class="container">
            <div class="row  animated wow fade-up">
                <div class="news-head">
                    <h5>Newsletter</h5>
                    <h3>LATEST NAIL TRENDS AND DESIGNS FOR YOU</h3>
                </div>
                <div class="subscribe-form">
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
    </main>
@endsection