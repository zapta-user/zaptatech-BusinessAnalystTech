@extends('layouts.default')
@section('title', 'Projects')
@section('section')
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    @php
        $meta_title = 'Sync4Tech | Kutuby';
        $meta_description =
            'Embark on an educational revolution with Kutuby, the innovative Learning Management System (LMS).';
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
            <a href="{{ route('frontend.projects.kutuby') }}">
                <h4 class="text-orange text-center pt-md-0 pt-1">KUTUBY</h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">KUTUBY</h1>
        <p class="text-lg-start px-md-0" style="color: #dfdfdf">
            Kutuby, a revolutionary(LMS), brings parents and children together on a single platform. With a user-friendly
            interface, this hybrid app, available on both web and mobile facilitates seamless communication and progress
            tracking.

        </p>
    </div>
    <div class="pro-main-state">
        <div class="container">
            <div class="pr-st-main">
                <div class="pro-st-txt">
                    <h2>Problem Statement</h2>
                    <p>
                        In the field of education, parents grapple with a significant challenge the disconnect between their
                        involvement and their children's learning journeys. The absence of a centralized platform hinders
                        effective monitoring of educational progress. Additionally, limited independent learning options for
                        children delay the development of crucial skills. Administrators face inefficiencies in managing
                        course content, creating hurdles in delivering an optimal learning experience.

                    </p>
                </div>
                <div>
                    <img width="480" height="380"
                        src="{{ asset('assets/kutuby-logo-a-project-by-sync4tech-portfolio-2.svg') }}"
                        alt="Kutuby logo a Project by Sync4Tech portfolio 2" class="img-fluid" />
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
                        src="{{ asset('https://assets-global.website-files.com/63dcf9306bbe5b2e5fbb8677/646bbd7ef8c07bb115fda420_Selling_Image.svg') }}"
                        alt="Image for project detail 2" class="img-fluid" style="cursor: pointer" />
                </div>
                <div class="pro-st-txt">
                    <h2 class="hidden-title mb-4">Hidden Challenges</h2>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">
                            Lack of a centralized platform for parents to monitor and engage in their children's learning.
                        </p>
                    </div>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">Limited options for children to access and complete lessons and quizzes
                            independently.
                        </p>
                    </div>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">Absence of a streamlined system for administrators to manage and update
                            course content efficiently.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="cardsSection toolCardSection projectdetails d-flex row justify-content-lg-between justify-content-center align-items-center gap-5"
        style="padding-bottom: 80px !important">
        <div class="col-xl-6 col-md-5 col-sm-8 col-10 d-flex justify-content-center align-items-center">
            <img width="480" height="380" src="{{ asset('assets/kutuby-logo-a-project-by-sync4tech-portfolio.webp') }}"
                alt="Kutuby logo a Project by Sync4Tech portfolio" class="img-fluid" />
        </div>
        <div class="col-md-5 d-flex flex-column gap-3 justify-content-center">
            <h2 class="fw-bold text-md-start text-center">Proposed Solution</h2>
            <p class="brown pe-3 text-md-start text-center">
                Kutuby serves as a vital link between parents and children, providing an extensive Learning Management
                System. Parents enroll their children in diverse courses, granting access to lessons and quizzes. The app
                delivers real-time progress updates, enhancing a connected learning experience. Administrators efficiently
                manage courses and content through a web dashboard, ensuring a dynamic and engaging educational environment.
                Kutuby establishes a platform that not only empowers independent learning but also nurtures a collaborative
                and enriched educational experience.


            </p>
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
                        Parent-Child Connectivity
                    </h2>
                    <p>
                        Create a centralized communication hub where parents and children can exchange messages, allowing
                        parents to provide guidance and support directly. Implement a reward system that parents can use to
                        acknowledge and motivate their children's achievements, fostering a positive learning environment.
                        Enable parents to set specific learning goals for each child, helping them tailor the educational
                        experience to individual needs.
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
                        Independent Learning for Children
                    </h2>
                    <p>
                        Implement adaptive learning paths that adjust based on a child's performance, ensuring personalized
                        and challenging content to maximize engagement. Integrate multimedia elements such as videos,
                        animations, and interactive simulations to make lessons more engaging and appealing to children.
                        Turn quizzes into interactive games, making the learning process enjoyable while still assessing and
                        reinforcing key concepts.
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
                        Progress Tracking
                    </h2>
                    <p>
                        Provide visual heatmaps that highlight a child's strengths and weaknesses across different subjects
                        or topics, aiding parents in quickly identifying areas that may need more attention. Showcase
                        learning milestones and achievements, allowing parents to celebrate their child's progress and
                        provide positive reinforcement. Offer suggestions for targeted interventions or additional resources
                        based on a child's performance, helping parents support their child's learning journey effectively.

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
            class="d-flex w-100 flex-md-row flex-column mt-lg-5 mt-md-2 gap-lg-3 gap-2 justify-content-center align-items-center">
            <div class="button-wrap">
                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"
                    class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
                    <a href="#" class="text-orange">Hire Now!</a>
                </button>
            </div>


            <div class="button-wrap">
                <button data-bs-toggle="modal" data-bs-target="#bookapp" type="button"
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
@endpush
