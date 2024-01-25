<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    TECH BUSINESS ANALYST | Unlocking Business Insights: Navigating Data to
    Drive Success
  </title>
  <meta name="description"
    content="Discover the power of data-driven decision-making as we transform complex information into actionable insights. Our cutting-edge analytical tools and methodologies empower you to harness the full potential of your data resources." />
  <meta name="keywords"
    content="Business Analysis, Data Analysis, Data-driven Decision Making, Business Insights,Market Intelligence Consulting" />
  <meta name="robots" content="index, follow" />
  <!-- -------------------EXTERNAL STYLESHEET------------------ -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="icon" type="image/x-icon" href="{{asset('assets/fav-2.svg')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <link rel="stylesheet" href="{{asset('css/myStyle.css')}}" />
  <!-- -------------------BOOTSTRAP 5 STYLE CDN------------------ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- -------------------JQUERY CDN------------------ -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
     .becomepartform input, .becomepartform select{
    box-shadow: none !important;
  }
  .becomepartform input, .becomepartform select{
    background-color: #F6F6F6;
    box-shadow: 0px 1px 2px 0px #1018280D;
  }
  table tbody tr td #domains{
    width: 16px !important;
    height: 16px !important;
    border: 1px solid #D0D5DD !important;
    border-radius: 0px !important;
  }
  .becomepartform label{
      font-family: Manrope !important;
      font-size: 14px !important;
      font-weight: 400 !important;
      line-height: 20px !important;
      letter-spacing: 0em !important;
      text-align: left !important;
      color: #5F5F5F !important;
  }
  .partnertable table p{
    font-family: Manrope !important;
  font-size: 14px !important;
  font-weight: 400;
  line-height: 20px;
  letter-spacing: 0em;
  text-align: left;
  color: #5F5F5F !important;
  }
  #companyNameselect label{
    font-size: 16px !important;
    font-weight: 600 !important;
  }
  #repnameselect label{
    font-size: 16px !important;
    font-weight: 600 !important;
  }
  /* Style the radio container (label) */
  .radio-container {
    display: block;
    position: relative;
    padding-left: 30px; /* Adjust as needed to control the spacing */
  }
  .radio-partner p{
    padding-left: 32px !important;
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
  .radio-container input:not(:checked) + .radio-checkmark {
    background-image: url('./assets/unchecked.svg') !important; /* Replace with the URL of your image */
    background-size: cover;
    width: 20px;
    height: 20px;
  }
  
  /* Background image for checked radio button */
  .radio-container input:checked + .radio-checkmark {
    background-image: url('./assets/checked.svg') !important; /* Replace with the URL of your image */
    background-size: cover;
    width: 24px;
    height: 24px;
  }
  .bottomImg i:hover {
      color: var(--orange-color) !important;
      opacity: 1 !important;
  }
  </style>
</head>

<body style="overflow-x: hidden;">
  <button class="back-to-top rounded-circle overflow-hidden clearfix position-fixed d-block border-0"
    type="button"></button>
  <!-- --------------------NAV SECTION----------------- -->
  <!-- <nav
    class="navbar position-fixed fixed-top z-3 w-100 navbar-expand-lg navbar-light px-xl-5 px-sm-4 py-lg-4 py-3 px-lg-3 px-2"
    style="background-color: #ececec">
    <div class="container-fluid px-xl-5 px-0">
      <a class="navbar-brand" href="./index.html">
         <img  loading="lazy" width="216" height="40" src="./assets/nav-logo.svg" alt="logo" class="img-fluid" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-lg-2 mt-4" id="navbarNavDropdown">
        <ul class="navbar-nav ms-xl-auto m-lg-auto gap-xl-4 gap-lg-0 gap-2 ex-hegh">
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="./aboutUs.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="./service.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="./blogs.html">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="./projects.html">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="./partners.html">Partners</a>
          </li>
        </ul>
        <button
          class="btn navButton rounded-0 d-lg-none d-block smallButton py-2 px-4 button-color d-flex justify-content-center align-items-center gap-3">
          <a href="./contactus.html" class="text-white">Contact Us</a>
        </button>
      </div>
      <div class="d-lg-flex gap-xl-3 gap-1 d-none">
        <button
          class="btn navButton rounded-0 d-lg-block d-none button-color d-flex justify-content-center align-items-center gap-3">
          <a href="./contactus.html" class="text-white">Contact Us</a>
        </button>
      </div>
    </div>
  </nav> -->

  <nav
  class="navbar position-fixed fixed-top z-3 w-100 navbar-expand-lg navbar-light px-xl-5 px-sm-4 py-lg-4 py-3 px-lg-3 px-2"
  style="background-color: #ececec"
>
  <div class="container-fluid px-xl-5 px-0">
    <a class="navbar-brand" href="./index.html">
       <img  loading="lazy" width="216" height="40" src="./assets/nav-logo.svg" alt="logo" class="img-fluid" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse mt-lg-2 mt-4"
      id="navbarNavDropdown"
    >
      <ul class="navbar-nav ms-xl-auto m-lg-auto gap-xl-4 gap-lg-0 gap-2">
        <li class="nav-item">
          <a
            class="nav-link mx-2 link-color pb-2"
            aria-current="page"
            href="./index.html"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 link-color pb-2" href="./aboutUs.html"
            >About Us</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 link-color pb-2" href="./service.html"
            >Services</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 link-color pb-2" href="./blogs.html"
            >Blogs</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 link-color pb-2 active" href="./projects.html"
            >Projects</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 link-color pb-2" href="./partners.html"
            >Partners</a
          >
        </li>
      </ul>
      <button
        class="btn navButton rounded-0 d-lg-none d-block smallButton py-2 px-4 button-color d-flex justify-content-center align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#staticBackdropcon"
      >
        <a href="#" class="text-white">Contact Us</a>
      </button>
    </div>
    <div class="d-lg-flex gap-xl-3 gap-1 d-none">
      <button
        class="btn navButton rounded-0 d-lg-block d-none button-color d-flex justify-content-center align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#staticBackdropcon"
      >
        <a href="#" class="text-white">Contact Us</a>
      </button>
    </div>
  </div>
</nav>
  <!-- --------------------BANNER SECTION----------------- -->
  <div
    class="bannerSection flex-column gap-1 d-flex align-items-start justify-content-center  flex-shrink-0 ex-paddg"
    style="
        background-image: url(./assets/Project\ Page.png);
        background-size: cover;
      ">
    <div class="d-flex gap-2 align-items-center justify-content-center">
      <a href="./index.html">
        <span class="text-white">HOME</span>
      </a>
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
        <path
          d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
          fill="#ACACAC" />
      </svg>
      <a href="./projects.html">
        <span class="text-white">PROJECTS</span>
      </a>
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
        <path
          d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
          fill="#ACACAC" />
      </svg>
      <a href="./portfolio.html">
        <h4 class="text-orange text-center pt-md-0 pt-1 text-nowrap">United Master</h4>
      </a>
    </div>
    <h1 class="text-white text-center fw-bold">United Master</h1>
    <p class="text-lg-start px-md-0" style="color: #dfdfdf">
        UnitedMasters empowers artists to distribute music on Spotify and Apple Music, offering exclusive plans and seamless track uploads. A comprehensive platform for musicians to thrive.
    </p>
  </div>
  <div class="pro-main-state" style="align-items: center;"> 
    <div class="container">
      <div class="pr-st-main">
        <div class="pro-st-txt">
          <h1>Problem Statement</h1>
          <p>
            Artists faced challenges in getting their music recognized and distributed. Common problems included limited access to major distribution channels, reliance on traditional record labels, complex royalty structures, and difficulties in promoting their work to a broader audience. In addition to these challenges, artists often grappled with the lack of control over their intellectual property, as traditional record labels exerted significant influence. The intricate web of complex royalty structures frequently resulted in delayed and opaque compensation. Navigating licensing regulations posed a daunting task for many artists, leading to potential legal complications in their music distribution journey.


          </p>
        </div>
        <div>
            <img loading="lazy" width="480" height="380" src="./assets/UnitedMasterDetailPage.webp" alt="qme" class="img-fluid" style="cursor: pointer" alt="kutuby" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
  <div class="pro-main-state" style="align-items: center;background: linear-gradient(0deg, #0D3642, #0D3642),
  linear-gradient(98.18deg, rgba(55, 58, 73, 0.194867) 14.37%, rgba(60, 44, 63, 0.2) 25.31%, rgba(0, 197, 167, 0.144) 100%);
  ;"> 
    <div class="container">
      <div class="pr-st-main">
        <div>
          <img loading="lazy" width="591" height="400" src="./assets/P_Detail2.webp" alt="qme" class="img-fluid" style="cursor: pointer" alt="kutuby" class="img-fluid" />
      </div>
        <div class="pro-st-txt">
          <h1 class="hidden-title mb-4">Hidden Challenges</h1>
          <div class="d-flex">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <p class="hidden-text">
              Ensuring integration with major streaming platforms like Spotify and Apple Music to provide artists with efficient distribution channels.
            </p>
        </div>
        <div class="d-flex">
          <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
          <p class="hidden-text">Designing a robust royalty management system with transparent structures to address the complexity associated with artist compensation in the music industry.
          </p>
      </div>
      <div class="d-flex">
        <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
        <p class="hidden-text">Ensuring compliance with licensing and copyright regulations to protect artists' intellectual property and avoid legal issues related to music distribution.</p>
      </div>
    </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div
    class="cardsSection toolCardSection projectdetails d-flex row justify-content-lg-between justify-content-center align-items-center gap-5"
    style="padding-bottom: 80px !important">
    <div class="col-xl-6 col-md-5 col-sm-8 col-10 d-flex justify-content-center align-items-center">
      <img width="480" height="380" src="./assets/UnitedMasterMockup.webp" alt="kutuby" class="img-fluid" />
    </div>
    <div class="col-md-5 d-flex flex-column gap-3 justify-content-center">
      <h1 class="fw-bold text-md-start text-center">Proposed Solution</h1>
      <p class="brown pe-3 text-md-start text-center">
        UnitedMasters provides a comprehensive solution by offering artists a centralized platform for easy and broad music distribution, simplified royalty management, effective promotion tools, and the opportunity for independence from traditional label structures. The platform empowers artists with control over their music careers in an ever-changing industry. UnitedMasters embraces an interface, ensuring an intuitive experience for artists in managing their profiles, music catalog, and promotional activities. The platform's centralized hub allows artists to upload, edit, and organize their tracks while providing real-time analytics to track performance.

      </p>
    </div>
  </div>
  </div>
  
  <!-- ---------------agile section---------------- -->
  <div class="projectcomponentsection row row-gap-3"
    style="background-color: #e7ebec">
    <div
      class="col-lg-3">
      <p style="color: #636363" class="text-center font-22-900 mb-2">Domain</p>
      <h2 class="text-orange text-center text-nowrap font-17">Music Technology</h2>
    </div>
    <div
      class="col-lg-3">
      <p style="color: #636363" class="text-center font-22-900 mb-2">Development Process</p>
      <h2 class="text-orange text-center text-nowrap font-17">Agile</h2>
    </div>
    <div
      class="col-lg-3">
      <p style="color: #636363" class="text-center font-22-900 mb-2">Duration</p>
      <h2 class="text-orange text-center text-nowrap font-17">03 Months</h2>
    </div>
    <div
      class="col-lg-3">
      <p style="color: #636363" class="text-center font-22-900 mb-2">Platform</p>
      <h2 class="text-orange text-center text-nowrap font-17">Web App</h2>
    </div>
  </div>
  <!-- ------------TOOLS SECTION---------------- -->
  <!-- ------------TOOLS CONTENT SECTION---------------- -->
  <section class="key-fec-sec">
    <div class="container">
      <h1 class="key-title">Key Features</h1>
      <div class="key-fec-main">
        <div class="key-fec-txt">
          <h2>
            Global Music Distribution
          </h2>
          <p>
            UnitedMasters takes the hassle out of music distribution by seamlessly integrating with major platforms such as Spotify, Apple Music, and more. Artists can broaden their reach, ensuring global exposure and opening doors to diverse audiences worldwide. The platform's streamlined process simplifies the complexities of distribution, making it accessible for both established and emerging artists. 
          </p>
         
        </div>
        
        <div>
          <img src="./assets/specific.png" alt="kutuby" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!-- ---- -->

<section class="key-fec-sec">
  <div class="container">
    <div class="key-fec-main">
      <div>
        <img src="./assets/curr.svg" alt="kutuby" class="img-fluid" />
      </div>
      <div class="key-fec-txt">
        <h2>
          Royalty Management
        </h2>
        <p>
          UnitedMasters revolutionizes royalty tracking, offering a transparent and artist-centric system. Through detailed insights, artists can monitor their earnings, track performance metrics, and gain an understanding of how their music is resonating with audiences. The platform's commitment to fair compensation ensures that artists receive their rightful share, fostering trust and transparency in the dynamic music industry.
        </p>
       
      </div>
      
      
    </div>
  </div>
</section>
  
  <section class="key-fec-sec">
    <div class="container">
      <div class="key-fec-main">
        <div class="key-fec-txt">
          <h2>
            Promotion Tools
          </h2>
          <p>
            UnitedMasters empowers artists with a suite of advanced promotional tools designed for the digital age. Artists can create targeted campaigns, connect with their audience on a personal level, and optimize their music's visibility on social media and other digital platforms. From data-driven strategies to real-time analytics, these tools provide artists with the means to elevate their online presence and engage with fans effectively.
          </p>
         
        </div>
        
        <div>
          <img src="./assets/specific.png" alt="kutuby" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!-- --------------TELL US SECTION-------------------- -->
  
  <div
  class="tellProjectSection flex-column gap-lg-4 gap-3 d-flex justify-content-center align-items-center flex-shrink-0">
  <h4 class="text-orange text-center">STAY CONNECTED</h4>
  <h1 class="text-white text-center fw-bold">Tell Us About Your Project</h1>
  <p class="text-center w-75 px-lg-2" style="color: #dfdfdf">
    Ready to get started on your project? We're here to listen! Tell us
    about your project, and together, let's bring your vision to life
  </p>
  <div
  class="d-flex w-100 flex-md-row flex-column mt-lg-3 mt-md-2 gap-lg-3 gap-2 justify-content-center align-items-center">
  <div class="button-wrap">
    <button style="margin-top: 0;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="scrollToSection2" type="button"
      class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
      <a href="#" class="text-orange">Become Our Partner</a>
    </button>
  </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div
  class="modal-dialog modal-dialog-centered modal-lg modal-dialog-centered d-flex justify-content-center align-items-center">
  <div class="flex-column modal-content scrollable-modal-content partnerForm px-lg-5 px-md-4 px-3 py-5 gap-3">
    <div class="d-flex w-100 justify-content-between align-items-center">
      <h1 style="display: flex; justify-content: center;margin: 0 auto 16px;color:#FB7A00;">Become Our Partner</h1>
      <svg data-bs-dismiss="modal" class="cancelform" xmlns="http://www.w3.org/2000/svg" width="27" height="27"
        viewBox="0 0 27 27" fill="none"
        style="cursor: pointer;position: absolute;top: 0;right: 0;margin: 20px !important;">
        <circle cx="13.5" cy="13.5" r="13.5" fill="#E2E2E2" />
        <path
          d="M14.6022 13.483L20.8197 7.28213C20.9425 7.13904 21.0067 6.95497 20.9994 6.76672C20.9921 6.57847 20.9139 6.3999 20.7803 6.26668C20.6468 6.13347 20.4677 6.05543 20.2789 6.04816C20.0902 6.04088 19.9056 6.10492 19.7622 6.22746L13.5447 12.4283L7.32716 6.21998C7.18593 6.07913 6.99438 6 6.79466 6C6.59493 6 6.40339 6.07913 6.26216 6.21998C6.12093 6.36083 6.04159 6.55186 6.04159 6.75105C6.04159 6.95025 6.12093 7.14128 6.26216 7.28213L12.4872 13.483L6.26216 19.6839C6.18365 19.7509 6.11988 19.8334 6.07486 19.9262C6.02985 20.019 6.00455 20.1201 6.00056 20.2231C5.99657 20.3261 6.01397 20.4289 6.05168 20.5249C6.08939 20.6208 6.14658 20.708 6.21967 20.7809C6.29276 20.8538 6.38017 20.9109 6.47642 20.9485C6.57266 20.9861 6.67566 21.0034 6.77895 20.9994C6.88224 20.9955 6.98359 20.9702 7.07664 20.9253C7.16968 20.8804 7.25242 20.8168 7.31966 20.7385L13.5447 14.5377L19.7622 20.7385C19.9056 20.8611 20.0902 20.9251 20.2789 20.9178C20.4677 20.9106 20.6468 20.8325 20.7803 20.6993C20.9139 20.5661 20.9921 20.3875 20.9994 20.1993C21.0067 20.011 20.9425 19.827 20.8197 19.6839L14.6022 13.483Z"
          fill="#8A8A8A" />
      </svg>
    </div>
    <form action="#" class="becomepartform text-start d-flex flex-column gap-xl-4 gap-3 w-100 ex-respon">
      <div class="flex-column gap-1">
        <label for="Partner"
          style="font-size: 18px !important;color: #5F5F5F !important;font-weight: 600 !important;">Want
          to become our Partner as:</label>
        <div class="d-flex gap-5 mt-4 align-items-center">
          <div class="d-flex gap-2 radio-partner" style="display: flex;gap: 50px;">
            <label class="radio-container">
              <input type="radio" name="radio" checked="checked" id="individual" value="2"
                style="box-shadow: none;" />
              <span class="radio-checkmark"></span>
              <p>Individual</p>
            </label>
          </div>
          <div class="d-flex gap-2 radio-partner">
            <label class="radio-container">
              <input type="radio" name="radio" id="company" value="1" style="box-shadow: none;" />
              <span class="radio-checkmark"></span>
              <p>Company</p>
            </label>
          </div>
         
        </div>
      </div>
      <div class="flex-column gap-2 pos-rev" id="companyNameselect">
        <label for="companyName">Company Name <span class="text-orange">*</span>
        </label>
        
        <div class="position-relative">
          <input style="color: #acacac;width: 100%;" type="text" id="companyName" name="company_name" class="border-0" name="compan_name"
          placeholder="Enter Company Name" />
        </div>
       </div>
      <div class="flex-column gap-1 pos-rev" id="nameselect">
        <label for="Name">Name <span class="text-orange">*</span>
        </label>
        <div class="position-relative">
          <input style="color: #acacac; width: 100%;" type="text" id="Name" name="sponser_name" class="border-0" placeholder="Enter Name" />
        </div>
       </div>

      <div class="flex-column gap-2 pos-rev" id="repnameselect">
        <label for="repnameselect" style="padding-bottom: 20px !important;font-size: 18px !important;">Spokesperson
          Details</label>
        <label for="representativeName">Name
          <span class="text-orange">*</span>
        </label>
        <div class="position-relative">
          <input style="color: #acacac;width: 100%;" type="text" id="representativeName" name="user_name" class="border-0"
            placeholder="Spokesperson Name" />
        </div>
        </div>
      <script>
        // Function to handle radio button changes
        $("input[name='radio']").change(function () {
          if (this.id === "company") {
            // Show the company field and hide the name field
            $("#companyNameselect").show();
            $("#nameselect").hide();
            $("#repnameselect").show();
          } else if (this.id === "individual") {
            // Show the name field and hide the company field
            $("#companyNameselect").hide();
            $("#nameselect").show();
            $("#repnameselect").hide();
          }
        });
        // Initialize the visibility based on the default selection
        if ($("#company").is(":checked")) {
          $("#companyNameselect").show();
          $("#nameselect").hide();
        } else if ($("#individual").is(":checked")) {
          $("#companyNameselect").hide();
          $("#nameselect").show();
          $("#repnameselect").hide();
        }
      </script>
      <div
        class="w-100 gap-lg-5 gap-3 d-flex justify-content-md-between flex-md-row flex-column align-items-center justify-content-center pos-rev">
        <div class="w-100 d-flex flex-column gap-2">
          <label for="PhoneNumber" style="">Phone
            Number</label>
          <div class="d-flex flex-column">
            <input type="tel" name="phoneNumber" placeholder="" id="phoneNumber"
              class="form-control ps-5 py-2 rounded-0;" style="
              padding-left: 500px !important;
              border-radius: 0px !important;
            " />
            <div id="phoneNumber-error" class="error-message pos-abs"></div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script
              src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
            <!-- <script>
                                        var input = document.querySelector("#phoneNumber");
            var iti = window.intlTelInput(input, {
              separateDialCode: true,
              utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
              initialCountry: "US", // Set the default country to United States
            });
            // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
            window.iti = iti;
          </script> -->
            </script>
            <!-- <div class="error-message" id="PhoneNumber-error"></div> -->
          </div>
        </div>
        <div class="w-100 d-flex flex-column gap-2">
          <label style="" for="Email">Email <span
              class="text-orange">*</span>
          </label>
          <div class="position-relative">
            <input type="email" style="color: #acacac; width: 100%;" id="Email" name="email" class="border-0" placeholder="abc@example.com" />
          </div>
          <!-- <div class="error-message pos-abs" id="Email-error"></div> -->
        </div>
      </div>
      <div class="d-flex flex-column gap-1 partnertable pos-rev" id="domainSection">
        <label for="Domain" class="mb-3"
          style="color: #5F5F5F !important;font-size: 18px !important;font-weight: 600 !important;padding-top: 10px !important;">Business
          Domain</label>
        <div class="table-responsive">
                <table>
                  <tr>
                    <td>
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains1" />
                        <p>AI, ML, VR, & AR</p>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains2" />
                        <p>Blockchain</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains3" />
                        <p>CRM</p>
                      </div>
                    </td>
                  </tr>
    
                  <tr>
    
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains4" />
                        <p>ERP Management</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains5" />
                        <p>FinTech</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains6" />
                        <p>Hospital and Clinic</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains7" />
                        <p>eCommerce</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains8" />
                        <p>Supply Chain</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains9" />
                        <p>Inventory Management
                        </p>
                      </div>
                    </td>
                  </tr>
    
                  <tr class="moretext">
    
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains10" />
                        <p>Property & Land
                        </p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains11" />
                        <p>CMS</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains12" />
                        <p>Transport and Vehicles</p>
                      </div>
                    </td>
                  </tr>
                  <tr class="moretext">
    
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains13" />
                        <p>Education & eLearning</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains14" />
                        <p>Hotel Management</p>
                      </div>
                    </td>
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains15" />
                        <p>Medical & HealthCare</p>
                      </div>
                    </td>
                  </tr>
                  <tr class="moretext">
    
                    <td class="pt-2">
                      <div class="d-flex gap-2 align-items-center">
                        <input type="checkbox" name="domains" id="domains16" />
                        <p>Trading and Business</p>
                      </div>
                    </td>
    
                  </tr>
                  <td class="pt-2">
                    <div class="d-flex gap-2 align-items-center">
                      <p><button type="button" style="color: #FB7A00 !important;padding: 0 !important;border: none;"
                          class="moreless-button">Others ></button></p>
                    </div>
                  </td>
                </table>
              </div>
        <div class="error-message pos-abs" id="domainSection-error"></div>
      </div>
      <div class="d-flex flex-column gap-1">
        <label for="Partner" style="padding-top: 10px !important;">What Services are you most Interested
          in?</label>
        <select name="partnertype" id="partner" class="w-100 border-0 align-self-stretch">
          <option value="type" disabled selected>
            Select Services...
          </option>
          <option value="Business Process Analysis">
            Business Process Modeling
          </option>
          <option value="Business Process Modelling">
            Business Analysis
          </option>
          <option value="Requirement Engineering">
            Software Project Management
          </option>
          <option value="Company Analysis">
            Software Documentation
          </option>
          <option value="Technical Documentation">
            Data Analysis and Data Modelling
          </option>
          <option value="Data Analysis">API Documentation</option>
          <option value="Process Optimization">
            Software Product Analysis
          </option>
          <option value="Process Optimization">
            Business KPIs Analysis
          </option>
          <option value="Process Optimization">
            Product Idea Validation
          </option>
          <option value="Process Optimization">
            Software Research and Development
          </option>
          <option value="Process Optimization">
            UX and Wireframing
          </option>
          <option value="Process Optimization">
            Software Architecture Design
          </option>
        </select>
        <div class="error-message" id="partner-error"></div>
      </div>
      <button type="submit"
        class="btn navButton rounded-0 cardsButton button-color d-flex justify-content-center align-items-center gap-3">
        <a class="text-white">Submit</a>
      </button>
    </form>
  </div>
</div>
</div>
  <div class="button-wrap">
    <button style="margin-top: 0;" data-bs-toggle="modal" data-bs-target="#bookapp" id="scrollToSection2" type="button"
      class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
      <a href="#" class="text-orange">Book A Consultation</a>
    </button>
  </div>
  <!-- Modal -->
  <center>
    <div class="modal fade" id="bookapp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-centered d-flex justify-content-center align-items-center">
        <div class="modal-content book-modal-content firstDivModal">
          <div class="row justify-content-center firstDiv mx-0" style="background-color: #efefef" id="div1">
            <div
              class="col-xl-5 order-lg-1 order-2 col-lg-7 d-flex flex-column align-items-start bookapp px-lg-5 px-2 py-3">
              <div class="d-flex flex-column text-start w-100">
                <h1 style="color: #333" class="fw-bold">
                  Select Date & Time
                </h1>
                <div id="calendar" class=""></div>
              </div>
              <button type="submit" id="scrollToSection2"
                class="btn partnerbutton mt-5 bookSubmit navButton rounded-0 button-color d-flex justify-content-center py-2 px-lg-5 px-3 align-items-center gap-3">
                <a class="text-white px-4" onclick="showSecondDiv()">Next</a>
              </button>
            </div>
            <div
              class="col-xl-7 col-lg-5 col-12 order-lg-2 order-1 available-slots d-flex flex-column p-4 gap-xl-1 gap-3"
              style="background-color: #0d3642">
              <div class="d-flex justify-content-end align-items-center">
                <svg style="cursor: pointer" xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                  viewBox="0 0 27 27" fill="none" class="close-modal">
                  <circle cx="13.5" cy="13.5" r="13.5" fill="#E7EBEC" />
                  <path
                    d="M14.6022 13.483L20.8197 7.28213C20.9425 7.13904 21.0067 6.95497 20.9994 6.76672C20.9921 6.57847 20.9139 6.3999 20.7803 6.26668C20.6468 6.13347 20.4677 6.05543 20.2789 6.04816C20.0902 6.04088 19.9056 6.10492 19.7622 6.22746L13.5447 12.4283L7.32716 6.21998C7.18593 6.07913 6.99438 6 6.79466 6C6.59493 6 6.40339 6.07913 6.26216 6.21998C6.12093 6.36083 6.04159 6.55186 6.04159 6.75105C6.04159 6.95025 6.12093 7.14128 6.26216 7.28213L12.4872 13.483L6.26216 19.6839C6.18365 19.7509 6.11988 19.8334 6.07486 19.9262C6.02985 20.019 6.00455 20.1201 6.00056 20.2231C5.99657 20.3261 6.01397 20.4289 6.05168 20.5249C6.08939 20.6208 6.14658 20.708 6.21967 20.7809C6.29276 20.8538 6.38017 20.9109 6.47642 20.9485C6.57266 20.9861 6.67566 21.0034 6.77895 20.9994C6.88224 20.9955 6.98359 20.9702 7.07664 20.9253C7.16968 20.8804 7.25242 20.8168 7.31966 20.7385L13.5447 14.5377L19.7622 20.7385C19.9056 20.8611 20.0902 20.9251 20.2789 20.9178C20.4677 20.9106 20.6468 20.8325 20.7803 20.6993C20.9139 20.5661 20.9921 20.3875 20.9994 20.1993C21.0067 20.011 20.9425 19.827 20.8197 19.6839L14.6022 13.483Z"
                    fill="#0D3642" />
                </svg>
              </div>
              <h1 class="text-white text-start">Available Slots</h1>
              <div
                class="d-flex justify-content-center align-items-center gap-3 flex-shrink-0 flex-wrap availableslot"
                style="height: 260px; overflow-y: scroll">
                <div class="active d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  10:00 AM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  10:30 AM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  11:00 AM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  11:30 AM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  12:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  12:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  01:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  01:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important">
                  02:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important">
                  02:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  03:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  03:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  04:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  04:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  05:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  05:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  06:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  06:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  07:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  07:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  08:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  08:30 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                  style="width: 164px;height: 50px;padding: 0 !important;">
                  09:00 PM
                </div>
                <div class="d-flex justify-content-center align-items-center py-3 px-5 slot"
                style="width: 164px;height: 50px;padding: 0 !important;">
                09:30 PM
              </div>
              </div>
              <script>
                // Get all elements with class "slot"
                const slots = document.querySelectorAll(".slot");

                // Loop through each slot and add a click event listener
                slots.forEach((slot) => {
                  slot.addEventListener("click", function () {
                    // Remove the "active" class from all slots
                    slots.forEach((s) => {
                      s.classList.remove("active");
                    });

                    // Add the "active" class to the clicked slot
                    this.classList.add("active");
                  });
                });
              </script>
              <h1 class="text-white text-start">Time Zone</h1>
              <div
                class="d-flex p-3 w-100 justify-content-between align-items-center align-self-stretch timezone"
                style="background: #f6f6f6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path
                    d="M7.3934 10.7702C7.46901 10.7702 7.55335 10.7818 7.64641 10.8051C7.73947 10.8284 7.83253 10.8604 7.92559 10.9011C8.01865 10.9418 8.1117 10.9796 8.20476 11.0145C8.29782 11.0494 8.38216 11.0843 8.45777 11.1192L8.31818 11.1366C8.27165 11.1424 8.22221 11.1453 8.16987 11.1453C8.07099 11.1453 7.98084 11.1308 7.89941 11.1017C7.81799 11.0726 7.74238 11.0348 7.67258 10.9883C7.60279 10.9418 7.53299 10.9069 7.4632 10.8836C7.3934 10.8604 7.32942 10.8429 7.27126 10.8313C7.2131 10.8313 7.16075 10.8429 7.11422 10.8662C7.0677 10.8894 7.02117 10.9156 6.97464 10.9447C6.97464 10.9214 6.95428 10.9098 6.91357 10.9098C6.95428 10.8691 7.02989 10.8371 7.1404 10.8138C7.25091 10.7906 7.33524 10.776 7.3934 10.7702ZM8.57119 11.1628C8.80965 11.1628 9.02776 11.2035 9.22551 11.2849C9.14408 11.314 9.06266 11.3373 8.98123 11.3547C8.8998 11.3722 8.81547 11.3838 8.72822 11.3896C8.6119 11.3896 8.50721 11.378 8.41415 11.3547C8.44323 11.3082 8.47231 11.2791 8.50139 11.2675C8.53047 11.2559 8.55374 11.221 8.57119 11.1628ZM11.9998 3.06663C12.8199 3.06663 13.608 3.17423 14.3641 3.38943C15.1202 3.60463 15.8298 3.90416 16.4929 4.28803C17.1559 4.6719 17.7608 5.14011 18.3075 5.69265C18.8542 6.24519 19.3195 6.84717 19.7034 7.49858C20.0873 8.15 20.3897 8.85958 20.6107 9.62732C20.8318 10.3951 20.9394 11.1861 20.9335 12.0003C20.9335 12.8204 20.8259 13.6085 20.6107 14.3646C20.3955 15.1207 20.096 15.8303 19.7121 16.4934C19.3283 17.1564 18.8601 17.7613 18.3075 18.308C17.755 18.8547 17.153 19.32 16.5016 19.7039C15.8502 20.0878 15.1406 20.3902 14.3729 20.6112C13.6051 20.8322 12.8141 20.9398 11.9998 20.934C11.1798 20.934 10.3917 20.8264 9.63555 20.6112C8.87945 20.396 8.16987 20.0965 7.50682 19.7126C6.84377 19.3288 6.23888 18.8606 5.69216 18.308C5.14544 17.7555 4.68014 17.1535 4.29627 16.5021C3.9124 15.8507 3.60996 15.1411 3.38894 14.3733C3.16793 13.6056 3.06033 12.8146 3.06614 12.0003C3.06614 11.1802 3.17374 10.3921 3.38894 9.63604C3.60414 8.87993 3.90368 8.17036 4.28755 7.50731C4.67142 6.84426 5.13962 6.23937 5.69216 5.69265C6.2447 5.14593 6.84668 4.68063 7.49809 4.29676C8.14951 3.91289 8.85909 3.61045 9.62683 3.38943C10.3946 3.16841 11.1856 3.06081 11.9998 3.06663ZM18.6478 7.90863C18.5663 7.78067 18.4849 7.65853 18.4035 7.5422C18.3221 7.42588 18.2377 7.30665 18.1505 7.18451C18.1389 7.23685 18.1243 7.27466 18.1069 7.29792C18.0894 7.32119 18.0778 7.37353 18.072 7.45496C18.072 7.50731 18.0923 7.55675 18.133 7.60327C18.1737 7.6498 18.2261 7.69633 18.2901 7.74286C18.3541 7.78939 18.418 7.82429 18.482 7.84756C18.546 7.87082 18.6012 7.89118 18.6478 7.90863ZM18.0458 7.05364C18.0458 7.10017 18.0371 7.13216 18.0196 7.14961H18.072C18.0952 7.14961 18.1127 7.15252 18.1243 7.15833L18.0458 7.05364ZM11.9998 19.8173C12.6629 19.8173 13.3114 19.733 13.9454 19.5643C14.5793 19.3956 15.1784 19.1572 15.7426 18.8489C16.3067 18.5407 16.8302 18.1626 17.313 17.7148C17.7957 17.2669 18.2174 16.7667 18.578 16.2142C18.5024 16.0397 18.4297 15.8623 18.3599 15.682C18.2901 15.5017 18.2552 15.3156 18.2552 15.1236C18.2552 14.9143 18.2639 14.7456 18.2814 14.6176C18.2988 14.4897 18.3192 14.3763 18.3424 14.2774C18.3657 14.1785 18.3773 14.0942 18.3773 14.0244C18.3773 13.9546 18.3686 13.8644 18.3511 13.7539C18.3337 13.6434 18.2843 13.5242 18.2028 13.3962C18.1214 13.2683 18.0138 13.088 17.88 12.8553C17.8858 12.8146 17.8946 12.7593 17.9062 12.6896C17.9178 12.6198 17.9295 12.5471 17.9411 12.4714C17.9527 12.3958 17.9556 12.326 17.9498 12.2621C17.944 12.1981 17.9295 12.1428 17.9062 12.0963C17.755 12.0788 17.5979 12.0469 17.4351 12.0003C17.2722 11.9538 17.1268 11.884 16.9989 11.7909L17.0512 11.7473C16.9756 11.7648 16.9 11.788 16.8244 11.8171C16.7488 11.8462 16.6761 11.8782 16.6063 11.9131C16.5365 11.948 16.4609 11.9712 16.3794 11.9829C16.298 11.9945 16.2195 12.0061 16.1439 12.0178L16.0043 12.0003L16.0305 11.9393C15.949 11.9625 15.8618 11.9916 15.7687 12.0265C15.6757 12.0614 15.5855 12.0788 15.4983 12.0788C15.4401 12.0788 15.3558 12.0585 15.2453 12.0178C15.1348 11.9771 15.0243 11.9276 14.9138 11.8695C14.8033 11.8113 14.7044 11.7473 14.6171 11.6775C14.5299 11.6077 14.4863 11.5408 14.4863 11.4769L14.5037 11.4507C14.4746 11.4158 14.4368 11.3838 14.3903 11.3547C14.3438 11.3256 14.3002 11.2966 14.2594 11.2675C14.2187 11.2384 14.1809 11.2064 14.146 11.1715C14.1111 11.1366 14.0966 11.0959 14.1024 11.0494L14.1984 10.9709L13.9977 10.9447L13.9279 10.683C13.9395 10.712 13.9657 10.7237 14.0064 10.7179C14.0471 10.712 14.0791 10.7004 14.1024 10.683L13.7883 10.5172L14.0064 9.95884C13.925 9.6564 13.9047 9.42375 13.9454 9.26089C13.9861 9.09804 14.0646 8.96427 14.1809 8.85958C14.2972 8.75488 14.4252 8.65019 14.5648 8.5455C14.7044 8.44081 14.8469 8.29831 14.9923 8.11801L14.9661 8.01332L15.5419 7.31537L15.6728 7.29792C15.8356 7.29792 16.0188 7.29211 16.2224 7.28048C16.426 7.26884 16.6325 7.24849 16.8418 7.2194C17.0512 7.19032 17.2577 7.16124 17.4613 7.13216C17.6648 7.10308 17.851 7.06528 18.0196 7.01875C17.8335 6.79773 17.6387 6.58835 17.4351 6.39059C17.2315 6.19284 17.0134 6.00382 16.7808 5.82351C16.7168 5.84678 16.6383 5.87877 16.5452 5.91948C16.4522 5.9602 16.3591 6.01254 16.266 6.07652C16.173 6.1405 16.1003 6.21029 16.0479 6.2859C15.9956 6.36151 15.9636 6.44003 15.952 6.52146L16.0043 6.68722C15.8996 6.85589 15.7833 6.96058 15.6553 7.0013C15.5274 7.04201 15.3965 7.06527 15.2627 7.07109C15.129 7.07691 14.9894 7.07691 14.844 7.07109C14.6986 7.06527 14.559 7.09145 14.4252 7.14961L14.2856 6.85298L14.4165 6.34697L14.2682 6.12887L15.7775 5.65775C15.7135 5.4949 15.6088 5.37276 15.4634 5.29133C15.318 5.2099 15.158 5.16919 14.9836 5.16919V5.08195L15.4721 5.00343C14.9312 4.73588 14.3699 4.53232 13.7883 4.39273C13.2067 4.25314 12.6105 4.18334 11.9998 4.18334C11.4938 4.18334 10.9936 4.23278 10.4993 4.33166C10.0049 4.43053 9.52795 4.57303 9.06847 4.75915C8.60899 4.94527 8.16405 5.17791 7.73365 5.45709C7.30325 5.73627 6.91066 6.05035 6.55587 6.39932C6.70709 6.39932 6.82341 6.43712 6.90484 6.51274C6.98627 6.58835 7.06188 6.67268 7.13167 6.76574C7.20147 6.8588 7.27417 6.94313 7.34978 7.01875C7.42539 7.09436 7.52718 7.13507 7.65513 7.14089L7.79472 7.03619L7.77727 6.84426L8.06518 6.43422L7.83834 5.78862C7.86742 5.77117 7.91105 5.74209 7.96921 5.70137C8.02737 5.66066 8.07681 5.6403 8.11752 5.6403C8.29201 5.6403 8.42578 5.64903 8.51884 5.66648C8.6119 5.68392 8.69333 5.71591 8.76312 5.76244C8.83292 5.80897 8.89399 5.87586 8.94633 5.9631C8.99868 6.05035 9.0801 6.16085 9.19061 6.29463L9.50469 6.05035C9.56285 6.07361 9.65591 6.11142 9.78387 6.16376C9.91182 6.21611 10.0427 6.28009 10.1765 6.3557C10.3102 6.43131 10.4236 6.50983 10.5167 6.59125C10.6098 6.67268 10.6592 6.74829 10.665 6.81809C10.665 6.90533 10.633 6.97512 10.5691 7.02747C10.5051 7.07982 10.4207 7.12344 10.316 7.15833C10.2114 7.19323 10.1038 7.21941 9.99325 7.23685C9.88274 7.2543 9.77223 7.27757 9.66173 7.30665C9.55122 7.33573 9.46688 7.36481 9.40872 7.39389C9.35056 7.42297 9.31566 7.47241 9.30403 7.5422L9.81004 7.70797C9.69371 7.80684 9.56867 7.89699 9.43489 7.97842C9.30112 8.05985 9.16153 8.13546 9.01613 8.20525L9.05102 8.35357L8.24839 8.66764V8.91192L8.18732 8.9381L8.23094 8.63274L8.19604 8.62402C8.15533 8.62402 8.13206 8.63274 8.12625 8.65019C8.12043 8.66764 8.11752 8.688 8.11752 8.71126C8.11752 8.73453 8.12334 8.75779 8.13497 8.78106C8.1466 8.80432 8.14951 8.82177 8.14369 8.8334L8.03028 8.77233L8.04773 8.80723C8.04773 8.82468 8.05645 8.85085 8.0739 8.88575C8.09135 8.92065 8.11461 8.95264 8.14369 8.98172C8.17277 9.0108 8.19604 9.03988 8.21349 9.06896C8.23094 9.09804 8.24257 9.11258 8.24839 9.11258C8.24839 9.13003 8.23675 9.14748 8.21349 9.16493C8.19022 9.18238 8.16114 9.19401 8.12625 9.19982C8.09135 9.20564 8.06808 9.21437 8.05645 9.226C8.04482 9.23763 8.04482 9.24054 8.05645 9.23472C8.13788 9.23472 8.15533 9.24054 8.1088 9.25217C8.06227 9.2638 7.98956 9.29288 7.89069 9.33941C7.79181 9.38594 7.70166 9.45283 7.62023 9.54007C7.53881 9.62732 7.49228 9.75527 7.48065 9.92394C7.48065 10.0228 7.48355 10.1188 7.48937 10.2118C7.49519 10.3049 7.49228 10.4009 7.48065 10.4997C7.39922 10.2787 7.27708 10.1101 7.11422 9.99374C6.95137 9.87741 6.75362 9.81925 6.52097 9.81925L6.14583 9.85415L6.32904 9.97629C6.23016 9.96466 6.12838 9.95302 6.02368 9.94139C5.91899 9.92976 5.81139 9.92685 5.70089 9.93267C5.59038 9.93848 5.4915 9.96175 5.40426 10.0025C5.31702 10.0432 5.22977 10.1042 5.14253 10.1857L5.09018 10.5783C5.09018 10.7644 5.1309 10.9156 5.21232 11.0319C5.29375 11.1483 5.43625 11.2093 5.63982 11.2151C5.8143 11.2151 5.98588 11.189 6.15455 11.1366C6.32322 11.0843 6.48898 11.0232 6.65184 10.9534C6.59949 11.0814 6.54133 11.2035 6.47735 11.3198C6.41337 11.4362 6.36684 11.5641 6.33776 11.7037L6.45118 11.756C6.59077 11.663 6.71872 11.6484 6.83505 11.7124C6.95137 11.7764 7.06479 11.8695 7.17529 11.9916C7.2858 12.1137 7.39922 12.2388 7.51554 12.3668C7.63187 12.4947 7.75692 12.5878 7.89069 12.6459L7.59406 12.803L6.89612 12.4104C6.90193 12.422 6.90775 12.4482 6.91357 12.4889C6.91938 12.5296 6.91647 12.5383 6.90484 12.5151L6.59077 11.9829C6.40465 11.9771 6.2069 11.948 5.99751 11.8956C5.78813 11.8433 5.57584 11.7735 5.36064 11.6863C5.14544 11.599 4.94478 11.503 4.75866 11.3984C4.57254 11.2937 4.40096 11.1832 4.24392 11.0668L4.18285 12.0003C4.18285 12.7099 4.27882 13.402 4.47076 14.0767C4.66269 14.7514 4.93315 15.3854 5.28212 15.9786C5.63109 16.5719 6.05858 17.1128 6.56459 17.6013C7.0706 18.0899 7.63187 18.5058 8.24839 18.8489C8.21931 18.7268 8.2164 18.6046 8.23966 18.4825C8.26293 18.3604 8.29201 18.2382 8.3269 18.1161C8.3618 17.9939 8.39961 17.8718 8.44032 17.7497C8.48103 17.6275 8.50139 17.5025 8.50139 17.3745C8.50139 17.1884 8.47231 16.9935 8.41415 16.79C8.35599 16.5864 8.28619 16.3799 8.20476 16.1706C8.12334 15.9612 8.03319 15.7547 7.93431 15.5511C7.83543 15.3476 7.75692 15.1556 7.69875 14.9753C7.64059 14.795 7.59406 14.6263 7.55917 14.4693C7.52427 14.3123 7.54172 14.1756 7.61151 14.0593L7.48065 13.9982C7.51554 13.9168 7.56207 13.8383 7.62023 13.7626C7.6784 13.687 7.73947 13.6114 7.80345 13.5358C7.86742 13.4602 7.91686 13.3788 7.95176 13.2915C7.98666 13.2043 8.00701 13.117 8.01283 13.0298C8.01283 12.9716 8.0012 12.9106 7.97793 12.8466C7.95467 12.7826 7.93431 12.7215 7.91686 12.6634L8.10007 12.707C8.19895 12.4802 8.33272 12.326 8.50139 12.2446C8.67006 12.1632 8.88235 12.1196 9.13827 12.1137C9.16735 12.1137 9.22842 12.1254 9.32148 12.1486C9.41454 12.1719 9.51341 12.2039 9.6181 12.2446C9.7228 12.2853 9.82167 12.3173 9.91473 12.3406C10.0078 12.3638 10.0776 12.3871 10.1241 12.4104C10.1241 12.4511 10.1474 12.4773 10.1939 12.4889C10.2404 12.5005 10.2666 12.5209 10.2724 12.55L10.255 12.6198C10.2724 12.6256 10.3131 12.6459 10.3771 12.6808C10.4411 12.7157 10.5109 12.7593 10.5865 12.8117C10.6621 12.864 10.729 12.9106 10.7872 12.9513C10.8453 12.992 10.886 13.024 10.9093 13.0472C11.014 13.0472 11.1565 13.0821 11.3368 13.1519C11.5171 13.2217 11.7148 13.309 11.93 13.4137C12.1452 13.5184 12.3575 13.6434 12.5669 13.7888C12.7763 13.9342 12.9741 14.0796 13.1602 14.225C13.3463 14.3704 13.4888 14.5158 13.5877 14.6612C13.6865 14.8067 13.7447 14.9346 13.7622 15.0451L13.4655 15.3592C13.4888 15.6558 13.4684 15.8827 13.4045 16.0397C13.3405 16.1967 13.2416 16.3276 13.1078 16.4323C12.9741 16.537 12.8199 16.6242 12.6454 16.694C12.471 16.7638 12.2819 16.8627 12.0784 16.9906C12.0784 17.107 12.0493 17.232 11.9911 17.3658C11.933 17.4996 11.8603 17.6275 11.773 17.7497C11.6858 17.8718 11.5811 17.9736 11.4589 18.055C11.3368 18.1364 11.2147 18.1771 11.0925 18.1771L10.7261 17.898C10.7377 17.9096 10.7377 17.93 10.7261 17.959C10.7145 17.9881 10.6999 17.9939 10.6825 17.9765C10.7406 18.087 10.7552 18.215 10.7261 18.3604C10.697 18.5058 10.6476 18.6541 10.5778 18.8053C10.508 18.9565 10.4295 19.099 10.3422 19.2328C10.255 19.3666 10.1765 19.48 10.1067 19.573C10.4207 19.6545 10.7348 19.7155 11.0489 19.7562C11.363 19.797 11.68 19.8173 11.9998 19.8173Z"
                    fill="#FB7A00" />
                </svg>
                <select name="region" id="region" class="w-100 border-0" style="color: #636363">
                  <option value="(GMT-05:00) Pacific Time - Los Angeles" selected>
                    (GMT-05:00) Pacific Time - Los Angeles
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="row justify-content-center w-100 secondDiv" id="div3"
            style="background-color: #efefef; display: none">
            <div
              class="col-xl-8 col-lg-8 d-flex flex-column align-items-start bookapp gap-xl-2 p-lg-5 p-md-4 p-2 gap-4 p-md-5 p-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute" style="cursor: pointer"
                width="32" height="32" viewBox="0 0 32 32" fill="none" onclick="backtosecond()">
                <path
                  d="M11.0671 23.0665L4.93377 16.9332C4.80044 16.7999 4.70577 16.6554 4.64977 16.4999C4.59377 16.3443 4.56666 16.1776 4.56844 15.9999C4.56844 15.8221 4.59644 15.6554 4.65244 15.4999C4.70844 15.3443 4.80222 15.1999 4.93377 15.0665L11.1004 8.89987C11.3449 8.65543 11.6449 8.5332 12.0004 8.5332C12.356 8.5332 12.6671 8.66654 12.9338 8.9332C13.1782 9.17765 13.3004 9.48876 13.3004 9.86654C13.3004 10.2443 13.1782 10.5554 12.9338 10.7999L9.06711 14.6665H26.6671C27.0449 14.6665 27.3618 14.7945 27.6178 15.0505C27.8738 15.3065 28.0013 15.623 28.0004 15.9999C28.0004 16.3776 27.8724 16.6945 27.6164 16.9505C27.3604 17.2065 27.044 17.3341 26.6671 17.3332H9.06711L12.9671 21.2332C13.2116 21.4776 13.3338 21.7776 13.3338 22.1332C13.3338 22.4888 13.2004 22.7999 12.9338 23.0665C12.6893 23.311 12.3782 23.4332 12.0004 23.4332C11.6227 23.4332 11.3116 23.311 11.0671 23.0665Z"
                  fill="#0D3642" />
              </svg>
              <h1 style="color: #333" class="fw-bold mt-xl-2 mt-5" style="padding-top: 10px !important">
                Enter Details
              </h1>
              <form action="#" id="bookconsultform" class="w-100 d-flex align-items-start flex-column gap-3">
                <div class="d-flex flex-column gap-1 w-100 pos-rev">
                  <label for="name" class="text-start">Full Name <span class="text-orange">*</span>
                  </label>
                  <input type="text" name="name" id="name" class="form-control p-2" placeholder="Enter Name"
                    style="
                        border: 1px solid #D0D5DD !important;
                        background: #f6f6f6;
                        box-shadow: 0px 1px 2px 0px
                          rgba(16, 24, 40, 0.05);border-radius: 0px;
                          
                      " />
                  <span id="nameError" class="text-danger text-start pos-abs"></span>
                </div>
                <div class="d-flex flex-md-row flex-column gap-2 w-100 ">
                  <div class="d-flex flex-column gap-1 w-100 pos-rev ex-padd">
                    <label for="email" class="text-start">Email <span class="text-orange">*</span>
                    </label>
                    <input name="email" id="email" class="form-control p-2" placeholder="abc@gmail.com" style="
                          border: 1px solid #d0d5dd !important;
                          background: #f6f6f6;
                          box-shadow: 0px 1px 2px 0px
                            rgba(16, 24, 40, 0.05);border-radius: 0px;
                        " />
                    <span id="emailError" class="text-danger text-start pos-abs"></span>
                  </div>
                  <div class="d-flex flex-column gap-1 w-100 pos-rev ex-padd">
                    <label for="phnumber" class="text-start">Phone Number</label>
                    <input type="tel" name="phnumber" id="phnumber" class="form-control py-2" style="
                          border: 1px solid #d0d5dd !important;
                          background: #f6f6f6;
                          box-shadow: 0px 1px 2px 0px
                            rgba(16, 24, 40, 0.05);
                          padding-left: 96px !important;border-radius: 0px;
                        " />
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script
                      src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                    <script>
                      var input = document.querySelector("#phnumber");
                      var iti = window.intlTelInput(input, {
                        separateDialCode: true,
                        utilsScript:
                          "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
                      });
                      window.iti = iti;
                    </script>
                    <span id="phonenumError" class="text-start pos-abs"></span>
                  </div>
                </div>
                <div class="d-flex flex-column gap-1 w-100">
                  <label for="message" class="text-start">Please share meeting note</label>
                  <textarea name="message" id="message" cols="5" class="border-0 p-2 text-orange form-control"
                    rows="5" placeholder="Share anything here..." style="
                        color: #fb7a00;
                        border: 1px solid #d0d5dd !important;
                        font-size: 1rem !important;
                        background: #f6f6f6;
                        box-shadow: 0px 1px 2px 0px
                          rgba(16, 24, 40, 0.05);
                      "></textarea>
                </div>
                <div class="d-flex gap-3">
                  <button type="submit" id="scrollToSection2 schedule"
                    class="btn partnerbutton navButton rounded-0 button-color d-flex justify-content-center py-2 px-lg-4 px-3 align-items-center gap-3">
                    <a class="text-white">Schedule Event</a>
                  </button>
                  <!-- <button id="scrollToSection2 discardButton" type="button"
                    class="btn navButton text-orange consultaion-button rounded-0 button-color py-2 px-lg-5 px-3 d-flex justify-content-center align-items-center gap-3"
                    data-bs-dismiss="modal">
                    <a class="text-orange">Discard</a>
                  </button> -->
                </div>
              </form>
            </div>
            <div class="col-lg-4 col-12 d-flex flex-column p-4 gap-lg-5" style="background-color: #0d3642">
              <div class="d-flex justify-content-end align-items-center" style="position: absolute;top: 0;right: 0;margin: 20px !important;">
                <svg data-bs-dismiss="modal" style="cursor: pointer" xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                  viewBox="0 0 27 27" fill="none" class="close-modal">
                  <circle cx="13.5" cy="13.5" r="13.5" fill="#E7EBEC" />
                  <path
                    d="M14.6022 13.483L20.8197 7.28213C20.9425 7.13904 21.0067 6.95497 20.9994 6.76672C20.9921 6.57847 20.9139 6.3999 20.7803 6.26668C20.6468 6.13347 20.4677 6.05543 20.2789 6.04816C20.0902 6.04088 19.9056 6.10492 19.7622 6.22746L13.5447 12.4283L7.32716 6.21998C7.18593 6.07913 6.99438 6 6.79466 6C6.59493 6 6.40339 6.07913 6.26216 6.21998C6.12093 6.36083 6.04159 6.55186 6.04159 6.75105C6.04159 6.95025 6.12093 7.14128 6.26216 7.28213L12.4872 13.483L6.26216 19.6839C6.18365 19.7509 6.11988 19.8334 6.07486 19.9262C6.02985 20.019 6.00455 20.1201 6.00056 20.2231C5.99657 20.3261 6.01397 20.4289 6.05168 20.5249C6.08939 20.6208 6.14658 20.708 6.21967 20.7809C6.29276 20.8538 6.38017 20.9109 6.47642 20.9485C6.57266 20.9861 6.67566 21.0034 6.77895 20.9994C6.88224 20.9955 6.98359 20.9702 7.07664 20.9253C7.16968 20.8804 7.25242 20.8168 7.31966 20.7385L13.5447 14.5377L19.7622 20.7385C19.9056 20.8611 20.0902 20.9251 20.2789 20.9178C20.4677 20.9106 20.6468 20.8325 20.7803 20.6993C20.9139 20.5661 20.9921 20.3875 20.9994 20.1993C21.0067 20.011 20.9425 19.827 20.8197 19.6839L14.6022 13.483Z"
                    fill="#0D3642" />
                </svg>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                 <img loading="lazy" width="212" height="40" src="./assets/home-logo.svg" alt="logo" class="img-fluid" />
              </div>
              <div class="d-flex flex-column align-items-start px-3 mt-5 gap-4">
                <div class="d-flex gap-3 justify-content-center align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                    fill="none">
                    <path
                      d="M9.99917 0.374023C15.5222 0.374023 19.5708 4.47676 19.5708 9.99976C19.5708 15.5228 15.5222 19.8203 9.99917 19.8203C4.47617 19.8203 0.369141 15.5228 0.369141 9.99976C0.369141 4.47676 4.47617 0.374023 9.99917 0.374023ZM9.99917 1.99976C7.87744 1.99976 5.84261 2.84261 4.34232 4.3429C2.84203 5.84319 1.99917 7.87802 1.99917 9.99976C1.99917 12.1215 2.84203 14.1563 4.34232 15.6566C5.84261 17.1569 7.87744 17.9998 9.99917 17.9998C12.1209 17.9998 14.1557 17.1569 15.656 15.6566C17.1563 14.1563 17.9992 12.1215 17.9992 9.99976C17.9992 7.87802 17.1563 5.84319 15.656 4.3429C14.1557 2.84261 12.1209 1.99976 9.99917 1.99976ZM9.99917 3.99976C10.2441 3.99979 10.4805 4.08971 10.6635 4.25247C10.8466 4.41523 10.9635 4.6395 10.9922 4.88276L10.9992 4.99976V9.58576L13.7062 12.2928C13.8855 12.4727 13.9896 12.7142 13.9974 12.9681C14.0052 13.2221 13.916 13.4695 13.7479 13.66C13.5799 13.8506 13.3456 13.9701 13.0927 13.9942C12.8398 14.0182 12.5872 13.9452 12.3862 13.7898L12.2922 13.7068L9.29217 10.7068C9.13675 10.5512 9.03693 10.3488 9.00817 10.1308L8.99917 9.99976V4.99976C8.99917 4.73454 9.10453 4.48019 9.29207 4.29265C9.4796 4.10511 9.73396 3.99976 9.99917 3.99976Z"
                      fill="#FB7A00" />
                  </svg>
                  <p style="color: #e0e0e0">30 min</p>
                </div>
                <div class="d-flex gap-3 justify-content-center align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="14" viewBox="0 0 19 14"
                    fill="none">
                    <path
                      d="M10.9667 0C11.7712 0 12.5427 0.319582 13.1116 0.888443C13.6804 1.4573 14 2.22884 14 3.03333V3.1948L17.6064 1.03133C17.7126 0.967575 17.8338 0.933147 17.9577 0.931564C18.0816 0.929981 18.2037 0.9613 18.3115 1.02232C18.4193 1.08335 18.509 1.17189 18.5714 1.2789C18.6338 1.38592 18.6667 1.50758 18.6667 1.63147V12.3667C18.6667 12.4905 18.6338 12.6122 18.5714 12.7192C18.509 12.8262 18.4193 12.9148 18.3115 12.9758C18.2037 13.0368 18.0816 13.0682 17.9577 13.0666C17.8338 13.065 17.7126 13.0306 17.6064 12.9668L14 10.8033V10.9667C14 11.7712 13.6804 12.5427 13.1116 13.1116C12.5427 13.6804 11.7712 14 10.9667 14H3.03333C2.22884 14 1.4573 13.6804 0.888443 13.1116C0.319582 12.5427 0 11.7712 0 10.9667V3.03333C0 2.22884 0.319582 1.4573 0.888443 0.888443C1.4573 0.319582 2.22884 0 3.03333 0H10.9667ZM10.9667 1.4H3.03333C2.60015 1.4 2.1847 1.57208 1.87839 1.87839C1.57208 2.1847 1.4 2.60015 1.4 3.03333V10.9667C1.4 11.8683 2.13173 12.6 3.03333 12.6H10.9667C11.3999 12.6 11.8153 12.4279 12.1216 12.1216C12.4279 11.8153 12.6 11.3999 12.6 10.9667V3.03333C12.6 2.60015 12.4279 2.1847 12.1216 1.87839C11.8153 1.57208 11.3999 1.4 10.9667 1.4ZM17.2667 2.86813L14 4.82907V9.17L17.2667 11.13V2.86813Z"
                      fill="#FB7A00" />
                  </svg>
                  <p style="color: #e0e0e0" class="text-start">
                    Web conferencing details provided upon
                    confirmation.
                  </p>
                </div>
                <div class="d-flex gap-3 justify-content-center align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path
                      d="M17.45 5.7H15.75V4.85C15.75 4.62457 15.6604 4.40837 15.501 4.24896C15.3416 4.08955 15.1254 4 14.9 4C14.6746 4 14.4584 4.08955 14.299 4.24896C14.1396 4.40837 14.05 4.62457 14.05 4.85V5.7H8.95V4.85C8.95 4.62457 8.86045 4.40837 8.70104 4.24896C8.54164 4.08955 8.32543 4 8.1 4C7.87457 4 7.65837 4.08955 7.49896 4.24896C7.33955 4.40837 7.25 4.62457 7.25 4.85V5.7H5.55C4.8737 5.7 4.2251 5.96866 3.74688 6.44688C3.26866 6.9251 3 7.5737 3 8.25V18.45C3 19.1263 3.26866 19.7749 3.74688 20.2531C4.2251 20.7313 4.8737 21 5.55 21H17.45C18.1263 21 18.7749 20.7313 19.2531 20.2531C19.7313 19.7749 20 19.1263 20 18.45V8.25C20 7.5737 19.7313 6.9251 19.2531 6.44688C18.7749 5.96866 18.1263 5.7 17.45 5.7ZM18.3 18.45C18.3 18.6754 18.2104 18.8916 18.051 19.051C17.8916 19.2104 17.6754 19.3 17.45 19.3H5.55C5.32457 19.3 5.10837 19.2104 4.94896 19.051C4.78955 18.8916 4.7 18.6754 4.7 18.45V12.5H18.3V18.45ZM18.3 10.8H4.7V8.25C4.7 8.02457 4.78955 7.80837 4.94896 7.64896C5.10837 7.48955 5.32457 7.4 5.55 7.4H7.25V8.25C7.25 8.47543 7.33955 8.69163 7.49896 8.85104C7.65837 9.01045 7.87457 9.1 8.1 9.1C8.32543 9.1 8.54164 9.01045 8.70104 8.85104C8.86045 8.69163 8.95 8.47543 8.95 8.25V7.4H14.05V8.25C14.05 8.47543 14.1396 8.69163 14.299 8.85104C14.4584 9.01045 14.6746 9.1 14.9 9.1C15.1254 9.1 15.3416 9.01045 15.501 8.85104C15.6604 8.69163 15.75 8.47543 15.75 8.25V7.4H17.45C17.6754 7.4 17.8916 7.48955 18.051 7.64896C18.2104 7.80837 18.3 8.02457 18.3 8.25V10.8Z"
                      fill="#FB7A00" />
                  </svg>
                  <p style="color: #e0e0e0" class="text-start">
                    11:40 AM - 12:10 PM, Thursday, September 14, 2023
                  </p>
                </div>
                <div class="d-flex gap-3 justify-content-center align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path
                      d="M7.39389 10.7702C7.4695 10.7702 7.55384 10.7818 7.6469 10.8051C7.73996 10.8284 7.83301 10.8604 7.92607 10.9011C8.01913 10.9418 8.11219 10.9796 8.20525 11.0145C8.29831 11.0494 8.38265 11.0843 8.45826 11.1192L8.31867 11.1366C8.27214 11.1424 8.2227 11.1453 8.17036 11.1453C8.07148 11.1453 7.98133 11.1308 7.8999 11.1017C7.81847 11.0726 7.74286 11.0348 7.67307 10.9883C7.60327 10.9418 7.53348 10.9069 7.46369 10.8836C7.39389 10.8604 7.32991 10.8429 7.27175 10.8313C7.21359 10.8313 7.16124 10.8429 7.11471 10.8662C7.06818 10.8894 7.02165 10.9156 6.97512 10.9447C6.97512 10.9214 6.95477 10.9098 6.91405 10.9098C6.95477 10.8691 7.03038 10.8371 7.14089 10.8138C7.25139 10.7906 7.33573 10.776 7.39389 10.7702ZM8.57167 11.1628C8.81014 11.1628 9.02825 11.2035 9.226 11.2849C9.14457 11.314 9.06314 11.3373 8.98172 11.3547C8.90029 11.3722 8.81595 11.3838 8.72871 11.3896C8.61239 11.3896 8.5077 11.378 8.41464 11.3547C8.44372 11.3082 8.4728 11.2791 8.50188 11.2675C8.53096 11.2559 8.55423 11.221 8.57167 11.1628ZM12.0003 3.06663C12.8204 3.06663 13.6085 3.17423 14.3646 3.38943C15.1207 3.60463 15.8303 3.90416 16.4934 4.28803C17.1564 4.6719 17.7613 5.14011 18.308 5.69265C18.8547 6.24519 19.32 6.84717 19.7039 7.49858C20.0878 8.15 20.3902 8.85958 20.6112 9.62732C20.8322 10.3951 20.9398 11.1861 20.934 12.0003C20.934 12.8204 20.8264 13.6085 20.6112 14.3646C20.396 15.1207 20.0965 15.8303 19.7126 16.4934C19.3288 17.1564 18.8606 17.7613 18.308 18.308C17.7555 18.8547 17.1535 19.32 16.5021 19.7039C15.8507 20.0878 15.1411 20.3902 14.3733 20.6112C13.6056 20.8322 12.8146 20.9398 12.0003 20.934C11.1802 20.934 10.3921 20.8264 9.63604 20.6112C8.87993 20.396 8.17036 20.0965 7.50731 19.7126C6.84426 19.3288 6.23937 18.8606 5.69265 18.308C5.14593 17.7555 4.68063 17.1535 4.29676 16.5021C3.91289 15.8507 3.61045 15.1411 3.38943 14.3733C3.16841 13.6056 3.06081 12.8146 3.06663 12.0003C3.06663 11.1802 3.17423 10.3921 3.38943 9.63604C3.60463 8.87993 3.90416 8.17036 4.28803 7.50731C4.6719 6.84426 5.14011 6.23937 5.69265 5.69265C6.24519 5.14593 6.84717 4.68063 7.49858 4.29676C8.15 3.91289 8.85958 3.61045 9.62732 3.38943C10.3951 3.16841 11.1861 3.06081 12.0003 3.06663ZM18.6483 7.90863C18.5668 7.78067 18.4854 7.65853 18.404 7.5422C18.3226 7.42588 18.2382 7.30665 18.151 7.18451C18.1393 7.23685 18.1248 7.27466 18.1074 7.29792C18.0899 7.32119 18.0783 7.37353 18.0725 7.45496C18.0725 7.50731 18.0928 7.55675 18.1335 7.60327C18.1742 7.6498 18.2266 7.69633 18.2906 7.74286C18.3545 7.78939 18.4185 7.82429 18.4825 7.84756C18.5465 7.87082 18.6017 7.89118 18.6483 7.90863ZM18.0463 7.05364C18.0463 7.10017 18.0376 7.13216 18.0201 7.14961H18.0725C18.0957 7.14961 18.1132 7.15252 18.1248 7.15833L18.0463 7.05364ZM12.0003 19.8173C12.6634 19.8173 13.3119 19.733 13.9459 19.5643C14.5798 19.3956 15.1789 19.1572 15.7431 18.8489C16.3072 18.5407 16.8307 18.1626 17.3134 17.7148C17.7962 17.2669 18.2179 16.7667 18.5785 16.2142C18.5029 16.0397 18.4302 15.8623 18.3604 15.682C18.2906 15.5017 18.2557 15.3156 18.2557 15.1236C18.2557 14.9143 18.2644 14.7456 18.2818 14.6176C18.2993 14.4897 18.3196 14.3763 18.3429 14.2774C18.3662 14.1785 18.3778 14.0942 18.3778 14.0244C18.3778 13.9546 18.3691 13.8644 18.3516 13.7539C18.3342 13.6434 18.2847 13.5242 18.2033 13.3962C18.1219 13.2683 18.0143 13.088 17.8805 12.8553C17.8863 12.8146 17.8951 12.7593 17.9067 12.6896C17.9183 12.6198 17.93 12.5471 17.9416 12.4714C17.9532 12.3958 17.9561 12.326 17.9503 12.2621C17.9445 12.1981 17.93 12.1428 17.9067 12.0963C17.7555 12.0788 17.5984 12.0469 17.4356 12.0003C17.2727 11.9538 17.1273 11.884 16.9994 11.7909L17.0517 11.7473C16.9761 11.7648 16.9005 11.788 16.8249 11.8171C16.7493 11.8462 16.6766 11.8782 16.6068 11.9131C16.537 11.948 16.4614 11.9712 16.3799 11.9829C16.2985 11.9945 16.22 12.0061 16.1444 12.0178L16.0048 12.0003L16.031 11.9393C15.9495 11.9625 15.8623 11.9916 15.7692 12.0265C15.6762 12.0614 15.586 12.0788 15.4988 12.0788C15.4406 12.0788 15.3563 12.0585 15.2458 12.0178C15.1353 11.9771 15.0248 11.9276 14.9143 11.8695C14.8037 11.8113 14.7049 11.7473 14.6176 11.6775C14.5304 11.6077 14.4868 11.5408 14.4868 11.4769L14.5042 11.4507C14.4751 11.4158 14.4373 11.3838 14.3908 11.3547C14.3443 11.3256 14.3006 11.2966 14.2599 11.2675C14.2192 11.2384 14.1814 11.2064 14.1465 11.1715C14.1116 11.1366 14.0971 11.0959 14.1029 11.0494L14.1989 10.9709L13.9982 10.9447L13.9284 10.683C13.94 10.712 13.9662 10.7237 14.0069 10.7179C14.0476 10.712 14.0796 10.7004 14.1029 10.683L13.7888 10.5172L14.0069 9.95884C13.9255 9.6564 13.9051 9.42375 13.9459 9.26089C13.9866 9.09804 14.0651 8.96427 14.1814 8.85958C14.2977 8.75488 14.4257 8.65019 14.5653 8.5455C14.7049 8.44081 14.8474 8.29831 14.9928 8.11801L14.9666 8.01332L15.5424 7.31537L15.6733 7.29792C15.8361 7.29792 16.0193 7.29211 16.2229 7.28048C16.4265 7.26884 16.6329 7.24849 16.8423 7.2194C17.0517 7.19032 17.2582 7.16124 17.4618 7.13216C17.6653 7.10308 17.8514 7.06528 18.0201 7.01875C17.834 6.79773 17.6391 6.58835 17.4356 6.39059C17.232 6.19284 17.0139 6.00382 16.7813 5.82351C16.7173 5.84678 16.6388 5.87877 16.5457 5.91948C16.4526 5.9602 16.3596 6.01254 16.2665 6.07652C16.1735 6.1405 16.1008 6.21029 16.0484 6.2859C15.9961 6.36151 15.9641 6.44003 15.9524 6.52146L16.0048 6.68722C15.9001 6.85589 15.7838 6.96058 15.6558 7.0013C15.5279 7.04201 15.397 7.06527 15.2632 7.07109C15.1295 7.07691 14.9899 7.07691 14.8445 7.07109C14.6991 7.06527 14.5595 7.09145 14.4257 7.14961L14.2861 6.85298L14.417 6.34697L14.2687 6.12887L15.778 5.65775C15.714 5.4949 15.6093 5.37276 15.4639 5.29133C15.3185 5.2099 15.1585 5.16919 14.984 5.16919V5.08195L15.4726 5.00343C14.9317 4.73588 14.3704 4.53232 13.7888 4.39273C13.2072 4.25314 12.611 4.18334 12.0003 4.18334C11.4943 4.18334 10.9941 4.23278 10.4997 4.33166C10.0054 4.43053 9.52844 4.57303 9.06896 4.75915C8.60948 4.94527 8.16454 5.17791 7.73414 5.45709C7.30374 5.73627 6.91115 6.05035 6.55636 6.39932C6.70758 6.39932 6.8239 6.43712 6.90533 6.51274C6.98676 6.58835 7.06237 6.67268 7.13216 6.76574C7.20196 6.8588 7.27466 6.94313 7.35027 7.01875C7.42588 7.09436 7.52766 7.13507 7.65562 7.14089L7.79521 7.03619L7.77776 6.84426L8.06566 6.43422L7.83883 5.78862C7.86791 5.77117 7.91153 5.74209 7.9697 5.70137C8.02786 5.66066 8.0773 5.6403 8.11801 5.6403C8.2925 5.6403 8.42627 5.64903 8.51933 5.66648C8.61239 5.68392 8.69381 5.71591 8.76361 5.76244C8.8334 5.80897 8.89447 5.87586 8.94682 5.9631C8.99917 6.05035 9.08059 6.16085 9.1911 6.29463L9.50518 6.05035C9.56334 6.07361 9.6564 6.11142 9.78435 6.16376C9.91231 6.21611 10.0432 6.28009 10.1769 6.3557C10.3107 6.43131 10.4241 6.50983 10.5172 6.59125C10.6103 6.67268 10.6597 6.74829 10.6655 6.81809C10.6655 6.90533 10.6335 6.97512 10.5695 7.02747C10.5056 7.07982 10.4212 7.12344 10.3165 7.15833C10.2118 7.19323 10.1042 7.21941 9.99374 7.23685C9.88323 7.2543 9.77272 7.27757 9.66221 7.30665C9.55171 7.33573 9.46737 7.36481 9.40921 7.39389C9.35105 7.42297 9.31615 7.47241 9.30452 7.5422L9.81053 7.70797C9.6942 7.80684 9.56915 7.89699 9.43538 7.97842C9.30161 8.05985 9.16202 8.13546 9.01661 8.20525L9.05151 8.35357L8.24887 8.66764V8.91192L8.1878 8.9381L8.23143 8.63274L8.19653 8.62402C8.15582 8.62402 8.13255 8.63274 8.12673 8.65019C8.12092 8.66764 8.11801 8.688 8.11801 8.71126C8.11801 8.73453 8.12383 8.75779 8.13546 8.78106C8.14709 8.80432 8.15 8.82177 8.14418 8.8334L8.03077 8.77233L8.04821 8.80723C8.04821 8.82468 8.05694 8.85085 8.07439 8.88575C8.09184 8.92065 8.1151 8.95264 8.14418 8.98172C8.17326 9.0108 8.19653 9.03988 8.21398 9.06896C8.23143 9.09804 8.24306 9.11258 8.24887 9.11258C8.24887 9.13003 8.23724 9.14748 8.21398 9.16493C8.19071 9.18238 8.16163 9.19401 8.12673 9.19982C8.09184 9.20564 8.06857 9.21437 8.05694 9.226C8.04531 9.23763 8.04531 9.24054 8.05694 9.23472C8.13837 9.23472 8.15581 9.24054 8.10928 9.25217C8.06276 9.2638 7.99005 9.29288 7.89118 9.33941C7.7923 9.38594 7.70215 9.45283 7.62072 9.54007C7.5393 9.62732 7.49277 9.75527 7.48113 9.92394C7.48113 10.0228 7.48404 10.1188 7.48986 10.2118C7.49567 10.3049 7.49277 10.4009 7.48113 10.4997C7.39971 10.2787 7.27757 10.1101 7.11471 9.99374C6.95186 9.87741 6.75411 9.81925 6.52146 9.81925L6.14631 9.85415L6.32952 9.97629C6.23065 9.96466 6.12887 9.95302 6.02417 9.94139C5.91948 9.92976 5.81188 9.92685 5.70137 9.93267C5.59087 9.93848 5.49199 9.96175 5.40475 10.0025C5.3175 10.0432 5.23026 10.1042 5.14302 10.1857L5.09067 10.5783C5.09067 10.7644 5.13139 10.9156 5.21281 11.0319C5.29424 11.1483 5.43674 11.2093 5.6403 11.2151C5.81479 11.2151 5.98637 11.189 6.15504 11.1366C6.32371 11.0843 6.48947 11.0232 6.65232 10.9534C6.59998 11.0814 6.54182 11.2035 6.47784 11.3198C6.41386 11.4362 6.36733 11.5641 6.33825 11.7037L6.45166 11.756C6.59125 11.663 6.71921 11.6484 6.83553 11.7124C6.95186 11.7764 7.06528 11.8695 7.17578 11.9916C7.28629 12.1137 7.39971 12.2388 7.51603 12.3668C7.63236 12.4947 7.7574 12.5878 7.89118 12.6459L7.59455 12.803L6.89661 12.4104C6.90242 12.422 6.90824 12.4482 6.91405 12.4889C6.91987 12.5296 6.91696 12.5383 6.90533 12.5151L6.59125 11.9829C6.40514 11.9771 6.20738 11.948 5.998 11.8956C5.78862 11.8433 5.57632 11.7735 5.36113 11.6863C5.14593 11.599 4.94527 11.503 4.75915 11.3984C4.57303 11.2937 4.40145 11.1832 4.24441 11.0668L4.18334 12.0003C4.18334 12.7099 4.27931 13.402 4.47124 14.0767C4.66318 14.7514 4.93363 15.3854 5.28261 15.9786C5.63158 16.5719 6.05907 17.1128 6.56508 17.6013C7.07109 18.0899 7.63236 18.5058 8.24887 18.8489C8.21979 18.7268 8.21689 18.6046 8.24015 18.4825C8.26341 18.3604 8.2925 18.2382 8.32739 18.1161C8.36229 17.9939 8.4001 17.8718 8.44081 17.7497C8.48152 17.6275 8.50188 17.5025 8.50188 17.3745C8.50188 17.1884 8.4728 16.9935 8.41464 16.79C8.35647 16.5864 8.28668 16.3799 8.20525 16.1706C8.12383 15.9612 8.03367 15.7547 7.9348 15.5511C7.83592 15.3476 7.7574 15.1556 7.69924 14.9753C7.64108 14.795 7.59455 14.6263 7.55965 14.4693C7.52476 14.3123 7.5422 14.1756 7.612 14.0593L7.48113 13.9982C7.51603 13.9168 7.56256 13.8383 7.62072 13.7626C7.67889 13.687 7.73996 13.6114 7.80393 13.5358C7.86791 13.4602 7.91735 13.3788 7.95225 13.2915C7.98714 13.2043 8.0075 13.117 8.01332 13.0298C8.01332 12.9716 8.00169 12.9106 7.97842 12.8466C7.95516 12.7826 7.9348 12.7215 7.91735 12.6634L8.10056 12.707C8.19944 12.4802 8.33321 12.326 8.50188 12.2446C8.67055 12.1632 8.88284 12.1196 9.13875 12.1137C9.16784 12.1137 9.22891 12.1254 9.32197 12.1486C9.41502 12.1719 9.5139 12.2039 9.61859 12.2446C9.72328 12.2853 9.82216 12.3173 9.91522 12.3406C10.0083 12.3638 10.0781 12.3871 10.1246 12.4104C10.1246 12.4511 10.1479 12.4773 10.1944 12.4889C10.2409 12.5005 10.2671 12.5209 10.2729 12.55L10.2555 12.6198C10.2729 12.6256 10.3136 12.6459 10.3776 12.6808C10.4416 12.7157 10.5114 12.7593 10.587 12.8117C10.6626 12.864 10.7295 12.9106 10.7877 12.9513C10.8458 12.992 10.8865 13.024 10.9098 13.0472C11.0145 13.0472 11.157 13.0821 11.3373 13.1519C11.5176 13.2217 11.7153 13.309 11.9305 13.4137C12.1457 13.5184 12.358 13.6434 12.5674 13.7888C12.7768 13.9342 12.9745 14.0796 13.1607 14.225C13.3468 14.3704 13.4893 14.5158 13.5882 14.6612C13.687 14.8067 13.7452 14.9346 13.7626 15.0451L13.466 15.3592C13.4893 15.6558 13.4689 15.8827 13.4049 16.0397C13.341 16.1967 13.2421 16.3276 13.1083 16.4323C12.9745 16.537 12.8204 16.6242 12.6459 16.694C12.4714 16.7638 12.2824 16.8627 12.0788 16.9906C12.0788 17.107 12.0498 17.232 11.9916 17.3658C11.9334 17.4996 11.8607 17.6275 11.7735 17.7497C11.6863 17.8718 11.5816 17.9736 11.4594 18.055C11.3373 18.1364 11.2151 18.1771 11.093 18.1771L10.7266 17.898C10.7382 17.9096 10.7382 17.93 10.7266 17.959C10.7149 17.9881 10.7004 17.9939 10.683 17.9765C10.7411 18.087 10.7557 18.215 10.7266 18.3604C10.6975 18.5058 10.6481 18.6541 10.5783 18.8053C10.5085 18.9565 10.43 19.099 10.3427 19.2328C10.2555 19.3666 10.1769 19.48 10.1072 19.573C10.4212 19.6545 10.7353 19.7155 11.0494 19.7562C11.3635 19.797 11.6804 19.8173 12.0003 19.8173Z"
                      fill="#FB7A00" />
                  </svg>
                  <p style="color: #e0e0e0" class="text-start">
                    (GMT-05:00) Pacific Time - Los Angeles
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
            class="flex-column justify-content-center align-items-center gap-4 p-md-5 p-2 mt-5 successMessage"
            id="div4" style="
                background: #efefef;
                width: 30%;
                box-shadow: 0px 0px 18px 0px rgba(0, 0, 0, 0.08);
                display: none;
              ">
            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68" fill="none">
              <path
                d="M30.0333 39.1001L23.9416 33.0084C23.4222 32.489 22.7611 32.2292 21.9583 32.2292C21.1555 32.2292 20.4944 32.489 19.975 33.0084C19.4555 33.5279 19.1958 34.189 19.1958 34.9917C19.1958 35.7945 19.4555 36.4556 19.975 36.9751L28.05 45.0501C28.6166 45.6167 29.2777 45.9001 30.0333 45.9001C30.7888 45.9001 31.45 45.6167 32.0166 45.0501L48.025 29.0417C48.5444 28.5223 48.8041 27.8612 48.8041 27.0584C48.8041 26.2556 48.5444 25.5945 48.025 25.0751C47.5055 24.5556 46.8444 24.2959 46.0416 24.2959C45.2388 24.2959 44.5777 24.5556 44.0583 25.0751L30.0333 39.1001ZM34 62.3334C30.0805 62.3334 26.3972 61.5892 22.95 60.1007C19.5027 58.6123 16.5041 56.594 13.9541 54.0459C11.4041 51.4959 9.38585 48.4973 7.89929 45.0501C6.41274 41.6029 5.66851 37.9195 5.66663 34.0001C5.66663 30.0806 6.41085 26.3973 7.89929 22.9501C9.38774 19.5029 11.406 16.5042 13.9541 13.9542C16.5041 11.4042 19.5027 9.38597 22.95 7.89942C26.3972 6.41286 30.0805 5.66864 34 5.66675C37.9194 5.66675 41.6027 6.41097 45.05 7.89942C48.4972 9.38786 51.4958 11.4061 54.0458 13.9542C56.5958 16.5042 58.615 19.5029 60.1035 22.9501C61.5919 26.3973 62.3352 30.0806 62.3333 34.0001C62.3333 37.9195 61.5891 41.6029 60.1006 45.0501C58.6122 48.4973 56.5939 51.4959 54.0458 54.0459C51.4958 56.5959 48.4972 58.6151 45.05 60.1036C41.6027 61.592 37.9194 62.3353 34 62.3334Z"
                fill="#00CE7E" />
            </svg>
            <p style="color: #292929" class="fw-bold">
              Thanks for booking the consultation. Our representative
              will get back to you soon.
            </p>
            <button type="submit" id="scrollToSection2"
              class="btn partnerbutton navButton rounded-0 button-color d-flex justify-content-center py-2 px-lg-5 px-3 align-items-center gap-3">
              <a class="text-white px-4" onclick="closeFour()">Ok</a>
            </button>
          </div>
          <script>
            function showSecondDiv() {
              // Get references to both div elements
              const div1 = document.getElementById("div1");
              const div3 = document.getElementById("div3");
              // Toggle the visibility of div1 and div2
              div1.style.display = "none";
              div3.style.display = "flex";
            }

            function backtosecond() {
              const div1 = document.getElementById("div1");
              const div3 = document.getElementById("div3");
              div1.style.display = "flex";
              div3.style.display = "none";
            }

            function showFirstDiv() {
              // Get references to both div elements
              const div1 = document.getElementById("div1");
              const div2 = document.getElementById("div2");
              const div3 = document.getElementById("div3");
              // Toggle the visibility of div1 and div2
              div1.style.display = "flex";
              div2.style.display = "none";
              div3.style.display = "none";
            }

            function showThirdDiv() {
              const div1 = document.getElementById("div1");
              const div2 = document.getElementById("div2");
              const div3 = document.getElementById("div3");
              div1.style.display = "none";
              div2.style.display = "none";
              div3.style.display = "flex";
            }
          </script>
        </div>
      </div>
    </div>
  </center>
  <script>
    // Add a click event listener to the SVG
    document
      .querySelector(".close-modal")
      .addEventListener("click", function () {
        // Find the modal element by its ID
        var modal = document.getElementById("bookapp");
        // Close the modal
        $(modal).modal("hide");
        // Remove the backdrop manually
        $(".modal-backdrop").remove();
      });
  </script>
</div>

</div>
  <!-- ------------FOOTER SECTION---------------- -->
  <section class="footer-section">
    <div class="container">
      <div class="footer-main">
        <div class="f-location">
          <a class="footerimg" href="index.html">
             <img loading="lazy" width="212" height="40" src="./assets/home-logo.svg" alt="logo" class="img-fluid" />
          </a>
          <p style="text-align: justify;">Sync4Tech, your trusted tech business analyst partner thet empowers your business through insightful
            analysis and innovative strategies.</p>
            <div class="d-flex gap-lg-4 justify-content-sm-start justify-content-center gap-3 pt-3 bottomImg">
              <a href="https://www.facebook.com/sync4tech.co" target="_blank">
                <i class="fa-brands fa-facebook-f text-white p-2 rounded-circle border"
                  style="opacity: 0.6;width: 34px;height: 34;text-align: center;"></i>
              </a>
              <a href="https://twitter.com/sync4tech" target="_blank">
                <i class="fa-brands fa-x-twitter text-white p-2 rounded-circle border"
                  style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
              </a>
              <a href="https://www.instagram.com/sync4tech.co/" target="_blank">
                <i class="fa-brands fa-instagram text-white p-2 rounded-circle border"
                  style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
              </a>
              <a href="https://www.linkedin.com/company/sync4tech-co/?viewAsMember=true" target="_blank">
                <i class="fa-brands fa-linkedin-in text-white p-2 rounded-circle border"
                  style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
              </a>
            </div>
        </div>
        <div class="quick-link">
          <h2>Services</h2>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <p class="f-linkstag" style="line-height: 27px !important"> Software Business Analysis</p>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Project Management</p>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Solution Architecture Design</p>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Technical Search and Development</p>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Data Analysis</p>
          </div>
        </div>
        <div class="quick-link">
          <h2>Quick Links</h2>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <a class="f-linkstag" href="./aboutUs.html">About Us</a>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <a class="f-linkstag" href="./blogs.html">Blog</a>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <a class="f-linkstag" href="./projects.html">Projects</a>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <a class="f-linkstag" href="./partners.html">Partners</a>
          </div>
          <div class="f-links">
            <img loading="lazy" width="25" height="25" src="./assets/iconamoon_arrow-up-2.svg" alt="">
            <a class="f-linkstag" data-bs-toggle="modal" data-bs-target="#staticBackdropcon" href="">Contact Us</a>
          </div>
        </div>
        


        <div class="quick-link">
          <h2>Contact Us</h2>
          <div class="f-main-location"
            style="display: flex !important; align-items: end !important; padding-top: 10px;">
            <a href="tel:+923015892528" style="display: flex;">
              <img loading="lazy" width="24" height="24" src="./assets/typcn_phone.svg" alt="typcn_phone" class="img-fluid" />
              <p style="padding-top: 0 !important;">+923015892528</p>
            </a>
          </div>
          <div class="f-main-location"
            style="display: flex !important; align-items: end !important; padding-top: 10px;">
            <a href="mailto:contact@zaptatech.com" style="display: flex;">
               <img loading="lazy" width="24" height="24" src="./assets/fluent_mail-20-filled.svg" alt="fluent_mail-20-filled" class="img-fluid" />
              <p style="padding-left: 11px !important; padding-top: 0px !important;">info@sync4tech.co</p>
            </a>
          </div>
          <div class="f-main-location">
            <a href="https://maps.app.goo.gl/MaFm3ZZRrDGkxx3f6" target="_blank" style="display: flex;">
              <img loading="lazy" width="24" height="38" src="./assets/mdi_location.svg" alt="mdi_location" class="img-fluid"
                style="margin-top: 10px !important;" />
              <p style="max-width: 274px;">144/2, Block B, Bankers Society Near DHA Phase 4, Lahore, 54792</p>
            </a>
          </div>
        </div>

      </div>
      <div class="d-flex flex-sm-row flex-column bottomFooter justify-content-between gap-sm-4 gap-2 pd-boot"
        style="margin-top: 40px !important;">
        <span class="smallTextFooter text-white pt-3 text-lg-center w-100 ps-lg-5 ms-lg-5" style="opacity: 0.6">© 2022
          Copyrights Sync4Tech All rights are reserved.</span>
       
      </div>
    </div>
  </section>
<!-------------------- contec-us-model--------------- -->
<!-- Modal -->
<div class="modal fade fmcont" id="staticBackdropcon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 1100px !important;">
  <div class="modal-content contact-model p-0"
    style="margin: auto !important;background-color: #e7ebec !important;">
    <button
      style="background-color: #24829914;position: absolute;top: 15px;right: 20px;z-index: 1;width: 27px;height: 27px;border-radius: 40px;"
      type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-body p-0">
      <div data-animation="fadeIn" data-animation-delay=".3s" id="contactSection2"
        class="cardsSection flex-wrap contactSection w-100 toolCardSection d-flex flex-column justify-content-center gap-0"
        style="background-color: #e7ebec; padding: 0px !important">
        <div class="d-flex flex-md-row flex-column gap-3" style="align-items: center;">
          <div class="subDiv d-flex justify-content-center align-items-center position-relative">
            <div class="frm-info-bg">
              <div class="contect-office">
                <h5>Pakistan Office</h5>
                <p> 240 FF, DHA Phase 4, Lahore, Pakistan</p>
                <a class="text-deco" href="mailto:Info.pk@zaptatech.com">Info.pk@sync4tech.co</a>
              </div>
              <div class="contect-office">
                <h5>UAE Office</h5>
                <p> Q09, France Cluster, International City Dubai, United Arab
                  Emirates</p>
                <a class="text-deco" href="mailto:Info.uae@zaptatech.com">Info.uae@sync4tech.co</a>
              </div>

              <div class="contect-office">
                <h5>UK Office</h5>
                <p> West Tower, 371 Deansgate, Manchester M15 4UP, United Kingdom</p>
                <a class="text-deco" href="mailto:Info.uk@zaptatech.com">Info.uk@sync4tech.co</a>
              </div>

              <div class="d-flex gap-lg-4 justify-content-sm-start gap-3 pt-3 bottomImg">
                <a href="https://www.facebook.com/sync4tech.co" target="_blank"
                  style="text-decoration: none !important; border: none;">
                  <i class="fa-brands fa-facebook-f text-white p-2 rounded-circle border"
                    style="opacity: 0.6;width: 34px;height: 34;text-align: center;"></i>
                </a>
                <a href="https://twitter.com/sync4tech" target="_blank"
                  style="text-decoration: none !important; border: none;">

                  <i class="fa-brands fa-x-twitter text-white p-2 rounded-circle border"
                    style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                </a>
                <a href="https://www.instagram.com/sync4tech.co/" target="_blank"
                  style="text-decoration: none !important; border: none;">
                  <i class="fa-brands fa-instagram text-white p-2 rounded-circle border"
                    style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                </a>
                <a href="https://www.linkedin.com/company/sync4tech-co/?viewAsMember=true" target="_blank"
                  style="text-decoration: none !important; border: none;">
                  <i class="fa-brands fa-linkedin-in text-white p-2 rounded-circle border"
                    style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                </a>
              </div>
            </div>
          </div>
          <div style="padding-top: 30px;"
            class="subDiv formSection d-flex flex-column gap-2 align-items-md-start align-items-center cont-frm">
            <h1 class="dark-black text-center fw-bold"
              style="font-size: 24px !important;font-weight: 700 !important;">Let's Talk</h1>

            <div class="d-flex justify-content-center gap-2 bottomImg">
              <a href="https://join.skype.com/invite/yieEvlEL80O3" target="_blank"
                style="text-decoration: none !important; border: none;">
                <i class="fa-brands fa-skype p-2 rounded-circle"
                  style="width: 34px;height: 34px;text-align: center;border: 1px solid #727375; color:#727375 ;  "></i>
              </a>
              <a href="tel:+923015892528" target="_blank" style="text-decoration: none !important; border: none;">
                <i class="fa-brands fa-whatsapp p-2 rounded-circle"
                  style="width: 34px;height: 34px;text-align: center;border: 1px solid #727375; color:#727375 ;"></i>
              </a>
              <a href="mailto:info@sync4tech.co" target="_blank"
                style="text-decoration: none !important; border: none;">
                <i class="fa-solid fa-envelope p-2 rounded-circle"
                  style="width: 34px;height: 34px;text-align: center;border: 1px solid #727375; color:#727375 ;"></i>
              </a>
              <a href="https://zaptatechnologies.slack.com/" target="_blank"
                style="text-decoration: none !important; border: none;">
                <i class="fa-brands fa-slack p-2 rounded-circle"
                  style="width: 34px;height: 34;text-align: center; border: 1px solid #727375; color:#727375 ;"></i>
              </a>
            </div>
            <!-- <form action="#" class="d-flex flex-column gap-2 align-items-md-start align-items-center ms-lg-2 w-100"
             id="myForm2">
             <div class="d-flex flex-column gap-2 w-100 pos-rev" style="padding-top: 10px !important;">
               <label for="contactname">Full Name <span class="text-orange">*</span>
               </label>
               <input type="text" name="contactname" id="contactname2" placeholder="Enter Name"
                 style="border: 1px solid #D0D5DD !important;box-shadow: 0px 1px 2px 0px #1018280D;background-color: #F6F6F6 !important;"
                 class="form-control py-2 px-3 rounded-0 bg-transparent" />
               <div id="contactnameError2" class="text-danger pos-abs"></div>
             </div>
             <div class="d-flex gap-3 flex-lg-row flex-column" style="width: 100% !important;">
               <div class="d-flex flex-column gap-2 w-100 pos-rev" style="width: 100% !important;">
                 <label for="contactemail">Email <span class="text-orange">*</span>
                 </label>
                 <input type="text" name="contactemail" id="contactemail2" placeholder="abc@gmail.com"
                   style="border: 1px solid #D0D5DD !important;box-shadow: 0px 1px 2px 0px #1018280D;background-color: #F6F6F6 !important;"
                   class="form-control py-2 px-3 rounded-0 bg-transparent" />
                 <div id="contactemailError2" class="text-danger pos-abs"></div>
               </div>
               <div class="d-flex flex-column gap-2 w-100 pos-rev" style="width: 100% !important;">
                 <label for="contactphoneNum">Phone</label>
                 <input type="tel" name="contactphoneNum" id="contactphoneNum2"
                   style="border: 1px solid #D0D5DD !important;box-shadow: 0px 1px 2px 0px #1018280D;background-color: #F6F6F6 !important;"
                   class="form-control py-2 px-5 rounded-0 bg-transparent" />
                 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                 <script
                   src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                 <script>
                   var input = document.querySelector("#contactphoneNum2");
                   var iti = window.intlTelInput(input, {
                     separateDialCode: true,
                     utilsScript:
                       "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
                   });
                
                   window.iti = iti;
                 </script>
                 <div id="contactphoneNumError2" class="text-danger pos-abs"></div>
               </div>
             </div>

             <div class="d-flex flex-column gap-2 w-100">
               <label for="message">Message</label>
               <textarea name="message" class="bg-transparent px-3 form-control resize-txt"
                 style="height: 100px !important;resize: none !important;border: 1px solid #D0D5DD !important;background-color: #F6F6F6 !important;padding-top: 8px !important;"
                 placeholder="Enter your message here..." id="message2"></textarea>
             </div>
             <button type="submit" style="margin-top: 20px !important;"
               class="btn navButton rounded-0 cardsButton px-lg-5 button-color d-flex justify-content-center align-items-center gap-3">
               <a class="text-white">Send Message</a>
             </button>
           </form> -->
            <form action="#" class="d-flex flex-column gap-2 align-items-md-start align-items-center ms-lg-2 w-100"
              id="myForm2">

              <div class="d-flex flex-column gap-2 w-100 pos-rev">
                <label for="contactname">Full Name <span class="text-orange">*</span></label>
                <div class="position-relative">
                  <input type="text" name="contactname" id="contactname2" placeholder="Enter Name"
                    class="form-control py-2 px-3 rounded-0 bg-transparent" />
                </div>

                <!-- <div id="contactnameError2" class="text-danger pos-abs"></div> -->
              </div>
              <div class="d-flex gap-3 flex-lg-row flex-column" style="width: 100% !important;">
                <div class="d-flex flex-column gap-2 w-100 pos-rev">
                  <label for="contactemail">Email <span class="text-orange">*</span></label>
                  <div class="position-relative">
                    <input type="text" name="contactemail" id="contactemail2" placeholder="abc@gmail.com"
                      class="form-control py-2 px-3 rounded-0 bg-transparent" />
                  </div>

                  <!-- <div id="contactemailError2" class="text-danger pos-abs"></div> -->
                </div>
                <div class="d-flex flex-column gap-2 w-100 pos-rev" style="width: 100% !important;">
                  <label for="contactphoneNum">Phone</label>
                  <input type="tel" name="contactphoneNum" id="contactphoneNum2"
                    style="border: 1px solid #D0D5DD !important;box-shadow: 0px 1px 2px 0px #1018280D;background-color: #F6F6F6 !important;"
                    class="form-control py-2 px-5 rounded-0 bg-transparent" />
                  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                  <script
                    src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                  <script>
                    var input = document.querySelector("#contactphoneNum2");
                    var iti = window.intlTelInput(input, {
                      separateDialCode: true,
                      utilsScript:
                        "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
                    });

                    window.iti = iti;
                  </script>
                  <!-- <div id="contactphoneNumError2" class="text-danger pos-abs"></div> -->
                </div>
              </div>

               <div class="d-flex flex-column gap-2 w-100">
                    <label for="message">Message</label>
                    <textarea name="message" class="bg-transparent px-3 form-control resize-txt"
                      style="height: 100px;resize: none !important;border: 1px solid #D0D5DD !important;background-color: #F6F6F6 !important;padding-top: 8px;"
                      placeholder="Enter your message here..." id="message2"></textarea>
                  </div>

              <button type="submit" style="margin-top: 20px;"
                class="btn navButton rounded-0 cardsButton px-lg-5 button-color d-flex justify-content-center align-items-center gap-3">
                <a class="text-white">Send Message</a>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="loader"><img
    style="width: 70px;height: 70px;position: absolute;top: 0;bottom: 0;margin: auto !important;left: 47.8%;"
    src="https://i.ibb.co/Jygm2yj/Favicon-128-x-128.png"></img>
</div>
</div>

 <!-- contect-us-model -close  -->
 <!--success Modal -->
 <div class="modal fade" id="succesmodel" tabindex="-1" aria-labelledby="succesmodelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-body p-0">
        
        <div class="text-center">
          <img src="./assets/success.svg">
          <p style="font-size: 20px;color: #292929;padding-top: 20px; max-width: 356px;">Thank you for contacting Us.
            Our representative will get back to you soon.</p>
          <button style="background-color: #FB7A00; color: #fff; width: 144px;height: 46px; border: none;"
            type="button" class="submit-form mt-3" data-bs-dismiss="modal">Ok</button>
        </div>

      </div>

    </div>
  </div>
</div>

  <!-- -------------------BOOTSTRAP 5 JS CDN------------------ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
            <!-- validation -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <!-- -------------------EXTERNAL JAVASCRIPT FILE------------------ -->
    <script src="./js/script.js"></script>
    <script src="rolyart-calendar.js"></script>
    <script src="app.js"></script>
    <script src="./js/index.js"></script>
    <!-- <script>
      window.addEventListener('scroll', function() {
        var section = document.getElementById('animation-sec');
        var sectionOffsetTop = section.offsetTop;
        var sectionHeight = section.offsetHeight;
        var scrollPosition = window.scrollY || window.pageYOffset;
        var arrowImg = document.querySelector('.arrow-img2');
        
        if (scrollPosition > sectionOffsetTop && scrollPosition < sectionOffsetTop + sectionHeight) {
          arrowImg.style.opacity = '1';
        } else {
          arrowImg.style.opacity = '0';
        }
      });
    </script> -->
    <script>
      var input = document.querySelector("#phoneNumber");
      var iti = window.intlTelInput(input, {
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
        initialCountry: "US", // Set the default country to United States
      });
      // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
      window.iti = iti;
    </script>
    <script>
    // Get the input element
    var phoneNumberInput = document.querySelector("#phnumber");
    
    // Set the default USA phone number as the placeholder (adjust as needed)
    phoneNumberInput.placeholder = "201-555-0123";
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          var loader = document.querySelector('.loader');
          var html = document.querySelector('html');
      
          // Add 'loading' class to the html element to set the background color to red
          html.classList.add('loading');
      
          // Show the loader
          loader.style.display = 'block';
      
          // Set a timeout to hide the loader after 3 seconds
          setTimeout(function () {
              loader.style.display = 'none';
              
              // Remove 'loading' class from the html element to revert to the original background color
              html.classList.remove('loading');
          }, 1000); // 3000 milliseconds = 3 seconds
      });
      </script>
</body>

</html>