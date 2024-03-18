@extends('layouts.default')
@section('title', 'Blogs')
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection blogsdetails flex-column gap-lg-4 gap-3 d-flex align-items-start justify-content-center flex-shrink-0"
        style="
        background-image: url({{ asset('assets/5-blog-bg.webp') }});
        background-position: center;
        background-size: cover;
      ">
        <div class="d-flex flex-wrap gap-sm-2 align-items-center">
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
                    Ensuring Project Success in Software Developments
                </h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">
            Digital Transformation
        </h1>
        <p class="text--start " style="color: #dfdfdf">
            "Digital transformation” may be the decade's buzzword; however, it’s "business analysis" that’s leading the
            charge. The COVID-19 pandemic has accelerated the trend toward digital transformation, as businesses of all
            kinds have been forced to adapt to new ways of operating.
        </p>
    </div>
    <!-- ------------------------BLOG SECTION--------------- -->
    <div class="cardsSection d-flex flex-column justify-content-center">
        <!-- ------------BLOG CONTENT SECTION---------------- -->
        <div class="contentSection d-flex flex-column">
            <h3 class="dark-black text-lg-start text-center fw-bold">
                Ensuring Project Success in Software Developments
            </h3>
        </div>
        <!-- -----------BLOG POST------------ -->
        <div class="row position-relative d-flex align-items-lg-start justify-content-center gap-3 w-100">
            <div
                class="col-xl-7 col-lg-6 col-md-10 order-lg-1 order-2 d-flex flex-column gap-3 justify-content-center align-items-lg-start align-items-center">
                <div
                    class="blogCard blogcardsDetails ms-lg-2 d-flex flex-column align-items-sm-start align-items-center justify-content-center gap-g-4 gap-3 p-3">
                    <div class="w-100 blogcardImage"
                        style="
                background-image: url({{ asset('assets/blogImage1.webp') }});

                background-size: cover;
              ">
                    </div>

                    <h3 class="link-color">Introduction</h3>
                    <p class="brown text-md-start text-center">
                        In addition, this transformation has fundamentally changed how businesses work, and digital
                        transformation will continue to be a major trend in the post-pandemic world.
                    </p>
                    <p class="brown text-md-start text-center"><a
                            href="https://www.harvardbusiness.org/wp-content/uploads/2018/11/20853_CL_StateOfLeadership_Report_2018_Nov2018.pdf">Harvard
                            Business Review </a>conducted a study and revealed that companies that fully embrace digital
                        transformation are 1.5 times more likely to experience revenue growth of 15% or more. </p>
                    <p class="brown text-md-start text-center">Moreover, a survey by <a
                            href="https://www.mckinsey.com/capabilities/strategy-and-corporate-finance/our-insights/raising-your-digital-quotient">
                            McKinsey & Company </a>also found that companies that have undergone digital transformation are
                        26% more profitable than their competitors. </p>
                    <p class="brown text-md-start text-center">In today's rapidly-evolving technological landscape, keeping
                        up with the digital trend is more important than ever. To ensure success, a thorough business
                        analysis is essential. By carefully analyzing business needs and identifying the right technology
                        solutions, your organization can maximize the benefits of digital transformation and stay ahead of
                        the curve.</p>
                    <p class="brown text-md-start text-center">This article sheds light on how business analysis can be a
                        key driver of digital transformation initiatives. We would also discuss how a business analyst can
                        contribute to a successful digital transformation project. So stay tuned till the end!</p>
                    <div class="w-100 blogcardImage"
                        style="
                background-image: url({{ asset('assets/blogImage2.webp') }});

                background-size: cover;
              ">
                    </div>
                    <h3 class="link-color"> Role of Business Analysis in Digital Transformation</h3>
                    <p class="brown text-md-start text-center">
                        To make you understand the role of business analysis in digital transformation, we would first
                        discuss the purpose of business analysis and how it makes you understand your business goals and
                        objectives better.
                    </p>
                    <h3 class="link-color">Defining business analysis and its purpose</h3>
                    <p class="brown text-md-start text-center">
                        In business analysis, you identify and analyze your business needs and objectives with the goal of
                        finding a solution to meet those needs. In other words, it helps your organization make informed
                        decisions, improve processes, and achieve its strategic goals.
                    </p>
                    <p class="brown text-md-start text-center">Business analysts use tools and techniques like data
                        analysis, requirements gathering, and stakeholder management to analyze your business successfully.
                        Their primary goal is to ensure that your organization's needs are understood and met most
                        effectively and efficiently. Overall, business analysis is critical in digital transformation as it
                        helps you navigate complex changes, identify opportunities for innovation, and achieve successful
                        outcomes.</p>


                    <h3 class="link-color"> The role of business analysis in digital transformation</h3>
                    <p class="brown text-md-start text-center">
                        Digital transformation is a complex process that requires a deep understanding of an organization's
                        goals, processes, and technology infrastructure. Therefore, business analysis helps organizations
                        navigate this complexity by providing a structured approach to understand those needs.
                    </p>

                    <p class="brown text-md-start text-center">
                        In digital transformation, business analysis can help your organization define a clear and
                        actionable digital transformation strategy that aligns with your overall business goals. It also
                        identifies areas where you can leverage emerging technologies and innovative solutions to achieve
                        your strategic objectives.
                    </p>
                    <p class="brown text-md-start text-center">Business analysts also assist you in streamlining and
                        optimizing your existing business processes and gathering or managing requirements for new digital
                        solutions. Moreover, they manage your stakeholders throughout the digital transformation process,
                        ensuring their needs and concerns are considered every time you make changes to the project. </p>
                    <p class="brown text-md-start text-center">By this time, you know well the significance of business
                        analysis for the digitalization of your business. However, what techniques do business analysts use
                        while preparing your business for the transformation? Let’s see next.</p>


                    <!--
                        <ul class="ms-4 brown">
                          <li><b>Project Scope</b> What are the boundaries and extent of your project? Requirement gathering helps with defining that. By thoroughly understanding the requirements, your development team can clearly define what should be included and excluded from the project.Additionally, it enables your development team to set realistic and achievable project goals and deliverables and ensures that the project stays within its defined scope. The process will help you significantly avoid delays, increased costs, and decreased customer satisfaction.<br><br></li>
                          <li>
                            <b>Timeline</b> Gathering requirements early in your project timeline will also identify potential risks, issues, and dependencies that may impact your project schedule. Similarly, when your development team understands the requirement upfront, they can accurately estimate the time and effort required to complete the project tasks.Moreover, the requirement-gathering process enables you to efficiently plan and schedule tasks and helps you avoid delays caused by unclear or changing requirements during the development phase. With preplanned tasks, you can help your team to deliver the most critical requirements first and meet project deadlines by prioritising the main features and functionalities of the project.<br><br>
                          </li>
                          <li>
                            <b>Budget</b> Gathering software requirements helps you in estimating the budget required for the project accurately. By understanding the requirements and their associated complexities, your development team can estimate the resources, costs, and expenses needed to develop the software. This includes personnel, hardware and software costs, third-party dependencies, and other project-related expenses. The accurate budget estimation will help you secure the necessary funding, allocate resources efficiently, and avoid cost overruns due to changes in requirements during development. It will also help you manage customer expectations and ensure the project is financially viable.
                          </li>
                          
                        </ul> -->

                    <h3 class="link-color">Business Analysis Techniques for Digital Transformation</h3>
                    <div class="w-100 blogcardImage"
                        style="
              background-image: url({{ asset('assets/Business-Analysis-Techniques.jpg') }});
              background-repeat: no-repeat;
              background-size: 100% 100%;
              height: 100vh;
            ">
                    </div>
                    <p class="brown text-md-start text-center">Business analysts use the following techniques while they
                        work on your business to ensure that all your needs are identified and effectively design the
                        solutions.</p>
                    <ul class="ms-4 brown"><b>1- SWOT Analysis</b></ul>
                    <ul class="ms-4 brown">
                        <p>Business analysts use SWOT analysis to identify your organization's strengths, weaknesses,
                            opportunities, and threats. It helps you understand your internal and external environment and
                            identify areas for improvement.<br><br></p>
                    </ul>
                    <ul class="ms-4 brown"><b>2- PESTLE Analysis</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">In PESTLE analysis, business analysts examine your
                            organization's external environment by considering political, economic, social, technological,
                            legal, and environmental factors. It helps your organization identify potential opportunities
                            and threats related to your industry, market, or geographic location.</p>
                    </ul>



                    <ul class="ms-4 brown"><b>3- Stakeholder Analysis</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Stakeholder analysis assists business analysts in
                            identifying and assessing the impact of stakeholders on your organization's digital
                            transformation initiatives. It helps you understand the needs and expectations of your
                            stakeholders and prioritize their engagement.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>4- Business Process Modeling</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Business analysts will visually represent your
                            organization's business processes in business process modeling. It will directly help you
                            identify inefficiencies, bottlenecks, and areas for improvement in your business processes.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>5- Requirements Gathering and Management</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Requirements gathering and management is a process that
                            identifies, documents, and manages the needs and expectations of stakeholders for a digital
                            solution. It also helps your organization ensure its digital solutions meet stakeholder needs
                            and expectations.</p>
                    </ul>


                    <h3 class="link-color">Benefits of Business Analysis in Digital Transformation
                    </h3>
                    <p class="brown text-md-start text-center">Having the services of a business analyst will help you in
                        more than one way. This include;</p>
                    <ul class="ms-4 brown"><b>1- Enhancing customer experience</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Since business analysts will spend most of their time
                            identifying the needs,painpoints and expectations of your customers from your business, it will
                            directly impact the customer experience. Getting insights through user research will lead you to
                            create high-quality digital solutions with loyal and satisfied customers.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>2- Increasing operational efficiency</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Business analysis will help you maximize productivity,
                            reduce costs, and streamline operations since you would have already identified bottlenecks and
                            inefficiencies in your existing processes. Moreover, you’ll already be working on improving
                            these processes to achieve maximum results.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>3- Facilitating innovation</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Business analysis will help you to identify emerging
                            trends, technologies, and market opportunities that can drive innovation and create new business
                            models. Through analyzing data and conducting market research, business analysts will provide
                            valuable insights that can inform innovation strategies.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>4- Boosting revenue and growth</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Business analysis will also assist you in analyzing
                            customer behavior and identifying opportunities for upselling, cross-selling, and new revenue
                            streams. It will help you boost revenue and drive growth by introducing new markets and customer
                            segments, providing expansion opportunities.</p>
                    </ul>


                    <p class="brown text-md-start text-center">Alongside the benefits of business analysis in digital
                        transformation, there also come certain responsibilities and challenges that business analysts may
                        encounter. In this regard, it is worth exploring the potential obstacles when implementing business
                        analysis techniques to digitize your business. </p>

                    <h3 class="link-color">Challenges in Implementing Business Analysis in Digital Transformation</h3>
                    <p class="brown text-md-start text-center">If you’re on a journey to digitally transform your business,
                        you may encounter these challenges;</p>

                    <ul class="ms-4 brown"><b>1- Lack of buy-in from stakeholders</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">One of the biggest challenges in implementing business
                            analysis in digital transformation is gaining buy-in from stakeholders, like executives,
                            managers, and employees at all levels of the organization. Without support from key
                            stakeholders, it can be difficult to secure the resources and funding needed to execute a
                            successful digital transformation strategy.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>2- Resistance to change</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Another challenge is resistance to change. Many employees
                            may be hesitant to adopt new technologies or processes, which can slow down the digital
                            transformation process. Addressing this challenge requires effective communication and change
                            management strategies to help employees understand the benefits of digital transformation and
                            embrace new ways of working.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>3- Inadequate resources and tools</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Implementing business analysis in digital transformation
                            requires access to the right tools and resources. This can include software, data analytics
                            capabilities, and skilled personnel. Without the right resources, gathering and analyzing data
                            effectively and making data-driven decisions that support the digital transformation strategy
                            can be difficult.</p>
                    </ul>

                    <ul class="ms-4 brown"><b>4- Inability to prioritize goals and objectives</b></ul>
                    <ul class="ms-4 brown">
                        <p class="brown text-md-start text-center">Finally, another challenge is the inability to prioritize
                            goals and objectives. Digital transformation requires a clear understanding of the
                            organization's strategic priorities and how technology and data can be leveraged to achieve
                            those goals. Without a clear focus on priorities, it can be difficult to align digital
                            transformation efforts with the organization's broader goals.</p>
                    </ul>





                    <div class="w-100 blogcardImage"
                        style="
              background-image: url({{ asset('assets/Image2.svg') }});

              background-size: cover;
            ">
                    </div>
                    <h3 class="">Final Thoughts</h3>
                    <p class="brown text-md-start text-center">To wrap it up, digital transformation is a vital aspect of
                        any modern business, and the role of business analysis in this process is critical. It helps
                        businesses navigate complexity and drive innovation while streamlining operations and boosting
                        revenue growth. By employing various techniques we discussed above, a business analyst can ensure
                        successful outcomes for digital transformation initiatives.</p>
                    <p class="brown text-md-start text-center">If you're looking to embark on a digital transformation
                        journey, it's important to leverage the power of business analysis to make informed decisions and
                        achieve your strategic goals. So, don't hesitate to invest in a professional business analyst like
                        TechBusinessAnalyst to lead your digital transformation project.
                    </p>






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
        <h3 class="text-white text-center fw-bold">Tell Us About Your Project</h3>
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
                    <a href="#" class="text-orange">Hire Now!</a>
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
