@extends('layouts.default')
@section('title', 'About Us')
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <section class="bannerSection flex-column gap-lg-4 gap-3 d-flex align-items-start justify-content-center  flex-shrink-0"
        style="
        background-image: url(./assets/sync4tech-about-us-your-global-business-ally-and-software-development-partner.webp);
        background-size: cover;
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
                <a class="text-orange text-decoration-none" href="{{ route('frontend.aboutUs') }}">ABOUT US
                    <!-- <h4 class=" text-center pt-md-0 pt-1 mb-0 border-0"></h4> -->
                </a>
            </div>
            <h2 class="text-white text-start fw-bold">
                ABOUT US
            </h2>
            <p class="text-start pt-2" style="color: #dfdfdf">
                An Insight into Our Story and Journey. Explore the unique blend of creativity and precision that defines our
                journey. Let's shape the future of your business together.
            </p>
        </div>

    </section>
    <!-- --------------EXPERT SECTION-------------------- -->

    <section class="expert-section pt-100">
        <div class="container">
            <div class="d-flex justify-content-lg-between flex-wrap justify-content-center gap-2 align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 expertContent d-flex flex-column gap-2">
                    <h2 class="text-orange pt-md-0 pt-1 text-md-start text-center mb-0">
                        ABOUT US
                    </h2>
                    <h3 class="dark-black fw-bold text-md-start text-center mt-0 mb-0">
                        Journey of Sync4Tech
                    </h3>

                    <p class="content-color text-md-start text-center px-md-0 px-sm-5 mb-0">
                        Welcome to Sync4Tech, where innovation meets dedication, and success is woven into every project.
                        Our journey began in 2020 with a vision to redefine the landscape of software development.

                    </p>
                    <p class="content-color text-md-start text-center px-md-0 px-sm-5 mt-0">
                        Since our humble beginnings, Sync4Tech has grown into a dynamic force in the software industry. From
                        our initial team, we have expanded our resources significantly, fostering a culture of collaboration
                        and continuous learning. At the core of our success lies our commitment to providing unparalleled
                        Software Business Analyst services. From intricate Software Documentation to meticulous Process
                        Flows, robust Architecture, innovative Features, and dedicated Project Management, Sync4Tech has
                        become synonymous with comprehensive solutions.
                    </p>

                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-12 d-flex justify-content-center align-items-center">
                    <img loading="lazy" width="515" height="445" src="{{ asset('assets/journe-of-sync4tech.webp') }}"
                        alt="expert pic" class="img-fluid" />
                </div>
            </div>

        </div>
    </section>
    <section class="expert-section pt-100">
        <div class="container">
            <div class="d-flex justify-content-lg-between flex-wrap justify-content-center gap-2 align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-5 col-12 d-flex justify-content-center align-items-center">
                    <img loading="lazy" width="515" height="445"
                        src="{{ asset('assets/revolutionizin-pre-development.webp') }}"
                        alt="Revolutionizing Pre Development" class="img-fluid" />
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 expertContent d-flex flex-column gap-2">
                    <h2 class="text-orange pt-md-0 pt-1 text-md-start text-center mb-0">
                        Our Vision
                    </h2>
                    <h3 class="dark-black fw-bold text-md-start text-center mt-0 mb-0">
                        Revolutionizing Pre-Development
                    </h3>

                    <p class="content-color text-md-start text-center px-md-0 px-sm-5 mb-0">
                        As we continue to grow and evolve, our vision remains clear—to be a driving force in the
                        ever-evolving realm of software development. Sync4Tech is not just a company; it's a community of
                        passionate individuals dedicated to crafting solutions that transcend expectations.

                    </p>

                </div>

            </div>

        </div>
    </section>
    <section class="expert-section pt-100">
        <div class="container">
            <div class="d-flex justify-content-lg-between flex-wrap justify-content-center gap-2 align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 expertContent d-flex flex-column gap-2">
                    <h2 class="text-orange pt-md-0 pt-1 text-md-start text-center mb-0">
                        Join Us in Shaping the Future
                    </h2>
                    <h3 class="dark-black fw-bold text-md-start text-center mt-0 mb-0">
                        Shape the Future with Us
                    </h3>

                    <p class="content-color text-md-start text-center px-md-0 px-sm-5 mb-0">
                        Explore Sync4Tech, where every line of code tells a story of innovation, collaboration, and success.
                        Be a part of our journey as we continue to redefine possibilities and set new standards in the world
                        of technology. Together, let's shape a future where your aspirations meet technological brilliance.

                    </p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-12 d-flex justify-content-center align-items-center">
                    <img loading="lazy" width="515" height="445"
                        src="{{ asset('assets/shape-the-future-with-us.webp') }}" alt="Shape the future with Us"
                        class="img-fluid" />
                </div>
            </div>

        </div>
    </section>
    <div class="cardsSection d-flex flex-column justify-content-center align-items-center gap-3 howWork"
        style="
        background: linear-gradient(
            98deg,
            rgba(55, 58, 73, 0.19) 14.37%,
            rgba(60, 44, 63, 0.2) 25.31%,
            rgba(0, 197, 167, 0.14) 100%
          ),
          #0d3642;
      ">
        <!-- ------------ABOUT US CONTENT SECTION---------------- -->
        <section id="animation-sec" style="width: 100%;">
            <!-- <div class="container"> -->
            <div
                style="background-color: linear-gradient(0deg, #0D3642, #0D3642),
      linear-gradient(98.18deg, rgba(55, 58, 73, 0.194867) 14.37%, rgba(60, 44, 63, 0.2) 25.31%, rgba(0, 197, 167, 0.144) 100%);
      ;">
                <div class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                    <p class="text-orange text-center mb-0">How We Make It Work?</p>
                    <h3 class="text-white text-center fw-bold">
                        Decoding Our Business Analysis Framework
                    </h3>
                </div>
                <!-- <img src="./assets/howworks.png" alt="how we works" class="img-fluid" /> -->
            </div>
            <!-- --------------CEO MESSAGE SECTION-------------------- -->



            <div class="about-us-line" style="position: relative;">
                <div class="service-cli-col-cards">

                    <div class="ser-col-card card1">
                        <img loading="lazy" width="100" height="100"
                            src="{{ asset('assets/sync4tech-business-process-step-1-requirement-gathering.svg') }}"
                            alt="Sync4Tech Business Process Step 1- requirement gathering">
                        <h2 style="color: #FFFFFF;padding-top: 16px !important;">Requirement Gathering</h2>
                        <p style="color: #C1C1C1;padding-top: 4px !important;">Delve deep into your business processes,
                            objectives, and challenges. Our goal is to collect crucial data, establishing a solid foundation
                            for a comprehensive analysis of your needs.</p>
                    </div>
                    <div class="ser-col-card card2" style="position: relative;">
                        <img loading="lazy" width="100" height="100"
                            src="{{ asset('assets/sync4tech-business-process-step-2-expert-consultation.svg') }}"
                            alt="Sync4Tech Business Process Step 2 - expert consultation">
                        <h2 style="color: #FFFFFF;padding-top: 16px !important;">Expert Consultation</h2>
                        <p style="color: #C1C1C1;padding-top: 4px !important;">Count on our team of experienced professional
                            advisors for guidance and recommendations. Their expertise ensures a highly informed and
                            strategic approach to your unique challenges.</p>
                    </div>

                    <div class="ser-col-card card3" style="position: relative;">
                        <img loading="lazy" width="100" height="100"
                            src="{{ asset('assets/sync4tech-business-process-step-3-comprehensive-business-analysis.svg') }}"
                            alt="Sync4Tech Business Process Step 3 - comprehensive business analysis">

                        <h2 style="color: #FFFFFF;padding-top: 16px !important;">Comprehensive Business Analysis</h2>
                        <p style="color: #C1C1C1;padding-top: 4px !important;">Building upon the insights gained through
                            expert consultation, we conduct a careful analysis. This process results in solutions precisely
                            coordinate to your business goals, offering a roadmap to success.</p>
                    </div>

                    <div style="position: absolute;left: 157px;right: 0%;top: 73px;z-index: -1;" class="change-wi">
                        <svg width="100%" class="hover-line" height="84" viewBox="0 0 1070 84" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1068 41.8738C1068 41.8738 956.287 7.96021 864.681 2.7105C735.661 -4.68327 538.484 48.0669 538.484 48.0669C538.484 48.0669 384.696 80.6953 283.86 81.9596C172.523 83.3556 2 48.0669 2 48.0669"
                                stroke="#2B5F68" stroke-width="3" stroke-linecap="square" stroke-dasharray="20 10" />
                        </svg>
                    </div>
                    <div style="position: absolute;left: 157px;right: 0%;top: 73px;z-index: -1;" class="change-wi">
                        <svg width="100%" class="hover-white" height="84" viewBox="0 0 1070 84" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1068 41.8738C1068 41.8738 956.287 7.96021 864.681 2.7105C735.661 -4.68327 538.484 48.0669 538.484 48.0669C538.484 48.0669 384.696 80.6954 283.86 81.9597C172.523 83.3556 2 48.0669 2 48.0669"
                                stroke="white" stroke-width="3" stroke-linecap="square" stroke-dasharray="20 10" />
                        </svg>
                        <!-- <img src="assets/corve-3.png"> -->
                    </div>




                </div>
            </div>
    </div>
    </div>
    <!-- </div> -->
    </section>

    <div class="w-100 cardsSection row d-flex justify-content-center justify-content-lg-around align-items-center"
        id="ceoSection">
        <div class="col-lg-4 col-md-5 col-12 d-flex justify-content-center align-items-center">
            <img loading="lazy" width="500" height="552"
                src="{{ asset('assets/sync4tech-ceo-ateeq-ur-rehman-visionary-leader-driving-innovation-collaboration-and-excellence.webp') }}"
                alt="Sync4Tech CEO Ateeq Ur Rehman - Visionary Leader Driving Innovation, Collaboration and Excellence"
                class="img-fluid" />
        </div>
        <div class="col-lg-6 col-md-6 expertContent d-flex flex-column gap-1">
            <!-- <h4 class="text-orange pt-md-0 pt-1 text-md-start text-center">
                                                                      QUOTE
                                                                    </h4> -->
            <h2 class="dark-black fw-bold text-md-start text-center">
                CEO’s Message
            </h2>
            <div class="d-flex align-items-center ceoimage">
                <img loading="lazy" width="51" height="51"
                    src="{{ asset('assets/quote-icon-enhancing-content-with-testimonials-and-insights.svg') }}"
                    alt="Quote Icon - Enhancing Content with Testimonials and Insights" class="img-fluid" />
            </div>
            <p class="content-color text-md-start px-lg-0 px-md-3">
                As we step into a new era, I want to emphasize our commitment to innovation, collaboration, and excellence.
                Our
                predevelopment services play a crucial role in shaping the software industry’s future. We’ve built trust and
                lasting partnerships, setting the foundation for successful projects.
            </p>
            <p style="color: #5F5F5F;
      font-size: 18px; font-weight: 500;"
                class="content-color text-md-start px-lg-0 m-0">Let’s focus on:</p>
            <p class="content-color text-md-start px-lg-0 m-0">
                <img width="24" height="24" loading="lazy"
                    src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                    alt="Arrow Icon - Indicating Direction or Navigation">
                Innovation - Embrace creativity and emerging tech.
            </p>
            <p class="content-color text-md-start px-lg-0 m-0">
                <img width="24" height="24" loading="lazy"
                    src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                    alt="Arrow Icon - Indicating Direction or Navigation">
                Collaboration - Foster a culture of teamwork and support.
            </p>
            <p class="content-color text-md-start px-lg-0 m-0">
                <img width="24" height="24" loading="lazy"
                    src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                    alt="Arrow Icon - Indicating Direction or Navigation">
                Excellence - Maintain our high-quality standard.
            </p>
            <p class="content-color text-md-start px-lg-0 m-0">
                <img width="24" height="24" loading="lazy"
                    src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                    alt="Arrow Icon - Indicating Direction or Navigation">
                User-Centric Approach - Anticipate client’s needs.
            </p>
            <p class="content-color text-md-start px-lg-0 m-0">
                <img width="24" height="24" loading="lazy"
                    src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                    alt="Arrow Icon - Indicating Direction or Navigation">
                Learning and Growth - Invest in personal and company growth.
            </p>
        </div>
    </div>
    <!-- ------------BLOG SECTION---------------- -->
    <section style=" background: #e1e7e9">
        <div class="container">
            <div class="cardsSection toolCardSection d-flex flex-column justify-content-center align-items-center gap-md-5 gap-3"
                style="padding-bottom: 80px;">
                <!-- ------------BLOG CONTENT SECTION---------------- -->
                <div data-animation="fadeIn" data-animation-delay=".3s"
                    class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                    <p class="text-orange text-center">OUR TEAM</p>
                    <h3 class="dark-black text-center fw-bold px-md-0 px-4">
                        Meet The Brilliant Minds Of Our Team
                    </h3>
                </div>
                <!-- ------------CARDS SECTION---------------- -->
                <div data-animation="fadeIn" data-animation-delay=".3s"
                    class="blogCards flex-wrap d-flex flex-md-row flex-column  align-items-center"
                    style="row-gap: 15px;column-gap: 15px;justify-content: center;">

                    <div class="blogCard team-cards  d-flex flex-column p-lg-3 p-2 align-items-lg-start "
                        style="max-width: 386px;width: 100%;">
                        <img loading="lazy" width="355" height="355"
                            src="{{ asset('assets/zulqarnain-haider-technical-project-manager-at-sync4tech.webp') }}"
                            alt="Zulqarnain Haider - Technical Project Manager at Sync4Tech" class="img-fluid m-auto" />
                        <h3 style="color: #232323; font-weight: 700;padding-top: 24px;">Zulqarnain Haider</h3>
                        <p style="color: #FB7A00; font-weight: 500">Technical Project Manager</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Technical Project Management /
                            Program
                            Management / Product Leadership</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-start "
                        style="max-width: 386px;width: 100%;">
                        <img loading="lazy" width="355" height="355"
                            src="{{ asset('assets/rimsha-naz-associate-project-manager-executing-successful-project-deliveries-at-sync4tech.webp') }}"
                            alt="Rimsha Naz, Associate Project Manager - Executing Successful Project Deliveries at Sync4Tech"
                            class="img-fluid m-auto" />
                        <h3 style="color: #232323; font-weight: 700;padding-top: 24px;">Rimsha Naz</h3>
                        <p style="color: #FB7A00; font-weight: 500">Project Manager</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Project Management / Resource
                            Management / Strategic Planning / Product Road Mapping</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-start "
                        style="max-width: 386px;width: 100%;">
                        <img loading="lazy" width="355" height="355"
                            src="{{ asset('assets/amna-arif-project-manager-at-sync4tech.webp') }}" alt="Team six"
                            class="img-fluid m-auto" />
                        <h3 style="color: #232323; font-weight: 700;padding-top: 24px;">Amna Arif</h3>
                        <p style="color: #FB7A00; font-weight: 500">Project Manager</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Agile Practitioner / Client
                            Management / Scope Management</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="./assets/arsalan-shafiq-project-manager-leading-agile-software-development-for-successful-project-delivery.webp"
                            alt="Arsalan Shafiq project manager - leading agile software development for successful project delivery"
                            class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Arslan Shafiq</h1>
                        <p style="color: #FB7A00; font-weight: 500">Associate Project Manager</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Agile & Scrum Methodology / Strategic
                            Project Planning / Team Leadership</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-start "
                        style="max-width: 386px;width: 100%;">
                        <img loading="lazy" width="355" height="355"
                            src="{{ asset('assets/hifza-nasreen-senior-business-analyst-leading-the-way-in-strategic-analysis-in-sync4tech.webp') }}"
                            alt="Hifza Nasreen, Senior Business Analyst - Leading the Way in Strategic Analysis in Sync4Tech"
                            class="img-fluid m-auto" />
                        <h3 style="color: #232323; font-weight: 700;padding-top: 24px;">Hifza Nasreen</h3>
                        <p style="color: #FB7A00; font-weight: 500">Senior Business Analyst</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Process Optimization / Data-Driven /
                            Decision Making / Software Proficiency</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-start "
                        style="max-width: 386px;width: 100%;">
                        <img loading="lazy" width="355" height="355"
                            src="{{ asset('assets/muhammad-amjad-associate-business-analyst-driving-business-insight-and-strategy-at-sync4tech.webp') }}"
                            alt="Muhammad Amjad, Associate Business Analyst - Driving Business Insight and Strategy at Sync4Tech"
                            class="img-fluid m-auto" />
                        <h3 style="color: #232323; font-weight: 700;padding-top: 24px;">Muhammad Amjad</h3>
                        <p style="color: #FB7A00; font-weight: 500">Associate Business Analyst</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Software Analysis / Software
                            Competitor
                            Analysis / Defining Business Processes</p>
                    </div>

                </div>
                <button type="button"
                    class="btn navButton consultaion-button rounded-0 button-color py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
                    <a href="{{ route('frontend.ourTeam') }}" class="text-orange">View More</a>
                </button>
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
        <div class="d-flex w-100 flex-md-row flex-column mt-0 gap-lg-3 gap-2 justify-content-center align-items-center">
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
            // var hoverLine = document.querySelector('.hover-line');
            var hoverWhite = document.querySelector('.hover-white');

            if (scrollPosition < sectionOffsetTop) {
                // hoverLine.style.opacity = '0';
                hoverWhite.style.clipPath = 'polygon(0 0, 0 100%, 0 100%, 0 0)';
                // hoverWhite.style.display = 'block';
                // hoverWhite.style.opacity = '1';
                // hoverWhite.style.clipPath = 'polygon(0 0, 0 100%, 100% 100%, 100% 0);';
            } else {
                // hoverLine.style.opacity = '1';
                // hoverWhite.style.opacity = '0';
                hoverWhite.style.clipPath = 'polygon(0 0, 0 100%, 100% 100%, 100% 0)';
                // hoverWhite.style.clipPath = 'polygon(0 0, 0 100%, 0 100%, 0 0)';
                // hoverWhite.style.display = 'none';
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
        var phoneNumberInput = document.querySelector("#phnumber");
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
