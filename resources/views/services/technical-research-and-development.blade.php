@extends('layouts.default')
@section('title', 'Services')
<style>
    a {
        text-decoration: none !important;
    }
</style>
@section('section')
    @php
        $meta_title = 'Sync4Tech | Technical Research and Development';
        $meta_description =
            "Sync4Tech's Technical Research and Development services is all about innovating and conducting in-depth research, developing cutting-edge solutions to keep your business at the forefront of technology.";
    @endphp
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection flex-column gap-lg-4 gap-3 d-flex align-items-start justify-content-center  flex-shrink-0"
        style="
        background-image: url('{{ asset('assets/sync4tech-about-us-your-global-business-ally-and-software-development-partner.webp') }}');
        background-size: cover;
        background-position: center;
      ">
        <div class="container">
            <div class="home-links d-flex flex-wrap gap-2 align-items-center pb-lg-3 pb-2 pt-2">
                <a class="text-white m-0 text-decoration-none" href="{{ route('frontend.home') }}">
                    HOME
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path
                        d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                        fill="#ACACAC" />
                </svg>
                <a class="text-white m-0 text-decoration-none" href="{{ route('frontend.services') }}">
                    SERVICES
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path
                        d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                        fill="#ACACAC" />
                </svg>
                <a class="text-orange m-0 text-decoration-none"
                    href="{{ route('frontend.services.technical-research-and-development') }}">
                    Technical Research and Development
                </a>
                <!-- <a style="text-decoration: none; " href="#">
                        <h4 class="text-orange text-center pt-md-0 pt-1 m-0">BUSINESS ANALYSIS</h4>
                      </a> -->
            </div>
            <h1 class="text-white fw-bold">Technical Research and Development</h1>
            <p class="" style="color: #dfdfdf">
                Incorporate cutting-edge technologies into your projects. We assess technologies, implement solutions, and
                deliver improved system performance.
            </p>
        </div>

    </div>
    <!-- section-ui -->

    <section class="ui-section">
        <div class="container">
            <div class="contentSection">
                <p class="text-orange text-center mb-0">
                    OUR PROCESS
                </p>
                <h2>Technical Research and Development</h2>

            </div>
            <div class="timeline-container">

                <div class="grid-process pb-lg-3">
                    <div class="process-content">
                        <div class="content-header">
                            <img width="60" height="60" src="{{ asset('assets/discover-icon-image-1.svg') }}"
                                alt="Discover icon image 1">
                            <h2 class="content-title">Technology Assessment</h3>
                        </div>
                        <ul class="process-list">
                            <li class="list-item"> Thorough evaluation of existing and emerging technologies </li>
                            <li class="list-item"> Ensure chosen technologies align with project requirements.</li>
                            <li class="list-item">The relevance of each technology to the specific project is assessed to
                                ensure a tailored solution.</li>
                        </ul>
                    </div>
                    <div class="process-illustration">
                        <img width="625" height="414" style="max-width: 625px;"
                            src="{{ asset('assets/step-1-of-sync4tech-service-1.webp') }}"
                            alt="Step 1 of Sync4Tech Service 1">
                    </div>
                </div>

                <div class="row">
                    <div class="wireframe col-12 text-center">

                        <img width="190" height="214" class=""
                            src="{{ asset('assets/dotted-line-image-for-the-services-page.svg') }}"
                            alt="Dotted line Image  for the services page">
                    </div>
                </div>

                <div class="grid-process pt-lg-3 pb-lg-3">
                    <div class="process-illustration">
                        <img width="625" height="414" style="max-width: 625px;"
                            src="{{ asset('assets/step-2-of-sync4tech-service-1.webp') }}"
                            alt="Step 2 of Sync4Tech Service 1">
                    </div>
                    <div class="process-content">
                        <div class="content-header">
                            <img width="60" height="60" src="{{ asset('assets/discover-icon-image-2.svg') }}"
                                alt="Discover Icon image 2">
                            <h2 class="content-title"> Development</h3>
                        </div>
                        <ul class="process-list">
                            <li class="list-item">The implementation phase involves integrating selected technologies into
                                the project.</li>
                            <li class="list-item">Rigorous testing and iterative processes guarantee the integration of
                                technologies and optimal system performance.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="outcomes-section">
        <div class="container">
            <div class="outcome-card">
                <div class="outcom-p">
                    <img src="{{ asset('assets/outcome-1-of-sync4tech-service-1.svg') }}"
                        alt="Outcome 1 of Sync4Tech Service 1">
                    <div class="out-ul">
                        <h3>Outcomes</h3>
                        <ul style="padding-left: 1rem;">
                            <li>The project incorporates technologies to enhance capabilities.</li>
                            <li>Improved system performance and capabilities</li>
                        </ul>



                    </div>
                </div>
                <div class="outcom-p">
                    <img src="{{ asset('assets/outcome-2-of-sync4tech-service-1.svg') }}"
                        alt="Outcome 2 of Sync4Tech Service 1">
                    <div class="out-ul">
                        <h3>Deliverables</h3>
                        <ul style="padding-left: 1rem;">
                            <li>Detailed reports outlining the assessment of technologies.
                            </li>
                            <li>Integration of selected technologies into the project, thoroughly tested and ready for
                                implementation.
                            </li>
                        </ul>



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
                    OTHER SERVICES
                </p>
                <h2>Business Analysis Process</h2>
                <p class="provide-business">
                    Our business analysis services provide in-depth requirement gathering, process improvement, and data
                    analysis
                    to
                    help you optimize operations and achieve your business objectives.
                </p>
            </div>

            <!-- ------------CARDS SECTION---------------- -->
            <div class="main-services-cards">

                <!-- 2 -->
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
                            <p> Tailored software business analysis to ensure your project's success. We identify
                                stakeholder needs,
                                document requirements, and provide comprehensive
                                ...
                            </p>
                        </div>
                    </a>
                </div>
                <!-- 3 -->
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
                            <p>Revitalize your processes for enhanced efficiency. We analyze current workflows, redesign
                                optimized
                                processes, and provide a detailed implementation...</p>
                    </a>
                </div>
            </div>
            <!-- 4 -->
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
                            ..
                        </p>
                    </div>
                </a>
            </div>


            <!-- 6-card-close -->
            <a class="View-More-btn mt-4" href="{{ route('frontend.services') }}">View More</a>
        </div>
    </section>

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
        const gridElements = document.querySelectorAll(".grid-process"),
            intersectionObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        let currentElement = entry.target,
                            parentElement = currentElement.parentElement,
                            lastChild = parentElement.lastElementChild;

                        if (currentElement !== lastChild) {
                            let imageElement = currentElement.nextElementSibling.querySelector(".col-12 img");
                            window.innerHeight;

                            let topPosition = currentElement.getBoundingClientRect().top;
                            currentElement.getBoundingClientRect().bottom;

                            if (topPosition <= 0.1 * window.innerHeight) {
                                imageElement.style.clipPath = "polygon(100% 0, 100% 100%, 0 100%, 0 0)";
                            } else {
                                imageElement.style.clipPath = "polygon(100% 0, 100% 0, 0 0, 0 0)";
                            }
                        }
                    }
                });
            }, {
                threshold: [0, 1]
            });

        gridElements.forEach(element => {
            intersectionObserver.observe(element);
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
@endpush
