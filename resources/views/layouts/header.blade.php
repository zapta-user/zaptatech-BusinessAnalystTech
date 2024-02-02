<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Sync4Tech')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description"
        content=" Explore Sync4Tech's journey as a premier tech business analyst services provider. Join us in driving innovation and delivering expert solutions to propel your business toward unparalleled success. " />
    <link rel="icon" type="image/x-icon" href="./assets/fav-2.svg" />
    <meta name="keywords"
        content="Business Analysis, Data Analysis, Data-driven Decision Making, Business Insights,Market Intelligence Consulting" />
    <meta name="robots" content="index, follow" />
    <!-- -------------------EXTERNAL STYLESHEET------------------ -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}" />
    <!-- -------------------BOOTSTRAP 5 STYLE CDN------------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- -------------------JQUERY CDN------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Style the radio container (label) */

        .radio-container {
            display: block;
            position: relative;
            padding-left: 30px;
            /* Adjust as needed to control the spacing */
        }

        /* Style the radio input */
        .radio-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Style the radio checkmark (the visible part of the radio button) */
        .radio-checkmark {
            position: absolute;
            top: 0;
            left: 0;
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }

        /* Background image for unchecked radio button */
        .radio-container input:not(:checked)+.radio-checkmark {
            background-image: url('./assets/unchecked.svg') !important;
            background-size: cover;
            width: 20px !important;
            height: 20px !important;
        }

        /* Background image for checked radio button */
        .radio-container input:checked+.radio-checkmark {
            background-image: url('./assets/checked.svg') !important;
            background-size: cover;
            width: 24px !important;
            height: 24px !important;
        }

        .hover-line {
            display: block;
            opacity: 1;

        }

        .hover-white {
            transition: clip-path 5s ease;
            clip-path: polygon(0 0, 0 100%, 0 100%, 0 0);
        }

        .arrow-img {
            display: block;
            position: fixed;
            height: 22px;
            top: 76px;
            left: -83px;
            right: 10%;
            z-index: -1;
            transform: rotate(-21deg);
            /* opacity: 0; */
            transition: opacity 0.3s ease;
        }

        .arrow-img2 {
            display: block;
            position: fixed;
            height: 22px;
            top: 76px;
            left: -83px;
            right: 10%;
            z-index: -1;
            transform: rotate(-21deg);
            /* transition: opacity 0.3s ease; */
        }

        @media (max-width:500px) {
            .bannerSection {
                padding-top: 100px !important;
            }
        }
    </style>
</head>

<body>
    <button class="back-to-top rounded-circle overflow-hidden clearfix position-fixed d-block border-0"
        type="button"></button>
    <!-- --------------------NAV SECTION----------------- -->
    <nav class="navbar position-fixed fixed-top z-3 w-100 navbar-expand-lg navbar-light px-xl-5 px-sm-4 py-lg-4 py-3 px-lg-3 px-2"
        style="background-color: #ececec">
        <div class="container-fluid px-xl-5 px-0">
            <a class="navbar-brand" href="{{ route('frontend.home') }}">
                <img loading="lazy" width="216" height="40" src="{{ asset('assets/nav-logo.svg') }}"
                    alt="logo" class="img-fluid" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-lg-2 mt-4" id="navbarNavDropdown">
                <ul class="navbar-nav ms-xl-auto m-lg-auto gap-xl-4 gap-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link mx-2 link-color pb-2" aria-current="page"
                            href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 link-color pb-2 @if (Route::currentRouteName() == 'frontend.aboutUs') active @endif"
                            href="{{ route('frontend.aboutUs') }}">About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 link-color pb-2 @if (Route::currentRouteName() == 'frontend.services') active @endif"
                            href="{{ route('frontend.services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 link-color pb-2 @if (Route::currentRouteName() == 'frontend.blogs') active @endif "
                            href="{{ route('frontend.blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 link-color pb-2 @if (Route::currentRouteName() == 'frontend.projects') active @endif"
                            href="{{ route('frontend.projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 link-color pb-2 @if (Route::currentRouteName() == 'frontend.partners') active @endif"
                            href="{{ route('frontend.partners') }}">Partners</a>
                    </li>
                </ul>
                <button
                    class="btn navButton rounded-0 d-lg-none d-block smallButton py-2 px-4 button-color d-flex justify-content-center align-items-center gap-3"
                    data-bs-toggle="modal" data-bs-target="#staticBackdropcon">
                    <a href="#" class="text-white">Contact Us</a>
                </button>
            </div>
            <div class="d-lg-flex gap-xl-3 gap-1 d-none">
                <button
                    class="btn navButton rounded-0 d-lg-block d-none button-color d-flex justify-content-center align-items-center gap-3"
                    data-bs-toggle="modal" data-bs-target="#staticBackdropcon">
                    <a href="#" class="text-white">Contact Us</a>
                </button>
            </div>
        </div>
    </nav>
