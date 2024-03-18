@extends('layouts.default')
@section('title', 'Our Team')
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection flex-column gap-lg-4 gap-3 d-flex align-items-lg-start justify-content-center flex-shrink-0"
        style="
        background-image: url({{ asset('assets/our-team-banner.webp') }});
        background-size: cover;
      ">
        <div class="d-flex gap-2 align-items-center">
            <a href="{{ route('frontend.home') }}">
                <span class="text-white text-deco">HOME</span>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                    fill="#ACACAC" />
            </svg>
            <a class="text-deco" href="{{ route('frontend.ourTeam') }}">
                <h4 class=" text-orange text-center pt-md-0 pt-1 mb-0">Our Team</h4>
            </a>
        </div>
        <h1 class="text-white text-start  fw-bold">
            Our Team
        </h1>
        <p class="text-start " style="color: #dfdfdf">
            Our team blends expertise and passion to deliver cutting-edge solutions and exceptional service to our clients.
            Get to know the driving force behind Sync4Tech's success and commitment to pushing technological boundaries.
        </p>
    </div>
    <!-- --------------EXPERT SECTION-------------------- -->




    </div>

    <!-- ------------BLOG SECTION---------------- -->
    <section style=" background: #e1e7e9">
        <div class="container">
            <div class="cardsSection toolCardSection d-flex flex-column justify-content-center align-items-center gap-md-5 gap-3"
                style="padding-bottom: 80px !important;">
                <!-- ------------BLOG CONTENT SECTION---------------- -->
                <div data-animation="fadeIn" data-animation-delay=".3s"
                    class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                    <p class="text-orange text-center mb-0">OUR TEAM</p>
                    <h1 class="dark-black text-center fw-bold">
                        Meet The Brilliant Minds Of Our Team
                    </h1>
                </div>
                <!-- ------------CARDS SECTION---------------- -->
                <div data-animation="fadeIn" data-animation-delay=".3s"
                    class="blogCards flex-wrap d-flex flex-md-row flex-column  align-items-center"
                    style="row-gap: 48px;column-gap: 15px;justify-content: center;">

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
                    {{-- <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                    style="max-width: 386px;width: 100%;">
                    <img loading="lazy" width="355" height="355" src="./assets/KN.webp" alt="Team six"
                        class="img-fluid m-auto" />
                    <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Khadija Naqvi</h1>
                    <p style="color: #FB7A00; font-weight: 500">Requirement Engineer</p>
                    <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Technical Documentation / Digital
                        Adoption Strategies / Domain Analysis / Data Analysis</p>
                </div> --}}
                    {{-- <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img loading="lazy" width="355" height="355" src="./assets/ZJ.webp" alt="Team five"
                            class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Zainab Jawad</h1>
                        <p style="color: #FB7A00; font-weight: 500">Software Business Analyst</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Requirements Gathering / Analysis and
                            Problem-Solving / Communication</p>
                    </div> --}}
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/WJ2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Waqar Jamil</h1>
                        <p style="color: #FB7A00; font-weight: 500">Business Analystt</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">System Analysis / Business Process
                            Re-engineering / Requirement Gathering</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/SFB2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Syeda Farwa Batool</h1>
                        <p style="color: #FB7A00; font-weight: 500">Associate Software Business Analyst</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Business Analysis / Research Analysis
                            /
                            Requirements Elicitation / Analysis</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/SS2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Sikandar Salam</h1>
                        <p style="color: #FB7A00; font-weight: 500">Requirements Engineer</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Digital Transformation / Business
                            Process Modeling / Technical Analysis</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/HC2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Hassan Chaudhry</h1>
                        <p style="color: #FB7A00; font-weight: 500">Associate Business Analyst</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Workflow Design / Requirement
                            Analysis / Technology Adoption</p>
                    </div>






                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/EB2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Ehtsham Bhatti</h1>
                        <p style="color: #FB7A00; font-weight: 500">Associate Business Analyst</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">User Story Mapping / Agile
                            Methodology / Requirement Analysis</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/MS2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Muzdulfah Sandhu</h1>
                        <p style="color: #FB7A00; font-weight: 500">Requirement Engineer</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">User Documentation / User training /
                            Requirement Analysis</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/K2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Aqsa Farooq kayani</h1>
                        <p style="color: #FB7A00; font-weight: 500">Business Developer</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Lead Generation / LinkedIn /
                            Self-Built Ventures & Growth Strategies</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/US2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Muhammad Usama Saleem</h1>
                        <p style="color: #FB7A00; font-weight: 500">Business Developer</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Lead Generation / Lead Maturation /
                            Lead closing / Research & Strategy</p>
                    </div>
                    <div class="blogCard team-cards d-flex flex-column p-lg-3 p-2 align-items-lg-start"
                        style="max-width: 386px;width: 100%;">
                        <img src="{{ asset('assets/SA2.webp') }}" alt="Team six" class="img-fluid m-auto" />
                        <h1 style="color: #232323; font-weight: 700;padding-top: 24px;">Sadia Jaan</h1>
                        <p style="color: #FB7A00; font-weight: 500">Business Developer</p>
                        <p style="color: #5f5f5f; font-weight: 500;padding-top: 8px;">Sales and Negotiation, Lead
                            Generation,
                            Relationship Building, Market</p>
                    </div>

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
