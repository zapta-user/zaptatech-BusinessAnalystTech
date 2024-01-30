<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Partners| Sync4Tech</title>
  <meta name="description"
    content="Explore our dynamic collaboration and strategic partnerships that drive innovation and excellence. Witness how we work together with industry leaders to deliver exceptional value and solutions. " />
  <link rel="stylesheet" href="./css/myStyle.css" />
  <meta name="keywords"
    content="Business Analysis, Data Analysis, Data-driven Decision Making, Business Insights,Market Intelligence Consulting" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <meta name="robots" content="index, follow" />
  <!-- -------------------EXTERNAL STYLESHEET------------------ -->
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="icon" type="image/x-icon" href="./assets/fav-2.svg" />
  <!-- -------------------BOOTSTRAP 5 STYLE CDN------------------ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- -------------------JQUERY CDN------------------ -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  <style>
   
   .hover-line {
      display: block;
     opacity: 1;
      
    }
    .hover-white {
       transition: clip-path 5s ease;
      clip-path: polygon(0 0, 0 100%, 0 100%, 0 0);
    }

    .arrow-img2 {
      display: block;
      /* Set the initial display property */
      position: fixed;
      /* Set the position to fixed */
      height: 22px;
      top: 76px;
      left: -83px;
      right: 10%;
      z-index: -1;
      transform: rotate(-21deg);
      transition: opacity 0.3s ease;
      /* Add a transition effect */
    }

    .becomepartform input,
    .becomepartform select {
      box-shadow: none !important;
    }

    .becomepartform input,
    .becomepartform select {
      background-color: #F6F6F6;
      box-shadow: 0px 1px 2px 0px #1018280D;
    }

    table tbody tr td #domains {
      width: 16px !important;
      height: 16px !important;
      border: 1px solid #D0D5DD !important;
      border-radius: 0px !important;
    }

    .becomepartform label {
      font-family: Manrope !important;
      font-size: 14px !important;
      font-weight: 400 !important;
      line-height: 20px !important;
      letter-spacing: 0em !important;
      text-align: left !important;
      color: #5F5F5F !important;
    }

    .partnertable table p {
      font-family: Manrope !important;
      font-size: 14px !important;
      font-weight: 400;
      line-height: 20px;
      letter-spacing: 0em;
      text-align: left;
      color: #5F5F5F !important;
    }

    #companyNameselect label {
      font-size: 16px !important;
      font-weight: 600 !important;
    }

    #repnameselect label {
      font-size: 16px !important;
      font-weight: 600 !important;
    }

    /* Style the radio container (label) */
    .radio-container {
      display: block;
      position: relative;
      padding-left: 30px;
      /* Adjust as needed to control the spacing */
    }

    .radio-partner p {
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
    .radio-container input:not(:checked)+.radio-checkmark {
      background-image: url('./assets/unchecked.svg') !important;
      /* Replace with the URL of your image */
      background-size: cover;
      width: 20px;
      height: 20px;
    }

    /* Background image for checked radio button */
    .radio-container input:checked+.radio-checkmark {
      background-image: url('./assets/checked.svg') !important;
      /* Replace with the URL of your image */
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

<body>
  <button class="back-to-top rounded-circle overflow-hidden clearfix position-fixed d-block border-0"
    type="button"></button>
  <!-- --------------------NAV SECTION----------------- -->
  <nav
    class="navbar position-fixed fixed-top z-3 w-100 navbar-expand-lg navbar-light px-xl-5 px-sm-4 py-lg-4 py-3 px-lg-3 px-2"
    style="background-color: #ececec">
    <div class="container-fluid px-xl-5 px-0">
      <a class="navbar-brand" href="{{route('frontend.home')}}">
         <img  loading="lazy" width="216" height="40" src="{{asset('assets/nav-logo.svg')}}" alt="logo" class="img-fluid" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-lg-2 mt-4" id="navbarNavDropdown">
        <ul class="navbar-nav ms-xl-auto m-lg-auto gap-xl-4 gap-lg-0 gap-2">
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" aria-current="page" href="{{route('frontend.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="{{route('frontend.aboutUs')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="{{route('frontend.services')}}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="{{route('frontend.blogs')}}">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2" href="{{route('frontend.projects')}}">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 link-color pb-2 active" href="{{route('frontend.partners')}}">Partners</a>
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
  <!-- --------------------BANNER SECTION----------------- -->
  <div
    class="bannerSection flex-column gap-1 d-flex align-items-start justify-content-center  flex-shrink-0"
    style="
        background-image: url({{asset('assets/our-partner-bg.webp')}});
      ">
    <div class="d-flex gap-2 align-items-center justify-content-center">
      <a href="{{route('frontend.home')}}">
        <span class="text-white">HOME</span>
      </a>
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
        <path
          d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
          fill="#ACACAC" />
      </svg>
      <a href="{{route('frontend.partners')}}">
        <h4 class="text-orange text-center pt-md-0 pt-1">OUR PARTNERS</h4>
      </a>
    </div>
    <h1 class="text-white text-center fw-bold">PARTNERS</h1>
       <p class="text--start " style="color: #dfdfdf">
        Discover how Sync4Tech leverages strategic alliances and partnerships to enhance our capacity in delivering exceptional business analysis solutions.
    </p>
  </div>
  <!-- ------------SERVICE SECTION---------------- -->
  <div class="cardsSection row d-flex justify-content-center justify-content-lg-around align-items-center w-100"
    id="expertSectiongap">
    <div class="col-xl-5 col-lg-6 col-md-6 expertContent d-flex flex-column gap-lg-3 gap-2">
      <h4 class="text-orange pt-md-0 pt-1 text-md-start text-center">
        Our Partnerships
      </h4>
      <h3 class="dark-black fw-bold text-md-start text-center px-md-0 px-3">
        Pre-Development Services We Provide
      </h3>
      <p class="content-color text-md-start text-center px-md-0 px-sm-2">
        Empower your project's success with Sync4Tech's Pre-Development Services. Our holistic approach, led by expert tech business analysts, includes in-depth Research & Analysis documents for a profound understanding of your business objectives
        <br /><br />
        We provide clear guidance through requirements documents and architect design diagrams, offering a visual blueprint and technical documentation. Start your journey with strategic preparation, ensuring a seamless and successful project with Sync4Tech
        <!-- <br /><br />
          In addition, our Plan & Strategy Documents map out the roadmap for project execution while the Technical Documentation encompasses critical technical aspects facilitating seamless development 
          <br /><br />
          Lastly, the Business Process Modeling service enables a strategic overview of workflows paving the way for optimized operations.  -->
      </p>
      <div class="d-flex gap-xl-3 gap-2 justify-content-md-start justify-content-center align-items-center">
        <div class="button-wrap">
          <button style="margin: 0;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="scrollToSection02" type="button"
            class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
            <a href="#" class="text-orange">Become Our Partner</a>
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-5 col-md-5 col-12 d-flex justify-content-center align-items-center">
      <img loading="lazy" width="515" height="445" src="{{asset('assets/expertPic.webp')}}" alt="expert pic" class="img-fluid" />
    </div>
  </div>
 <!-- ------------TRUST SECTION---------------- -->
 <section class="cardsSection toolCardSection d-flex flex-column justify-content-center align-items-center gap-5"
 style="background-color: #E1E7E9">
 <div class="container">
   <!-- ------------TOOLS CONTENT SECTION---------------- -->
   <div data-animation="fadeIn" data-animation-delay=".1s"
     class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
     <p class="text-orange text-center mb-0">WHO TRUST US</p>
     <h3 class="dark-black text-center fw-bold mb-0">
      Chosen by Customers Worldwide Where Trust Meets Excellence.
     </h3>
     <p class="content-color text-center px-xl-5 mb-0">
      Join our global community of delighted customers, relying on Sync4Tech for innovative solutions and unmatched service excellence.
     </p>
   </div>
 </div>
</section>

<section class="prt-sect" style="background-color: #E1E7E9; padding-bottom: 70px;">
 <!-- ------------CARDS SECTION ONE---------------- -->
 <div class="swiper fadeSwiper">
  <div class="swiper-wrapper align-items-center">
    <div class="swiper-slide sw-slide1 ">
      <div class="section-1">
        <!-- <img loading="lazy" class="w-100" src="assets/sw-slide2.png"> -->
        <a target="_blank" href="https://en.wikipedia.org/wiki/Abu_Dhabi">
          <img loading="lazy" width="137" height="137" src="{{asset('assets/abu-dabi-logo1.png')}}" alt="abu-dabi-logo1">
        </a>
        <a target="_blank" href="https://www.walmart.com/">
          <img loading="lazy" width="137" height="33" src="{{asset('assets/abu-dabi-logo2.png')}}" alt="abu-dabi-logo2">
        </a>
        <a target="_blank" href="https://www.cisco.com/">
          <img loading="lazy" width="137" height="72" src="{{asset('assets/abu-dabi-logo3.png')}}" alt="abu-dabi-logo3">
        </a>
      </div>
    </div>
    <div class="swiper-slide sw-slide2">
      <div class="section-1">
        <!-- <img loading="lazy" class="w-100" src="assets/sw-slide1.png"> -->
        <a target="_blank" href="https://www.att.com/">
         <img loading="lazy" width="134" height="50" src="{{asset('assets/abu-dabi-logo4.png')}}" alt="abu-dabi-logo">
        </a> <a target="_blank" href="https://www.vodafone.com/">
          <img loading="lazy"  width="174" height="50" src="{{asset('assets/abu-dabi-logo5.png')}}" alt="abu-dabi-logo5">
        </a> <a target="_blank" href="https://www.ibm.com/us-en">
          <img loading="lazy" width="148" height="48" src="{{asset('assets/abu-dabi-logo6.png')}}" alt="abu-dabi-logo6">
        </a>

      </div>
    </div>
  </div>
</div>
 </div>
</section>
<!-- ------------CARDS SECTION---------------- -->
<!--  <section class="pt-lg-5 pb-lg-4 pt-3 pb-3" style="background-color: #E1E7E9">
 <div class="container">
   <div class="sliderUse">
     <div class="slide-track-use">
       <div class="slideUse">
          <img width="129" height="30" src="./assets/log1.svg" alt="quick_step" class="img-fluid fab" />
       </div>
       <div class="slideUse">
         <img width="172" height="40" src="./assets/log2.svg" alt="techHouse" class="img-fluid fab " />
       </div>
       <div class="slideUse">
        <img width="178" height="27" src="./assets/log3.svg" alt="Saudi_Bank_Digital" class="img-fluid fab " />
       </div>
       <div class="slideUse">
         <svg width="149" height="40" viewBox="0 0 149 40" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path class="kutbay-img"
             d="M65.96 30.6093V13.4357C65.96 12.4647 65.4041 11.9099 64.4313 11.9099H62.0964C61.1235 11.9099 60.6233 12.4647 60.6233 13.4357V23.701C60.6233 26.3367 59.011 28.0568 56.4816 28.0568C54.0355 28.0568 52.5067 26.3367 52.5067 23.812V13.4357C52.5067 12.4647 51.9508 11.9099 50.9779 11.9099H48.643C47.6701 11.9099 47.1699 12.4647 47.1699 13.4357V24.4224C47.1699 29.3607 50.422 32.69 55.3141 32.69C58.2049 32.69 60.2063 31.4138 61.4571 29.5273V30.6093C61.4571 31.5803 62.013 32.1629 62.9859 32.1629H64.4313C65.4041 32.1629 65.96 31.5526 65.96 30.6093ZM83.1103 29.6659L82.3879 27.9736C82.026 27.28 81.5817 26.8916 80.664 27.4465C80.1084 27.7794 79.4966 28.0568 78.8296 28.0568C77.273 28.0568 76.1889 27.2245 76.1889 24.9773V15.9327H80.6368C81.6097 15.9327 82.1934 15.3778 82.1934 14.4068V13.408C82.1934 12.4369 81.5817 11.9376 80.6368 11.9376H76.1889V6.38881C76.1889 5.33454 75.6611 4.6132 74.5769 4.8629L72.4088 5.3068C71.4081 5.50101 70.88 5.94491 70.88 6.86045V11.9099H68.9065C67.9336 11.9099 67.3499 12.4369 67.3499 13.3803V14.379C67.3499 15.35 67.9615 15.9049 68.9065 15.9049H70.88V25.4488C70.88 30.415 74.1321 32.6623 77.94 32.6623C79.7193 32.6623 81.3038 32.1906 82.4433 31.386C82.9437 31.0254 83.5554 30.5259 83.1103 29.6659ZM103.123 30.6093V13.4357C103.123 12.4647 102.568 11.9099 101.595 11.9099H99.2598C98.2869 11.9099 97.7866 12.4647 97.7866 13.4357V23.701C97.7866 26.3367 96.1747 28.0568 93.6453 28.0568C91.199 28.0568 89.6705 26.3367 89.6705 23.812V13.4357C89.6705 12.4647 89.114 11.9099 88.1412 11.9099H85.8063C84.8334 11.9099 84.3337 12.4647 84.3337 13.4357V24.4224C84.3337 29.3607 87.5855 32.69 92.4778 32.69C95.3684 32.69 97.3701 31.4138 98.6208 29.5273V30.6093C98.6208 31.5803 99.1766 32.1629 100.149 32.1629H101.595C102.568 32.1629 103.123 31.5526 103.123 30.6093ZM122.165 22.1474C122.165 25.4211 119.968 28.029 116.577 28.029C113.52 28.029 111.129 25.8928 111.074 22.1474C110.99 18.3465 113.575 16.2101 116.577 16.2101C119.94 16.2101 122.165 18.8458 122.165 22.1474ZM127.445 22.1474C127.445 16.2101 123.276 11.6047 117.356 11.6047C115.077 11.6047 113.019 12.3538 111.379 13.5745V5.05711C111.379 4.00284 110.851 3.33698 109.767 3.58667L107.571 3.97508C106.57 4.22478 106.042 4.6132 106.042 5.52875V30.5815C106.042 31.5526 106.598 32.1351 107.571 32.1351H108.988C109.961 32.1351 110.462 31.5247 110.462 30.5815V29.5827C112.102 31.4138 114.437 32.6623 117.356 32.6623C123.276 32.69 127.445 28.029 127.445 22.1474ZM146.43 11.9099H144.346C143.372 11.9099 142.872 12.4647 142.511 13.4357L137.73 25.5044L132.949 13.4357C132.588 12.4647 132.059 11.9099 131.059 11.9099H128.446C127.473 11.9099 126.917 12.5479 127.335 13.4357L135.117 30.7201L134.283 32.801C133.561 34.4101 132.727 34.6876 131.781 34.6876C131.309 34.6876 130.781 34.5766 130.363 34.4101C129.363 34.0495 128.835 34.3269 128.586 35.1037L128.14 36.6574C127.862 37.5452 128.418 37.9337 128.947 38.211C129.752 38.5995 130.837 38.8491 132.005 38.8491C134.783 38.8491 137.09 37.7395 138.841 33.7166L147.542 13.4357C147.931 12.5757 147.376 11.9099 146.43 11.9099Z"
             fill="white" />
           <path
             d="M26.7667 2.9212C25.9885 2.75473 24.9879 2.67151 23.9039 2.67151C22.8199 2.67151 21.8471 2.78249 21.041 2.9212V32.1078C21.8192 31.9413 22.8199 31.8581 23.9039 31.8581C24.9879 31.8581 25.9607 31.969 26.7667 32.1078"
             fill="#FDB72B" />
           <path
             d="M20.7351 5.11272C19.9848 4.89076 19.0119 4.72429 17.9556 4.61333C16.8718 4.53009 15.8989 4.53009 15.0929 4.61333L10.4512 31.192C11.2572 31.1087 12.2578 31.1643 13.314 31.2475C14.398 31.3307 15.3708 31.6636 16.1213 31.8856"
             fill="#F8A489" />
           <path class="kutbay-img"
             d="M39.8015 30.221C39.8571 31.2198 40.4408 31.8579 41.4415 31.8579C41.4415 31.8579 43.6374 31.8579 44.0265 31.8579C44.6658 31.8579 45.0828 31.636 45.3052 31.3864C45.5831 31.0256 45.5831 30.2766 45.5831 30.2766C45.4997 27.5299 45.194 24.9775 43.693 21.9534C41.8584 18.5686 40.1907 16.9039 36.2992 15.2116C40.3018 13.4915 43.1648 8.16467 43.3316 3.5037V2.64363C43.3316 1.47839 42.887 0.84028 41.9974 1.03449L39.1344 1.50613C38.3005 1.6726 37.9392 1.9223 37.9392 2.67137C37.9392 2.67137 37.9392 3.5037 37.8002 4.36375C36.8273 10.0235 33.2416 12.4095 29.9616 12.9644C29.4057 13.0476 29.0444 13.0754 29.0444 13.0754C28.2662 13.1308 27.877 13.4638 27.877 14.185V16.4878C27.877 17.2091 28.3217 17.5421 29.0722 17.5421C34.7982 17.5421 39.8571 23.0909 39.8571 28.7506"
             fill="white" />
           <path
             d="M14.2866 6.75013C13.5639 6.50043 12.6467 6.13976 11.5625 5.9733C10.4785 5.80684 9.47788 5.72361 8.67172 5.75135L1 30.5544C1.80609 30.5544 2.80676 30.6099 3.86301 30.7764C4.94707 30.9428 5.91993 31.3867 6.55924 31.7751"
             fill="#25C1F2" />
         </svg>

       </div>
       <div class="slideUse">
         <img width="178" height="29" src="./assets/log5.svg" alt="ExpressText" class="img-fluid fab " />
       </div>
       <div class="slideUse">
         <img width="178" height="39" src="./assets/log6.svg" alt="Lahebo" class="img-fluid fab" />
       </div>
       <div class="slideUse">
         <img width="53" height="40" src="./assets/log7.svg" alt="TAMIMI" class="img-fluid fab " />
       </div>
       <div class="slideUse">
          <img width="129" height="30" src="./assets/log1.svg" alt="quick_step" class="img-fluid fab" />
       </div>
       <div class="slideUse">
         <img width="172" height="40" src="./assets/log2.svg" alt="techHouse" class="img-fluid fab " />
       </div>
       <div class="slideUse">
        <img width="178" height="27" src="./assets/log3.svg" alt="Saudi_Bank_Digital" class="img-fluid fab " />
       </div>
       <div class="slideUse">
          <svg width="149" height="40" viewBox="0 0 149 40" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path class="kutbay-img"
             d="M65.96 30.6093V13.4357C65.96 12.4647 65.4041 11.9099 64.4313 11.9099H62.0964C61.1235 11.9099 60.6233 12.4647 60.6233 13.4357V23.701C60.6233 26.3367 59.011 28.0568 56.4816 28.0568C54.0355 28.0568 52.5067 26.3367 52.5067 23.812V13.4357C52.5067 12.4647 51.9508 11.9099 50.9779 11.9099H48.643C47.6701 11.9099 47.1699 12.4647 47.1699 13.4357V24.4224C47.1699 29.3607 50.422 32.69 55.3141 32.69C58.2049 32.69 60.2063 31.4138 61.4571 29.5273V30.6093C61.4571 31.5803 62.013 32.1629 62.9859 32.1629H64.4313C65.4041 32.1629 65.96 31.5526 65.96 30.6093ZM83.1103 29.6659L82.3879 27.9736C82.026 27.28 81.5817 26.8916 80.664 27.4465C80.1084 27.7794 79.4966 28.0568 78.8296 28.0568C77.273 28.0568 76.1889 27.2245 76.1889 24.9773V15.9327H80.6368C81.6097 15.9327 82.1934 15.3778 82.1934 14.4068V13.408C82.1934 12.4369 81.5817 11.9376 80.6368 11.9376H76.1889V6.38881C76.1889 5.33454 75.6611 4.6132 74.5769 4.8629L72.4088 5.3068C71.4081 5.50101 70.88 5.94491 70.88 6.86045V11.9099H68.9065C67.9336 11.9099 67.3499 12.4369 67.3499 13.3803V14.379C67.3499 15.35 67.9615 15.9049 68.9065 15.9049H70.88V25.4488C70.88 30.415 74.1321 32.6623 77.94 32.6623C79.7193 32.6623 81.3038 32.1906 82.4433 31.386C82.9437 31.0254 83.5554 30.5259 83.1103 29.6659ZM103.123 30.6093V13.4357C103.123 12.4647 102.568 11.9099 101.595 11.9099H99.2598C98.2869 11.9099 97.7866 12.4647 97.7866 13.4357V23.701C97.7866 26.3367 96.1747 28.0568 93.6453 28.0568C91.199 28.0568 89.6705 26.3367 89.6705 23.812V13.4357C89.6705 12.4647 89.114 11.9099 88.1412 11.9099H85.8063C84.8334 11.9099 84.3337 12.4647 84.3337 13.4357V24.4224C84.3337 29.3607 87.5855 32.69 92.4778 32.69C95.3684 32.69 97.3701 31.4138 98.6208 29.5273V30.6093C98.6208 31.5803 99.1766 32.1629 100.149 32.1629H101.595C102.568 32.1629 103.123 31.5526 103.123 30.6093ZM122.165 22.1474C122.165 25.4211 119.968 28.029 116.577 28.029C113.52 28.029 111.129 25.8928 111.074 22.1474C110.99 18.3465 113.575 16.2101 116.577 16.2101C119.94 16.2101 122.165 18.8458 122.165 22.1474ZM127.445 22.1474C127.445 16.2101 123.276 11.6047 117.356 11.6047C115.077 11.6047 113.019 12.3538 111.379 13.5745V5.05711C111.379 4.00284 110.851 3.33698 109.767 3.58667L107.571 3.97508C106.57 4.22478 106.042 4.6132 106.042 5.52875V30.5815C106.042 31.5526 106.598 32.1351 107.571 32.1351H108.988C109.961 32.1351 110.462 31.5247 110.462 30.5815V29.5827C112.102 31.4138 114.437 32.6623 117.356 32.6623C123.276 32.69 127.445 28.029 127.445 22.1474ZM146.43 11.9099H144.346C143.372 11.9099 142.872 12.4647 142.511 13.4357L137.73 25.5044L132.949 13.4357C132.588 12.4647 132.059 11.9099 131.059 11.9099H128.446C127.473 11.9099 126.917 12.5479 127.335 13.4357L135.117 30.7201L134.283 32.801C133.561 34.4101 132.727 34.6876 131.781 34.6876C131.309 34.6876 130.781 34.5766 130.363 34.4101C129.363 34.0495 128.835 34.3269 128.586 35.1037L128.14 36.6574C127.862 37.5452 128.418 37.9337 128.947 38.211C129.752 38.5995 130.837 38.8491 132.005 38.8491C134.783 38.8491 137.09 37.7395 138.841 33.7166L147.542 13.4357C147.931 12.5757 147.376 11.9099 146.43 11.9099Z"
             fill="white" />
           <path
             d="M26.7667 2.9212C25.9885 2.75473 24.9879 2.67151 23.9039 2.67151C22.8199 2.67151 21.8471 2.78249 21.041 2.9212V32.1078C21.8192 31.9413 22.8199 31.8581 23.9039 31.8581C24.9879 31.8581 25.9607 31.969 26.7667 32.1078"
             fill="#FDB72B" />
           <path
             d="M20.7351 5.11272C19.9848 4.89076 19.0119 4.72429 17.9556 4.61333C16.8718 4.53009 15.8989 4.53009 15.0929 4.61333L10.4512 31.192C11.2572 31.1087 12.2578 31.1643 13.314 31.2475C14.398 31.3307 15.3708 31.6636 16.1213 31.8856"
             fill="#F8A489" />
           <path class="kutbay-img"
             d="M39.8015 30.221C39.8571 31.2198 40.4408 31.8579 41.4415 31.8579C41.4415 31.8579 43.6374 31.8579 44.0265 31.8579C44.6658 31.8579 45.0828 31.636 45.3052 31.3864C45.5831 31.0256 45.5831 30.2766 45.5831 30.2766C45.4997 27.5299 45.194 24.9775 43.693 21.9534C41.8584 18.5686 40.1907 16.9039 36.2992 15.2116C40.3018 13.4915 43.1648 8.16467 43.3316 3.5037V2.64363C43.3316 1.47839 42.887 0.84028 41.9974 1.03449L39.1344 1.50613C38.3005 1.6726 37.9392 1.9223 37.9392 2.67137C37.9392 2.67137 37.9392 3.5037 37.8002 4.36375C36.8273 10.0235 33.2416 12.4095 29.9616 12.9644C29.4057 13.0476 29.0444 13.0754 29.0444 13.0754C28.2662 13.1308 27.877 13.4638 27.877 14.185V16.4878C27.877 17.2091 28.3217 17.5421 29.0722 17.5421C34.7982 17.5421 39.8571 23.0909 39.8571 28.7506"
             fill="white" />
           <path
             d="M14.2866 6.75013C13.5639 6.50043 12.6467 6.13976 11.5625 5.9733C10.4785 5.80684 9.47788 5.72361 8.67172 5.75135L1 30.5544C1.80609 30.5544 2.80676 30.6099 3.86301 30.7764C4.94707 30.9428 5.91993 31.3867 6.55924 31.7751"
             fill="#25C1F2" />
         </svg>
       </div>
       <div class="slideUse">
         <img width="178" height="29" src="./assets/log5.svg" alt="ExpressText" class="img-fluid fab " />
       </div>
       <div class="slideUse">
         <img width="178" height="39" src="./assets/log6.svg" alt="Lahebo" class="img-fluid fab" />
       </div>
       <div class="slideUse">
         <img width="53" height="40" src="./assets/log7.svg" alt="TAMIMI" class="img-fluid fab " />
       </div>
       <div class="slideUse">
         <img src="./assets/log1.svg" alt="QuickSteps" class="img-fluid fab" />
       </div>
       <div class="slideUse">
         <img width="172" height="40" src="./assets/log2.svg" alt="techHouse" class="img-fluid fab " />
       </div>

     </div>
   </div>
 </div>

</section> -->

  <!-- --------------HOW  WE WORKS SECTION-------------------- -->
  <section class="become-our-partner-sec" id="animation-sec">
    <div class="container">
      <div class="partner-title">
        <span class="mb-0">BECOME OUR PARTNER</span>
        <h2 class="mb-0">Steps To Become Our Partner</h2>
      </div>
      <div class="our-partner-cards" style="position: relative;">
        <div
          style="display: flex;justify-content: space-between;gap: 0px;max-width: 983px;flex-wrap: wrap; "
          class="first-stplines">
          <div class="our-part-card cd1">
            <h3>Explore</h3>
            <p class="mb-4">Thoroughly explore Sync4Tech, delving into our company, mission, and the suite of services/products offered.
            </p>
            <div class="o-part-items-bx">1</div>
          </div>
          <div class="our-part-card cd2">
            <h3>Meeting</h3>
            <p class="mb-4"> Schedule a meeting to delve deeper into shared interests, objectives, and evaluate compatibility.</p>
            <div class="o-part-items-bx">3</div>
          </div>
          <div class="our-part-card cd3">
            <h3>Decision</h3>
            <p> Both parties review the proposed contract to address queries and concerns, finalizing the partnership decision. </p>
            <div class="o-part-items-bx">5</div>
            
          </div>
          <!-- left: 86px;
          top: 175px;
          transform: rotate(-87deg); -->
        </div>
        <div style="display: flex;justify-content:end;max-width: 940px;width: 100%;" class="second-stplines">
          <div class="our-part-card">
            
            <div class="o-part-items-bx cd4">2</div>
            <h3 style="padding-top: 15px !important;">Contact</h3>
            <p> Reach out to us through our website, email, or direct phone contact to express your interest in collaboration.</p>
          </div>
          <div class="our-part-card">
            <div class="o-part-items-bx cd5">4</div>
            
            <h3 style="padding-top: 15px !important;">Contract Agreement</h3>
            <p> Once qualified, a comprehensive partnership agreement is drafted, ensuring transparency and clear expectations.</p>
          </div>
          <div class="our-part-card">
            <div class="o-part-items-bx cd6">6</div>
            

            <h3 style="padding-top: 15px !important;">Evaluation</h3>
            <p>Continuous assessment of the partnership's progress ensures productivity and alignment on goals.</p>
          </div>
        </div>
        <div style="position: absolute; content: '';top: 196px;left: 150px;">
          <!-- <svg class="hover-line" width="839" height="212" viewBox="0 0 839 212" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M698 0.963135L699.462 1.29987C703.348 2.19506 707.344 3.49432 711.561 5.19413C715.84 6.91925 719.001 9.16752 721.232 11.8876L722.184 13.0474L719.864 14.9499L718.913 13.7902C717.063 11.5348 714.352 9.55383 710.439 7.97657C706.339 6.32388 702.494 5.07698 698.789 4.2233L697.327 3.88656L698 0.963135ZM676.186 3.92108L674.724 4.25846C671.014 5.11497 667.161 6.35437 663.052 7.98017C659.177 9.51303 656.001 11.4142 653.365 13.6113L652.213 14.5718L650.292 12.2676L651.444 11.307C654.343 8.89024 657.8 6.83149 661.948 5.19053C666.168 3.52124 670.165 2.232 674.049 1.33532L675.511 0.997949L676.186 3.92108ZM361.735 21.7471L363.227 21.9018C367.587 22.3538 371.829 23.2158 375.552 24.6908C379.658 26.3173 383.026 28.4078 385.807 30.8846L386.927 31.8822L384.932 34.1226L383.812 33.125C381.311 30.8977 378.25 28.9862 374.447 27.4799C371.059 26.1377 367.107 25.3201 362.917 24.8858L361.425 24.7311L361.735 21.7471ZM340.266 25.3657L338.778 25.5531C335.259 25.9963 332.264 26.4967 330.152 26.8858C329.097 27.0803 328.262 27.2469 327.693 27.3644C327.409 27.4232 327.191 27.4697 327.046 27.5012C326.973 27.517 326.918 27.5291 326.882 27.5371L326.842 27.5459L326.832 27.548L326.831 27.5485M340.266 25.3657L339.892 22.3892L340.266 25.3657ZM339.892 22.3892L338.403 22.5766L339.892 22.3892ZM338.403 22.5766C334.817 23.0282 331.766 23.5381 329.609 23.9355L338.403 22.5766ZM329.609 23.9355C328.53 24.1342 327.674 24.305 327.086 24.4265L329.609 23.9355ZM327.086 24.4265C326.792 24.4873 326.565 24.5357 326.41 24.5692L327.086 24.4265ZM326.41 24.5692C326.366 24.579 326.327 24.5874 326.294 24.5946L326.41 24.5692ZM326.294 24.5946L326.234 24.6079L326.294 24.5946ZM326.234 24.6079L326.187 24.6182L326.234 24.6079ZM326.187 24.6182L326.175 24.621L326.187 24.6182ZM326.175 24.621L326.171 24.6218L326.175 24.621ZM326.171 24.6218L326.17 24.6221L326.171 24.6218ZM642.292 31.1967L641.861 32.6333C640.216 38.109 639.144 44.0305 638.021 50.238C637.713 51.9427 637.4 53.669 637.071 55.4135L636.793 56.8875L633.845 56.3312L634.123 54.8572C634.442 53.1702 634.747 51.482 635.051 49.8002C636.178 43.5673 637.289 37.4244 638.987 31.7701L639.419 30.3336L642.292 31.1967ZM304.147 34.8593L302.763 35.4381C297.771 37.5259 292.563 40.0351 287.706 42.9794L286.423 43.757L284.868 41.1915L286.151 40.414C291.168 37.3728 296.516 34.7989 301.605 32.6704L302.989 32.0916L304.147 34.8593ZM725.017 32.9256L724.761 34.4036C724.158 37.8801 723.297 41.4902 722.397 45.1299C722.249 45.7268 722.101 46.3245 721.952 46.9226C721.19 49.9874 720.425 53.0671 719.769 56.1509L719.457 57.6181L716.522 56.9939L716.834 55.5267C717.502 52.3898 718.281 49.2536 719.043 46.1904C719.191 45.594 719.339 45.0003 719.485 44.4099C720.384 40.7719 721.222 37.253 721.805 33.8914L722.061 32.4134L725.017 32.9256ZM1.01507 35.7065L2.44692 36.1535L1.99993 37.5853C2.44692 36.1535 2.44692 36.1535 2.44692 36.1535L2.44832 36.1539L2.4513 36.1549L2.46196 36.1582L2.50193 36.1708C2.5368 36.1818 2.58806 36.1981 2.6552 36.2196C2.78949 36.2625 2.98735 36.3263 3.24486 36.4108C3.75986 36.5798 4.51355 36.8314 5.47457 37.164C7.39644 37.8292 10.1485 38.8185 13.4798 40.1185L14.8771 40.6639L13.7864 43.4586L12.3891 42.9133C9.0985 41.6291 6.38331 40.6531 4.4934 39.999C3.54853 39.672 2.81019 39.4256 2.30964 39.2613C2.05938 39.1792 1.86858 39.1177 1.74115 39.0769C1.67744 39.0565 1.62957 39.0414 1.59804 39.0314L1.56306 39.0204L1.55487 39.0178L1.55312 39.0173M1.55312 39.0173L0.121094 38.5702L1.01507 35.7065M33.5561 49.017L34.8919 49.6993C41.5621 53.1067 48.5474 57.1293 55.0701 61.7285L56.2961 62.5928L54.5673 65.0447L53.3414 64.1803C46.9636 59.6834 40.1071 55.7322 33.5271 52.3709L32.1913 51.6886L33.5561 49.017ZM396.791 50.0491L397.171 51.5002C398.377 56.1087 399.241 61.0634 400.11 66.0448C400.585 68.7666 401.06 71.4964 401.594 74.182L401.887 75.6532L398.945 76.2382L398.652 74.767C398.086 71.9217 397.598 69.1189 397.12 66.3685C396.269 61.4827 395.447 56.7619 394.269 52.2599L393.889 50.8088L396.791 50.0491ZM275.668 52.1511L274.647 53.2503C272.725 55.3211 271.087 57.508 269.812 59.8116C268.495 62.1922 267.571 64.5116 266.951 66.7877L266.557 68.235L263.663 67.4471L264.057 65.9998C264.74 63.4877 265.756 60.9456 267.187 58.3591C268.599 55.8085 270.389 53.427 272.449 51.209L273.47 50.1098L275.668 52.1511ZM631.39 76.8973L630.819 78.284C629.324 81.9077 627.51 85.4689 625.254 88.908C623.474 91.6226 621.709 94.1504 619.955 96.5321L619.065 97.7398L616.649 95.9607L617.539 94.7529C619.262 92.4141 620.996 89.9309 622.746 87.2627C624.884 84.002 626.613 80.6124 628.045 77.1404L628.617 75.7536L631.39 76.8973ZM718.349 76.1367L718.652 77.6059C719.351 80.9978 720.638 84.2237 722.731 87.2281C725.156 90.7099 727.787 93.5462 730.585 95.8841L731.737 96.8458L729.813 99.148L728.662 98.1863C725.653 95.6724 722.842 92.6369 720.269 88.9426C717.921 85.5715 716.486 81.9599 715.714 78.2112L715.411 76.7421L718.349 76.1367ZM71.7274 76.3186L72.6893 77.4695C75.3126 80.6081 77.575 83.9228 79.3384 87.4082C81.1411 90.9713 82.2666 94.5122 82.8755 98.0289L83.1314 99.5069L80.1754 100.019L79.9195 98.5407C79.3601 95.3097 78.3266 92.0536 76.6615 88.7625C75.0179 85.5139 72.8905 82.3882 70.3874 79.3934L69.4255 78.2425L71.7274 76.3186ZM266.218 80.3795L266.44 81.863C266.929 85.1234 267.663 88.3287 268.423 91.6412C268.843 93.4739 269.27 95.3394 269.668 97.2652L269.971 98.7342L267.033 99.3408L266.73 97.8717C266.361 96.0872 265.949 94.2862 265.536 92.4797C264.759 89.0842 263.977 85.6692 263.473 82.3074L263.251 80.824L266.218 80.3795ZM407.91 94.2161L408.627 95.5338C410.357 98.7142 412.469 101.744 415.097 104.562C417.169 106.785 419.285 108.727 421.433 110.453L422.603 111.393L420.723 113.731L419.554 112.792C417.298 110.979 415.077 108.94 412.903 106.608C410.087 103.589 407.831 100.349 405.991 96.9673L405.275 95.6496L407.91 94.2161ZM750.248 105.424L751.705 105.779C756.581 106.967 761.583 107.772 766.726 108.599C769.592 109.061 772.501 109.529 775.458 110.074L776.933 110.346L776.389 113.297L774.913 113.024C772.108 112.507 769.267 112.049 766.429 111.592C761.197 110.748 755.973 109.907 750.995 108.694L749.537 108.339L750.248 105.424ZM609.212 109.746L608.211 110.862C605.58 113.796 602.934 116.618 600.282 119.448C598.754 121.077 597.224 122.71 595.694 124.366L594.676 125.468L592.473 123.433L593.49 122.331C595.053 120.639 596.597 118.992 598.129 117.357C600.763 114.548 603.364 111.773 605.978 108.859L606.979 107.742L609.212 109.746ZM271.276 111.859L271.191 113.356C271.044 115.98 270.659 118.676 269.954 121.454C269.12 124.74 268.229 127.958 267.275 131.105L266.84 132.541L263.969 131.67L264.404 130.235C265.344 127.135 266.223 123.961 267.046 120.717C267.7 118.136 268.059 115.632 268.196 113.188L268.281 111.69L271.276 111.859ZM797.591 116.615L798.935 117.28C802.514 119.049 806.026 121.215 809.431 123.908C811.597 125.622 813.742 127.494 815.858 129.491L816.949 130.521L814.889 132.702L813.798 131.673C811.738 129.727 809.659 127.914 807.569 126.261C804.34 123.707 801.009 121.652 797.606 119.969L796.261 119.304L797.591 116.615ZM81.7172 118.54L81.3594 119.997C80.5458 123.309 79.5774 126.601 78.6239 129.842C78.5594 130.062 78.4949 130.281 78.4306 130.5C77.4116 133.966 76.4216 137.377 75.6385 140.769L75.3011 142.23L72.378 141.556L72.7154 140.094C73.5211 136.604 74.5351 133.114 75.5524 129.654C75.6153 129.439 75.6783 129.225 75.7412 129.011C76.6991 125.755 77.6493 122.524 78.446 119.281L78.8038 117.825L81.7172 118.54ZM434.871 118.892L436.219 119.55C438.579 120.703 440.947 121.779 443.331 122.862C443.633 123 443.936 123.137 444.239 123.275C446.921 124.496 449.619 125.736 452.292 127.096L453.629 127.776L452.269 130.45L450.932 129.77C448.323 128.442 445.678 127.226 442.997 126.006C442.695 125.869 442.393 125.731 442.09 125.594C439.711 124.513 437.303 123.419 434.902 122.246L433.554 121.588L434.871 118.892ZM584.666 137.01L583.732 138.184C581.919 140.462 580.082 142.874 578.217 145.462C576.38 148.01 574.81 150.642 573.432 153.323L572.746 154.658L570.078 153.286L570.764 151.952C572.201 149.156 573.847 146.394 575.783 143.708C577.678 141.08 579.543 138.629 581.385 136.315L582.319 135.142L584.666 137.01ZM466.224 136.083L467.345 137.079C469.506 138.999 471.614 141.16 473.656 143.629C475.683 146.08 477.277 148.678 478.549 151.366L479.191 152.721L476.48 154.005L475.838 152.649C474.662 150.165 473.197 147.782 471.344 145.541C469.401 143.192 467.4 141.142 465.352 139.322L464.231 138.325L466.224 136.083ZM826.464 140.732L827.428 141.881C831.021 146.166 834.482 150.685 837.761 155.255L838.635 156.474L836.198 158.223L835.324 157.004C832.08 152.484 828.666 148.026 825.129 143.809L824.166 142.66L826.464 140.732ZM260.992 148.561L260.389 149.934C257.623 156.24 254.484 162.161 250.911 167.659L250.093 168.917L247.578 167.282L248.395 166.024C251.87 160.679 254.933 154.903 257.642 148.729L258.245 147.355L260.992 148.561ZM74.6981 159.943L75.0761 161.394C75.8864 164.506 77.2236 167.628 79.2589 170.77C80.9746 173.418 82.7478 175.828 84.582 178.029L85.5424 179.181L83.2379 181.102L82.2775 179.95C80.3622 177.652 78.5183 175.144 76.741 172.401C74.5338 168.994 73.0652 165.577 72.1729 162.15L71.7949 160.699L74.6981 159.943ZM483.089 167.215L483.311 168.699C483.634 170.848 483.902 172.955 484.164 175.018C484.65 178.837 485.117 182.506 485.874 186.015L486.19 187.481L483.257 188.114L482.941 186.647C482.159 183.022 481.662 179.12 481.163 175.21C480.904 173.177 480.644 171.143 480.345 169.143L480.122 167.66L483.089 167.215ZM567.035 169.198L566.564 170.622C566.321 171.357 566.079 172.093 565.838 172.827C564.053 178.265 562.293 183.624 559.962 188.484L559.313 189.837L556.608 188.539L557.257 187.187C559.497 182.515 561.192 177.356 562.987 171.893C563.228 171.161 563.47 170.422 563.716 169.679L564.187 168.255L567.035 169.198ZM239.351 182.314L238.294 183.378C233.599 188.104 228.376 192.327 222.56 196.006L221.293 196.808L219.689 194.273L220.956 193.471C226.579 189.914 231.627 185.832 236.166 181.264L237.223 180.2L239.351 182.314ZM96.5978 189.158L97.8468 189.989C102.782 193.271 108.128 195.806 113.957 197.931L115.366 198.445L114.338 201.264L112.929 200.75C106.933 198.563 101.363 195.929 96.1858 192.487L94.9367 191.657L96.5978 189.158ZM492.088 199.715L493.175 200.749C494.992 202.477 497.25 203.985 500.092 205.207C503.347 206.606 506.397 207.612 509.338 208.272L510.802 208.6L510.146 211.527L508.682 211.199C505.535 210.494 502.308 209.425 498.908 207.963C495.763 206.612 493.201 204.914 491.107 202.922L490.02 201.889L492.088 199.715ZM548.986 202.713L547.755 203.57C545.238 205.324 542.349 206.814 539.001 207.999C535.585 209.209 532.355 210.194 529.224 210.91L527.762 211.245L527.093 208.32L528.555 207.986C531.543 207.302 534.659 206.354 537.999 205.171C541.11 204.07 543.757 202.699 546.041 201.109L547.272 200.251L548.986 202.713ZM205.894 204.397L204.49 204.923C201.419 206.073 198.225 207.11 194.9 208.031C190.02 209.383 185.533 210.365 181.246 211.012L179.763 211.236L179.315 208.269L180.799 208.046C184.947 207.419 189.315 206.465 194.099 205.14C197.342 204.241 200.453 203.231 203.437 202.114L204.842 201.587L205.894 204.397ZM129.954 202.685L131.411 203.041C134.288 203.744 137.259 204.429 140.33 205.122C145.176 206.216 149.591 207.104 153.774 207.752L155.256 207.981L154.797 210.946L153.315 210.716C149.041 210.055 144.554 209.151 139.67 208.049C136.591 207.353 133.601 206.664 130.699 205.955L129.242 205.599L129.954 202.685Z"
              fill="#2B5F68" />
          </svg> -->
          <svg  class="hover-line" width="827" height="320" viewBox="0 0 827 148" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.3" d="M2.96445 7.99097C5.98839 25.9041 18.5339 52.5375 67.3851 69.1201C113.232 84.683 128.399 119.085 127.781 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
            <circle opacity="0.3" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 5.50781 0)" fill="#FB7A00"/>
            <circle opacity="0.3" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 130.553 141.719)" fill="#FB7A00"/>
            <circle cx="8.32111" cy="8.32111" r="7.96477" transform="matrix(-1 0 0 1 68.7988 57.1907)" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
            <circle cx="3.86234" cy="3.86234" r="3.86234" transform="matrix(-1 0 0 1 64.3398 61.6497)" fill="#FB7A00"/>
            <path opacity="0.3" d="M350.964 7.99097C353.988 25.9041 366.534 52.5375 415.385 69.1201C461.232 84.683 476.399 119.085 475.781 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
            <circle opacity="0.3" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 353.508 0)" fill="#FB7A00"/>
            <circle opacity="0.3" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 478.553 141.719)" fill="#FB7A00"/>
            <circle cx="8.32111" cy="8.32111" r="7.96477" transform="matrix(-1 0 0 1 416.799 57.1907)" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
            <circle cx="3.86234" cy="3.86234" r="3.86234" transform="matrix(-1 0 0 1 412.34 61.6497)" fill="#FB7A00"/>
            <path opacity="0.3" d="M698.964 7.99097C701.988 25.9041 714.534 52.5375 763.385 69.1201C809.232 84.683 824.399 119.085 823.781 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
            <circle opacity="0.3" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 701.508 0)" fill="#FB7A00"/>
            <circle opacity="0.3" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 826.553 141.719)" fill="#FB7A00"/>
            <circle cx="8.32111" cy="8.32111" r="7.96477" transform="matrix(-1 0 0 1 764.799 57.1907)" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
            <circle cx="3.86234" cy="3.86234" r="3.86234" transform="matrix(-1 0 0 1 760.34 61.6497)" fill="#FB7A00"/>
            <path opacity="0.3" d="M308.588 7.99097C305.564 25.9041 293.019 52.5375 244.168 69.1201C198.32 84.683 183.154 119.085 183.772 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
            <circle opacity="0.3" cx="308.799" cy="2.75368" r="2.75368" fill="#FB7A00"/>
            <circle opacity="0.3" cx="183.754" cy="144.473" r="2.75368" fill="#FB7A00"/>
            <circle class="remove-dot" cx="251.075" cy="65.5118" r="7.96477" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
            <circle cx="251.075" cy="65.512" r="3.86234" fill="#FB7A00"/>
            <path opacity="0.3" d="M656.588 7.99097C653.564 25.9041 641.019 52.5375 592.168 69.1201C546.32 84.683 531.154 119.085 531.772 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
            <circle opacity="0.3" cx="656.799" cy="2.75368" r="2.75368" fill="#FB7A00"/>
            <circle opacity="0.3" cx="531.754" cy="144.473" r="2.75368" fill="#FB7A00"/>
            <circle cx="599.075" cy="65.5118" r="7.96477" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
            <circle cx="599.075" cy="65.512" r="3.86234" fill="#FB7A00"/>
            </svg>
          <div style="position: absolute; content: '';top: 4px;left: 2px;">
            <!-- <svg class="hover-white" width="839" height="211" viewBox="0 0 839 211" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M697.879 0L699.341 0.33674C703.227 1.23193 707.223 2.53119 711.44 4.23099C715.719 5.95612 718.88 8.20439 721.111 10.9245L722.062 12.0843L719.743 13.9868L718.792 12.827C716.942 10.5717 714.231 8.59069 710.318 7.01343C706.218 5.36074 702.373 4.11385 698.668 3.26017L697.206 2.92343L697.879 0ZM676.065 2.95795L674.603 3.29532C670.893 4.15183 667.04 5.39124 662.931 7.01703C659.056 8.54989 655.88 10.451 653.244 12.6482L652.092 13.6087L650.171 11.3044L651.323 10.3439C654.222 7.92711 657.679 5.86836 661.827 4.22739C666.047 2.5581 670.044 1.26886 673.928 0.372184L675.39 0.0348141L676.065 2.95795ZM361.613 20.784L363.105 20.9386C367.466 21.3907 371.708 22.2526 375.431 23.7277C379.537 25.3542 382.905 27.4446 385.686 29.9215L386.806 30.919L384.811 33.1594L383.691 32.1619C381.19 29.9346 378.129 28.0231 374.326 26.5168C370.938 25.1746 366.986 24.357 362.796 23.9227L361.304 23.768L361.613 20.784ZM340.145 24.4026L338.657 24.59C335.137 25.0332 332.143 25.5335 330.031 25.9227C328.976 26.1172 328.141 26.2838 327.572 26.4013C327.288 26.4601 327.07 26.5065 326.924 26.5381C326.852 26.5539 326.797 26.5659 326.761 26.5739L326.721 26.5828L326.711 26.5849L326.709 26.5853M340.145 24.4026L339.771 21.4261ZM339.771 21.4261L338.282 21.6135ZM338.282 21.6135C334.696 22.0651 331.644 22.575 329.488 22.9724ZM329.488 22.9724C328.409 23.1711 327.553 23.3419 326.965 23.4634ZM326.965 23.4634C326.671 23.5241 326.444 23.5726 326.289 23.6061ZM326.289 23.6061C326.244 23.6158 326.206 23.6243 326.173 23.6314ZM326.173 23.6314L326.112 23.6448ZM326.112 23.6448L326.066 23.6551ZM326.066 23.6551L326.054 23.6579ZM326.054 23.6579L326.05 23.6587ZM326.05 23.6587L326.049 23.6589ZM642.171 30.2336L641.74 31.6702C640.094 37.1458 639.023 43.0674 637.9 49.2749C637.591 50.9796 637.279 52.7058 636.95 54.4504L636.672 55.9243L633.724 55.3681L634.002 53.8941C634.32 52.2071 634.626 50.5188 634.93 48.8371C636.057 42.6042 637.168 36.4612 638.866 30.807L639.298 29.3704L642.171 30.2336ZM304.026 33.8962L302.642 34.475C297.65 36.5628 292.442 39.0719 287.585 42.0163L286.302 42.7939L284.747 40.2284L286.03 39.4508C291.047 36.4097 296.395 33.8358 301.484 31.7073L302.868 31.1285L304.026 33.8962ZM724.896 31.9625L724.64 33.4404C724.037 36.917 723.176 40.5271 722.276 44.1668C722.128 44.7637 721.98 45.3613 721.831 45.9595C721.069 49.0242 720.304 52.1039 719.648 55.1878L719.335 56.6549L716.401 56.0307L716.713 54.5636C717.38 51.4267 718.16 48.2904 718.922 45.2273C719.07 44.6308 719.218 44.0372 719.364 43.4468C720.263 39.8087 721.101 36.2899 721.684 32.9283L721.94 31.4503L724.896 31.9625ZM0.893977 34.7434L2.32583 35.1904L1.87884 36.6222C2.32583 35.1904 2.32583 35.1904 2.32583 35.1904L2.32723 35.1908L2.33021 35.1917L2.34086 35.1951L2.38083 35.2077C2.41571 35.2187 2.46696 35.2349 2.53411 35.2564C2.6684 35.2994 2.86625 35.3632 3.12376 35.4477C3.63877 35.6167 4.39245 35.8683 5.35347 36.2009C7.27535 36.866 10.0274 37.8553 13.3587 39.1554L14.756 39.7007L13.6653 42.4955L12.268 41.9501C8.9774 40.6659 6.26221 39.69 4.37231 39.0359C3.42744 38.7089 2.6891 38.4624 2.18855 38.2982C1.93828 38.2161 1.74748 38.1546 1.62006 38.1138C1.55635 38.0934 1.50848 38.0782 1.47695 38.0683L1.44197 38.0572L1.43378 38.0547L1.43203 38.0541M1.43203 38.0541L0 37.6071L0.893977 34.7434M33.435 48.0538L34.7708 48.7362C41.441 52.1436 48.4263 56.1662 54.9491 60.7653L56.175 61.6297L54.4462 64.0815L53.2203 63.2171C46.8426 58.7202 39.986 54.7691 33.4061 51.4078L32.0703 50.7254L33.435 48.0538ZM396.67 49.0859L397.05 50.537C398.256 55.1455 399.12 60.1002 399.989 65.0817C400.463 67.8035 400.939 70.5332 401.473 73.2188L401.766 74.69L398.823 75.2751L398.531 73.8039C397.965 70.9585 397.477 68.1558 396.999 65.4053C396.148 60.5196 395.326 55.7988 394.148 51.2968L393.768 49.8457L396.67 49.0859ZM275.547 51.188L274.526 52.2872C272.603 54.358 270.966 56.5449 269.691 58.8484C268.374 61.2291 267.45 63.5485 266.83 65.8245L266.436 67.2719L263.542 66.484L263.935 65.0366C264.619 62.5246 265.635 59.9824 267.066 57.396C268.478 54.8454 270.268 52.4638 272.328 50.2459L273.349 49.1467L275.547 51.188ZM631.269 75.9341L630.698 77.3209C629.203 80.9446 627.389 84.5057 625.133 87.9449C623.353 90.6595 621.588 93.1873 619.833 95.569L618.944 96.7767L616.528 94.9975L617.418 93.7898C619.141 91.4509 620.875 88.9677 622.625 86.2995C624.763 83.0389 626.492 79.6493 627.924 76.1772L628.496 74.7905L631.269 75.9341ZM718.228 75.1736L718.531 76.6427C719.23 80.0347 720.517 83.2605 722.61 86.265C725.035 89.7468 727.666 92.5831 730.464 94.9209L731.615 95.8826L729.692 98.1849L728.541 97.2232C725.532 94.7093 722.721 91.6738 720.148 87.9795C717.8 84.6084 716.365 80.9968 715.593 77.2481L715.29 75.779L718.228 75.1736ZM71.6063 75.3555L72.5682 76.5064C75.1915 79.645 77.4539 82.9597 79.2173 86.445C81.02 90.0082 82.1455 93.5491 82.7544 97.0658L83.0103 98.5438L80.0543 99.0556L79.7984 97.5776C79.239 94.3466 78.2055 91.0905 76.5404 87.7994C74.8968 84.5508 72.7694 81.4251 70.2663 78.4303L69.3044 77.2794L71.6063 75.3555ZM266.097 79.4164L266.319 80.8999C266.807 84.1603 267.542 87.3655 268.301 90.6781C268.722 92.5107 269.149 94.3762 269.547 96.3021L269.85 97.7711L266.912 98.3776L266.609 96.9086C266.24 95.1241 265.828 93.3231 265.415 91.5166C264.637 88.1211 263.856 84.7061 263.352 81.3443L263.13 79.8609L266.097 79.4164ZM407.789 93.253L408.506 94.5706C410.236 97.7511 412.348 100.781 414.976 103.599C417.048 105.822 419.164 107.763 421.312 109.49L422.482 110.43L420.602 112.768L419.433 111.828C417.177 110.015 414.955 107.977 412.782 105.645C409.966 102.625 407.71 99.3858 405.87 96.0042L405.153 94.6865L407.789 93.253ZM750.126 104.461L751.584 104.816C756.46 106.004 761.462 106.809 766.605 107.636C769.471 108.097 772.38 108.566 775.337 109.111L776.812 109.383L776.267 112.333L774.792 112.061C771.987 111.544 769.146 111.086 766.308 110.629C761.076 109.785 755.852 108.944 750.874 107.731L749.416 107.376L750.126 104.461ZM609.091 108.782L608.09 109.899C605.459 112.833 602.813 115.655 600.161 118.484C598.633 120.114 597.103 121.746 595.573 123.403L594.555 124.505L592.352 122.469L593.369 121.368C594.932 119.675 596.476 118.029 598.008 116.394C600.641 113.585 603.243 110.81 605.856 107.896L606.858 106.779L609.091 108.782ZM271.155 110.895L271.07 112.393C270.923 115.017 270.538 117.713 269.833 120.491C268.999 123.777 268.108 126.995 267.154 130.142L266.719 131.578L263.848 130.707L264.283 129.272C265.223 126.172 266.102 122.998 266.925 119.753C267.579 117.173 267.938 114.669 268.075 112.225L268.159 110.727L271.155 110.895ZM797.47 115.652L798.814 116.316C802.393 118.086 805.905 120.252 809.309 122.945C811.476 124.659 813.621 126.53 815.737 128.528L816.828 129.558L814.768 131.739L813.677 130.709C811.617 128.764 809.538 126.951 807.448 125.298C804.219 122.744 800.888 120.688 797.485 119.006L796.14 118.341L797.47 115.652ZM81.5961 117.577L81.2383 119.034C80.4247 122.346 79.4564 125.638 78.5028 128.879C78.4383 129.098 78.3738 129.318 78.3095 129.536C77.2905 133.003 76.3005 136.414 75.5174 139.806L75.18 141.267L72.2569 140.592L72.5943 139.131C73.4 135.641 74.4141 132.151 75.4313 128.69C75.4942 128.476 75.5572 128.262 75.6202 128.048C76.578 124.792 77.5282 121.561 78.3249 118.318L78.6827 116.861L81.5961 117.577ZM434.75 117.929L436.097 118.587C438.458 119.74 440.826 120.816 443.21 121.899C443.512 122.037 443.815 122.174 444.118 122.312C446.8 123.532 449.498 124.773 452.171 126.133L453.508 126.813L452.148 129.487L450.811 128.806C448.202 127.479 445.557 126.263 442.876 125.043C442.574 124.906 442.272 124.768 441.969 124.631C439.59 123.55 437.182 122.455 434.781 121.283L433.433 120.625L434.75 117.929ZM584.545 136.047L583.611 137.22C581.798 139.499 579.961 141.911 578.096 144.499C576.259 147.047 574.689 149.679 573.311 152.36L572.625 153.694L569.957 152.323L570.643 150.989C572.08 148.193 573.726 145.431 575.662 142.745C577.557 140.117 579.422 137.666 581.263 135.352L582.198 134.179L584.545 136.047ZM466.103 135.12L467.224 136.116C469.385 138.036 471.492 140.197 473.535 142.666C475.562 145.117 477.156 147.715 478.428 150.403L479.07 151.758L476.359 153.042L475.717 151.686C474.54 149.201 473.076 146.819 471.223 144.578C469.28 142.229 467.279 140.178 465.231 138.359L464.11 137.362L466.103 135.12ZM826.343 139.769L827.307 140.918C830.9 145.203 834.36 149.722 837.64 154.292L838.514 155.511L836.077 157.26L835.202 156.041C831.959 151.52 828.545 147.063 825.008 142.846L824.045 141.697L826.343 139.769ZM260.871 147.598L260.268 148.971C257.502 155.277 254.363 161.198 250.79 166.696L249.972 167.954L247.457 166.319L248.274 165.061C251.749 159.716 254.812 153.94 257.521 147.766L258.124 146.392L260.871 147.598ZM74.577 158.98L74.955 160.431C75.7653 163.543 77.1025 166.665 79.1378 169.807C80.8535 172.455 82.6267 174.865 84.4609 177.066L85.4213 178.218L83.1168 180.139L82.1564 178.987C80.2411 176.689 78.3972 174.181 76.6199 171.438C74.4127 168.031 72.9441 164.614 72.0518 161.187L71.6738 159.736L74.577 158.98ZM482.968 166.252L483.19 167.735C483.513 169.885 483.781 171.992 484.043 174.055C484.529 177.874 484.996 181.543 485.753 185.052L486.069 186.518L483.136 187.15L482.82 185.684C482.038 182.059 481.541 178.157 481.042 174.247C480.783 172.214 480.523 170.179 480.224 168.18L480.001 166.697L482.968 166.252ZM566.914 168.234L566.443 169.658C566.199 170.394 565.958 171.13 565.717 171.864C563.932 177.301 562.172 182.661 559.841 187.521L559.192 188.874L556.487 187.576L557.136 186.224C559.376 181.552 561.071 176.393 562.866 170.93C563.106 170.197 563.349 169.459 563.595 168.716L564.066 167.292L566.914 168.234ZM239.23 181.351L238.173 182.415C233.478 187.141 228.255 191.364 222.439 195.043L221.171 195.845L219.568 193.31L220.835 192.508C226.458 188.95 231.506 184.869 236.045 180.301L237.102 179.237L239.23 181.351ZM96.4767 188.195L97.7257 189.026C102.661 192.307 108.007 194.843 113.836 196.968L115.245 197.482L114.217 200.301L112.808 199.787C106.812 197.6 101.242 194.966 96.0647 191.524L94.8156 190.693L96.4767 188.195ZM491.967 198.752L493.053 199.785C494.871 201.514 497.128 203.022 499.971 204.244C503.226 205.643 506.276 206.649 509.217 207.308L510.681 207.637L510.025 210.564L508.561 210.236C505.414 209.53 502.187 208.462 498.787 207C495.642 205.649 493.08 203.951 490.986 201.959L489.899 200.925L491.967 198.752ZM548.865 201.75L547.634 202.607C545.117 204.36 542.227 205.851 538.88 207.036C535.464 208.246 532.234 209.231 529.103 209.947L527.641 210.281L526.972 207.357L528.434 207.022C531.422 206.339 534.538 205.391 537.878 204.208C540.989 203.107 543.636 201.736 545.92 200.145L547.151 199.288L548.865 201.75ZM205.773 203.434L204.369 203.96C201.298 205.11 198.104 206.147 194.779 207.068C189.899 208.42 185.412 209.402 181.125 210.049L179.642 210.273L179.194 207.306L180.677 207.082C184.826 206.456 189.194 205.502 193.978 204.177C197.221 203.278 200.332 202.268 203.316 201.15L204.721 200.624L205.773 203.434ZM129.833 201.722L131.29 202.078C134.167 202.781 137.138 203.466 140.209 204.159C145.055 205.253 149.47 206.141 153.653 206.788L155.135 207.018L154.676 209.983L153.194 209.753C148.92 209.092 144.432 208.188 139.548 207.085C136.47 206.39 133.48 205.701 130.578 204.992L129.12 204.636L129.833 201.722Z"
                fill="white" />
            </svg> -->
            <svg class="hover-white" width="827" height="314" viewBox="0 0 827 148" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.96445 7.99121C5.98839 25.9044 18.5339 52.5377 67.3851 69.1203C113.232 84.6832 128.399 119.085 127.781 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
              <circle class="invisible" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 5.50781 0)" fill="#FB7A00"/>
              <circle class="invisible" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 130.553 141.719)" fill="#FB7A00"/>
              <circle class="invisible"  cx="8.32111" cy="8.32111" r="7.96477" transform="matrix(-1 0 0 1 68.7988 57.1904)" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
              <circle class="invisible" cx="3.86234" cy="3.86234" r="3.86234" transform="matrix(-1 0 0 1 64.3398 61.6494)" fill="#FB7A00"/>
              <path d="M350.964 7.99121C353.988 25.9044 366.534 52.5377 415.385 69.1203C461.232 84.6832 476.399 119.085 475.781 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
              <circle class="invisible" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 353.508 0)" fill="#FB7A00"/>
              <circle class="invisible" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 478.553 141.719)" fill="#FB7A00"/>
              <circle class="invisible" cx="8.32111" cy="8.32111" r="7.96477" transform="matrix(-1 0 0 1 416.799 57.1904)" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
              <circle class="invisible" cx="3.86234" cy="3.86234" r="3.86234" transform="matrix(-1 0 0 1 412.34 61.6494)" fill="#FB7A00"/>
              <path d="M698.964 7.99121C701.988 25.9044 714.534 52.5377 763.385 69.1203C809.232 84.6832 824.399 119.085 823.781 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
              <circle class="invisible" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 701.508 0)" fill="#FB7A00"/>
              <circle class="invisible" cx="2.75368" cy="2.75368" r="2.75368" transform="matrix(-1 0 0 1 826.553 141.719)" fill="#FB7A00"/>
              <circle class="invisible" cx="8.32111" cy="8.32111" r="7.96477" transform="matrix(-1 0 0 1 764.799 57.1904)" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
              <circle class="invisible" cx="3.86234" cy="3.86234" r="3.86234" transform="matrix(-1 0 0 1 760.34 61.6494)" fill="#FB7A00"/>
              <path d="M308.588 7.99121C305.564 25.9044 293.019 52.5377 244.168 69.1203C198.32 84.6832 183.154 119.085 183.772 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
              <circle class="invisible" cx="308.799" cy="2.75368" r="2.75368" fill="#FB7A00"/>
              <circle class="invisible" cx="183.754" cy="144.472" r="2.75368" fill="#FB7A00"/>
              <circle class="invisible" cx="251.075" cy="65.5115" r="7.96477" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
              <circle class="invisible" cx="251.075" cy="65.5118" r="3.86234" fill="#FB7A00"/>
              <path d="M656.588 7.99121C653.564 25.9044 641.019 52.5377 592.168 69.1203C546.32 84.6832 531.154 119.085 531.772 139.675" stroke="#FB7A00" stroke-width="0.95499" stroke-miterlimit="1" stroke-linecap="round" stroke-dasharray="7.13 7.13"/>
              <circle class="invisible" cx="656.799" cy="2.75368" r="2.75368" fill="#FB7A00"/>
              <circle class="invisible" cx="531.754" cy="144.472" r="2.75368" fill="#FB7A00"/>
              <circle class="invisible" cx="599.075" cy="65.5115" r="7.96477" fill="#FFE6CE" stroke="#FB7A00" stroke-width="0.712679"/>
              <circle class="invisible" cx="599.075" cy="65.5118" r="3.86234" fill="#FB7A00"/>
              </svg>

          </div>
        </div>
      </div>
    </div>
  </section>
    <!----------- services-section----- -->
  <section class="cardsSection  serviceCardSection">
    <div class="container">
      <!-- ------------SERVICE CONTENT SECTION---------------- -->
      <div class="contentSection">
        <p class="text-orange text-center">
          PARTNER BENEFITS
        </p>
        <h2>Benefits Of Becoming Our Partner</h2>
       
      </div>
      <!-- ------------CARDS SECTION---------------- -->
      <div class="main-services-cards">
       <!-- 1 -->
       <div class="card serviceCard1">
        <div class="business-Process">
          <div class="">
            <img src="{{asset('assets/service1.svg')}}" alt="Research" class="img-fluid" />
          </div>
          <h6>Software Business Analyst</h6>
        </div>
        <div class="services-card">
          <p>
            Tailored software business analysis to ensure your project's success. We identify stakeholder needs, document requirements, and provide comprehensive 
            ...
          </p>
          <a href="{{route('frontend.services.software-business-analyst')}}" class="know-more">Know More</a>
        </div>
      </div>
      <!-- 2 -->
      <div class="card serviceCard1">
        <div class="business-Process">
          <div class="">
            <img src="{{asset('assets/service2.svg')}}" alt="Research" class="img-fluid" />
          </div>
          <h6>Business Process Re-Engineering</h6>
        </div>
        <div class="services-card">
          <p> Revitalize your processes for enhanced efficiency. We analyze current workflows, redesign optimized processes, and provide a detailed implementation...
          </p>
          <a href="{{route('frontend.services.business-process-re-engineering')}}" class="know-more">Know More</a>
        </div>
      </div>
      <!-- 3 -->
      <div class="card serviceCard1">
        <div class="business-Process">
          <div class="">
            <img src="{{asset('assets/service3.svg')}}" alt="Research" class="img-fluid" />
          </div>
          <h6>Project Management</h6>
        </div>
        <div class="services-card">
          <p>Project success, from initiation to closure. We define goals, create detailed plans, execute, monitor, and evaluate, ensuring on-time and within-budget delivery.
            ..</p>
          <a href="{{route('frontend.services.software-project-management')}}" class="know-more">Know More</a>
        </div>
      </div>
      <!-- 4 -->
      <div class="card serviceCard1">
        <div class="business-Process">
          <div class="">
            <img src="{{asset('assets/service4.svg')}}" alt="Research" class="img-fluid" />
          </div>
          <h6>Solution Architecture Design</h6>
        </div>
        <div class="services-card">
          <p>Crafting solutions aligned with business needs. We analyze requirements, design comprehensive architecture, and deliver detailed documentation.
            ..
          </p>
          <a href="{{route('frontend.services.solution-architecture-design')}}" class="know-more">Know More</a>
        </div>
      </div>
      <!-- 5 -->
      <div class="card serviceCard1">
        <div class="business-Process">
          <div class="">
            <img src="{{asset('assets/service5.svg')}}" alt="Research" class="img-fluid" />
          </div>
          <h6>Software Documentation</h6>
        </div>
        <div class="services-card">
          <p>
            Clear, comprehensive documentation for seamless system understanding. We analyze software, identify documentation needs, and deliver user-friendly ...</p>
          <a href="{{route('frontend.services.software-documentation')}}" class="know-more">Know More</a>
        </div>
      </div>
      <!-- 6 -->
      <div class="card serviceCard1">
        <div class="business-Process">
          <div class="">
            <img src="{{asset('assets/service6.svg')}}" alt="Research" class="img-fluid" />
          </div>
          <h6>Data Analysis</h6>
        </div>
        <div class="services-card">
          <p>Uncover insights through meticulous data analysis. We identify sources, collect data, and apply statistical methods to provide meaningful insights.
            ..
          </p>
          <a href="{{route('frontend.services.data-analysis')}}" class="know-more">Know More</a>
        </div>
      </div>
      </div>
      <!-- 6-card-close -->
      <a class="View-More-btn mt-4" href="{{route('frontend.services')}}">View More</a>
    </div>
  </section>
  <!-- ------------STANDARD SECTION---------------- -->
  <section style="background: #e7ebec" class="">
    <div class="container">
      <div style="max-width: 1100px; margin: 0 auto;" class="cardsSection standardSection row justify-content-center align-items-center gap-5">
        <div class="col-md-3 order-md-1 order-2 d-flex flex-column gap-3 flex-grow-1 flex-shrink-0 flex-basis-0">
          <h4 class="text-orange text-md-start text-center">PARTNER CRITERIA</h4>
          <h2 style="max-width: 450px;" class="dark-black text-md-start text-center fw-bold me-lg-5 pe-lg-5">
            Criteria For Becoming Our Partner
          </h2>
          <div class="table-responsive">
            <div class="col-md-3 order-md-1 order-2 d-flex flex-column gap-3 flex-grow-1 flex-shrink-0 flex-basis-0 ">
              <table>
                <tbody><tr class="d-flex gap-2 ">
                  <td>
                    <img src="{{asset('assets/tick.svg')}}" alt="tick" class=" d-md-block">
                  </td>
                  <td class="brown pe-lg-5 text-md-start partner-ticks">
                    <p>Shared Values and Mission</p>
        
                  </td>
                </tr>
                <tr>
        
                </tr>
                <tr class="d-flex gap-2">
                  <td>
                    <img src="{{asset('assets/tick.svg')}}" alt="tick" class=" d-md-block ">
                  </td>
                  <td class="brown pe-lg-5 text-md-start partner-ticks">
                    <p>Due Diligence, Mutual Goals</p>
        
                  </td>
                </tr>
                <tr class="d-flex gap-2">
                  <td>
                    <img src="{{asset('assets/tick.svg')}}" alt="tick" class=" d-md-block">
                  </td>
                  <td class="brown pe-lg-5 text-md-start partner-ticks">
                    <p>Clear Communication</p>
        
                  </td>
                </tr>
                <tr class="d-flex gap-2">
                  <td>
                    <img src="{{asset('assets/tick.svg')}}" alt="tick" class="d-md-block">
                  </td>
                  <td class="brown pe-lg-5 text-md-start partner-ticks">
                    <p>Technology Compatibility</p>
        
                  </td>
                </tr>
                <tr class="d-flex gap-2">
                  <td>
                    <img src="{{asset('assets/tick.svg')}}" alt="tick" class=" d-md-block ">
                  </td>
                  <td class="brown pe-lg-5 text-md-start partner-ticks">
                    <p>Adhere to Legal Compliance</p>
        
                  </td>
                </tr>
                <tr class="d-flex gap-2">
                  <td>
                    <img src="{{asset('assets/tick.svg')}}" alt="tick" class="d-md-block">
                  </td>
                  <td class="brown pe-lg-5 text-md-start partner-ticks">
                    <p>Joint Marketing Actvities</p>
        
                  </td>
                </tr>
              </tbody></table>
        
            </div>
                    <!-- <table>
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
                    </table> -->
                  </div>
    
        </div>
        <div class="col-md-5 d-flex justify-content-end order-md-2 order-1">
          <img src="{{asset('assets/standardPicture.png')}}" alt="standard" class="img-fluid" />
        </div>
      </div>
    </div>
   
  </section>
  
   <!-- --------------TELL US SECTION-------------------- -->

   <div
   class="tellProjectSection flex-column gap-lg-4 gap-3 d-flex justify-content-center align-items-center flex-shrink-0">
   <h4 class="text-orange text-center">STAY CONNECTED</h4>
   <h2 class="text-white text-center fw-bold">Tell Us About Your Project</h2>
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
        <h3 style="display: flex; justify-content: center;margin: 0 auto 16px;color:#FB7A00;">Become Our Partner</h3>
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
                 <h3 style="color: #333" class="fw-bold">
                   Select Date & Time
                 </h3>
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
               <h6 class="text-white text-start">Available Slots</h6>
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
               <h6 class="text-white text-start">Time Zone</h6>
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
                <h2 style="color: #333" class="fw-bold mt-5" style="padding-top: 10px !important">
                  Enter Details
                </h2>
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
                  <img loading="lazy" width="212" height="40" src="{{asset('assets/home-logo.svg')}}" alt="logo" class="img-fluid" />
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
          <a class="footerimg" href="{{route('frontend.home')}}">
            <img loading="lazy" src="{{asset('assets/home-logo.svg')}}" alt="logo" class="img-fluid" />
          </a>
          <p style="text-align: justify;">Sync4Tech, your trusted tech business analyst partner thet empowers your
            business through insightful
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
            <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <p class="f-linkstag" style="line-height: 27px !important"> Software Business Analysis</p>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Project Management</p>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Solution Architecture Design</p>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Technical Search and Development</p>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <p class="f-linkstag" style="line-height: 25px !important">Data Analysis</p>
          </div>
        </div>
        <div class="quick-link">
          <h2>Quick Links</h2>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <a class="f-linkstag" href="{{route('frontend.aboutUs')}}">About Us</a>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <a class="f-linkstag" href="{{route('frontend.blogs')}}">Blog</a>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <a class="f-linkstag" href="{{route('frontend.projects')}}">Projects</a>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <a class="f-linkstag" href="{{route('frontend.partners')}}">Partners</a>
          </div>
          <div class="f-links">
           <img width="24" height="24" loading="lazy" src="{{asset('assets/iconamoon_arrow-up-2.svg')}}" alt="">
            <a class="f-linkstag" data-bs-toggle="modal" data-bs-target="#staticBackdropcon" href="">Contact Us</a>
          </div>
        </div>
        <div class="quick-link">
          <h2>Contact Us</h2>
          <div class="f-main-location"
            style="display: flex !important; align-items: end !important; padding-top: 10px;">
            <a href="tel:+923015892528" style="display: flex;">
              <img loading="lazy" src="{{asset('assets/typcn_phone.svg')}}" alt="typcn_phone" class="img-fluid" />
              <p style="padding-top: 0 !important;">+923015892528</p>
            </a>
          </div>
          <div class="f-main-location"
            style="display: flex !important; align-items: end !important; padding-top: 10px;">
            <a href="mailto:contact@zaptatech.com" style="display: flex;">
              <img loading="lazy" src="{{asset('assets/fluent_mail-20-filled.svg')}}" alt="fluent_mail-20-filled" class="img-fluid" />
              <p style="padding-left: 11px !important; padding-top: 0px !important;">info@sync4tech.co</p>
            </a>
          </div>
          <div class="f-main-location">
            <a href="https://maps.app.goo.gl/MaFm3ZZRrDGkxx3f6" target="_blank" style="display: flex;">
              <img loading="lazy" src="{{asset('assets/mdi_location.svg')}}" alt="mdi_location" class="img-fluid"
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
             <h2 class="dark-black text-center fw-bold"
               style="font-size: 24px !important;font-weight: 700 !important;">Let's Talk</h2>

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
                      style="height: 100px;resize: none !important;border: 1px solid #D0D5DD !important;background-color: #F6F6F6 !important;padding-top: 8px;"
                      placeholder="Enter your message here..." id="message2"></textarea>
                  </div>
             <button type="submit" style="margin-top: 20px;"
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
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <!-- -------------------EXTERNAL JAVASCRIPT FILE------------------ -->
   <script src="{{asset('js/rolyart-calendar.js')}}"></script>
   <script src="{{asset('js/app.js')}}"></script>
   <script src="{{asset('js/index.js')}}"></script>
   <script src="{{asset('js/script.js')}}"></script>
   <script src="{{asset('js/searchresult.js')}}"></script>
    <script>
      var swiper = new Swiper(".fadeSwiper", {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 0,
        effect: "fade",
        autoplay: {
          delay: 1500,
          pauseOnMouseEnter: true,
        },
        loop: true,
        virtualTranslate: true,
        autoplayDisableOnInteraction: true,
      });
    </script>
 <script>
  window.addEventListener('scroll', function () {
    var section = document.getElementById('animation-sec');
    var sectionOffsetTop = section.offsetTop - 200;
    var scrollPosition = window.scrollY || window.pageYOffset;
    var hoverWhite = document.querySelector('.hover-white');

    if (scrollPosition < sectionOffsetTop) {
      hoverWhite.style.clipPath = 'polygon(0 0, 0 100%, 0 100%, 0 0)';
    } else {
      hoverWhite.style.clipPath = 'polygon(0 0, 0 100%, 100% 100%, 100% 0)';
    }
  });
</script>
  <!-- <script>
    window.addEventListener('scroll', function () {
      var section = document.getElementById('animation-sec');
      var sectionOffsetTop = section.offsetTop;
      var sectionHeight = section.offsetHeight;
      var scrollPosition = window.scrollY || window.pageYOffset;
      var arrowImg = document.querySelectorAll('.arrow-img, .arrow-img2');

      arrowImg.forEach(function (img) {
        if (scrollPosition > sectionOffsetTop && scrollPosition < sectionOffsetTop + sectionHeight) {
          img.style.opacity = '1';
        } else {
          img.style.opacity = '0';
        }
      });
    });
  </script> -->
  <!-- <script>
    window.addEventListener('scroll', function () {
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
    <!-- // store the instance variable so we can access it in the console e.g. window.iti.getNumber() -->
    window.iti = iti;
  </script>
  <script>
    // Get the input element
    var phoneNumberInput = document.querySelector("#phnumber");

    // Set the default USA phone number as the placeholder (adjust as needed)
    phoneNumberInput.placeholder = "201-555-0123";
  </script>
  <!-- <script>
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
  </script> -->
</body>

</html>