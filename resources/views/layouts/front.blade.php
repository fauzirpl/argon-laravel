<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Konferensi') }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{ asset('front/css/color-switcher-design.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="box-layout">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Header span -->

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header header-style-two">
            <div class="main-box">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img
                                    src="{{ asset('front/images/logo-2.png') }}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="contact.html">Beranda</a></li>
                                    <li class="dropdown"><a href="about-us.html">Unduh</a>
                                        <ul>
                                            <li><a href="about-us.html">Poster</a></li>
                                            <li><a href="pricing.html">Template</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="speakers.html">Informasi</a>
                                        <ul>
                                            <li><a href="speakers.html">Speakers</a></li>
                                            <li><a href="speakers-detail.html">Pembayaran</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Kontak Kami</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer box -->
                        <div class="outer-box">
                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="{{route('register')}}" class="theme-btn btn-style-one"><span
                                        class="btn-title">Daftar</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img
                                src="{{ asset('front/images/logo-2.png') }}" alt="" title=""></a>
                    </div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->
        </header>
        <!--End Main Header -->

        @yield('content')
        {{-- <!-- Subscribe Section -->
        <section class="subscribe-section">
            <div class="auto-container">
                <div class="content-box">
                    <div class="row">
                        <div class="title-column col-lg-6 col-md-12">
                            <div class="sec-title">
                                <span class="icon fa fa-envelope"></span>
                                <h2>Ayo Daftar<br>Sekarang Juga</h2>
                            </div>
                        </div>

                        <div class="title-column col-lg-6 col-md-12">
                            <div class="sec-title text-right mt-3">
                                <a href="{{ route('register') }}" class="theme-btn btn-style-three"><span
                                    class="btn-title" style="font-size: 24pt; font-weight: bold">Daftar</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Subscribe Section --> --}}
        <!-- Main Footer -->
        <footer class="main-footer style-two">
            <div class="auto-container">
                <!-- Footer Content -->
                <div class="footer-content">
                    <div class="footer-logo"><a href="#"><img src="{{ asset('front/images/logo.png') }}"
                                alt=""></a></div>
                    <div class="copyright-text">
                        International Conference on Applied Economics and Social Science (ICAESS 2021). This conference aim is to showcase research applications conducted by researchers. Research gap between academic and industries has become a major challenge which is expected to be addressed during the conference.
                        <br>
                        <h4>Kontak Kami</h4>
                        Alamatnya disini<br>
                        <i class="fa fa-envelope" aria-hidden="true"></i> : willy@wonka.com
                        <i class="fa fa-phone" aria-hidden="true"></i> : +62 823 5045 3943
                        <br>
                        © Copyright {{date('Y')}} All Rights Reserved by <a
                            href="index.html">Expert-Themes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
    <script src="{{ asset('front/js/jquery.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('front/js/appear.js') }}"></script>
    <script src="{{ asset('front/js/owl.js') }}"></script>
    <script src="{{ asset('front/js/wow.js') }}"></script>
    <script src="{{ asset('front/js/parallax.min.js') }}"></script>
    <script src="{{ asset('front/js/validate.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <!-- Color Setting -->
    <script src="{{ asset('front/js/color-settings.js') }}"></script>
</body>

</html>
