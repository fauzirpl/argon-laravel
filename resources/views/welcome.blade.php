@extends('layouts.front')

@section('title')
Beranda
@endsection

@section('content')
     <!-- Banner Conference -->
     <section class="banner-conference">

		<!-- Icons -->
		<div class="icons parallax-scene-1">
			<!-- Icon One -->
			<div data-depth="0.20" class="icon-one parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-1.png')}})"></div>
			<!-- Icon Two -->
			<div data-depth="0.50" class="icon-two parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-2.png')}})"></div>
			<!-- Icon Three -->
			<div data-depth="0.10" class="icon-three parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-3.png')}})"></div>
			<!-- Icon Four -->
			<div data-depth="0.30" class="icon-four parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-4.png')}})"></div>
			<!-- Icon Five -->
			<div data-depth="0.10" class="icon-five parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-5.png')}})"></div>
			<!-- Icon Six -->
			<div data-depth="0.20" class="icon-six parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-6.png')}})"></div>
			<!-- Icon Seven -->
			<div data-depth="0.10" class="icon-seven parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-7.png')}})"></div>
			<!-- Icon One -->
			<div data-depth="0.20" class="icon-eight parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-1.png')}})"></div>
			<!-- Icon Two -->
			<div data-depth="0.50" class="icon-nine parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-8.png')}})"></div>
			<!-- Icon Three -->
			<div data-depth="0.10" class="icon-ten parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-3.png')}})"></div>
			<!-- Icon Four -->
			<div data-depth="0.30" class="icon-eleven parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-4.png')}})"></div>
			<!-- Icon Five -->
			<div data-depth="0.10" class="icon-twelve parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-5.png')}})"></div>
			<!-- Icon Six -->
			<div data-depth="0.20" class="icon-thirteen parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-6.png')}})"></div>
			<!-- Icon Seven -->
			<div data-depth="0.10" class="icon-fourteen parallax-layer" style="background-image:url({{ asset('front/images/icons/icon-7.png')}})"></div>
		</div>

        <div class="layer-outer">
            <div class="gradient-layer"></div>
        </div>

        <div class="images-outer">
            <figure class="speaker-img"><img src="{{ asset('front/images/main-slider/speaker.png')}}" alt=""></figure>
        </div>

        <div class="anim-icons full-width">
            <span class="icon icon-circle-3 wow zoomIn"></span>
            <span class="icon icon-dots wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="content-box">
                <span class="title">January 20, 2020</span>
                <h2> World Digital <br>Conference 2020</h2>
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="12/11/2021"></div></div>
                <div class="btn-box"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>
            </div>
        </div>
    </section>
    <!--End Banner Conference -->

    <!-- Features Section -->
    <section class="features-section">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-shape-3 wow fadeIn"></span>
                <span class="icon icon-line-1 wow fadeIn"></span>
            </div>

            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-search"></span></div>
                        <h4><a href="about.html">Experience</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                        <h4><a href="about.html">Networking</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-success"></span></div>
                        <h4><a href="about.html">Party</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Section -->

    <!-- Speakers Section -->
    <section class="speakers-section-two">
        <div class="anim-icons">
            <span class="icon icon-circle-4 wow zoomIn"></span>
            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Speakers</span>
                <h2>Todays Performers</h2>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Dale Marke</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-1.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Natisha Decoux</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-2.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Adolfo Plahs</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-4.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Mitchell Hegg</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-3.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Kenyetta Lesley</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-5.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Shelly Verghese</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-6.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Kenyetta Lesley</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-7.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Shelly Verghese</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{ asset('front/images/resource/speaker-8.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Speakers Section -->

    <!-- Schedule Section Style two -->
    <section class="schedule-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">About Conference</span>
                <h2>Schedule Plan</h2>
            </div>

            <div class="schedule-tabs style-two tabs-box">
                <div class="btns-box">
                    <!--Tabs Box-->
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <span class="day">Day 01</span>
                            <span class="date">01</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-2">
                            <span class="day">Day 02</span>
                            <span class="date">02</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-3">
                            <span class="day">Day 03</span>
                            <span class="date">03</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-4">
                            <span class="day">Day 04</span>
                            <span class="date">04</span>
                            <span class="month">Jan</span> 2020
                        </li>
                    </ul>
                </div>

                <div class="tabs-content">

                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-4">
                        <div class="schedule-timeline">
                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-1.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- schedule Block -->
                            <div class="schedule-block">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{ asset('front/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End schedule Section -->

    <!-- Pricing Section -->
    <section class="pricing-section-two">
        <div class="anim-icons">
            <span class="icon icon-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
            <span class="icon icon-dots wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get Ticket</span>
                <h2>Choose a Ticket</h2>
            </div>

            <div class="outer-box">
                <div class="row">
                    <!-- Pricing Block -->
                    <div class="pricing-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="title"><span class="icon flaticon-movie-tickets"></span> Day Pass</div>
                            <div class="price-box">
                                <h4 class="price">$35.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference Tickets</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="true">Easy Access</li>
                                <li class="true">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="title"><span class="icon flaticon-movie-tickets"></span> Full Pass</div>
                            <div class="price-box">
                                <h4 class="price">$99.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference Tickets</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="true">Easy Access</li>
                                <li class="true">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="title"><span class="icon flaticon-movie-tickets"></span> Group Pass</div>
                            <div class="price-box">
                                <h4 class="price">$199.99</h4>
                            </div>
                            <ul class="features">
                                <li class="true">Conference Tickets</li>
                                <li class="true">Free Lunch And Coffee</li>
                                <li class="true">Certificate</li>
                                <li class="true">Easy Access</li>
                                <li class="true">Free Contacts</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

        <!-- Event Info Section -->
    <section class="event-info-section">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title style-two">
                            <span class="title">Reach us</span>
                            <h2>Direction for the <br>Event hall</h2>
                        </div>

                        <div class="event-info-tabs tabs-box">
                            <!--Tabs Box-->
                            <ul class="tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab1">Time</li>
                                <li class="tab-btn" data-tab="#tab2">Venue</li>
                                <li class="tab-btn" data-tab="#tab3">How to</li>
                            </ul>

                            <div class="tabs-content">
                                <!--Tab-->
                                <div class="tab active-tab" id="tab1">
                                    <h4><span class="icon far fa-calendar"></span> January 20, 2020</h4>
                                    <div class="text">9.00 AM - 04.00 PM</div>
                                    <ul class="info-list">
                                        <li><span class="icon icon_profile"></span> Dianne Ameter</li>
                                        <li><span class="icon icon_phone"></span> <a href="tel:+690-147-265-345">+123 456 7890</a></li>
                                        <li><span class="icon icon_mail"></span> <a href="mailto:sopport@Eventrox.com">sopport@Eventrox.com</a></li>
                                    </ul>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab2">
                                    <h4><span class="icon fa fa-map-marker-alt"></span>Pearl hotel, New york, USA</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab3">
                                    <h4><span class="icon fa fa-directions"></span> How to get there</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <figure class="image"><img src="{{ asset('front/images/icons/map-4.png')}}" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!--End Event Info Section -->

@endsection
