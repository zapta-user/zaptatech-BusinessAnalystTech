@extends('layouts.default')
@section('title', 'Projects')
@section('section')
    <style>
        body {
            overflow-x: hidden;
        }
    </style>

    @php
        $meta_title = 'Sync4Tech | QME Solutions';
        $meta_description =
            'Discover the future of queue management with Qme Solutions, a revolutionary mobile application';
    @endphp

    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection flex-column gap-1 d-flex align-items-start justify-content-center  flex-shrink-0 ex-paddg"
        style="
        background-image: url({{ asset('assets/Project\ Page.png') }});
        background-size: cover;
      ">
        <div class="d-flex gap-2 align-items-center justify-content-center">
            <a href="{{ route('frontend.home') }}">
                <span class="text-white">HOME</span>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                    fill="#ACACAC" />
            </svg>
            <a href="{{ route('frontend.projects') }}">
                <span class="text-white">PROJECTS</span>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                    fill="#ACACAC" />
            </svg>
            <a href="{{ route('frontend.projects') }}">
                <h4 class="text-orange text-center pt-md-0 pt-1" style="white-space: nowrap;">Qme solutions</h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">Qme solutions</h1>
        <p class="text-lg-start px-md-0 " style="color: #dfdfdf">
            Qme revolutionizes the waiting experience by introducing a cutting-edge digital queue management solution. This
            mobile application is designed to empower customers with the ability to join a queue for various services even
            before arriving at the physical location.
        </p>
    </div>
    <div class="pro-main-state" style="align-items: center;">
        <div class="container">
            <div class="pr-st-main">
                <div class="pro-st-txt">
                    <h2>Problem Statement</h2>
                    <p>
                        Traditional queues at banks, government agencies, and service providers represent a systemic
                        inefficiency, causing frustration among financiers. The uncertainty associated with prolonged wait
                        times not only leads to dissatisfaction but also results in lost time, negatively impacting overall
                        client experiences. These obsolete queuing systems often lack adaptability and fail to meet the
                        expectations of a modern, fast-paced society, emphasizing the urgent need for innovative solutions
                        to enhance customer satisfaction and operational efficiency.
                    </p>
                </div>
                <div>
                    <img loading="lazy" width="591" height="400"
                        src="{{ asset('assets/qme-project-mobile-mockup.webp') }}" style="cursor: pointer"
                        alt="QME project mobile mockup" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <div class="pro-main-state"
        style="align-items: center;background: linear-gradient(0deg, #0D3642, #0D3642),
  linear-gradient(98.18deg, rgba(55, 58, 73, 0.194867) 14.37%, rgba(60, 44, 63, 0.2) 25.31%, rgba(0, 197, 167, 0.144) 100%);
  ;">
        <div class="container">
            <div class="pr-st-main">
                <div>
                    <img loading="lazy" width="591" height="400"
                        src="{{ asset('assets/image-for-project-detail-4.webp') }}" alt="Image for project detail 4"
                        class="img-fluid" style="cursor: pointer" />
                </div>
                <div class="pro-st-txt">
                    <h2 class="hidden-title mb-4">Hidden Challenges</h2>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">
                            Encouraging users to embrace digital queues may face resistance to change.
                        </p>
                    </div>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">Ongoing efforts and costs to update QME for evolving needs and technology.
                        </p>
                    </div>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">Navigating market competition from alternative queuing solutions.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="cardsSection toolCardSection projectdetails d-flex row justify-content-lg-between justify-content-center align-items-center gap-5"
            style="padding-bottom: 80px !important">
            <div class="col-xl-6 col-md-5 col-sm-8 col-10 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/qme-project-mobile-mockup.webp') }}" alt="qme" class="img-fluid"
                    style="cursor: pointer" alt="QME project mobile mockup" class="img-fluid" />
            </div>
            <div class="col-md-5 d-flex flex-column gap-3 justify-content-center">
                <h2 class="fw-bold text-md-start text-center">Proposed Solution</h2>
                <p class="brown pe-3 text-md-start text-center">
                    Qme's user-friendly app and AI-driven queuing system not only minimize wait times but also revolutionize
                    the overall customer experience. The integration of personalized alerts ensures users stay informed,
                    enhancing engagement and satisfaction. Qme's adaptability across diverse sectors underlines its
                    versatility and applicability. As a forward-looking solution, Qme not only prioritizes customer
                    satisfaction but also addresses safety concerns by effectively reducing crowded waiting areas, aligning
                    with the evolving expectations of modern service delivery.
                </p>
            </div>
        </div>
    </div>

    <!-- ---------------agile section---------------- -->
    <div class="projectcomponentsection" style="background-color: #e7ebec">
        <div class="row row-gap-3">
            <div class="col-lg-3">
                <p style="color: #636363" class="text-center font-22-900 mb-2">Domain</p>
                <h2 class="text-orange text-center text-nowrap font-17">Education and Learning Management</h2>
            </div>
            <div class="col-lg-3">
                <p style="color: #636363" class="text-center font-22-900 mb-2">Development Process</p>
                <h2 class="text-orange text-center text-nowrap font-17">Agile</h2>
            </div>
            <div class="col-lg-3">
                <p style="color: #636363" class="text-center font-22-900 mb-2">Duration</p>
                <h2 class="text-orange text-center text-nowrap font-17">1-year</h2>
            </div>
            <div class="col-lg-3">
                <p style="color: #636363" class="text-center font-22-900 mb-2">Platform</p>
                <h2 class="text-orange text-center text-nowrap font-17">Hybrid</h2>
            </div>
        </div>
    </div>
    <!-- ------------TOOLS SECTION---------------- -->
    <!-- ------------TOOLS CONTENT SECTION---------------- -->
    <section class="key-fec-sec">
        <div class="container">
            <h2 class="key-title">Key Features</h2>
            <div class="key-fec-main">
                <div class="key-fec-txt">
                    <h2>
                        Smartphone Ticketing
                    </h2>
                    <p>
                        Qme's smartphone ticketing ensures a seamless experience by allowing users to not only reserve their
                        spot in a service line but also customize their queue preferences. The mobile application offers a
                        range of services, branches, and specific providers, giving users the flexibility to tailor their
                        experience. The digital ticket, obtained effortlessly with a few taps, embodies Qme's commitment to
                        simplifying and personalizing the queuing process.


                    </p>

                </div>

                <div>
                    <img src="{{ asset('assets/journe-of-sync4tech.webp') }}" alt="Journey of Sync4Tech "
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- ---- -->

    <section class="key-fec-sec">
        <div class="container">
            <div class="key-fec-main">
                <div>
                    <img src="{{ asset('assets/revolutionizin-pre-development.webp') }}"
                        alt="Revolutionizing Pre Development" class="img-fluid" />
                </div>
                <div class="key-fec-txt">
                    <h2>
                        Branch Navigation
                    </h2>
                    <p>
                        Qme's commitment to outstanding service extends beyond queuing. The Branch Navigation feature
                        enhances user experience by providing easy access to preferred or suggested branches. Users can
                        queue remotely and receive precise directions within the Qme mobile app, ensuring a hassle-free
                        journey to their chosen service location. This thoughtful addition underscores Qme's dedication to
                        convenience and customer-centric service.
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
                        Push Notifications Update
                    </h2>
                    <p>
                        The Push Notifications Update feature ensures users stay connected while waiting, receiving
                        real-time ticket status information directly to their smartphones. This proactive communication not
                        only reduces uncertainty but also demonstrates Qme's commitment to keeping users in the loop, making
                        the waiting experience more interactive.
                    </p>

                </div>

                <div>
                    <img src="{{ asset('assets/shape-the-future-with-us.webp') }}" alt="Shape the future with Us"
                        class="img-fluid" />
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
                <button style="margin-top: 0;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"
                    class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
                    <a href="#" class="text-orange">Become Our Partner</a>
                </button>
            </div>


            <div class="button-wrap">
                <button style="margin-top: 0;" data-bs-toggle="modal" data-bs-target="#bookapp" type="button"
                    class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
                    <a href="#" class="text-orange">Book A Consultation</a>
                </button>
            </div>
            <div class="modal fade" id="bookapp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div
                    class="modal-dialog modal-dialog-centered modal-xl modal-dialog-centered d-flex justify-content-center align-items-center">
                    <div class="modal-content book-modal-content firstDivModal" id="app">

                    </div>
                </div>
            </div>
            <script>
                // Add a click event listener to the SVG
                document
                    .querySelector(".close-modal")
                    .addEventListener("click", function() {
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
@endsection
@push('scripts')
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
        document.addEventListener("DOMContentLoaded", function() {
            var loader = document.querySelector('.loader');
            var html = document.querySelector('html');

            // Add 'loading' class to the html element to set the background color to red
            html.classList.add('loading');

            // Show the loader
            loader.style.display = 'block';

            // Set a timeout to hide the loader after 3 seconds
            setTimeout(function() {
                loader.style.display = 'none';

                // Remove 'loading' class from the html element to revert to the original background color
                html.classList.remove('loading');
            }, 1000); // 3000 milliseconds = 3 seconds
        });
    </script>
@endpush
