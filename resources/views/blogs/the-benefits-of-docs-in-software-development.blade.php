@extends('layouts.default')
@section('title', 'Blogs')
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection blogsdetails flex-column gap-lg-4 gap-3 d-flex align-items-start justify-content-center flex-shrink-0""
        style="
        background-image: url({{ asset('assets/4-blog-bg.webp') }});
        background-position: center;
        background-size: cover;
      ">
        <div class="d-flex flex-wrap gap-sm-2 align-items-center ">
            <a href="{{ route('frontend.home') }}">
                <span class="text-white">HOME</span>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                    fill="#ACACAC" />
            </svg>
            <a href="{{ route('frontend.blogs') }}">
                <span class="text-white">Blogs</span>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M5.46124 13.129L10.4142 8.19073C10.473 8.13194 10.5147 8.06826 10.5394 7.99967C10.5641 7.93108 10.5762 7.8576 10.5759 7.77921C10.5759 7.70083 10.5635 7.62734 10.5388 7.55875C10.5141 7.49017 10.4726 7.42648 10.4142 7.36769L5.46124 2.41474C5.32407 2.27757 5.1526 2.20898 4.94684 2.20898C4.74108 2.20898 4.56471 2.28247 4.41774 2.42944C4.27077 2.57641 4.19729 2.74788 4.19729 2.94384C4.19729 3.13981 4.27077 3.31127 4.41774 3.45824L8.73871 7.77921L4.41774 12.1002C4.28057 12.2374 4.21198 12.4065 4.21198 12.6075C4.21198 12.8086 4.28547 12.9824 4.43244 13.129C4.57941 13.276 4.75088 13.3494 4.94684 13.3494C5.1428 13.3494 5.31427 13.276 5.46124 13.129Z"
                    fill="#ACACAC" />
            </svg>
            <a href="#">
                <h4 class="text-orange pt-md-0 pt-1">
                    The Benefits of Requirements Documentation in Software Development
                </h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">
            A Guide

        </h1>
        <p class="text-start " style="color: #dfdfdf">
            Simply believing that software development is solely about writing code to solve a problem is a misconception.
            The success of a product depends on multiple factors that work in conjunction, with Requirement Documentation
            being one of them.
        </p>
    </div>
    <!-- ------------------------BLOG SECTION--------------- -->
    <div class="cardsSection d-flex flex-column justify-content-center ">
        <!-- ------------BLOG CONTENT SECTION---------------- -->
        <div class="contentSection d-flex flex-column ">
            <h3 class="dark-black text-lg-start text-center fw-bold">
                The Benefits of Requirements Documentation in Software Development
            </h3>
        </div>
        <!-- -----------BLOG POST------------ -->
        <div class="row position-relative d-flex align-items-lg-start justify-content-center gap-3 w-100">
            <div
                class="col-xl-7 col-lg-6 col-md-10 order-lg-1 order-2 d-flex flex-column gap-3 justify-content-center align-items-lg-start align-items-center">
                <div
                    class="blogCard blogcardsDetails d-flex flex-column align-items-sm-start align-items-center justify-content-center gap-g-4 gap-3 p-3">
                    <a href="{{ route('frontend.blogs.agile-methodology-and-business-analysis') }}"
                        class="w-100 blogcardImage"
                        style="
                background-image: url({{ asset('assets/blogImage1.webp') }});

                background-size: cover;
              "></a>

                    <h3 class="link-color">Introduction</h3>
                    <p class="brown text-md-start text-center">Before we dive into all the incredible benefits of
                        Requirements Documentation in Software Development, let's first demystify what exactly Requirement
                        Documentation is and why it matters.</p>
                    <p class="brown text-md-start text-center">
                        Requirement Documentation is a set of documents you create during your project's
                        requirement-gathering phase. The document captures and documents the needs, expectations, and
                        requirements of the stakeholders involved in a given project.
                    </p>




                    <h3 class="link-color"> Importance of requirements documentation in software development</h3>
                    <p class="brown text-md-start text-center">
                        You must be asking yourself questions like<b> why software development requires documentation of
                            requirements? And How requirements documentation can improve software development?</b> Why can’t
                        you start doing the code directly? We’ve got you.
                    </p>
                    <p class="brown text-md-start text-center">Picture this: you're the captain of a ship embarking on a new
                        journey, and to reach the destination, you need a map. However, if you don’t have a map or a compass
                        to guide you, you're destined for trouble because you’ll be confused throughout the journey. The
                        same holds true for software development.</p>
                    <p class="brown text-md-start text-center">Without clearly defining your functional and non-functional
                        requirements, project objectives, scope, constraints, and assumptions, your development team will be
                        lost at sea. By documenting these critical elements, you're providing your crew with the tools they
                        need to successfully implement the project and reach its destination. It's like having a detailed
                        roadmap that leads your team toward success!</p>
                    <p class="brown text-md-start text-center">Requirement Documentation can take many forms, including
                        business requirements documents (BRD), functional requirements documents (FRD), use cases, user
                        stories, and acceptance criteria. These documents can be formal or informal, depending on the
                        project's needs.</p>
                    <p class="brown text-md-start text-center">Similarly, the content of Requirement Documentation can vary
                        depending on the project's scope and objectives. In general, Requirement Documentation should
                        include a clear description of the problem or opportunity the project aims to address, the
                        stakeholders involved, and their requirements, objectives, and expectations. The documentation
                        should also outline the project scope, constraints, risks, and assumptions.</p>
                    <a href="{{ route('frontend.blogs.ensuring-project-success-in-software-development') }}"
                        class="w-100 blogcardImage"
                        style="
              background-image: url({{ asset('assets/blogImage2.webp') }});

              background-size: cover;
            "></a>
                    <h3 class="link-color">Who can Benefit from the Requirements Documentation?</h3>
                    <p class="brown text-md-start text-center">
                        Various users can benefit from Requirement Documentation, and they use the document for various
                        purposes;
                    </p>
                    <ul class="ms-4 brown">
                        <li><b>Project managers:</b> use it to track project progress and ensure that requirements are being
                            met
                            <br><br>
                        </li>
                        <li>
                            <b>Business analysts:</b> use it to gather and analyze business needs and translate them into
                            functional requirements<br><br>
                        </li>
                        <li>
                            <b>Software developers:</b> use it to understand what needs to be built and how it should work
                        </li><br>
                        <li><b>Quality assurance testers:</b>use it to ensure that the software meets the specified
                            requirements and functions correctly</li><br>
                        <li><b>Technical writers:</b>use it to create user manuals and other documentation that accurately
                            describe the software's functionality</li><br>
                        <li><b>Stakeholders:</b>use it to understand the project scope and ensure that the end product meets
                            their needs</li>
                    </ul>
                    <p class="brown text-md-start text-center">Overall, Requirement Documentation is critical to a project's
                        success as it clearly explains what is needed. In addition, it acts as a reference for stakeholders,
                        project managers, and development teams throughout the project's lifecycle. Besides, the
                        documentation ensures that the project stays on track and that all parties work towards the same
                        goals.</p>
                    <p class="brown text-md-start text-center">Now that we've established the crucial role of Requirement
                        Documentation in software development, it's time to explore the amazing benefits that come with
                        documenting those requirements.</p>
                    <p class="brown text-md-start text-center">From improving collaboration to reducing the risk of
                        misunderstandings, there's so much to gain from putting those requirements down on paper. So let's
                        take a closer look and discover how Requirement Documentation can make all the difference in your
                        next software development project.</p>
                    <h3 class="link-color">Advantages of Documenting Requirements in Software Development</h3>
                    <p class="brown text-md-start text-center">Requirement Documentation is the backbone of any successful
                        project because It acts as a compass that guides the project team toward the desired destination.
                        Here are some of the key benefits of documenting requirements that pave your product a successful
                        launch;</p>
                    <ul class="ms-4 brown"><b>1- Clear understanding of project goals:</b></ul>
                    <ul class="ms-4 brown">
                        <li> By documenting requirements, everyone involved in the project can have a clear understanding of
                            the project's goals and objectives. Moreover, it helps to ensure that all efforts are focused on
                            achieving these goals and that there is alignment between different teams and
                            stakeholders.<br><br></li>
                        <li>To understand the benefits better, let’s take an example where you’re working on a project for
                            developing a restaurant mobile application. In this case, the requirement document will outline
                            the features and functionality the app should have to meet the restaurant's goals, such as
                            online ordering and table reservations.<br><br></li>
                    </ul>
                    <ul class="ms-4 brown"><b>2- Reduced risk of misunderstandings:</b></ul>
                    <ul class="ms-4 brown">
                        <li>Documenting requirements helps you to reduce the risk of misunderstandings between different
                            teams and stakeholders. With clear and unambiguous documentation, everyone can have a common
                            understanding of what needs to be done, reducing the likelihood of miscommunications or
                            mistakes.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li>If we consider the example above, then documenting requirements will help your development team
                            to understand exactly what the restaurant needs, which will ensure that the final product will
                            meet the restaurant's expectations.</li>
                    </ul>



                    <ul class="ms-4 brown"><b>3- Mitigation of Risks:</b></ul>
                    <ul class="ms-4 brown">
                        <li>Requirement Documentation will also help you to mitigate risks by identifying potential issues
                            before they become problems. In the restaurant app example, a requirement document could include
                            specifications for ensuring the app is secure and complies with data privacy regulations.</li>
                    </ul>

                    <ul class="ms-4 brown"><b>4- Easier to Manage Changes:</b></ul>
                    <ul class="ms-4 brown">
                        <li>As the project progresses, changes to requirements are inevitable. However, by documenting
                            requirements, it's easier to manage changes and ensure that all stakeholders are aware of the
                            impact of the changes.</li>
                    </ul>

                    <ul class="ms-4 brown"><b>5- Easier to Manage Changes:</b></ul>
                    <ul class="ms-4 brown">
                        <li>As the project progresses, changes to requirements are inevitable. However, by documenting
                            requirements, it's easier to manage changes and ensure that all stakeholders are aware of the
                            impact of the changes.</li>
                    </ul>

                    <p class="brown text-md-start text-center">Besides these benefits, Requirement Documentation also helps
                        you organize and prioritize tasks, as the document provides a clear roadmap for the development
                        team. By acquiring these advantages, you aren’t only assisting your development team but ensuring
                        that the final product meets the client's expectations and leads to a successful project that your
                        customers love.
                    </p>
                    <h3 class="link-color">How to create effective Requirements Documentation for Software Development?
                    </h3>
                    <p class="brown text-md-start text-center">Now that you know the fantastic benefits of Requirement
                        Documentation, it's time to take your documentation process to the next level. Let's explore some of
                        the best practices for requirements documentation in software development that’ll make the process
                        much more easier for you;</p>

                    <ul class="ms-4 brown">
                        <li>Always involve your stakeholders in the requirement documenting process, be it customers, users,
                            business analysts, project managers, or developers. It will ensure that all perspectives are
                            considered and requirements are complete and accurate.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li>Be consistent with the format you follow while documenting requirements so it's easy for you to
                            understand, review, and manage requirements. Besides, this practice will help you further in
                            version control and tracking changes.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li>Keep your document simple and avoid using unnecessary technical jargon. Consider all the team
                            members involved and use words that can be understood by all of them.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li>You must prioritize functions and tasks based on their importance that can impact your project’s
                            success. You must ensure that your development team is working on the main features first and
                            not wasting time on other things.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li>To avoid misunderstandings, validate requirements with stakeholders to ensure that they
                            accurately reflect their needs and expectations.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li>Update requirements throughout the project's lifecycle to reflect changes or new information.
                            This helps ensure that the requirements remain relevant and the project stays on track.</li>
                    </ul>

                    <p class="brown text-md-start text-center">Despise learning all the best practices; you can still
                        encounter challenges while documenting requirements for your project. Sometimes you may face
                        resistance from stakeholders to participate in the documentation process, or you may encounter
                        changing requirements during the development process. You’ll also need to balance the documentation
                        with actual development work to avoid delays in delivering the final product. </p>
                    <p class="brown text-md-start text-center">You must work on your communication and leadership skills to
                        overcome these challenges. If you can communicate well with the team members and your client, it’ll
                        become easy to understand their problems and find solutions. Therefore, don’t just entirely delve in
                        the documentation process; spend your time with the team members and clients and talk to them about
                        the project thoroughly before you start the process.</p>







                    <div class="w-100 blogcardImage"
                        style="
              background-image: url({{ asset('assets/Image2.svg') }});

              background-size: cover;
            ">
                    </div>
                    <h3 class="link-color">Final Words</h3>
                    <p class="brown text-md-start text-center">Requirement Documentation may seem like an unimportant aspect
                        of software development, but neglecting it can greatly harm the success of your project. Without
                        clear documentation, your team can become disoriented and unsure of what to do, while your clients
                        may be dissatisfied with the end product due to a lack of understanding of the project's scope.</p>
                    <p>Fortunately, we're here to help! At TechBusinessAnalyst, we understand the importance of Requirement
                        Documentation and its impact on software development. Our team of experienced project managers,
                        business analysts, and requirement engineers can assist you in creating clear and comprehensive
                        documentation, making your product development process smoother and more successful.
                    </p>
                    <p>Don't hesitate to get in touch with us for assistance - we're eager to collaborate with you!</p>






                </div>
                <div class="w-100 p-3 d-flex justify-content-between gap-4 align-items-center"
                    style="border-top: 1px solid #bebebe">
                    <div class="d-flex justify-content-start align-items-center gap-2">
                        <img src="{{ asset('assets/avatar-picture-sync4tech-profile-image.svg') }}"
                            alt="Avatar Picture -  Sync4Tech Profile Image" class="img-fluid" />
                        <div class="d-flex flex-column gap-1 blogdetailsheading">
                            <p class="fw-bold" style="color: #101828">Rene Wells</p>
                            <p style="color: #667085"> Author</p>
                        </div>
                    </div>

                    <div class="d-flex gap-xl-3 justify-content-md-start justify-content-center gap-2">
                        <div class="d-lg-flex gap-xl-3 gap-2"
                            style="width: 25px;height: 24px;text-align: center;display: flex !important;background: #DBE1E3;justify-items: center;justify-content: center;align-items: center;border-radius: 40px;cursor: pointer;">
                            <svg data-bs-toggle="modal" data-bs-target="#shareModal" xmlns="http://www.w3.org/2000/svg"
                                width="13" height="14" viewBox="0 0 13 14" fill="none">
                                <path
                                    d="M10.5605 9.59603C10.0492 9.59603 9.58776 9.79721 9.24057 10.1197L4.66159 7.4545C4.69403 7.30524 4.71999 7.15598 4.71999 7.00024C4.71999 6.84449 4.69403 6.69523 4.66159 6.54597L9.23668 3.87879C9.58711 4.20326 10.0479 4.40444 10.5605 4.40444C11.6378 4.40444 12.5074 3.53485 12.5074 2.45759C12.5074 1.38033 11.6378 0.510742 10.5605 0.510742C9.48328 0.510742 8.61369 1.38033 8.61369 2.45759C8.61369 2.61334 8.63965 2.7626 8.67209 2.91185L4.097 5.57904C3.74657 5.25456 3.28581 5.05339 2.77314 5.05339C1.69589 5.05339 0.826294 5.92298 0.826294 7.00024C0.826294 8.07749 1.69589 8.94709 2.77314 8.94709C3.28581 8.94709 3.74657 8.74591 4.097 8.42144L8.67079 11.0938C8.63425 11.2408 8.61508 11.3915 8.61369 11.5429C8.61369 11.9279 8.72787 12.3043 8.94179 12.6245C9.15571 12.9447 9.45977 13.1942 9.81551 13.3415C10.1712 13.4889 10.5627 13.5274 10.9403 13.4523C11.318 13.3772 11.6649 13.1918 11.9372 12.9195C12.2094 12.6472 12.3949 12.3003 12.47 11.9227C12.5451 11.545 12.5065 11.1536 12.3592 10.7979C12.2118 10.4421 11.9623 10.1381 11.6421 9.92414C11.322 9.71021 10.9456 9.59603 10.5605 9.59603Z"
                                    fill="#FB7A00" />
                            </svg>
                        </div>
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
                                        Feel free to distribute this blog through social media
                                        channels
                                    </p>

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
                                        <a href="https://www.linkedin.com/company/sync4tech-co/?viewAsMember=true"
                                            target="_blank">
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
                    </div>
                </div>
            </div>
            <div
                class="col-xl-4 col-lg-5 col-md-10 position-stick-custom col-md-6 position-stick-custom top-0 order-lg-2 order-1 d-flex flex-column gap-3 align-items-start">
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
                    <div class="search-result-container flex-column gap-2 justify-content-center align-items-lg-start align-items-center w-100 start-0 border rounded-3 p-3 position-absolute"
                        style="top: 50px; background-color: #f9f9f9">
                        <p class="search-result flex-column gap-2 border-bottom w-100 pb-2"></p>
                    </div>
                </div>
                <div class="d-flex flex-column trendingBlog w-100  gap-lg-3 gap-1 p-4" style="background-color: #f9f9f9">
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
                <div class="d-flex flex-column trendingBlog w-100  gap-lg-3 gap-1 p-4" style="background-color: #f9f9f9">
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

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ------------------------BLOG SECTION--------------- -->
    <div class="cardsSection d-flex flex-column justify-content-center gap-5" style="background-color: #e7ebec">
        <!-- ------------BLOG CONTENT SECTION---------------- -->
        <div class="contentSection blogContentSection px-3 d-flex flex-column gap-3">
            <h2 class="dark-black text-lg-start text-center fw-bold">
                Related Blogs
            </h2>
        </div>
        <!-- -----------BLOG POST------------ -->
        <div class="row d-flex  justify-content-center blogzoom flex-md-row flex-column gap-3 w-100">
            <div class="blogCard d-flex blogPost flex-column  p-3">
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
                        <button class="position-absolute py-1 px-4 border-0 fw-bold"
                            style=" top: 6%; right: 4%;
              background: rgba(255, 255, 255, 0.64);
              backdrop-filter: blur(2px);">
                            <span style="color: #0d3642">Business Analysis</span>
                        </button>
                    </div>

                    <h3 class="dark-black text-start ">Agile Methodology and Business Analysis</h3>

                    <h4 class="brown text-start ">
                        Curious about how business analysis and agile development go hand-in-hand?...
                        <span class="text-orange">Read More</span>
                    </h4>
                </a>
                <div class="w-100 d-flex justify-content-between align-items-center mt-3">
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
            <div class="blogCard d-flex blogPost flex-column align-items-start justify-content-center gap-lg-3 gap-1 p-3">
                <a href="{{ route('frontend.blogs.ensuring-project-success-in-software-development') }}"
                    class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-1">
                    <div class="position-relative w-100"
                        style="
            background-image: url({{ asset('assets/2-number-icon-representing-sync4tech-blo-4-numerical-information.webp') }});
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
            <div class="blogCard d-flex blogPost flex-column align-items-start justify-content-center gap-lg-3 gap-1 p-3">
                <a href="{{ route('frontend.blogs.the-benefits-of-docs-in-software-development') }}"
                    class="d-flex flex-column align-items-stretch text-decoration-none gap-lg-3 gap-1">
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
                            <span style="color: #0d3642" class="fw-bold">Technical Writing</span>
                        </button>
                    </div>

                    <h3 class="dark-black text-start">The Benefits of docs in Software Development</h3>

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
