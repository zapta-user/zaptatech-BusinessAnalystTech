@extends('layouts.default')
@section('title', 'Projects')
@section('section')
    @php
        $meta_title = 'Sync4Tech | Projects';
        $meta_description =
            "Explore Sync4Tech's diverse portfolio on our Projects page. Discover how our expert team turns ideas into reality, from innovative software solutions to successful digital transformations.";
    @endphp
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection flex-column gap-1 d-flex align-items-start justify-content-center  flex-shrink-0"
        style="
        background-image: url({{ asset('assets/projectbanner.webp') }});
        background-size: cover;
        background-position: center;
      ">
        <div class="d-flex gap-2 align-items-center ">
            <a href="{{ route('frontend.home') }}">
                <span class="text-white">HOME</span>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                    fill="#ACACAC" />
            </svg>
            <a href="{{ route('frontend.projects') }}">
                <h4 class="text-orange text-center pt-md-0 pt-1"> OUR PROJECTS</h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">
            Experience Our Success Stories
        </h1>
        <p class="text-start  px-md-0" style="color: #dfdfdf">
            Explore our diverse portfolio to witness a collection of innovative and successful projects that showcase our
            commitment to excellence and client satisfaction.
        </p>
    </div>
    <!-- ------------SERVICE SECTION---------------- -->
    <div class="w-100 cardsSection d-flex flex-column justify-content-center align-items-center gap-lg-5 gap-3">
        <!-- ------------SERVICE CONTENT SECTION---------------- -->
        <div class="container">
            <p class="text-orange text-center">OUR PROJECTS</p>
            <h2 class="dark-black text-center fw-bold">Our Recent Projects</h2>
            <div class="d-flex flex-sm-row flex-column gap-lg-5 gap-3 justify-content-center align-items-center w-100">
                <div class="d-flex px-sm-2 py-1 px-3 align-items-center gap-2 category-button active"
                    onclick="filterCards('All', this)" style="cursor: pointer">
                    All
                </div>
                <div class="d-flex px-sm-2 py-1 px-3 align-items-center gap-2 category-button"
                    onclick="filterCards('Category01', this)" style="cursor: pointer;">
                    Mobile Application
                </div>
                <div class="d-flex px-sm-2 py-1 px-3 align-items-center gap-2 category-button"
                    onclick="filterCards('Category02', this)" style="cursor: pointer">
                    Web Application
                </div>
                <div class="d-flex px-sm-2 py-1 px-3 align-items-center gap-2 category-button"
                    onclick="filterCards('Category03', this)" style="cursor: pointer">
                    Hybrid
                </div>
            </div>
        </div>


        <!-- ------------CARDS SECTION---------------- -->
        <div class="container">
            <div
                class="row d-flex flex-column justify-content-center align-items-center portfolioSection w-100 overflow-hidden">
                <div class="col-12 flex-md-row gap-3 flex-column align-items-center w-100 " data-category="Category01">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.qme-solutions') }}"
                            class="d-flex justify-content-md-start justify-content-center align-items-center">
                            <img loading="lazy" width="591" height="400"
                                src="{{ asset('assets/qme-project-mobile-mockup.webp') }}" alt="QME project mobile mockup"
                                class="img-fluid" style="cursor: pointer" />
                        </a>
                    </div>
                    <div class="col-md-5 d-flex flex-column gap-md-3 gap-2">
                        <h3 class="link-color fw-bold text-md-start text-center">
                            Qme solutions
                        </h3>
                        <button class="btn border-0 d-flex py-2 px-3"
                            style="background-color: #e7ebec; color: #0D3642;font-weight: 600 !important;white-space: nowrap;">
                            Mobile Application
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            Qme Solutions is a mobile application Queue Management Technolgy that introduces a revolutionary
                            digital queue management system, empowering users to remotely join queues for various services
                            via a mobile application. By harnessing advanced technology, it replaces unproductive waiting
                            with an efficient approach, revolutionizing the waiting experience for customers. The project
                            aims to enhance convenience and control over wait times, marking a significant shift in service
                            accessibility.
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                                > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.qme-solutions') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 flex-md-row gap-3 flex-column align-items-center" data-category="Category03">
                    <div class="col-md-6 order-md-1 order-2 d-flex flex-column gap-md-3 gap-2 ms-xl-2">
                        <h3 class="link-color fw-bold text-md-start text-center">
                            Quick Steps
                        </h3>
                        <button class="btn border-0 d-flex py-2 px-3"
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap; width: fit-content;">
                            Hybrid
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            “QuickSteps" is a groundbreaking mobile and web-based accounting software tailored for small and
                            medium-sized businesses. It simplifies financial tasks, offering efficiency, and accessibility.
                            With a comprehensive range of features and top-notch security, QuickSteps is designed to be a
                            strategic partner in business growth. Its scalability ensures it evolves alongside your
                            business, making it more than just accounting software—it's a catalyst for success.
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                                > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.quicksteps') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                    <div class="col-md-6 d-flex order-md-2 order-1 justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.quicksteps') }}"
                            class="d-flex justify-content-center align-items-center">
                            <img loading="lazy" width="591" height="400"
                                src="{{ asset('assets/myquicksteps-sync4tech-project-banner-image.webp') }}"
                                style="cursor: pointer" alt="myQuicksteps sync4tech project banner image"
                                class="img-fluid" />
                        </a>
                    </div>
                </div>


                <div class="col-12 flex-md-row gap-md-5 gap-3 flex-column justify-content-lg-between justify-content-center align-items-center w-100"
                    data-category="Category03">
                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.kutuby') }}"
                            class="d-flex justify-content-md-start justify-content-center align-items-center">
                            <img loading="lazy" width="591" height="400"
                                src="{{ asset('assets/kutuby-logo-a-project-by-sync4tech-portfolio.webp') }}"
                                alt="Kutuby logo a Project by Sync4Tech portfolio" class="img-fluid"
                                style="cursor: pointer" />
                        </a>
                    </div>
                    <div class="col-md-6 d-flex flex-column gap-md-3 gap-2">
                        <h3 class="link-color fw-bold text-md-start text-center">Kutuby</h3>
                        <button class="btn border-0 d-flex py-2 px-3 "
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap;width: fit-content;">
                            Hybrid
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            Kutuby, a revolutionary Learning Management System (LMS) in the education and learning domain,
                            connects parents and children through a user-friendly app available on the web and mobile.
                            Parents can enroll multiple children, and monitor real-time progress, while children access
                            lessons independently. Admins manage courses efficiently via a centralized web dashboard,
                            ensuring a dynamic learning environment. Kutuby is a comprehensive solution for seamless
                            education and learning management
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                                > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.kutuby') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                </div>

                <div class="col-12 flex-md-row gap-3 flex-column justify-content-lg-between justify-content-center align-items-center w-100"
                    data-category="Category03">
                    <div class="col-md-6 d-flex flex-column gap-md-3 gap-2 ms-xl-2">
                        <h3 class="link-color fw-bold text-md-start text-center">
                            Roomz
                        </h3>
                        <button class="btn border-0 d-flex py-2 px-3"
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap;width: fit-content;">
                            Hybrid
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            Roomz, a web and mobile-based vacation rental application, operates within the domain of
                            Hospitality and Travel. Addressing challenges encountered by both guests and hosts, it serves as
                            a centralized platform ensuring verified accommodations and transparent property information. By
                            fostering trust among guests, Roomz enhances the overall experience in the hospitality and
                            traveling domain. The application's streamlined communication and booking processes contribute
                            to a seamless experience for users, aligning with the needs of the dynamic hospitality and
                            travel industry.
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                                > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.roomz') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.roomz') }}"
                            class="d-flex align-items-center justify-content-center">
                            <img loading="lazy" width="480" height="380"
                                src="{{ asset('assets/roomz-sync4tech-portfolio-banner-image.webp') }}"
                                alt="Roomz Sync4Tech portfolio banner image" class="img-fluid" style="cursor: pointer" />
                        </a>
                    </div>

                </div>
                <!-- <div class="col-12 flex-md-row gap-3 flex-column align-items-center" data-category="Category03">
                                                          <p style="max-width: 700px; margin: 0 auto; text-align: justify;" class="brown px-md-0 px-2">
                                                            We appreciate your interest in our website. We've just finished our most recent projects with success, and
                                                            we're getting ready for some interesting new ones. Our commitment to delivering exceptional results remains
                                                            steadfast.
                                                            While we're currently between projects, , our crew is hard at work getting ready for new ventures. We are
                                                            always learning new things, experimenting with creative concepts, and looking for fresh ways to add value
                                                            for our customers.<br><br>
                                                            Please check back soon for updates on our latest projects and initiatives. In the meantime, feel free to
                                                            explore our services, get to know our team, or reach out to us with any inquiries or potential
                                                            collaborations.
                                                            We appreciate your interest in what we do. We're excited to get in touch with you and work on more projects
                                                            together in the future!"
                                                          </p>
                                                        </div> -->
                <div class="col-12 flex-md-row gap-md-5 gap-3 flex-column justify-content-lg-between justify-content-center align-items-center w-100"
                    data-category="Category02">
                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.investme') }}"
                            class="d-flex justify-content-md-start justify-content-center align-items-center">
                            <img loading="lazy" width="591" height="400"
                                src="{{ asset('assets/invest-me-a-project-by-sync4tech-portfolio-mockup.webp') }}"
                                alt="Invest Me a Project by Sync4Tech portfolio mockup" class="img-fluid"
                                style="cursor: pointer" />
                        </a>
                    </div>
                    <div class="col-md-6 d-flex flex-column gap-md-3 gap-2">
                        <h3 class="link-color fw-bold text-md-start text-center">InvestMe</h3>
                        <button class="btn border-0 d-flex py-2 px-3 "
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap;width: fit-content;">
                            Web App
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            InvestMe is a web app encompassing an investment management platform, uniting asset owners,
                            investors, and accountants. It falls in the domain of FinTech. enables asset owners to list and
                            manage investments, investors to browse and invest, and accountants to offer financial advice.
                            The platform ensures transparent collaboration through features like reviews, contracts, and
                            detailed financial reports. InvestMe maximizes returns by facilitating informed investment
                            decisions and efficient stakeholder communication.
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                                > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.investme') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                </div>

                <div class="col-12 flex-md-row gap-3 flex-column justify-content-lg-between justify-content-center align-items-center w-100"
                    data-category="Category02">
                    <div class="col-md-6 d-flex flex-column gap-md-3 gap-2 ms-xl-2">
                        <h3 class="link-color fw-bold text-md-start text-center">
                            Watch Tower
                        </h3>
                        <button class="btn border-0 d-flex py-2 px-3"
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap;width: fit-content;">
                            Web App
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            The Watchtower Application is a web-based risk management system enabling global admins to
                            create and manage accounts, users, teams, and roles. It is an ERP that supports multiple
                            browsers and operating systems, emphasizing security through multi-factor authentication and
                            password constraints. The user-friendly interface, responsive design, and stringent
                            non-functional requirements ensure a reliable and secure user experience
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                              > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.watch-tower') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.watch-tower') }}"
                            class="d-flex align-items-center justify-content-center">
                            <img loading="lazy" width="480" height="380"
                                src="{{ asset('assets/watchtower-sync4tech-portfolio-mockup-image.webp') }}"
                                alt="WatchTower Sync4Tech portfolio mockup image" class="img-fluid"
                                style="cursor: pointer" />
                        </a>
                    </div>

                </div>

                <div class="col-12 flex-md-row gap-md-5 gap-3 flex-column justify-content-lg-between justify-content-center align-items-center w-100"
                    data-category="Category02">
                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.united-master') }}"
                            class="d-flex justify-content-md-start justify-content-center align-items-center">
                            <img loading="lazy" width="480" height="390"
                                src="{{ asset('assets/united-masters-sync4tech-portfolio-mockup-image.webp') }}"
                                alt="United Masters Sync4Tech portfolio mockup image" class="img-fluid"
                                style="cursor: pointer" />
                        </a>
                    </div>
                    <div class="col-md-6 d-flex flex-column gap-md-3 gap-2">
                        <h3 class="link-color fw-bold text-md-start text-center">United Master</h3>
                        <button class="btn border-0 d-flex py-2 px-3 "
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap;width: fit-content;">
                            Web App
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            UnitedMasters is a web application empowering artists to distribute their music on platforms
                            like Spotify and Apple Music. It falls in the domain of Music Technology and offers exclusive
                            subscription plans for artist benefits and easy track uploading. The platform includes
                            promotional tools for social media campaigns and audience engagement. UnitedMasters provides
                            detailed profile management for effective navigation of the music industry
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                            > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.united-master') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                </div>

                <div class="col-12 flex-md-row gap-3 flex-column justify-content-lg-between justify-content-center align-items-center w-100"
                    data-category="Category02">
                    <div class="col-md-6 d-flex flex-column gap-md-3 gap-2 ms-xl-2">
                        <h3 class="link-color fw-bold text-md-start text-center">
                            Lahebo
                        </h3>
                        <button class="btn border-0 d-flex py-2 px-3"
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap;width: fit-content;">
                            Web App
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            Lahebo is a web-based auditing platform with modules for Internal Audit, Inspection, and
                            Document Templates. It is an Audit Management Software that offers features like external
                            auditor integration, customizable practices for internal auditors, and IoT-based automation for
                            inspections. Designed for organizations, auditors, and development teams, Lahebo streamlines
                            audit processes ensures compliance, and provides real-time insights. Its user-friendly interface
                            serves as a secure hub for efficient audit management
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                          > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.lahebo') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.lahebo') }}"
                            class="d-flex align-items-center justify-content-center">
                            <img loading="lazy" width="480" height="380"
                                src="{{ asset('assets/lahebo-project-details-by-sync4tech-portfolio-logo.webp') }}"
                                alt="Lahebo Project details by Sync4Tech portfolio logo" class="img-fluid"
                                style="cursor: pointer" />
                        </a>
                    </div>

                </div>

                <div class="col-12 flex-md-row gap-md-5 gap-3 flex-column justify-content-lg-between justify-content-center align-items-center w-100"
                    data-category="Category02">
                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <a href="{{ route('frontend.projects.revconductor') }}"
                            class="d-flex justify-content-md-start justify-content-center align-items-center">
                            <img loading="lazy" width="480" height="380"
                                src="{{ asset('assets/revconductor-sync4tech-portfolio-mockup-image.webp') }}"
                                alt="RevConductor Sync4Tech portfolio mockup image" class="img-fluid"
                                style="cursor: pointer" />
                        </a>
                    </div>
                    <div class="col-md-6 d-flex flex-column gap-md-3 gap-2">
                        <h3 class="link-color fw-bold text-md-start text-center">RevConductor</h3>
                        <button class="btn border-0 d-flex py-2 px-3 "
                            style="background-color: #e7ebec;color: #0D3642;font-weight: 600 !important;white-space: nowrap;width: fit-content;">
                            Web App
                        </button>
                        <p class="brown text-md-start text-center px-md-0 px-2">
                            RevConductor is a web-based application for manufacturers, offering secure authentication,
                            efficient bulk product management, and advanced features like chatbot integration and Google
                            Maps. It is a Manufacturing Software Solution that simplifies customer interactions, and POS
                            data analysis, and boasts user-friendly functionalities such as organization and user
                            management. Notable features include template creation, document handling, and emphasis on data
                            accuracy.
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                            <!-- <button
                                                        > -->
                            <a class="rounded-0 btn navButton button-color d-flex justify-content-center align-items-center gap-3"
                                href="{{ route('frontend.projects.revconductor') }}" class="text-white">View Details</a>
                            <!-- </button> -->
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script>
            function filterCards(category, button) {
                const cards = document.querySelectorAll(".portfolioSection .col-12");
                cards.forEach((card) => {
                    const cardCategory = card.getAttribute("data-category");
                    if (category === "All" || cardCategory === category) {
                        card.style.display = "flex"; // Show the card
                    } else {
                        card.style.display = "none"; // Hide the card
                    }
                });
                // Remove the "active" class from all category buttons
                const buttons = document.querySelectorAll(".category-button");
                buttons.forEach((btn) => {
                    btn.classList.remove("active");
                });
                // Add the "active" class to the clicked category button
                button.classList.add("active");
            }
        </script>
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
