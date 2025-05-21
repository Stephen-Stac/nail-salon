@extends('components.app')
@section('content')
    <main>
         <div class="inner-page-wrapper float-left">
        <div class="inner-head">
            <h1>Appointment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- banner-section-end -->

      <!-- Flash message start -->
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
        <!-- Flash message end -->

    <!-- blog-start -->

    

    <div class="contact-form appointment-wrap">
        <div class="container">
            <div class="row">
                <div class="sidebar-head">
                    <h6>Book An Appointment</h6>
                </div>
                <div class="sidebar-body form-head">
                    <form class="row" action="{{ route('appointment') }}" method="POST">
                        @csrf
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="contact-input">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone" required>
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-input">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-input">
                                <input class="form-control" name="date" placeholder="MM/DD/YYYY" type="date" required>
                                <span class="form-date"><i class="fas fa-calendar-minus"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-input">
                                <textarea name="message" placeholder="Your Text"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-check">
                                <input type="checkbox" class="form-check-input" id="check" required>
                                <label class="form-check-label" for="check">I agree that my submitted data is being collected and stored.</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="tb_es_btn_div">
                                <div class="response center"></div>
                                <input type="hidden" name="form_type" value="appointment" />
                                <div class="tb_es_btn_wrapper os_contact_input">
                                    <div class="contact-btn appointment-btn">
                                        <button type="submit" class="main-btn-red">
                                            <em><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></em>
                                            <span>Submit</span>
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


    <!-- blog-end -->

    <!-- news-section-start -->

    <div class="news-wrapper float-left">
        <div class="container">
            <div class="row">
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