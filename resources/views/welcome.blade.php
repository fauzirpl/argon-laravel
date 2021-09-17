@extends('layouts.front')

@section('title')
Home
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
            <figure class="speaker-img"><img src="{{ asset('front/images/vaksin.png')}}" alt=""></figure>
        </div>

        <div class="anim-icons full-width">
            <span class="icon icon-circle-3 wow zoomIn"></span>
            <span class="icon icon-dots wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="content-box">
                <span class="title">October 29, 2021</span>
                <h2>1st INTERNATIONAL CONFERENCE<br> ON GLOBAL HEALTH (ICOGH)</h2>
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="10/29/2021"></div></div>
                <div class="btn-box"><a href="{{route('register')}}" class="theme-btn btn-style-two"><span class="btn-title">Register Now</span></a></div>
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
            <div class="sec-title text-center">
                <h2 class="mb-3">Topic Research</h2>
                <p>Welcome to the virtual 1st INTERNATIONAL CONFERENCE ON GLOBAL HEALTH (ICOGH). This would be our first activity that we carry out this year in accordance with the missions of study program, namely conducting research and scientific development to produce superior work and becoming a reference in the fields of nursing and sports. The purpose of this activity is to develop insight and to improve the competence of lecturers, teachers, health practitioners and educators in the fields of expertise related to nursing and sports on a national and international scale as well as to develop cutting-edge innovations in nursing and sports.</p>
                <p>The Proposed article topic is about health containing technology elements in various areas like :</p>
            </div>

            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('img/nurse.svg')}}" alt="Nursing" style="height:100px"></div>
                        <h4><a href="#">Nursing</a></h4>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('img/fruits.svg')}}" alt="Nursing" style="height:100px"></div>
                        <h4><a href="#">Nutrition and Health</a></h4>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('img/fetus.svg')}}" alt="Nursing" style="height:100px"></div>
                        <h4><a href="#">Midwifery</a></h4>
                    </div>
                </div>
                <!-- Feature Block -->
                <div class="feature-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('img/health-care.svg')}}" alt="Nursing" style="height:100px"></div>
                        <h4><a href="#">Public Health</a></h4>
                    </div>
                </div>
                <!-- Feature Block -->
                <div class="feature-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('img/exercise.svg')}}" alt="Nursing" style="height:100px"></div>
                        <h4><a href="#">Health Sport</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Section -->

    <!-- Speakers Section -->
    <section class="speakers-section-two" id="speakers">
        <div class="anim-icons">
            <span class="icon icon-circle-4 wow zoomIn"></span>
            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">1st ICOGH 2021</span>
                <h2>Keynote Speakers</h2>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="#">Indah Wulandari., M.Kep., Ns. Sp. Kep. MB</a></h4>
                            <span class="designation">Lecturer, Department of Medical and Surgical Nursing, Faculty of Health Science Universitas Faletehan<br>
                            Materi : “Handling Covid-19 in Indonesia”
                            </span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('front/images/01.png') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>

                <div class="speaker-block-two col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="#">Professor Dr Khatijah Lim Abdullah</a></h4>
                            <span class="designation">Department of Nursing, School of Healthcare and Medical Science Sunway University<br>
                            Materi : “Digital Healthcare During Pandemic Covid -19”</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('front/images/02.png') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>

                <div class="speaker-block-two col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="info-box">
                            <h4 class="name"><a href="#">Assist. Prof. Surasa Khongprasert, Ph.D,.PT</a></h4>
                            <span class="designation">Faculty of Sports Science Chulalongkorn University<br>
                            Materi : “Physical Activity and Modified Rehabilitation Exercise During Covid-19 Pandemic with Specific for Elderly”</span>
                        </div>
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('front/images/03.png') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Speakers Section -->

    <!-- Schedule Section Style two -->
    <section class="schedule-section style-two" id="date">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">1st ICOGH 2021</span>
                <h2>Important Date</h2>
            </div>

            <!-- schedule Block -->
            <div class="schedule-block">
                <div class="inner-box">
                    <div class="inner">
                        <table class="table p-4">
                            <tr>
                                <th>Abstract Submission</th>
                                <td>8 Sept - 8 Okt 2021</td>
                            </tr>
                            <tr>
                                <th>Abstract Acceptance Announcement</th>
                                <td>13 Okt 2021</td>
                            </tr>
                            <tr>
                                <th>Full Paper Submission</th>
                                <td>14 - 23 Okt 2021</td>
                            </tr>
                            <tr>
                                <th>Early Registration</th>
                                <td>11 Sept - 10 Okt 2021</td>
                            </tr>
                            <tr>
                                <th>Late Registration</th>
                                <td>11 - 27 Okt 2021</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End schedule Section -->

    <!-- Fee Section Style two -->
    <section class="event-info-section" id="fee">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">1st ICOGH 2021</span>
                <h2>Registration Fee</h2>
            </div>

            <!-- schedule Block -->
            <div class="event-info-tabs tabs-box">
                <div class="inner-box">
                    <div class="inner table-responsive">
                        <table class="table table-bordered p-4 text-center">
                            <tr>
                                <th rowspan="2" class="align-middle">Types of Participans</th>
                                <th colspan="2">Local (IDR)</th>
                                <th colspan="2">International (USD)</th>
                            </tr>
                            <tr>
                                <th>Early</th>
                                <th>Late</th>
                                <th>Early</th>
                                <th>Late</th>
                            </tr>
                            <tr>
                                <td>Professional-Presenter</td>
                                <td>350.000</td>
                                <td>450.000</td>
                                <td>35</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td>Student-Presenter</td>
                                <td>250.000</td>
                                <td>350.000</td>
                                <td>30</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>Participant<br><small>*Only with e-certificate</small></td>
                                <td colspan="4"><h2>FREE</h2></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End fee Section -->
@endsection
