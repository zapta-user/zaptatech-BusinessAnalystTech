@extends('layouts.default')
@section('title', 'Blogs')
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection focusBlog flex-column gap-1 d-flex align-items-start justify-content-center  flex-shrink-0"
        style="
        background-image: url('{{ asset('assets/blogs-banner.webp') }}');
        background-size: cover;
        background-position: center;
      ">
        <div class="d-flex gap-2 align-items-center ">
            <a style="text-decoration: none;" href="{{ route('frontend.home') }}">
                <span class="text-white">HOME</span>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                    fill="#ACACAC" />
            </svg>
            <a style="text-decoration: none;" href="{{ route('frontend.blogs') }}">
                <h4 class="text-orange text-center pt-md-0 pt-1 mb-0">BLOGS</h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">BLOGS</h1>
        <p class="text-start px-md-0 " style="color: #dfdfdf">
            Welcome to Sync4Tech's Blog Hub—where knowledge meets innovation. Stay informed, inspired, and empowered with
            our latest tech and business analysis insights
        </p>
    </div>
    <!-- ------------------------BLOG SECTION--------------- -->
    <div class="container">
        <div class="cardsSection d-flex flex-column justify-content-center gap-md-5 gap-3 ">
            <!-- ------------BLOG CONTENT SECTION---------------- -->
            <div class="contentSection d-flex px-5 flex-column gap-3 ">
                <h2 class="dark-black text-lg-start text-center fw-bold" style="padding: 0px !important;">
                    Recent Blogs
                </h2>
            </div>
            <!-- -----------BLOG POST------------ -->
            <div class="w-100 row d-flex align-items-lg-start justify-content-center gap-3">
                <div
                    class="col-xl-7 col-lg-5 order-lg-1 order-2 d-flex flex-lg-column flex-sm-row flex-column gap-3 justify-content-center">
                    <a style="text-decoration: none;"
                        href="{{ route('frontend.blogs.agile-methodology-and-business-analysis') }}">
                        <div
                            class="blogCard w-100 ms-lg-2 d-flex flex-column align-items-sm-start align-items-center justify-content-center gap-g-4 gap-3 p-3">
                            <div class="position-relative w-100">
                                <div class="w-100 blogcardImage"
                                    style="
                    background-image: url({{ asset('assets/blogImage1.webp') }});
                    background-size: cover;
                  ">
                                </div>
                                <button class="position-absolute py-2 px-4 border-0"
                                    style="
                    top: 3%;
                    right: 4%;
                    background: rgba(255, 255, 255, 0.64);
                    backdrop-filter: blur(2px);
                  ">
                                    <span style="color: #0d3642" class="fw-bold">Business Analysis</span>
                                </button>
                            </div>
                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-center align-items-center gap-2 py-2 px-3">
                                    <p style="color: #828282;margin-bottom: 0;">4.5</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                        viewBox="0 0 18 19" fill="none">
                                        <path
                                            d="M4.36875 17L5.5875 11.7313L1.5 8.1875L6.9 7.71875L9 2.75L11.1 7.71875L16.5 8.1875L12.4125 11.7313L13.6312 17L9 14.2063L4.36875 17Z"
                                            fill="#FB7A00" />
                                    </svg>
                                </div>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <p style="color: #828282; ">5 min read</p>
                                </div>
                            </div>


                            <h3 class="dark-black text-sm-start text-center">
                                Agile Methodology and Business Analysis
                            </h3>
                            <h4 class="brown text-sm-start text-center">
                                Curious about how business analysis and agile development go hand-in-hand? Don't fret! Our
                                article is here
                                to unveil the mystery and provide you with a comprehensive guide.
                            </h4>
                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <p style="color: #0d3642">Rene Wells •</p>
                                    <p style="color: #828282">August 12, 2023</p>
                                </div>
                                <div class="d-lg-flex gap-xl-3 gap-2"
                                    style="width: 25px;height: 24px;text-align: center;display: flex !important;background: #DBE1E3;justify-items: center;justify-content: center;align-items: center;border-radius: 40px;">
                                    <svg data-bs-toggle="modal" data-bs-target="#shareModal"
                                        xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                        fill="none">
                                        <path
                                            d="M10.5605 9.59603C10.0492 9.59603 9.58776 9.79721 9.24057 10.1197L4.66159 7.4545C4.69403 7.30524 4.71999 7.15598 4.71999 7.00024C4.71999 6.84449 4.69403 6.69523 4.66159 6.54597L9.23668 3.87879C9.58711 4.20326 10.0479 4.40444 10.5605 4.40444C11.6378 4.40444 12.5074 3.53485 12.5074 2.45759C12.5074 1.38033 11.6378 0.510742 10.5605 0.510742C9.48328 0.510742 8.61369 1.38033 8.61369 2.45759C8.61369 2.61334 8.63965 2.7626 8.67209 2.91185L4.097 5.57904C3.74657 5.25456 3.28581 5.05339 2.77314 5.05339C1.69589 5.05339 0.826294 5.92298 0.826294 7.00024C0.826294 8.07749 1.69589 8.94709 2.77314 8.94709C3.28581 8.94709 3.74657 8.74591 4.097 8.42144L8.67079 11.0938C8.63425 11.2408 8.61508 11.3915 8.61369 11.5429C8.61369 11.9279 8.72787 12.3043 8.94179 12.6245C9.15571 12.9447 9.45977 13.1942 9.81551 13.3415C10.1712 13.4889 10.5627 13.5274 10.9403 13.4523C11.318 13.3772 11.6649 13.1918 11.9372 12.9195C12.2094 12.6472 12.3949 12.3003 12.47 11.9227C12.5451 11.545 12.5065 11.1536 12.3592 10.7979C12.2118 10.4421 11.9623 10.1381 11.6421 9.92414C11.322 9.71021 10.9456 9.59603 10.5605 9.59603Z"
                                            fill="#FB7A00" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a style="text-decoration: none;"
                        href="{{ route('frontend.blogs.ensuring-project-success-in-software-development') }}">
                        <div class="blogCard w-100 ms-lg-2 d-flex flex-column align-items-sm-start align-items-center justify-content-center gap-g-4 gap-3 p-3"
                            style="">
                            <div class="position-relative w-100">
                                <div class="w-100 blogcardImage"
                                    style="
                    background-image: url({{ asset('assets/blogImage2.webp') }});
                    background-size: cover;
                  ">
                                </div>
                                <button class="position-absolute py-2 px-4 border-0"
                                    style="
                    top: 3%;
                    right: 4%;
                    background: rgba(255, 255, 255, 0.64);
                    backdrop-filter: blur(2px);
                  ">
                                    <span style="color: #0d3642" class="fw-bold">Agile Development</span>
                                </button>
                            </div>
                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-center align-items-center gap-2 py-2 px-3">
                                    <p style="color: #828282; margin-bottom: 0;">4.5</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                        viewBox="0 0 18 19" fill="none">
                                        <path
                                            d="M4.36875 17L5.5875 11.7313L1.5 8.1875L6.9 7.71875L9 2.75L11.1 7.71875L16.5 8.1875L12.4125 11.7313L13.6312 17L9 14.2063L4.36875 17Z"
                                            fill="#FB7A00" />
                                    </svg>
                                </div>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <p style="color: #828282">5 min read</p>
                                </div>
                            </div>
                            <h3 class="dark-black text-sm-start text-center">
                                Ensuring Project Success in Software Development
                            </h3>
                            <h4 class="brown text-sm-start text-center">
                                In the fast-paced world of software development, success hinges on many factors, and one of
                                the most
                                critical is requirements gathering.
                            </h4>
                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <p style="color: #0d3642">Rene Wells •</p>
                                    <p style="color: #828282">August 12, 2023</p>
                                </div>
                                <div class="d-lg-flex gap-xl-3 gap-2"
                                    style="width: 25px;height: 24px;text-align: center;display: flex !important;background: #DBE1E3;justify-items: center;justify-content: center;align-items: center;border-radius: 40px;">
                                    <svg data-bs-toggle="modal" data-bs-target="#shareModal"
                                        xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                        fill="none">
                                        <path
                                            d="M10.5605 9.59603C10.0492 9.59603 9.58776 9.79721 9.24057 10.1197L4.66159 7.4545C4.69403 7.30524 4.71999 7.15598 4.71999 7.00024C4.71999 6.84449 4.69403 6.69523 4.66159 6.54597L9.23668 3.87879C9.58711 4.20326 10.0479 4.40444 10.5605 4.40444C11.6378 4.40444 12.5074 3.53485 12.5074 2.45759C12.5074 1.38033 11.6378 0.510742 10.5605 0.510742C9.48328 0.510742 8.61369 1.38033 8.61369 2.45759C8.61369 2.61334 8.63965 2.7626 8.67209 2.91185L4.097 5.57904C3.74657 5.25456 3.28581 5.05339 2.77314 5.05339C1.69589 5.05339 0.826294 5.92298 0.826294 7.00024C0.826294 8.07749 1.69589 8.94709 2.77314 8.94709C3.28581 8.94709 3.74657 8.74591 4.097 8.42144L8.67079 11.0938C8.63425 11.2408 8.61508 11.3915 8.61369 11.5429C8.61369 11.9279 8.72787 12.3043 8.94179 12.6245C9.15571 12.9447 9.45977 13.1942 9.81551 13.3415C10.1712 13.4889 10.5627 13.5274 10.9403 13.4523C11.318 13.3772 11.6649 13.1918 11.9372 12.9195C12.2094 12.6472 12.3949 12.3003 12.47 11.9227C12.5451 11.545 12.5065 11.1536 12.3592 10.7979C12.2118 10.4421 11.9623 10.1381 11.6421 9.92414C11.322 9.71021 10.9456 9.59603 10.5605 9.59603Z"
                                            fill="#FB7A00" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="col-xl-4 col-lg-6 order-lg-2 order-1 d-flex flex-column gap-3 justify-content-center align-items-start">
                    <div class="w-100 d-flex align-items-center gap-1 py-xl-3 py-sm-2 py-1 px-3 position-relative"
                        style="background-color: #f9f9f9">
                        <input type="text" name="search" id="searchInput" placeholder="Search"
                            class="border-0 form-control bg-transparent" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                            fill="none">
                            <path
                                d="M13.5233 12.4628L16.7355 15.6742L15.6742 16.7355L12.4628 13.5233C11.2678 14.4812 9.7815 15.0022 8.25 15C4.524 15 1.5 11.976 1.5 8.25C1.5 4.524 4.524 1.5 8.25 1.5C11.976 1.5 15 4.524 15 8.25C15.0022 9.7815 14.4812 11.2678 13.5233 12.4628ZM12.0187 11.9062C12.9706 10.9274 13.5022 9.61532 13.5 8.25C13.5 5.34975 11.1503 3 8.25 3C5.34975 3 3 5.34975 3 8.25C3 11.1503 5.34975 13.5 8.25 13.5C9.61532 13.5022 10.9274 12.9706 11.9062 12.0187L12.0187 11.9062Z"
                                fill="#BCBCBC" />
                        </svg>
                        <div class="search-result-container flex-column justify-content-center align-items-lg-start align-items-center w-100 start-0 border rounded-3 p-3 position-absolute"
                            style="top: 50px; background-color: #f9f9f9"></div>
                    </div>
                    <div class="d-flex flex-column trendingBlog w-100  gap-lg-3 gap-1 p-4"
                        style="background-color: #f9f9f9">
                        <h4 class="link-color">Top Trending Blogs</h4>
                        <a href="{{ route('frontend.blogs.agile-methodology-and-business-analysis') }}">
                            <div class="d-flex gap-xl-3 gap-2 py-3 px-2 w-100 align-items-center"
                                style="border-bottom: 1px solid #ddd">
                                <img src="{{ asset('assets/1-number-icon-representing-sync4tech-blog-1-information.svg') }}"
                                    alt="1 Number Icon - Representing Sync4Tech Blog 1 Information" class="img-fluid" />
                                <div class="d-flex flex-column">
                                    <p class="blog-heading fw-medium">
                                        Agile Methodology and Business Analysis
                                    </p>
                                    <span style="color: #969696">5 min • August 12, 2023</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('frontend.blogs.ensuring-project-success-in-software-development') }}">
                            <div class="d-flex gap-xl-3 gap-2 py-3 px-2 w-100 align-items-center"
                                style="border-bottom: 1px solid #ddd">
                                <img src="{{ asset('assets/2-number-icon-representing-sync4tech-blog-4-numerical-information.svg') }}"
                                    alt="2 Number Icon - Representing Sync4Tech Blog 4 Numerical Information"
                                    class="img-fluid" />
                                <div class="d-flex flex-column">
                                    <p class="blog-heading fw-medium">
                                        Ensuring Project Success in Software Development
                                    </p>
                                    <span style="color: #969696">5 min • August 12, 2023</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('frontend.blogs.the-benefits-of-docs-in-software-development') }}">
                            <div class="d-flex gap-xl-3 gap-2 py-3 px-2 w-100 align-items-center"
                                style="border-bottom: 1px solid #ddd">
                                <img src="{{ asset('assets/3-number-icon-representing-sync4tech-blog-3-information.svg') }}"
                                    alt="3 Number Icon - Representing Sync4Tech Blog 3 Information" class="img-fluid" />
                                <div class="d-flex flex-column">
                                    <p class="blog-heading fw-medium">
                                        The Benefits of docs in Software Development
                                    </p>
                                    <span style="color: #969696">5 min • August 12, 2023</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('frontend.blogs.the-power-of-business-analysis-in-accelerating') }}">
                            <div class="d-flex gap-xl-3 gap-2 py-3 px-2 w-100 align-items-center"
                                style="border-bottom: 1px solid #ddd">
                                <img src="{{ asset('assets/4-number-icon-representing-sync4tech-blog-4-information.svg') }}"
                                    alt="4 Number Icon - Representing Sync4Tech Blog 4 Information" class="img-fluid" />
                                <div class="d-flex flex-column">
                                    <p class="blog-heading fw-medium">
                                        The Power of Business Analysis in Accelerating
                                    </p>
                                    <span style="color: #969696">5 min • August 12, 2023</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('frontend.blogs.how-to-create-effective-software-documentation') }}">
                            <div class="d-flex gap-xl-3 gap-2 py-3 px-2 w-100 align-items-center">
                                <img src="{{ asset('assets/5-number-icon-representing-sync4tech-blog-5-information.svg') }}"
                                    alt="5 Number Icon - Representing Sync4Tech Blog 5 Information" class="img-fluid" />
                                <div class="d-flex flex-column">
                                    <p class="blog-heading fw-medium">
                                        How to Create Effective Software Documentation
                                    </p>
                                    <span style="color: #969696">5 min • August 12, 2023</span>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="d-flex flex-column trendingBlog w-100  gap-lg-3 gap-1 p-4 pb-2"
                        style="background-color: #f9f9f9">
                        <h4 class="link-color">Categories</h4>
                        <div class="d-flex flex-column gap-1 w-100">
                            <div class="d-flex py-3 px-2 w-100 align-items-center" style="border-bottom: 1px solid #ddd">
                                <p class="blog-heading fw-medium">Business Analysis</p>
                            </div>
                            <div class="d-flex py-3 px-2 w-100 align-items-center" style="border-bottom: 1px solid #ddd">
                                <p class="blog-heading fw-medium">Agile Development</p>
                            </div>
                            <div class="d-flex py-3 px-2 w-100 align-items-center" style="border-bottom: 1px solid #ddd">
                                <p class="blog-heading fw-medium">Technical Writing</p>
                            </div>

                            <div class="d-flex py-3 px-2 w-100 align-items-center" style="border-bottom: 1px solid #ddd">
                                <p class="blog-heading fw-medium">Requirement Gathering</p>
                            </div>

                            <div class="d-flex py-3 px-2 w-100 align-items-center" style="border-bottom: 1px solid #ddd">
                                <p class="blog-heading fw-medium">Business Process Model</p>
                            </div>

                            <div class="d-flex py-3 px-2 w-100 align-items-center">
                                <p class="blog-heading fw-medium">Change management</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------BLOG SECTION--------------- -->
    <div class="cardsSection d-flex flex-column justify-content-center gap-md-5 gap-1 allBlogSec"
        style="background-color: #e7ebec">
        <!-- ------------BLOG CONTENT SECTION---------------- -->
        <div class="contentSection blogContentSection px-4 d-flex flex-column gap-3">
            <h2 class="dark-black text-lg-start text-center fw-bold">All Blogs</h2>
        </div>
        <!-- -----------BLOG POST------------ -->
        <div class="row d-flex  justify-content-center blogzoom flex-md-row flex-column gap-3 w-100">
            <div class="blogCard d-flex blogPost flex-column  p-3">
                <a href="{{ route('frontend.blogs.agile-methodology-and-business-analysis') }}"
                    class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-2">
                    <div class="position-relative w-100"
                        style="
              background-image: url({{ asset('assets/1-number-icon-representing-sync4tech-blog-1-information.webp') }});
              background-size: 100% 100%;
        background-position: center;
        /* max-height: 400px; */
        height: 222px;
        background-repeat: no-repeat;">
                        <button class="position-absolute py-1 px-4 border-0 fw-bold"
                            style=" top: 6%; right: 4%;
                background: rgba(255, 255, 255, 0.64);
                backdrop-filter: blur(2px);">
                            <span style="color: #0d3642">Business Analysis</span>
                        </button>
                    </div>

                    <h3 class="dark-black text-start">Agile Methodology and Business Analysis</h3>

                    <h4 class="brown text-start">
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
                    class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-2">
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
                            <span style="color: #0d3642" class="fw-bold">Agile Development</span>
                        </button>
                    </div>
                    <h3 class="dark-black text-start">Ensuring Project Success in Software Development</h3>
                    <h4 class="brown text-start">
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
                    class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-2">
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
                            <span style="color: #0d3642" class="fw-bold">Technical Writing</span>
                        </button>
                    </div>

                    <h3 class="dark-black text-start">The Benefits of docs in Software Development</h3>

                    <h4 class="brown text-start">
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
            <!-- card-4 -->
            <div class="blogCard d-flex blogPost flex-column align-items-md-start align-items-center p-3">
                <a
                    href="{{ route('frontend.blogs.the-power-of-business-analysis-in-accelerating') }}"class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-2">
                    <div class="position-relative w-100"
                        style="
            background-image: url({{ asset('assets/4-number-icon-representing-sync4tech-blo-4-numerical-information.webp') }});
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
                            <span style="color: #0d3642" class="fw-bold">Requirement Gathering</span>
                        </button>
                    </div>

                    <h3 class="dark-black text-start">The Power of Business Analysis in Accelerating </h3>

                    <h4 class="brown text-start">
                        Digital transformation” may be the decade's buzzword; however, business...
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
            <!-- card-5 -->
            <div class="blogCard d-flex blogPost flex-column align-items-md-start align-items-center gap-1 p-3">
                <a
                    href="{{ route('frontend.blogs.how-to-create-effective-software-documentation') }}"class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-2">
                    <div class="position-relative w-100"
                        style="
          background-image: url({{ asset('assets/5-number-icon-representing-sync4tech-blo-4-numerical-information.webp') }});
          background-size: 100% 100%;
        background-position: center;
        /* max-height: 400px; */
        height: 222px;
        background-repeat: no-repeat; ">
                        <button class="position-absolute py-1 px-4 border-0"
                            style="top: 6%; right: 4%;background: rgba(255, 255, 255, 0.64); backdrop-filter: blur(2px); ">
                            <span style="color: #0d3642" class="fw-bold">Agile Development</span>
                        </button>
                    </div>
                    <h3 class="dark-black text-start">How to Create Effective Software Documentation</h3>
                    <h4 class="brown text-start">
                        Effective software documentation is vital to successful software development,..
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
            <!-- card-6 -->
            <div class="blogCard d-flex blogPost flex-column align-items-md-start align-items-center  p-3">
                <a
                    href="{{ route('frontend.blogs.how-to-implement-agile-requirement-gathering') }}"class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-2">
                    <div class="position-relative w-100"
                        style="
        background-image: url({{ asset('assets/6-number-icon-representing-sync4tech-blo-4-numerical-information.webp') }});
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
                            <span style="color: #0d3642" class="fw-bold">Business Analysis</span>
                        </button>
                    </div>


                    <h3 class="dark-black text-start">How to Implement Agile Requirement Gathering</h3>

                    <h4 class="brown text-start">
                        Whether you’re a project manager, a business analyst, or a Software Service...
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
        <br>
        <ul class="pagination d-flex list-unstyled p-0 justify-content-center align-items-center gap-lg-5 gap-4 w-100">
        </ul>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shareModalContent p-md-5 p-3 d-flex flex-column gap-lg-3 gap-2">
                <div class="d-flex w-100 justify-content-between align-items-center">
                    <h5 class="modal-title text-center" id="exampleModalLabel">
                        Share your Blog
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <p>Feel free to distribute this blog through social media channels</p>

                <div class="d-flex gap-lg-4 gap-3 pt-3 bottomImg">
                    <a href="https://www.facebook.com/sync4tech.co" target="_blank">
                        <i class="fa-brands fa-facebook-f text-orange p-2 rounded-circle border"
                            style="
                  opacity: 1;
                  border: 1px solid orange !important;
                "></i>
                    </a>
                    <a href="https://twitter.com/sync4tech" target="_blank">
                        <i class="fa-brands fa-x-twitter text-orange p-2 rounded-circle border"
                            style="
                  opacity: 1;
                  border: 1px solid orange !important;
                "></i>
                    </a>
                    <a href="https://www.instagram.com/sync4tech.co/" target="_blank">
                        <i class="fa-brands fa-instagram text-orange p-2 rounded-circle border"
                            style="
                  opacity: 1;
                  border: 1px solid orange !important;
                "></i>
                    </a>
                    <a href="https://www.linkedin.com/company/sync4tech-co/?viewAsMember=true" target="_blank">
                        <i class="fa-brands fa-linkedin-in text-orange p-2 rounded-circle border"
                            style="
                  opacity: 1;
                  border: 1px solid orange !important;
                "></i>
                    </a>
                </div>
            </div>
        </div>
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
                    <a href="#" class="text-orange">Become Our Partner</a>
                </button>
            </div>


            <div class="button-wrap">
                <button style="margin-top: 0;" data-bs-toggle="modal" data-bs-target="#bookapp" type="button"
                    class="btn animated-btn navButton consultaion-button rounded-0 button-color py-lg-3 py-2 px-lg-4 px-3 d-flex justify-content-center align-items-center gap-3">
                    <a href="#" class="text-orange">Book A Consultation</a>
                </button>
            </div>
            <!-- Modal -->
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
