@extends('layouts.default')
@section('title', 'Services')
<style>
    a {
        text-decoration: none !important;
    }
</style>
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection flex-column gap-lg-4 gap-3 d-flex align-items-start justify-content-center  flex-shrink-0"
        style="
        background-image: url('{{ asset('assets/services-banner.webp') }}');
        background-size: cover;
        background-position: center;
      ">
        <div class="container">
            <div class="d-flex gap-2 align-items-center pb-3">
                <a class="text-white m-0 text-decoration-none" href="{{ route('frontend.home') }}">
                    HOME
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path
                        d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                        fill="#ACACAC" />
                </svg>
                <a class="text-orange text-decoration-none" href="{{ route('frontend.services') }}">SERVICES
                    <!-- <h4 class=" text-center pt-md-0 pt-1 mb-0 border-0"></h4> -->
                </a>
                <!-- <a style="text-decoration: none; " href="#">
                                              <h4 class="text-orange text-center pt-md-0 pt-1 m-0">SERVICES</h4>
                                            </a> -->
            </div>
            <h1 class="text-white fw-bold">Services</h1>
            <p class="text-lg-start" style="color: #dfdfdf">
                Start your Transformational Journey with Sync4Tech.Get to Know and Explore the Tech Solutions crafted by our
                expert business analysts</p>
        </div>

    </div>


    <!----------- services-section----- -->
    <section class="cardsSection  serviceCardSection">
        <div class="container">
            <!-- ------------SERVICE CONTENT SECTION---------------- -->
            <div class="contentSection">
                <p class="text-orange text-center mb-0">
                    OUR SERVICES
                </p>
                <h2 class="mb-0">Providing Best Services</h2>
                <p class="provide-business">
                    Empower your business with our expertise in process improvement, data analysis, project management, and
                    more. We redefine operations for success through tailored solutions
                </p>
            </div>
            <!-- ------------CARDS SECTION---------------- -->
            <div class="main-services-cards">
                <!-- 1 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.software-business-analyst') }}">
                        <div class="business-Process">
                            <div class="">
                                <img loading="lazy" width="80" height="80"
                                    src="{{ asset('assets/icon-1-for-service.svg') }}" alt="Icon 1 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Software Business Analyst</h2>
                        </div>
                        <div class="services-card">
                            <p>
                                Tailored software business analysis to ensure your project's success. We identify
                                stakeholder
                                needs,
                                document requirements, and provide comprehensive
                                ...
                            </p>

                        </div>
                    </a>
                </div>
                <!-- 2 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.business-process-re-engineering') }}">
                        <div class="business-Process">
                            <div class="">
                                <img src="{{ asset('assets/icon-2-for-service.svg') }}" alt="Icon 2 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Business Process Re-Engineering</h2>
                        </div>
                        <div class="services-card">
                            <p> Revitalize your processes for enhanced efficiency. We analyze current workflows, redesign
                                optimized
                                processes, and provide a detailed implementation...
                            </p>

                        </div>
                    </a>
                </div>
                <!-- 3 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.software-project-management') }}">
                        <div class="business-Process">
                            <div class="">
                                <img loading="lazy" width="80" height="80"
                                    src="{{ asset('assets/icon-3-for-service.svg') }}" alt="Icon 3 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Software Project Management</h2>
                        </div>
                        <div class="services-card">
                            <p>Project success, from initiation to closure. We define goals, create detailed plans, execute,
                                monitor,
                                and evaluate, ensuring on-time and within-budget delivery.
                                ..</p>

                        </div>
                    </a>
                </div>
                <!-- 4 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.solution-architecture-design') }}">
                        <div class="business-Process">
                            <div class="">
                                <img src="{{ asset('assets/icon-4-for-service.svg') }}" alt="Icon 4 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Solution Architecture Design</h2>
                        </div>
                        <div class="services-card">
                            <p>Crafting solutions aligned with business needs. We analyze requirements, design comprehensive
                                architecture, and deliver detailed documentation.
                                ..
                            </p>

                        </div>
                    </a>
                </div>
                <!-- 5 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.software-documentation') }}">
                        <div class="business-Process">
                            <div class="">
                                <img loading="lazy" width="80" height="80"
                                    src="{{ asset('assets/icon-5-for-service.svg') }}" alt="Icon 5 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Software Documentation</h2>
                        </div>
                        <div class="services-card">
                            <p>
                                Clear, comprehensive documentation for seamless system understanding. We analyze software,
                                identify
                                documentation needs, and deliver user-friendly ...</p>

                        </div>
                    </a>
                </div>
                <!-- 6 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.data-analysis') }}">
                        <div class="business-Process">
                            <div class="">
                                <img src="{{ asset('assets/icon-6-for-service.svg') }}" alt="Icon 6 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Data Analysis</h2>
                        </div>
                        <div class="services-card">
                            <p>Uncover insights through meticulous data analysis. We identify sources, collect data, and
                                apply
                                statistical methods to provide meaningful insights.
                                ..
                            </p>

                        </div>
                    </a>
                </div>
                <!-- 7 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.digital-adoption-planning') }}">
                        <div class="business-Process">
                            <div class="">
                                <img loading="lazy" width="80" height="80"
                                    src="{{ asset('assets/icon-1-for-service.svg') }}" alt="Icon 1 for service"
                                    class="img-fluid" />
                            </div>
                            <h2> Digital Adoption Planning</h2>
                        </div>
                        <div class="services-card">
                            <p>
                                Strategic digital adoption for improved business processes. We assess goals, explore
                                systems,
                                and provide
                                a roadmap for successful digital adoption.
                                ..
                            </p>

                        </div>
                    </a>
                </div>
                <!-- 8 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.requirement-gathering-and-elicitation') }}">
                        <div class="business-Process">
                            <div class="">
                                <img src="{{ asset('assets/icon-2-for-service.svg') }}" alt="Icon 2 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Requirement Elicitation</h2>
                        </div>
                        <div class="services-card">
                            <p>Holistic requirement gathering for a clear understanding of stakeholder needs. We identify
                                stakeholders,
                                define roles, and employ various elicitation techniques.
                                ..
                            </p>

                        </div>
                    </a>
                </div>
                <!-- 9 -->
                <div class="card serviceCard1">
                    <a href="{{ route('frontend.services.technical-research-and-development') }}">
                        <div class="business-Process">
                            <div class="">
                                <img loading="lazy" width="80" height="80"
                                    src="{{ asset('assets/icon-3-for-service.svg') }}" alt="Icon 3 for service"
                                    class="img-fluid" />
                            </div>
                            <h2>Technical Resarch and Development</h2>
                        </div>
                        <div class="services-card">
                            <p>Incorporate cutting-edge technologies into your projects. We assess technologies, implement
                                solutions,
                                and deliver improved system performance.
                                ..</p>

                        </div>
                    </a>
                </div>

            </div>
            <!-- 6-card-close -->
            <a class="View-More-btn mt-4" href="{{ route('frontend.services') }}">View More</a>
        </div>
    </section>
    </div>
    <!-- ------------STANDARD SECTION---------------- -->
    <section style="background: #e7ebec">
        <div class="container">
            <div class="w-100 cardsSection standardSection row justify-content-center align-items-center gap-5">
                <div class="col-lg-5 justify-content-center align-items-center d-flex">
                    <img src="{{ asset('assets/standards-sync4tech-follows-for-quality-services.webp') }}"
                        alt="Standards Sync4Tech follows for Quality Services" class="img-fluid" />
                </div>
                <div class="col-lg-5 d-flex flex-column gap-3 flex-grow-1 flex-shrink-0 flex-basis-0">
                    <h4 class="text-orange text-lg-start text-center">OUR STANDARDS</h4>
                    <h3 class="dark-black text-lg-start text-center fw-bold">
                        Standards We Follow
                    </h3>
                    <div class=" order-md-1 order-2 d-flex flex-column gap-3 flex-grow-1 flex-shrink-0 flex-basis-0 ">
                        <div class="d-flex gap-2 align-items-start ">
                            <img src="{{ asset('assets/tick-mark-icon-image-for-services-page.svg') }}"
                                alt="Tick mark icon image for services page" class=" d-md-block">
                            <div class="brown pe-lg-5 text-md-start partner-ticks">
                                <p>ISO 9001, a quality management standard, outlines general principles for quality
                                    management systems, applicable to various business processes, including business
                                    analysis. </p>
                            </div>
                        </div>

                        <div class="d-flex gap-2 align-items-start ">
                            <img src="{{ asset('assets/tick-mark-icon-image-for-services-page.svg') }}"
                                alt="Tick mark icon image for services page" class=" d-md-block">
                            <div class="brown pe-lg-5 text-md-start partner-ticks">
                                <p>Adherence to project management standards like PMBOK (Project Management Body of
                                    Knowledge) ensures effective project planning, execution, and control.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 align-items-start ">
                            <img src="{{ asset('assets/tick-mark-icon-image-for-services-page.svg') }}"
                                alt="Tick mark icon image for services page" class=" d-md-block">
                            <div class="brown pe-lg-5 text-md-start partner-ticks">
                                <p>Following best practices in software development, such as those outlined by the Software
                                    Engineering Institute's Capability Maturity Model Integration (CMMI), helps ensure
                                    high-quality software.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 align-items-start ">
                            <img src="{{ asset('assets/tick-mark-icon-image-for-services-page.svg') }}"
                                alt="Tick mark icon image for services page" class=" d-md-block">
                            <div class="brown pe-lg-5 text-md-start partner-ticks">
                                <p>Adherence to guidelines and standards set by organizations like the International
                                    Institute of Business Analysis (IIBA) ensures professionalism and consistency in
                                    business analysis practices.</p>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- --------------COLLABORATION SECTION-------------------- -->
    <!-- <div class="cardsSection d-flex flex-column justify-content-center align-items-center gap-5">

                                        <div class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                                          <p class="text-orange text-center">OUR COLLABORATIONS</p>
                                          <h1 class="dark-black text-center fw-bold">
                                            How We Collaborate With Clients
                                          </h1>
                                        </div>

                                       
                                        <div class="service-cli-col-cards">
                                          <div class="ser-col-card">
                                            <img src="./assets/cli-card-1.svg" alt="cli-card-1">
                                            <h2 style="padding-top: 16px !important;">In-Depth Consultation</h2>
                                            <p>We initiate collaboration by engaging in an in-depth consultation with you to understand your vision, needs,
                                              and goals.</p>
                                          </div>
                                          <div class="ser-col-card">
                                            <img src="./assets/cli-card-2.svg" alt="cli-card-1">
                                            <h2 style="padding-top: 16px !important;">Tailored Strategy Development</h2>
                                            <p>Building on the insights from our consultation, we craft a customized strategy based on our industry
                                              expertise</p>
                                          </div>
                                          <div class="ser-col-card">
                                            <img src="./assets/cli-card-3.svg" alt="cli-card-1">
                                            <h2 style="padding-top: 16px !important;">Seamless Execution and Ongoing Support</h2>
                                            <p>We work hand in hand with your team to bring the plan to life, providing continuous support and adapting as
                                              needed.</p>
                                          </div>
                                        </div>
                                      </div> -->

    <div class="cardsSection d-flex flex-column justify-content-center align-items-center gap-3 howWork"
        style="
            background: #EFEFEF;
            ">
        <!-- ------------ABOUT US CONTENT SECTION---------------- -->
        <section id="animation-sec" style="width: 100%;">
            <!-- <div class="container"> -->
            <div
                style="background-color: linear-gradient(0deg, #0D3642, #0D3642),
                    linear-gradient(98.18deg, rgba(55, 58, 73, 0.194867) 14.37%, rgba(60, 44, 63, 0.2) 25.31%, rgba(0, 197, 167, 0.144) 100%);
                    ;">
                <div class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                    <p class="text-orange text-center">How We Make It Work?</p>
                    <h3 class="text-white text-center fw-bold" style="color: #232323 !important;">
                        Decoding Our Business Analysis Framework
                    </h3>
                </div>
                <!-- <img src="./assets/howworks.png" alt="how we works" class="img-fluid" /> -->
            </div>
            <!-- --------------CEO MESSAGE SECTION-------------------- -->



            <div class="about-us-line" style="position: relative;">
                <div class="service-cli-col-cards">

                    <div class="ser-col-card card1">
                        <img src="{{ asset('assets/sync4tech-business-process-step-01-comprehensive-business-analysis.svg') }}"
                            alt="Sync4Tech Business Process Step 1- requirement gathering">
                        <h2 style="color: #232323;padding-top: 16px !important;">Requirement Gathering</h2>
                        <p style="color: #5F5F5F;padding-top: 4px !important;">Delve deep into your business processes,
                            objectives, and challenges. Our goal is to collect crucial data, establishing a solid foundation
                            for a comprehensive analysis of your needs.</p>
                    </div>
                    <div class="ser-col-card card2" style="position: relative;">
                        <!-- <img class="arrow-img ex-arrw"
                                                  style="position: absolute;height: 22px;top: 75px;left: -83px;right: 10%;z-index: -1;transform: rotate(-21deg);"
                                                  src="./assets/blue-arrow.svg" alt="arrow-img"> -->

                        <img src="{{ asset('assets/sync4tech-business-process-step-02-expert-consultation.svg') }}"
                            alt="Sync4Tech Business Process Step 2 - expert consultation">
                        <h2 style="color: #232323;padding-top: 16px !important;">Expert Consultation</h2>
                        <p style="color: #5F5F5F;padding-top: 4px !important;"> Count on our team of experienced
                            professional advisors for guidance and recommendations. Their expertise ensures a highly
                            informed and strategic approach to your unique challenges.</p>
                    </div>

                    <div class="ser-col-card card3" style="position: relative;">
                        <img src="{{ asset('assets/sync4tech-business-process-step-03-expert-consultation.svg') }}"
                            alt="Sync4Tech Business Process Step 3 - comprehensive business analysis">
                        <!-- <img class="arrow-img2 ex-arrw2"
                                                  style="position: absolute;height: 22px;top: 38px;left: 11px;right: 30%;z-index: 1;transform: rotate(10deg);"
                                                  src="./assets/blue-arrow.svg" alt="arrow-img"> -->
                        <h2 style="color: #232323;padding-top: 16px !important;">Comprehensive Business Analysis</h2>
                        <p style="color: #5F5F5F;padding-top: 4px !important;">Building upon the insights gained through
                            expert consultation, we conduct a careful analysis. This process results in solutions precisely
                            coordinate to your business goals, offering a roadmap to success.</p>
                    </div>

                    <div style="position: absolute;left: 157px;right: 0%;top: 73px;z-index: -1;" class="change-wi">
                        <!-- <svg class="hover-line" width="" height="84" viewBox="0 0 1070 84" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M1068 41.8738C1068 41.8738 956.287 7.96021 864.681 2.7105C735.661 -4.68327 538.484 48.0669 538.484 48.0669C538.484 48.0669 384.696 80.6953 283.86 81.9596C172.523 83.3556 2 48.0669 2 48.0669"
                                                    stroke="#2B5F68" stroke-width="3" stroke-linecap="square" stroke-dasharray="20 10" />
                                                </svg> -->
                        <svg width="100%" class="hover-line" height="84" viewBox="0 0 1070 84" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1068 41.8738C1068 41.8738 956.287 7.96021 864.681 2.7105C735.661 -4.68327 538.484 48.0669 538.484 48.0669C538.484 48.0669 384.696 80.6954 283.86 81.9597C172.523 83.3556 2 48.0669 2 48.0669"
                                stroke="#C2CDD0" stroke-width="3" stroke-linecap="square" stroke-dasharray="20 10" />
                        </svg>


                    </div>
                    <div style="position: absolute;left: 157px;right: 0%;top: 73px;z-index: -1;" class="change-wi">
                        <!-- <svg class="hover-white" width="" height="84" viewBox="0 0 1070 84" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                    d="M1068 41.8738C1068 41.8738 956.287 7.96021 864.681 2.7105C735.661 -4.68327 538.484 48.0669 538.484 48.0669C538.484 48.0669 384.696 80.6954 283.86 81.9597C172.523 83.3556 2 48.0669 2 48.0669"
                                                    stroke="white" stroke-width="3" stroke-linecap="square" stroke-dasharray="20 10" />
                                                </svg> -->
                        <svg width="100%" class="hover-white" height="84" viewBox="0 0 1070 84" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1068 41.8738C1068 41.8738 956.287 7.96021 864.681 2.7105C735.661 -4.68327 538.484 48.0669 538.484 48.0669C538.484 48.0669 384.696 80.6954 283.86 81.9597C172.523 83.3556 2 48.0669 2 48.0669"
                                stroke="#2B5F68" stroke-width="3" stroke-linecap="square" stroke-dasharray="20 10" />
                        </svg>

                    </div>




                </div>
            </div>
        </section>
    </div>

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
                    <a href="#" class="text-orange">Hire Now!</a>
                </button>
            </div>


            <div class="button-wrap">
                <button style="margin-top: 0;" data-bs-toggle="modal" data-bs-target="#bookapp" type="button"
                    class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
                    <a href="#" class="text-orange">Book A Consultation</a>
                </button>
            </div>
            <!-- Modal -->
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
        window.addEventListener('scroll', function() {
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
    {{-- <script>
        // Get all elements with class "slot"
        const slots = document.querySelectorAll(".slot");

        // Loop through each slot and add a click event listener
        slots.forEach((slot) => {
            slot.addEventListener("click", function() {
                // Remove the "active" class from all slots
                slots.forEach((s) => {
                    s.classList.remove("active");
                });

                // Add the "active" class to the clicked slot
                this.classList.add("active");
            });
        });
    </script> --}}
@endpush
