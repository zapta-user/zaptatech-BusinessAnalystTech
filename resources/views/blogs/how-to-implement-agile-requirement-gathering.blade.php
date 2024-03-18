@extends('layouts.default')
@section('title', 'Blogs')
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection blogsdetails flex-column gap-lg-4 gap-3 d-flex align-items-start justify-content-center flex-shrink-0"
        style="
        background-image: url({{ asset('assets/3-blog-bg.webp') }});
        background-position: center;
        background-size: cover;
      ">
        <div class="d-flex gap-sm-2 align-items-center justify-content-center">
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
                    How to Implement Agile Requirement Gathering
                </h4>
            </a>
        </div>
        <h3 class="text-white text-center fw-bold">
            A Guide
        </h3>
        <p class="text--start " style="color: #dfdfdf">
            Whether you’re a project manager, a business analyst, or a Software as a Service (Saas) company, a strong
            understanding and implementation of Agile Requirement Gathering can significantly streamline your project.
        </p>
    </div>
    <!-- ------------------------BLOG SECTION--------------- -->
    <div class="cardsSection d-flex flex-column justify-content-center">
        <!-- ------------BLOG CONTENT SECTION---------------- -->
        <div class="contentSection d-flex flex-column">
            <h1 class="dark-black text-lg-start text-center fw-bold">
                How to Implement Agile Requirement Gathering
            </h1>
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

                    <h3 class="link-color">Understanding Software Documentation</h3>
                    <p class="brown text-md-start text-center">
                        Besides, it improves your development team's overall efficiency and productivity by providing
                        flexibility in
                        the development process and fostering collaboration among stakeholders.
                    </p>
                    <p class="brown text-md-start text-center">In this blog post, we’ll explain the importance of agile
                        requirement gathering in the software development process, how to implement agile requirement
                        gathering aka
                        the best practices, and provide suggestions if you’re new to this essential concept. </p>
                    <h3 class="link-color">What is Agile Requirement Gathering, and Why Does it Matter?</h3>
                    <p class="brown text-md-start text-center">What is agile methodology, and what are requirements in
                        agile? You
                        must have this question on your mind!</p>

                    <!-- <h3 class="link-color">Importance of software documentation in software development</h3> -->
                    <p class="brown text-md-start text-center">Agile methodology is a continuous, iterative, and
                        collaborative
                        model in the software development process that allows maximum collaboration among your stakeholders,
                        team
                        members, and customers. But why do we involve so many people in the development process? Simply to
                        ensure
                        that all the customer needs, requirements, and expectations are met associated with the product
                        being
                        developed.</p>
                    <p class="brown text-md-start text-center">On the other hand, Agile requirement gathering is the process
                        of
                        gathering and recording these requirements using agile methodology for software development. </p>
                    <!-- <p class="brown text-md-start text-center">Moreover, well-written software documentation enhances the user experience by providing clear instructions, examples, and best practices, helping you get the most out of the software. Software documentation is an essential ingredient that elevates the software development process, making it smoother, more efficient, and user-friendly.</p> -->

                    <h3 class="link-color">Importance of Agile Requirement Gathering in the Software Development Process
                    </h3>
                    <p class="brown text-md-start text-center">Agile requirement gathering is where the well-known Agile
                        Manifesto
                        is put into practice. Here, you prefer individuals and interactions rather than tools and processes.
                        Working
                        software, customer collaboration, and a quick response to change are favored over comprehensive
                        documentation, contract negotiation, and following a plan.</p>
                    <p>Let’s have a closer look at the importance of these fundamental principles;
                    </p>
                    <ul class="ms-4 brown">
                        <li><b>Enhanced Collaboration:</b> Agile requirement gathering enhances collaboration among your
                            stakeholders, team members, and customers. Moreover, by involving them early in the development
                            process,
                            you encourage them to proheir valuable suggestions and fee, leadingleads to better quality
                            softwares. In
                            traditional software development practices, requirement gathering was performed at the beginning
                            of the
                            process. However, agile requirement gathering is a steady process requiring continuous
                            stakeholder
                            collaboration and feedback throughout the development cycle.</li>
                    </ul>
                    <div class="w-100 blogcardImage"
                        style="
                background-image: url({{ asset('assets/blogs6_bg.jpg') }});
                background-repeat: no-repeat;
                height: 100vh;
                background-size: 100% 100%;
              ">
                    </div>

                    <ul class="ms-4 brown">
                        <li><b>Improved Flexibility: </b> the agile methodology is known for its flexibility and
                            adaptability. In
                            the software development process, requirements can change and evolve at any time thus, following
                            the agile
                            methodology serves best here. In traditional methods, requirement gathering was a one-time
                            process;
                            therefore requesting a change in-between wasn’t possible and was a rigorous process. But if you
                            follow the
                            agile principles, you can communicate your change request with stakeholders anytime and ask for
                            their
                            feedback when needed. </li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Risk-free Development:</b> since this method allows you to continuously gather requirements
                            it
                            becomes easy to identify potential risks, errors, or faults early that can result in delayed or
                            failed
                            projects. With a steady process, and refining the requirements you can ensure that you’re
                            achieve the
                            project milestones and goals proactively.<br><br>Other methodologies were not of the same
                            principles and
                            hence resulted in delays, cost overruns, and even project failure. However, the short iterations
                            or
                            sprints in the agile methodology make you nitpick errors earlier and save you the cost and
                            effort.associated with it. </li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Fast Development & Production:</b> you gather the requirements early and fix bugs earlier,
                            which
                            results in a faster development process, and the product is released sooner to the market.
                            Another reason
                            for this optized development process is the development of critical features first. The
                            developer focuses
                            on the immediate functional requirements of the software, and the stakeholders easily provide
                            their
                            feedback on the main features which paves their way further.<br><br>Agile methodology breaks
                            down
                            requirements into small manageable units called user stories. Each user story depicts a function
                            or
                            feature that the final software must have. Therefore, the development team prioritizes those
                            more valuable
                            functions to the customer making the process smooth and seamless.</li>
                    </ul>
                    <p class="brown text-md-start text-center">We’ll that’s enough for letting you know the significance of
                        agile
                        requirement gathering. Let’s do the real talk now, explaining the implementation process of agile
                        requirement gathering.</p>

                    <h3 class="link-color">How to Gather Requirements in Agile: Best Practices
                    </h3>

                    <p class="brown text-md-start text-center">Although agile methodology is a powerful tool in the software
                        development, some of you can find it overwhelming. If this is the case, then here are some of the
                        best
                        practices that you can follow to ease out the process.</p>

                    <ul class="ms-4 brown">
                        <li><b>1- Add details to user stories </b>User stories are simple requirements that written as the
                            user’s
                            narrative and that might not be able to provide enough information to your development team.
                            When working
                            with complex and important projects you can facilitate the developer with additional
                            documentation to add
                            detail to your user stories.<br><br>These details can include decision tables, diagrams,
                            examples, and
                            usecases. With this practice. You can ensure that everyone working on the project understands
                            everything
                            well. In addition, it makes everyone stay on the same page throughout the development process
                            leading to a
                            product that meets all necessary requirements. </li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>2- Involve all Stakeholders </b>Not involving all your stakeholders in the requirement
                            gathering
                            process can lead to misunderstandings and miscommunication, and you can end up with an
                            unexpected
                            deliverable. You’ll be left with incomplete requirements, and your stakeholders can possibly
                            feel a lack
                            of ownership towards the project.<br><br>Therefore, it's best to avoid this mistake and ensure
                            all your
                            stakeholders, including end-users, customers, business analysts, project manager, and developers
                            are
                            present throughout the requirement-gathering process. It will ensure that the end product meets
                            everyone’s
                            needs and you’re clients get what they want to achieve with the product. </li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>3- Prioritize Primary Requirements </b>Agile methodology focuses on the cost and effort
                            associated
                            with each requirement in terms of money and time. If you identify some requirements during the
                            first
                            sprint that are less costly than any other requirement, then it will be given first priority.
                            <br><br>Therefore, it's best to work with your client and divide your requirements into
                            high-ppriority and
                            low-ppriority tasks to manage each requirement in detail. By following this practice, you can
                            get feedback
                            early , save costs and release the product to market earlier.
                        </li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Use visualization techniques: </b>Visualization always fosters immediate yet data-driven
                            decision-making. While requirement gathering, you can use visuals like wireframes, mockups, and
                            prototypes
                            to to make your stakeholders better understand what’s being done and visualize the final
                            product.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Refine and Iterate </b>Iteration is the fundamental element of agile methodology; therefore,
                            continuously gather feedback from stakeholders and refine the requirements whenever needed. The
                            feedback
                            from previous sprints can help you improve the quality of the final
                            product.<br><br>Additionally, regular
                            sprint meetings Sprint Planning Meetings, Daily Stand-up Meetings, Sprint Review Meetings, and
                            Sprint
                            Retrospective Meetings can help you identify bottlenecks and roadblocks in the project. Stay on
                            track and
                            keep your team engaged with the project till the end to develop a successfull
                            project.<br><br>One bonus
                            tip we would like to add at the end is dividing your requirements based on the stacks you’ll be
                            covering.
                            Create user stories and assemble them into stacks such as front end, back end, middle ware, and
                            the
                            database. Think small, take one step at a time, prioritize, and optimize! This is the way to a
                            successful
                            software development.
                        </li>

                        <p class="brown text-md-start text-center">
                            We’re not done yet! How can you forget the necessary tools that make the whole process a bit
                            bearable?
                            Worry not! We got you covered.
                        </p>




                        <h3 class="link-color">Tools for Agile Requirement Gathering</h3>
                        <p class="brown text-md-start text-center">Knowing the right agile tools is equally essential when
                            gathering
                            requirements. Here is a list of well known tools that you can use;
                        </p>
                        <ul class="ms-4 brown">
                            <li>Agile Frameworks like Scrum and Kanban
                            </li>
                        </ul>
                        <ul class="ms-4 brown">
                            <li>Visual modeling tools like Lucidchart, Visio, and Draw.io</li>
                        </ul>
                        <ul class="ms-4 brown">
                            <li>Project management software like Jira, Trello, and Asana
                            </li>
                        </ul>
                        <ul class="ms-4 brown">
                            <li>Collaboration tools like Slack, Microsoft Teams, and Zoom</li>
                        </ul>
                        <ul class="ms-4 brown">
                            <li>Requirement Management software like ReQtest, Jama Connect, and IBM Rational DOORS
                            </li>
                        </ul>
                        <p class="brown text-md-start text-center" style="padding-bottom: 20px !important;">You can select
                            the tools
                            and frameworks that best suit your requirements and team preference. </p>




                        <div class="w-100 blogcardImage"
                            style="
              background-image: url({{ asset('assets/Image2.svg') }});

              background-size: cover;
            ">
                        </div>
                        <h3 class="link-color" style="padding-top: 20px !important;">Conclusion</h3>
                        <p class="brown text-md-start text-center">We’ve discussed everything from basic concepts to best
                            practices
                            to tools that will help you in your requirement-gathering process when dealing with the agile
                            methodology
                            for the first time. Be sure to follow the best practices and use these tools to rock your next
                            software
                            project.</p>
                        <p class="brown text-md-start text-center">With agile requirement gathering, you do not have to
                            worry about
                            changing requirements, errors and bugs and unnecessary delays since each step continuous in a
                            cycle.
                        </p>
                        <p class="brown text-md-start text-center">Finally, if you’re a business on a lookout for
                            comprehensive
                            solutions regarding requirement gathering and process analysis, Look no further than
                            TechBusinessAnalysis.
                            Our team of expert project managers, requirement engineers, business analysts,, and technical
                            writers are
                            here to assist you in resolving your business challenges.</p>
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
                        <div class="d-flex py-3 px-2 w-100 align-items-center">
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
