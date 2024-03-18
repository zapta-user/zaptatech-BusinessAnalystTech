@extends('layouts.default')
@section('title', 'Projects')
@section('section')
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    @php
        $meta_title = 'Sync4Tech | Roomz';
        $meta_description =
            'Immerse yourself in the world of hospitality and travel with Roomz, a cutting-edge vacation rental application available on web and mobile platforms';
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
            <a href="{{ route('frontend.projects.roomz') }}">
                <h4 class="text-orange text-center pt-md-0 pt-1">Roomz</h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">Roomz</h1>
        <p class="text-lg-start px-md-0" style="color: #dfdfdf">
            Roomz offers a vast array of properties, confidently book verified accommodations, and effortlessly manage your
            stay with our user-friendly interface. Enjoy streamlined communication, transparent property information, and
            integrated features for a seamless getaway.
        </p>
    </div>
    <div class="pro-main-state" style="align-items: center;">
        <div class="container">
            <div class="pr-st-main">
                <div class="pro-st-txt">
                    <h2>Problem Statement</h2>
                    <p>
                        The vacation rental industry confronted multifaceted challenges, creating a disconcerting experience
                        for both guests and property owners. Guests were bothered by a pervasive sense of uncertainty
                        attributed to the unreliability of property listings, inefficient booking processes causing delays,
                        and an acute lack of comprehensive property information. Property owners, on the other hand, contend
                        with burdensome management tasks consuming valuable time and a notable absence of streamlined
                        processes. Access to additional services was restricted, limiting their ability to offer an enriched
                        guest experience.

                    </p>
                </div>
                <div>
                    <img width="480" height="380"
                        src="{{ asset('assets/roomz-sync4tech-portfolio-banner-image-2.webp') }}"
                        alt="Roomz Sync4Tech portfolio banner image 2" class="img-fluid" />
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
                        src="{{ asset('assets/image-for-project-detail-7.webp') }}" class="img-fluid"
                        style="cursor: pointer" alt="Image for project detail 7" />
                </div>
                <div class="pro-st-txt">
                    <h2 class="hidden-title mb-4">Hidden Challenges</h2>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">
                            Streamlining the booking processes to enhance efficiency, reduce uncertainties, and provide a
                            seamless experience for guests during the reservation and payment stages.
                        </p>
                    </div>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">Ensuring transparency in property information, including features, amenities,
                            and location details, to enable guests to make informed decisions when choosing accommodations.
                        </p>
                    </div>
                    <div class="d-flex">
                        <img width="24" height="24" loading="lazy"
                            src="{{ asset('assets/arrow-icon-indicating-direction-or-navigation.svg') }}"
                            alt="Arrow Icon - Indicating Direction or Navigation">
                        <p class="hidden-text">Addressing challenges faced by property owners in managing their listings,
                            reservations, and additional services efficiently, minimizing time-consuming tasks.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="cardsSection toolCardSection projectdetails d-flex row justify-content-center align-items-center gap-5"
        style="padding-bottom: 80px !important">
        <div class="col-xl-6 col-md-5 col-sm-8 col-10 d-flex justify-content-center align-items-center">
            <img width="480" height="380" src="{{ asset('assets/roomz-sync4tech-portfolio-banner-image.webp') }}"
                alt="Roomz Sync4Tech portfolio banner image" class="img-fluid" />
        </div>
        <div class="col-md-5 d-flex flex-column gap-3 justify-content-center">
            <h2 class="fw-bold text-md-start text-center">Proposed Solution</h2>
            <p class="brown pe-3 text-md-start text-center">
                Roomz offers a comprehensive solution to the challenges prevailing in the vacation rental industry. It
                introduces a platform featuring verified listings to instill trust and confidence in guests. The application
                streamlines booking processes for both guests and hosts. For property owners, the platform simplifies and
                automates property management tasks, offering integration with additional services to enhance the overall
                experience. Roomz not only ensures trust with verified listings but also prioritizes a seamless experience
                by enhancing communication channels and providing a user-friendly interface for guests and hosts alike.
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
                        Verified Listings
                    </h2>
                    <p>
                        Roomz stands out by offering a centralized platform that verifies accommodations. This verification
                        process ensures not only the accuracy of property details but also guarantees the authenticity of
                        listings. Guests can trust that the information provided aligns with the actual conditions of the
                        accommodations, providing a reliable and secure booking experience.

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
                        Streamlined Communication and Booking
                    </h2>
                    <p>
                        The application prioritizes communication and efficient booking processes, benefiting both guests
                        and hosts. Through real-time messaging features, guests can easily communicate with hosts, reducing
                        the likelihood of miscommunication and ensuring a smoother booking experience. The system's
                        efficiency minimizes delays, allowing for quick response times and enhancing overall transparency
                        throughout the booking journey.

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
                        Transparent Property Information
                    </h2>
                    <p>
                        Roomz goes beyond standard property listings by empowering guests with comprehensive details.
                        Descriptions are rich and detailed, providing an immersive understanding of each property. Guests
                        can explore amenities, pricing structures, and cancellation policies with clarity, enabling them to
                        make well-informed decisions. This commitment to transparent property information ensures a more
                        satisfying booking experience and establishes trust between guests and hosts.

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
                    <a href="#" class="text-orange">Hire Now!</a>
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
@endpush
