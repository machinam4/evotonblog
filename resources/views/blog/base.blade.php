<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from axilthemes.com/demo/template/blogar/home-tech-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 07:30:47 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog || Evoton - Get latest tech news</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/evoton logo sm.webp') }}">
    <!---google ads-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8083663507982142"
        crossorigin="anonymous"></script>
    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <!---google ads-->
    <div class="main-wrapper">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Start Header -->
        <header class="header axil-header header-style-3  header-light header-sticky ">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <div
                                class="header-top-bar d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <ul class="header-top-date liststyle d-flex flrx-wrap align-items-center mr--20">
                                    <li><a href="#">4 November, 2021</a></li>
                                </ul>
                                <ul class="header-top-nav liststyle d-flex flrx-wrap align-items-center">
                                    <li><a href="https://evoton.co.ke">About</a></li>
                                    <li><a href="https://evoton.co.ke/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12">
                            <ul class="social-share-transparent md-size justify-content-center justify-content-md-end">
                                <li><a href="https://facebook.com/Evoton-100874772198757/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/evoton_software/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/machinamaiki?t=ZCLxz0b-xPkLtkVYMnpzzw&s=09"
                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://evoton.co.ke/" target="_blank"><i class="fas fa-link"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="logo">
                                <a href="https://evoton.co.ke/">
                                    <img class="dark-logo"
                                        src="{{ asset('assets/images/logo/evoton bloglogo.png') }}"
                                        alt="Evoton Software">
                                    <img class="light-logo"
                                        src="{{ asset('assets/images/logo/evoton bloglogo.png') }}"
                                        alt="Evoton Software">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-6">
                            <div class="banner-add text-end">

                                {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8083663507982142"
                                                                crossorigin="anonymous"></script>
                                <!-- fixed horizontal ad -->
                                <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px"
                                    data-ad-client="ca-pub-8083663507982142" data-ad-slot="3592933563"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8083663507982142"
                crossorigin="anonymous"></script> --}}
        <!-- Start Header -->

        @yield('contents')

        <!-- Horizontal ad -->
        {{-- <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8083663507982142"
            data-ad-slot="4322727150" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script> --}}



        <!-- Start Footer Area  -->
        <div class="axil-footer-area axil-footer-style-1 bg-color-white">
            <!-- Start Footer Top Area  -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Post List  -->
                            <div class="inner d-flex align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="https://facebook.com/Evoton-100874772198757/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/evoton_software/" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/machinamaiki?t=ZCLxz0b-xPkLtkVYMnpzzw&s=09"
                                            target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://evoton.co.ke/" target="_blank"><i
                                                class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Post List  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Top Area  -->

            <!-- Start Copyright Area  -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-12">
                            <div class="copyright-left">
                                <div class="logo">
                                    <a href="https://evoton.co.ke/">
                                        <img class="dark-logo"
                                            src="{{ asset('assets/images/logo/evoton bloglogo.png') }}"
                                            alt="Evoton Software">
                                        <img class="light-logo"
                                            src="{{ asset('assets/images/logo/evoton bloglogo.png') }}"
                                            alt="Evoton Software">
                                    </a>
                                </div>
                                <ul class="mainmenu justify-content-start">
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="https://evoton.co.ke/contact">
                                            <span class="hover-flip-item">
                                                <span data-text="Contact Us">Contact Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="Terms of Use">Terms of Use</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="AdChoices">AdChoices</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="Advertise with Us">Advertise with Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="Blogar Store">Evoton Store</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="copyright-right text-start text-lg-end mt_md--20 mt_sm--20">
                                <p class="b3">All Rights Reserved © 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </div>
        <!-- End Footer Area  -->

        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->

    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/tweenmax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>


<!-- Mirrored from axilthemes.com/demo/template/blogar/home-tech-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 07:31:24 GMT -->

</html>
