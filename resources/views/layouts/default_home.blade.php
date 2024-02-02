<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/fav-2.svg') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!---------------------- Bootstrap Cdn---------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- intl-tel-input CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/css/intlTelInput.min.css">
    <meta name="robots" content="noindex, nofollow" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!----------------------- CSS ------------------------------->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" async>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/myStyle.css') }}" async>

    <meta name="title" content="Sync4Tech: Global Software Development & Business Partner">
    <meta name="description"
        content="Digitize your business with Sync4Tech, a global business partner & business analyst in software development, We offer futuristic technology solutions for businesses enhancing efficiency and driving growth.">
    <link rel="canonical" href="https://www.sync4tech.co">
    <meta property="og:title" content="Sync4Tech: Global Software Development & Business Partner">
    <meta property="og:site_name" content="Sync4Tech">
    <meta property="og:url" content="https://www.sync4tech.co">
    <meta property="og:description"
        content="Digitize your business with Sync4Tech, a global business partner & business analyst in software development, We offer futuristic technology solutions for businesses enhancing efficiency and driving growth.">
    <meta property="og:type" content="Organization">
    <meta property="og:image" content="https://i.ibb.co/r3ypC8y/twitter-meta-logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Sync4Tech">
    <meta name="twitter:title" content="Sync4Tech: Global Software Development & Business Partner">
    <meta name="twitter:description"
        content="Digitize your business with Sync4Tech, a global business partner & business analyst in software development, We offer futuristic technology solutions for businesses enhancing efficiency and driving growth.">
    <meta name="twitter:image" content="https://i.ibb.co/r3ypC8y/twitter-meta-logo.png">

    <title>Home Page | Sync4Tech</title>
</head>

<body>

    <button class="back-to-top rounded-circle overflow-hidden clearfix position-fixed d-block border-0"
        type="button"></button>
    <!-------------------------- ********** Section 1 ********** ------------------------->
    <section class="main-nav">
        <div class="container">
            <navbar class="navbar">
                <a class="navbar-brand d-lg-block d-none" href="{{ route('frontend.home') }}" id="defaultlogo">
                    <img loading="lazy" width="216" height="40" src="{{ asset('assets/home-logo.svg') }}"
                        alt="logo" class="img-fluid" />
                </a>
                <a class="navbar-brand d-lg-none d-block" href="{{ route('frontend.home') }}" id="blacklogo">
                    <img loading="lazy" width="216" height="40" src="{{ asset('assets/nav-logo.svg') }}"
                        alt="logo" class="img-fluid" />
                </a>

                <div class="nav-items">
                    <a class="nav-link mx-2 pb-2 active" aria-current="page"
                        href="{{ route('frontend.home') }}">Home</a>
                    <a class="nav-link mx-2 pb-2" href="{{ route('frontend.aboutUs') }}">About Us</a>
                    <a class="nav-link mx-2 pb-2" href="{{ route('frontend.services') }}">Services</a>
                    <a class="nav-link mx-2 pb-2" href="{{ route('frontend.blogs') }}">Blogs</a>
                    <a class="nav-link mx-2 pb-2" href="{{ route('frontend.projects') }}">Projects</a>
                    <a class="nav-link mx-2 pb-2" href="{{ route('frontend.partners') }}">Partners</a>
                    <a class="navButton nav-res" href="#" class="text-white" data-bs-toggle="modal"
                        data-bs-target="#staticBackdropcon">Contact Us</a>
                </div>
                <div>
                    <a class="navButton main-btn" href="#" class="text-white" data-bs-toggle="modal"
                        data-bs-target="#staticBackdropcon">Contact Us</a>
                    <i class="fa fa-bars" id="nav-toggler"></i>
                </div>
            </navbar>
        </div>
    </section>

    @yield('section')

    @include('layouts.footer')
