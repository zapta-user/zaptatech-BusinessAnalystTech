@extends('layouts.default_home')
<!-- Link Swiper's CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}
@section('section')
    <!-- hero-section -->
    <section class="hero-section pt-80">
        <div class="container">
            <div class="hero-content">
                <h2 class="text-white text-center">
                    Drafting Business Ideas into
                    <span class="text-orange">Digital Solutions</span>
                </h2>
                <p class="business-p">
                    A project without a manager and a product without documentation is at risk to fail.
                    So we are here to save you!
                </p>
                <div class="Partner-button">
                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">
                        <!-- <a href="#" class="text-orange">Become Our Partner</a> -->
                        Become Our Partner
                    </button>
                    <button data-bs-toggle="modal" data-bs-target="#bookapp" type="button">
                        <!-- <a href="#" class="text-orange">Book A Consultation</a> -->
                        Book A Consultation
                    </button>
                </div>

                <div class="d-flex gap-lg-4 justify-content-center gap-3 pt-5 bottomImg">
                    <a href="https://join.skype.com/invite/yieEvlEL80O3" target="_blank"
                        style="text-decoration: none !important; border: none;">
                        <i class="fa-brands fa-skype text-white p-2 rounded-circle border"
                            style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                    </a>
                    <a href="tel:+923015892528" target="_blank" style="text-decoration: none !important; border: none;">
                        <i class="fa-brands fa-whatsapp text-white p-2 rounded-circle border"
                            style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                    </a>
                    <a href="mailto:info@sync4tech.co" target="_blank"
                        style="text-decoration: none !important; border: none;">
                        <i class="fa-solid fa-envelope text-white p-2 rounded-circle border"
                            style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                    </a>
                    <a href="https://zaptatechnologies.slack.com/" target="_blank"
                        style="text-decoration: none !important; border: none;">
                        <i class="fa-brands fa-slack text-white p-2 rounded-circle border"
                            style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!----------- services-section----- -->
    <section class="cardsSection  serviceCardSection">
        <div class="container">
            <!-- ------------SERVICE CONTENT SECTION---------------- -->
            <div class="contentSection">
                <h1 class="text-orange text-center" style="font-size: 18px">
                    Sync4Tech Pre-Development Software Services
                </h1>
                <h2>Providing Best Services</h2>
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
                            <h2>Software Business Analysis</h2>
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
                            <h2>Project Management</h2>
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
            </div>
            <!-- 6-card-close -->
            <a class="View-More-btn mt-4" href="{{ route('frontend.services') }}">View More</a>
        </div>
    </section>
    <!-- ------------TOOLS SECTION---------------- -->
    <section class="cardsSection toolCardSection d-flex flex-column justify-content-center align-items-center gap-5 toolim"
        style="background-color: #e7ebec; padding-bottom: 80px ;">
        <div class="container">


            <!-- ------------TOOLS CONTENT SECTION---------------- -->
            <div class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                <p class="text-orange text-center">TOOLS</p>
                <h2 class="dark-black text-center fw-bold">Tools We Use</h2>
                <p class="content-color text-center px-xl-5 pb-5">
                    Modern and latest tools we use for Project Managment , Business Analysis and Data Analytics
                </p>
            </div>
            <!-- ------------CARDS SECTION---------------- -->
            {{-- <div class="sliderUse">
                <div class="slide-track-use">
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="58" height="70"
                                src="{{ asset('assets/microsoft-office-icon.svg') }}" alt="Microsoft office icon"
                                class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Microsoft Suite</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="47" height="70"
                                src="{{ asset('assets/tools-we-use-leveraging-figma-for-collaborative-design-at-sync4tech.svg') }}"
                                alt="Tools We Use - Leveraging Figma for Collaborative Design at Sync4Tech"
                                class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Figma</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="70" height="70"
                                src="{{ asset('assets/smiley-face-icon-for-displaying-a-logo.svg') }}"
                                alt="Smiley face icon for displaying a logo" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Balsamic</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="60" height="60"
                                src="{{ asset('assets/microsoft-suite-logo-for-tools-we-use-section.svg') }}"
                                alt="Microsoft suite logo for tools we use section" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Google Docs</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="70" height="70"
                                src="{{ asset('assets/tools-we-use-featuring-project-management-with-basecamp.svg') }}"
                                alt="Tools We Use - Featuring Project Management with Basecamp" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Base Camp</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="58" height="70"
                                src="{{ asset('assets/microsoft-office-icon.svg') }}" alt="Microsoft office icon"
                                class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Microsoft Suite</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="47" height="70"
                                src="{{ asset('assets/tools-we-use-leveraging-figma-for-collaborative-design-at-sync4tech.svg') }}"
                                alt="Tools We Use - Leveraging Figma for Collaborative Design at Sync4Tech"
                                class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Figma</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="70" height="70"
                                src="{{ asset('assets/smiley-face-icon-for-displaying-a-logo.svg') }}"
                                alt="Smiley face icon for displaying a logo" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Balsamic</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="60" height="60"
                                src="{{ asset('assets/microsoft-suite-logo-for-tools-we-use-section.svg') }}"
                                alt="Microsoft suite logo for tools we use section" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Google Docs</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="70" height="70"
                                src="{{ asset('assets/tools-we-use-featuring-project-management-with-basecamp.svg') }}"
                                alt="Tools We Use - Featuring Project Management with Basecamp" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Base Camp</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="58" height="70"
                                src="{{ asset('assets/microsoft-office-icon.svg') }}" alt="Microsoft office icon"
                                class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Microsoft Suite</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="47" height="70"
                                src="{{ asset('assets/tools-we-use-leveraging-figma-for-collaborative-design-at-sync4tech.svg') }}"
                                alt="Tools We Use - Leveraging Figma for Collaborative Design at Sync4Tech"
                                class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Figma</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="70" height="70"
                                src="{{ asset('assets/smiley-face-icon-for-displaying-a-logo.svg') }}"
                                alt="Smiley face icon for displaying a logo" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Balsamic</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="60" height="60"
                                src="{{ asset('assets/microsoft-suite-logo-for-tools-we-use-section.svg') }}"
                                alt="Microsoft suite logo for tools we use section" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Google Docs</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="70" height="70"
                                src="{{ asset('assets/tools-we-use-featuring-project-management-with-basecamp.svg') }}"
                                alt="Tools We Use - Featuring Project Management with Basecamp" class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Base Camp</p>
                        </div>
                    </div>
                    <div class="slideUse">
                        <div data-animation="fadeIn" data-animation-delay=".3s"
                            class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                            <img loading="lazy" width="47" height="70"
                                src="{{ asset('assets/tools-we-use-leveraging-figma-for-collaborative-design-at-sync4tech.svg') }}"
                                alt="Tools We Use - Leveraging Figma for Collaborative Design at Sync4Tech"
                                class="img-fluid" />
                            <p class="tool-card text-center fw-medium">Figma</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="https://app.powerbi.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/Power_BI.png') }}" alt="Power BI" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Power BI</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://selenium.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/selenium.png') }}" alt="Selenium logo" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Selenium</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.atlassian.com/software/confluence" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/confluence.png') }}" alt="Confluence logo"
                                    class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Confluence</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://asana.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70" src="{{ asset('assets/asana.png') }}"
                                    alt="Asana" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Asana</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://trello.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/trello.png') }}" alt="Trello" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Trello</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://monday.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70" src="{{ asset('assets/moday.png') }}"
                                    alt="Moday" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Moday</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.notion.so/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/notion.png') }}" alt="Notion" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Notion</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.drawio.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/draw_io.png') }}" alt="Draw Io" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">draw.io</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://swagger.io/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/swaggar.png') }}" alt="Swaggar" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Swaggar</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.lucidchart.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/lucidchart.png') }}" alt="Lucidchart" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Lucidchart</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.atlassian.com/software/jira" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/jira_software_logo.png') }}" alt="Jira Software Logo"
                                    class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Jira</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.office.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="58" height="70"
                                    src="{{ asset('assets/microsoft-office-icon.svg') }}" alt="Microsoft office icon"
                                    class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Microsoft Suite</p>

                        </div>

                        </a>
                        <div class="swiper-slide">
                            <a href="https://www.figma.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="47" height="70"
                                    src="{{ asset('assets/tools-we-use-leveraging-figma-for-collaborative-design-at-sync4tech.svg') }}"
                                    alt="Tools We Use - Leveraging Figma for Collaborative Design at Sync4Tech"
                                    class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Figma</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://balsamiq.com/wireframes/desktop/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="70" height="70"
                                    src="{{ asset('assets/smiley-face-icon-for-displaying-a-logo.svg') }}"
                                    alt="Smiley face icon for displaying a logo" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Balsamic</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://docs.google.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="60" height="60"
                                    src="{{ asset('assets/microsoft-suite-logo-for-tools-we-use-section.svg') }}"
                                    alt="Microsoft suite logo for tools we use section" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Google Docs</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://basecamp.com/" target="_blank"
                                class="toolCard d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img loading="lazy" width="70" height="70"
                                    src="{{ asset('assets/tools-we-use-featuring-project-management-with-basecamp.svg') }}"
                                    alt="Tools We Use - Featuring Project Management with Basecamp" class="img-fluid" />
                                <p class="tool-card text-center fw-medium">Base Camp</p>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------PROJECT SECTION---------------- -->
    <section data-animation="fadeIn" data-animation-delay=".5s"
        class="cardsSection toolCardSection d-flex flex-column justify-content-center align-items-center gap-5"
        style="padding-bottom: 75px;">
        <div class="container">
            <!-- ------------TOOLS CONTENT SECTION---------------- -->
            <div class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                <p class="text-orange text-center">PORTFOLIO</p>
                <h2 class="dark-black text-center fw-bold">Our Recent Projects</h2>
                <p class="content-color text-center px-xl-5 pb-lg-4 pb-3">
                    Explore our recent projects for which we have provided our services as Project Managers, Business
                    Analysts, Soclution Architectes and Data Analysts
                </p>
            </div>
            <div class="w-100 d-flex flex-wrap flex-sm-row flex-column justify-content-center align-items-center gap-3 grid-container"
                style="height: 630px; overflow: hidden;">
                <div class="small-div d-flex flex-column x-gap" style="height: 630px;">
                    <div class="position-relative w-100 viewprojectmain">
                        <div class="viewproject d-flex justify-content-center align-items-center w-100"
                            style="
            height: 315px;
            background-image: url({{ asset('assets/quicksteps-portfolio-banner-image.webp') }});
            background-position: center;
            background-size: cover;
          ">
                        </div>
                        <div
                            class="w-100 h-100 d-flex justify-content-center align-items-center position-absolute showbutton top-0">
                            {{-- <button > --}}
                                <a style="border: 2px solid #fb7a00 !important;font-weight:600 !important;"
                                class="btn navButton bg-transparent rounded-0 button-color justify-content-center align-items-center gap-3" href="{{ route('frontend.projects.quicksteps') }}" class="text-orange">Know More</a>
                            {{-- </button> --}}
                        </div>
                    </div>
                    <div class="w-100 d-flex flex-sm-row flex-column gap-3 align-items-center" style="height: 315px">
                        <div class="position-relative w-100 viewprojectmain mt-lg-3">
                            <div class="viewproject w-100 d-flex justify-content-center align-items-center"
                                style="
              background-image: url({{ asset('assets/Quick-Stepsport3.webp') }});
              background-position: center;
              background-size: cover;
              height: 315px;
            ">
                            </div>
                            <div
                                class="w-100 h-100 d-flex justify-content-center align-items-center position-absolute showbutton top-0">
                                {{-- <button > --}}
                                    <a style="border: 2px solid #fb7a00 !important;font-weight:600 !important;"
                                    class="btn navButton bg-transparent rounded-0 button-color justify-content-center align-items-center gap-3 text-orange" href="{{ route('frontend.projects.investme') }}">Know More</a>
                                {{-- </button> --}}
                            </div>
                        </div>
                        <div class="position-relative w-100 viewprojectmain mt-lg-3">
                            <div class="viewproject w-100 d-flex justify-content-center align-items-center"
                                style="
              background-image: url({{ asset('assets/Quick-Stepsport4.webp') }});
              background-position: center;
              background-size: cover;
              height: 315px;
            ">
                            </div>
                            <div
                                class="w-100 h-100 d-flex justify-content-center align-items-center position-absolute showbutton top-0">
                                {{-- <button > --}}
                                    <a style="border: 2px solid #fb7a00 !important;font-weight:600 !important;"
                                    class="btn navButton bg-transparent rounded-0 button-color justify-content-center align-items-center gap-3 text-orange" href="{{ route('frontend.projects.qme-solutions') }}">Know
                                        More</a>
                                {{-- </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="large-div d-flex justify-content-center">
                    <div class="position-relative w-100 viewprojectmain">
                        <div class="viewproject d-flex w-100 justify-content-center align-items-center"
                            style="
            height: 640px;
            background-image: url({{ asset('assets/Quick-Stepsport2.webp') }});
            background-position: center;
            background-size: cover;
          ">
                        </div>
                        <div
                            class="w-100 h-100 d-flex justify-content-center align-items-center position-absolute showbutton top-0">
                            {{-- <button > --}}
                                <a style="border: 2px solid #fb7a00 !important;font-weight:600 !important;"
                                class="btn navButton bg-transparent rounded-0 button-color justify-content-center align-items-center gap-3" href="{{ route('frontend.projects.kutuby') }}" class="text-orange">Know More</a>
                            {{-- </button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <a style="max-width: 209px;" href="{{ route('frontend.projects') }}" class="View-More-btn mt-5">View More
                Projects</a>
            <!-- <a class="View-More-btn mt-4" href="./service.html">View More</a> -->
        </div>
    </section>


    <!-- ------------TRUST SECTION---------------- -->
    <section class="cardsSection toolCardSection d-flex flex-column justify-content-center align-items-center gap-5"
        style="background-color: #E1E7E9">
        <div class="container">
            <!-- ------------TOOLS CONTENT SECTION---------------- -->
            <div data-animation="fadeIn" data-animation-delay=".1s"
                class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                <p class="text-orange text-center">WHO TRUST US</p>
                <h3 class="dark-black text-center fw-bold">
                    Chosen by Customers Worldwide Where Trust Meets Excellence.
                </h3>
                <p class="content-color text-center px-xl-5">
                    Our trusted partners we have worked with globally, we have been furtune and proud to work with some
                    reputed organizations. We have been part of their team and we are servingour partners as well.
                </p>
            </div>
        </div>
    </section>

    <section style="background-color: #E1E7E9">
        <!-- ------------CARDS SECTION ONE---------------- -->
        <div class="swiper fadeSwiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide sw-slide1 ">
                    <div class="section-1">
                        <!-- <img loading="lazy" class="w-100" src="assets/sw-slide2.png"> -->
                        <a target="_blank" href="https://en.wikipedia.org/wiki/Abu_Dhabi">
                            <img loading="lazy" width="137" height="137"
                                src="{{ asset('assets/sync4tech-customer-abu-dabi-company-logo-strengthening-partnerships.png') }}"
                                alt="Sync4Tech Customer Abu Dabi Company Logo, strengthening partnerships">
                        </a>
                        <a target="_blank" href="https://www.walmart.com/">
                            <img loading="lazy" width="137" height="33"
                                src="{{ asset('assets/sync4tech-customer-walmart-leading-retail-chain-logo.png') }}"
                                alt="Sync4Tech Customer Walmart - Leading Retail Chain Logo">
                        </a>
                        <a target="_blank" href="https://www.cisco.com/">
                            <img loading="lazy" width="137" height="72"
                                src="{{ asset('assets/sync4tech-customer-cisco-networking-and-technology-solutions-provider-logo.png') }}"
                                alt="Sync4Tech Customer Cisco - Networking and Technology Solutions Provider Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide sw-slide2">
                    <div class="section-1">
                        <!-- <img loading="lazy" class="w-100" src="assets/sw-slide1.png"> -->
                        <a target="_blank" href="https://www.att.com/">
                            <img loading="lazy" width="134" height="50"
                                src="{{ asset('assets/sync4tech-customeratt-telecommunications-company-logo.png') }}"
                                alt="Sync4Tech CustomerAtt - Telecommunications Company Logo">
                        </a> <a target="_blank" href="https://www.vodafone.com/">
                            <img loading="lazy" width="174" height="50"
                                src="{{ asset('assets/sync4tech-customer-vodafone-telecommunications-company-logo.png') }}"
                                alt="Sync4Tech Customer  Vodafone- Telecommunications Company Logo">
                        </a> <a target="_blank" href="https://www.ibm.com/us-en">
                            <img loading="lazy" width="148" height="48"
                                src="{{ asset('assets/sync4tech-customer-ibm-global-technology-company-logo.png') }}"
                                alt="Sync4Tech Customer IBM- Global Technology Company Logo">
                        </a>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ------------CARDS SECTION---------------- -->
    <section class="pt-lg-5 pb-lg-4 pt-3 pb-3" style="background-color: #E1E7E9">
        <div class="container">
            <div class="sliderUse">
                <div class="slide-track-use">
                    <div class="slideUse">
                        <img loading="lazy" width="129" height="30"
                            src="{{ asset('assets/image-displaying-myquicksteps-logo.svg') }}"
                            alt="Image Displaying MyQuickSteps Logo" class="img-fluid fab" />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="172" height="40"
                            src="{{ asset('assets/image-displaying-tech-house-logo.svg') }}"
                            alt="Image Displaying Tech House Logo" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="178" height="27"
                            src="{{ asset('assets/saudi-bank-digital-digital-banking-solutions-logo.svg') }}"
                            alt="Saudi Bank Digital - Digital Banking Solutions Logo" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <!-- <img loading="lazy" class="kutbay-img" src="./assets/log4.svg" alt="Kutuby" class="img-fluid fab " /> -->
                        <svg width="149" height="40" viewBox="0 0 149 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <img loading="lazy" width="178" height="29"
                            src="{{ asset('assets/image-displaying-express-text-logo.svg') }}"
                            alt="Image Displaying Express Text Logo" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="178" height="39"
                            src="{{ asset('assets/image-displaying-lahebo-logo.svg') }}"
                            alt="Image Displaying Lahebo Logo" class="img-fluid fab" />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="53" height="40"
                            src="{{ asset('assets/image-displaying-tamimi-logo.svg') }}"
                            alt="Image Displaying Tamimi logo" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="129" height="30"
                            src="{{ asset('assets/image-displaying-myquicksteps-logo.svg') }}"
                            alt="Image displaying MyQuickSteps Logo" class="img-fluid fab" />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="172" height="40"
                            src="{{ asset('assets/image-displaying-tech-house-logo.svg') }}"
                            alt="Image Displaying Tech House Logo" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="178" height="27"
                            src="{{ asset('assets/saudi-bank-digital-digital-banking-solutions-logo.svg') }}"
                            alt="Saudi Bank Digital - Digital Banking Solutions Logo" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <!-- <img loading="lazy" src="./assets/log4.svg" alt="Kutuby" class="img-fluid fab " /> -->
                        <svg width="149" height="40" viewBox="0 0 149 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <img loading="lazy" width="178" height="29"
                            src="{{ asset('assets/image-displaying-express-text-logo.svg') }}"
                            alt="Image Displaying Express Text Logo" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="178" height="39"
                            src="{{ asset('assets/image-displaying-lahebo-logo.svg') }}"
                            alt="Image Displaying Lahebo Logo" class="img-fluid fab" />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="53" height="40" src="{{ asset('assets/log7.svg') }}"
                            alt="Logo7" class="img-fluid fab " />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="129" height="30"
                            src="{{ asset('assets/image-displaying-myquicksteps-logo.svg') }}"
                            alt="Image displaying MyQuickSteps Logo" class="img-fluid fab" />
                    </div>
                    <div class="slideUse">
                        <img loading="lazy" width="172" height="40"
                            src="{{ asset('assets/image-displaying-tech-house-logo.svg') }}"
                            alt="Image Displaying Tech House Logo" class="img-fluid fab " />
                    </div>

                </div>
            </div>
        </div>

    </section>


    <!-- ------------BLOG SECTION---------------- -->
    <section class="cardsSection toolCardSection d-flex flex-column justify-content-center align-items-center gap-5"
        style="padding-bottom: 50px;">
        <div class="container">
            <!-- ------------BLOG CONTENT SECTION---------------- -->
            <div data-animation="fadeIn" data-animation-delay=".3s"
                class="contentSection d-flex flex-column justify-content-center align-items-center gap-3">
                <p class="text-orange text-center">BLOGS</p>
                <h2 class="dark-black text-center fw-bold">Our Blog & Articles</h2>
                <p class="content-color text-center px-xl-5 pb-3 ">
                    Explore a world of knowledge with Sync4tech's compelling blogs and articles. Explore expert insights,
                    industry trends, and invaluable tips that propel your path to success.
                </p>
            </div>
            <!-- ------------CARDS SECTION---------------- -->
            <div class="row d-flex  justify-content-center blogzoom flex-md-row flex-column gap-3 w-100">
                <div class="blogCard d-flex blogPost flex-column p-3">
                    <a href="{{ route('frontend.blogs.agile-methodology-and-business-analysis') }}"
                        class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-1">
                        <div class="position-relative w-100"
                            style="
                background-image: url({{ asset('assets/1-number-icon-representing-sync4tech-blog-1-information.webp') }});
                background-size: 100% 100%;
        background-position: center;
        /* max-height: 400px; */
        height: 222px;
        background-repeat: no-repeat;">
                            <button class="position-absolute py-1 px-4 border-0"
                                style=" top: 6%; right: 4%;
                  background: rgba(255, 255, 255, 0.64);
                  backdrop-filter: blur(2px);">
                                <span style="color: #0d3642" class="fw-bold">Business Analysis</span>
                            </button>
                        </div>

                        <h3 class="dark-black text-start ">Agile Methodology and Business Analysis</h3>

                        <h4 class="brown text-start ">
                            Curious about how business analysis and agile development go hand-in-hand?...
                            <span class="text-orange">Read More</span>
                        </h4>
                    </a>
                    <div class="w-100 d-flex justify-content-between align-items-center mt-md-3 mt-1">
                        <div class="d-flex gap-2 justify-content-center align-items-center">
                            <p style="color: #0d3642">Rene Wells •</p>
                            <p style="color: #828282">August 12, 2023</p>
                        </div>
                        <div class="d-lg-flex gap-xl-3 gap-2 position-relative z-3"
                            style="width: 25px;height: 24px;text-align: center;display: flex !important;background: #DBE1E3;justify-items: center;justify-content: center;align-items: center;border-radius: 40px;">
                            <svg data-bs-toggle="modal" data-bs-target="#shareModal" xmlns="http://www.w3.org/2000/svg"
                                width="13" height="14" viewBox="0 0 13 14" fill="none">
                                <path
                                    d="M10.5605 9.59603C10.0492 9.59603 9.58776 9.79721 9.24057 10.1197L4.66159 7.4545C4.69403 7.30524 4.71999 7.15598 4.71999 7.00024C4.71999 6.84449 4.69403 6.69523 4.66159 6.54597L9.23668 3.87879C9.58711 4.20326 10.0479 4.40444 10.5605 4.40444C11.6378 4.40444 12.5074 3.53485 12.5074 2.45759C12.5074 1.38033 11.6378 0.510742 10.5605 0.510742C9.48328 0.510742 8.61369 1.38033 8.61369 2.45759C8.61369 2.61334 8.63965 2.7626 8.67209 2.91185L4.097 5.57904C3.74657 5.25456 3.28581 5.05339 2.77314 5.05339C1.69589 5.05339 0.826294 5.92298 0.826294 7.00024C0.826294 8.07749 1.69589 8.94709 2.77314 8.94709C3.28581 8.94709 3.74657 8.74591 4.097 8.42144L8.67079 11.0938C8.63425 11.2408 8.61508 11.3915 8.61369 11.5429C8.61369 11.9279 8.72787 12.3043 8.94179 12.6245C9.15571 12.9447 9.45977 13.1942 9.81551 13.3415C10.1712 13.4889 10.5627 13.5274 10.9403 13.4523C11.318 13.3772 11.6649 13.1918 11.9372 12.9195C12.2094 12.6472 12.3949 12.3003 12.47 11.9227C12.5451 11.545 12.5065 11.1536 12.3592 10.7979C12.2118 10.4421 11.9623 10.1381 11.6421 9.92414C11.322 9.71021 10.9456 9.59603 10.5605 9.59603Z"
                                    fill="#FB7A00" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- card-2 -->
                <div class="blogCard d-flex blogPost flex-column align-items-md-start align-items-center p-3">
                    <a href="{{ route('frontend.blogs.ensuring-project-success-in-software-development') }}"
                        class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-1">
                        <div class="position-relative w-100"
                            style="
                background-image: url({{ asset('assets/doc-blogs.webp') }});
                background-size: 100% 100%;
        background-position: center;
        /* max-height: 400px; */
        height: 222px;
        background-repeat: no-repeat;
              ">
                            <button class="position-absolute py-1 px-4 border-0"
                                style="
                  top: 6%;
                  right: 4%;
                  background: rgba(255, 255, 255, 0.64);
                  backdrop-filter: blur(2px);
                ">
                                <span style="color: #0d3642" class="fw-bold">Agile Development</span>
                            </button>
                        </div>
                        <h3 class="dark-black text-start ">Ensuring Project Success in Software Development</h3>
                        <h4 class="brown text-start ">
                            In the fast-paced world of software development, success hinges on many factors,..
                            <span class="text-orange">Read More</span>
                        </h4>
                    </a>
                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-2 justify-content-center align-items-center">
                            <p style="color: #0d3642">Rene Wells •</p>
                            <p style="color: #828282">August 12, 2023</p>
                        </div>
                        <div class="d-lg-flex gap-xl-3 gap-2"
                            style="width: 25px;height: 24px;text-align: center;display: flex !important;background: #DBE1E3;justify-items: center;justify-content: center;align-items: center;border-radius: 40px;">
                            <svg data-bs-toggle="modal" data-bs-target="#shareModal" xmlns="http://www.w3.org/2000/svg"
                                width="13" height="14" viewBox="0 0 13 14" fill="none">
                                <path
                                    d="M10.5605 9.59603C10.0492 9.59603 9.58776 9.79721 9.24057 10.1197L4.66159 7.4545C4.69403 7.30524 4.71999 7.15598 4.71999 7.00024C4.71999 6.84449 4.69403 6.69523 4.66159 6.54597L9.23668 3.87879C9.58711 4.20326 10.0479 4.40444 10.5605 4.40444C11.6378 4.40444 12.5074 3.53485 12.5074 2.45759C12.5074 1.38033 11.6378 0.510742 10.5605 0.510742C9.48328 0.510742 8.61369 1.38033 8.61369 2.45759C8.61369 2.61334 8.63965 2.7626 8.67209 2.91185L4.097 5.57904C3.74657 5.25456 3.28581 5.05339 2.77314 5.05339C1.69589 5.05339 0.826294 5.92298 0.826294 7.00024C0.826294 8.07749 1.69589 8.94709 2.77314 8.94709C3.28581 8.94709 3.74657 8.74591 4.097 8.42144L8.67079 11.0938C8.63425 11.2408 8.61508 11.3915 8.61369 11.5429C8.61369 11.9279 8.72787 12.3043 8.94179 12.6245C9.15571 12.9447 9.45977 13.1942 9.81551 13.3415C10.1712 13.4889 10.5627 13.5274 10.9403 13.4523C11.318 13.3772 11.6649 13.1918 11.9372 12.9195C12.2094 12.6472 12.3949 12.3003 12.47 11.9227C12.5451 11.545 12.5065 11.1536 12.3592 10.7979C12.2118 10.4421 11.9623 10.1381 11.6421 9.92414C11.322 9.71021 10.9456 9.59603 10.5605 9.59603Z"
                                    fill="#FB7A00" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- card-3 -->
                <div class="blogCard d-flex blogPost flex-column align-items-md-start align-items-center p-3">
                    <a href="{{ route('frontend.blogs.the-benefits-of-docs-in-software-development') }}"
                        class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-1">
                        <div class="position-relative w-100"
                            style="
                background-image: url({{ asset('assets/2-blog-banner.webp') }});
                background-size: 100% 100%;
        background-position: center;
        /* max-height: 400px; */
        height: 222px;
        background-repeat: no-repeat;
              ">
                            <button class="position-absolute py-1 px-4 border-0"
                                style="
                  top: 6%;
                  right: 4%;
                  background: rgba(255, 255, 255, 0.64);
                  backdrop-filter: blur(2px);
                ">
                                <span style="color: #0d3642" class="fw-bold">Technical Writing</span>
                            </button>
                        </div>

                        <h3 class="dark-black text-start ">The Benefits of docs in Software Development</h3>

                        <h4 class="brown text-start ">
                            Simply believing that software development is solely about writing code to solve...
                            <span class="text-orange">Read More</span>
                        </h4>
                    </a>

                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-2 justify-content-center align-items-center">
                            <p style="color: #0d3642">Rene Wells •</p>
                            <p style="color: #828282">August 12, 2023</p>
                        </div>
                        <div class="d-lg-flex gap-xl-3 gap-2"
                            style="width: 25px;height: 24px;text-align: center;display: flex !important;background: #DBE1E3;justify-items: center;justify-content: center;align-items: center;border-radius: 40px;">
                            <svg data-bs-toggle="modal" data-bs-target="#shareModal" xmlns="http://www.w3.org/2000/svg"
                                width="13" height="14" viewBox="0 0 13 14" fill="none">
                                <path
                                    d="M10.5605 9.59603C10.0492 9.59603 9.58776 9.79721 9.24057 10.1197L4.66159 7.4545C4.69403 7.30524 4.71999 7.15598 4.71999 7.00024C4.71999 6.84449 4.69403 6.69523 4.66159 6.54597L9.23668 3.87879C9.58711 4.20326 10.0479 4.40444 10.5605 4.40444C11.6378 4.40444 12.5074 3.53485 12.5074 2.45759C12.5074 1.38033 11.6378 0.510742 10.5605 0.510742C9.48328 0.510742 8.61369 1.38033 8.61369 2.45759C8.61369 2.61334 8.63965 2.7626 8.67209 2.91185L4.097 5.57904C3.74657 5.25456 3.28581 5.05339 2.77314 5.05339C1.69589 5.05339 0.826294 5.92298 0.826294 7.00024C0.826294 8.07749 1.69589 8.94709 2.77314 8.94709C3.28581 8.94709 3.74657 8.74591 4.097 8.42144L8.67079 11.0938C8.63425 11.2408 8.61508 11.3915 8.61369 11.5429C8.61369 11.9279 8.72787 12.3043 8.94179 12.6245C9.15571 12.9447 9.45977 13.1942 9.81551 13.3415C10.1712 13.4889 10.5627 13.5274 10.9403 13.4523C11.318 13.3772 11.6649 13.1918 11.9372 12.9195C12.2094 12.6472 12.3949 12.3003 12.47 11.9227C12.5451 11.545 12.5065 11.1536 12.3592 10.7979C12.2118 10.4421 11.9623 10.1381 11.6421 9.92414C11.322 9.71021 10.9456 9.59603 10.5605 9.59603Z"
                                    fill="#FB7A00" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>


            <a class="View-More-btn" href="{{ route('frontend.blogs') }}" class="text-orange">View More</a>

            <!-- Modal -->
            <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shareModalContent p-md-5 p-3 d-flex flex-column gap-lg-3 gap-2">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <h5 class="modal-title text-center" id="exampleModalLabel">
                                Share your Blog
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <p>
                            Feel free to distribute this blog through social media channels
                        </p>

                        <div class="d-flex gap-lg-4 gap-3 pt-3 bottomImg">
                            <a href="https://www.facebook.com/sync4tech.co" target="_blank">
                                <i class="fa-brands fa-facebook-f text-orange p-2 rounded-circle border"
                                    style="opacity: 1; border: 1px solid orange !important"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa-brands fa-x-twitter text-orange p-2 rounded-circle border"
                                    style="opacity: 1; border: 1px solid orange !important"></i>
                            </a>
                            <a href="https://www.instagram.com/sync4tech.co/" target="_blank">
                                <i class="fa-brands fa-instagram text-orange p-2 rounded-circle border"
                                    style="opacity: 1; border: 1px solid orange !important"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/sync4tech-co/?viewAsMember=true" target="_blank">
                                <i class="fa-brands fa-linkedin-in text-orange p-2 rounded-circle border"
                                    style="opacity: 1; border: 1px solid orange !important"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ------------CONTACT SECTION---------------- -->
    <section data-animation="fadeIn" data-animation-delay=".3s" id="contactSection"
        class="cardsSection flex-wrap contactSection w-100 toolCardSection d-flex flex-column justify-content-center gap-5"
        style="background-color: #e7ebec; padding-bottom: 80px ;">
        <div class="container">
            <div class="d-flex flex-column gap-lg-3 gap-2">
                <p class="text-orange text-center fw-medium">CONTACT US</p>
                <h2 class="dark-black text-center fw-bold">Let's Talk</h2>
                <p class="content-color text-center px-xl-5 mx-xl-5 pb-lg-5 pb-3 contentsectioncontent">
                    Get in touch with Sync4tech! Your inquiries matter to us. Contact our team for prompt and personalized
                    assistance – turning your questions into solutions and ideas into action.
                </p>
            </div>
            <div class="d-flex flex-md-row flex-column gap-3" style="align-items: center;">
                <div class="subDiv d-flex justify-content-center align-items-center position-relative">
                    <div class="frm-info-bg">
                        <div class="contect-office">
                            <h5>Pakistan Office</h5>
                            <p> 4th Floor, Plaza No. 144/2, Block B, Bankers Town, Lahore</p>
                            <a href="mailto:Info.pk@zaptatech.com">Info.pk@sync4tech.co</a>
                        </div>
                        <div class="contect-office">
                            <h5>UAE Office</h5>
                            <p> Q09, France Cluster, International City Dubai, United Arab
                                Emirates</p>
                            <a href="mailto:Info.uae@zaptatech.com">Info.uae@sync4tech.co</a>
                        </div>

                        <div class="contect-office">
                            <h5>UK Office</h5>
                            <p> West Tower, 371 Deansgate, Manchester M15 4UP, United Kingdom</p>
                            <a href="mailto:Info.uk@zaptatech.com">Info.uk@sync4tech.co</a>
                        </div>

                        <div class="d-flex gap-lg-4 justify-content-sm-start gap-3 pt-3 bottomImg">
                            <a href="https://www.facebook.com/sync4tech.co" target="_blank"
                                style="text-decoration: none !important; border: none;">
                                <i class="fa-brands fa-facebook-f text-white p-2 rounded-circle border"
                                    style="opacity: 0.6;width: 34px;height: 34px;text-align: center;"></i>
                            </a>
                            <a href="https://twitter.com/sync4tech" target="_blank"
                                style="text-decoration: none !important; border: none;">
                                <!-- <i class="fa-brands fa-x-twitter"></i> -->
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
                    <!-- <div class="image-overlay-text position-absolute d-flex flex-column text-white gap-3">
                                                                                                        
                                                                                                        
                                                                                                        
                                                                                                       
                                                                                                      </div> -->
                </div>
                <div class="subDiv formSection d-flex flex-column gap-2 align-items-md-start align-items-center">
                    <form action="{{ route('frontend.contacts.store') }}"
                        class="d-flex ajax-submit flex-column gap-3 align-items-md-start align-items-center ms-lg-2 w-100 ps-lg-5 ps-2 pe-lg-5 pe-2"
                        id="contactUs" check_validate='false' data-success-fn="contactUsSuccess"
                        data-error-fn="contactUsError" form-reset="true">
                        <div class="d-flex flex-column gap-2 w-100 pos-rev">
                            <label for="contactname">Name <span class="text-orange">*</span>
                            </label>
                            <input type="text" name="name" id="contactname" placeholder="Enter Name"
                                class="form-control py-2 px-3 rounded-0 bg-transparent" />
                            <div id="contactnameError" class="text-danger pos-abs"></div>
                        </div>
                        <div class="d-flex flex-column gap-2 w-100 pos-rev">
                            <label for="contactemail">Email <span class="text-orange">*</span>
                            </label>
                            <input type="text" name="email" id="contactemail" placeholder="abc@gmail.com"
                                class="form-control py-2 px-3 rounded-0 bg-transparent" />
                            <div id="contactemailError" class="text-danger pos-abs"></div>
                        </div>
                        <div class="d-flex flex-column gap-2 w-100 pos-rev">
                            <label for="contactphoneNum">Phone</label>
                            <input type="tel" name="phone_no" id="contactphoneNum"
                                class="form-control py-2 px-5 rounded-0 bg-transparent" />
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                            <script>
                                var input = document.querySelector("#contactphoneNum");
                                var iti = window.intlTelInput(input, {
                                    separateDialCode: true,
                                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
                                });
                                // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
                                window.iti = iti;
                            </script>
                            <div id="contactphoneNumError" class="text-danger pos-abs"></div>
                        </div>
                        <div class="d-flex flex-column gap-2 w-100">
                            <label for="message">Message</label>
                            <textarea name="message" class="bg-transparent px-3 form-control resize-txt" placeholder="Enter your message here..."
                                id="message"></textarea>
                        </div>

                        <button style="max-width: 175px; margin: 30px 0 0;" type="submit" class="View-More-btn">Send
                            Message</button>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- </div> -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // var swiper = new Swiper(".mySwiper", {
        //     freeMode: true,
        //     loop: true,
        //     allowTouchMove: false,
        //     autoplay: {
        //     delay: 0,
        //     disableOnInteraction: false,
        //     },
        //     slidesPerView: 5,
        //     spaceBetween: 20,
        //     speed: 1000
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            centeredSlides: false,
            centerInsufficientSlides: true,
            simulateTouch: false,
            spaceBetween: 120,
            loop: true,
            autoplay: true,
            autoplay: {
                delay: 0
            },
            // freeMode: true,
            speed: 2000,
        })
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },

        // // Responsive breakpoints
        // breakpoints: {
        //     320: {
        //         slidesPerView: 1,

        //     },
        //     550: {
        //         slidesPerView: 1,

        //     },
        //     768: {
        //         slidesPerView: 2,

        //     },
        //     1000: {
        //         slidesPerView: 2,

        //     },
        //     1200: {
        //         slidesPerView: 5,

        //     },
        //     1500: {
        //         slidesPerView: 4,

        //     },
        // },

        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },
        // });
    </script>
@endsection
