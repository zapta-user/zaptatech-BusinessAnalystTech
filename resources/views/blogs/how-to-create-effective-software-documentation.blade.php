@extends('layouts.default')
@section('title', 'Blogs')
@section('section')
    <!-- --------------------BANNER SECTION----------------- -->
    <div class="bannerSection blogsdetails flex-column gap-lg-4 gap-3 d-flex align-items-start justify-content-center flex-shrink-0""
        style="
        background-image: url({{ asset('assets/2-blog-bg.webp') }});
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
                    How to Create Effective Software Documentation
                </h4>
            </a>
        </div>
        <h1 class="text-white text-center fw-bold">
            Software Documentation
        </h1>
        <p class="text--start " style="color: #dfdfdf">
            Effective software documentation is vital to successful software development, providing invaluable guidance for
            users and developers. However, if you're a beginner in technical writing, you might face challenges in
            developing effective documentation.
        </p>
    </div>
    <!-- ------------------------BLOG SECTION--------------- -->
    <div class="cardsSection d-flex flex-column justify-content-center">
        <!-- ------------BLOG CONTENT SECTION---------------- -->
        <div class="contentSection d-flex flex-column gap-3 ">
            <h3 class="dark-black text-lg-start text-center fw-bold">
                How to Create Effective Software Documentation
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

                    <h3 class="link-color">Understanding Software Documentation</h3>
                    <p class="brown text-md-start text-center">
                        In this article, we'll explore the art of technical writing and guide you on how to create effective
                        software documentation that will simplify both your life and the lives of your users. Let's get
                        started with understanding the basics first!
                    </p>
                    <p class="brown text-md-start text-center">Before you start the creation process, it's essential to
                        understand and explore what software documentation is, why it matters, and the different types out
                        there. </p>
                    <h3 class="link-color">What is software documentation?</h3>
                    <p class="brown text-md-start text-center">If you've ever bought a tech gadget or device, you must've
                        received a user manual along with it. The user manual lets you understand how to effectively use
                        that gadget. Similarly, software documentation is a user manual that comes with the software. It's
                        like having a handy guidebook that explains how to use, configure, and troubleshoot software in
                        plain language. Just like you refer to the user manual when you've to change some settings in your
                        smartphone, software documentation also provides instructions and information to help you make the
                        most out of the software you're working with</p>

                    <h3 class="link-color">Importance of software documentation in software development</h3>
                    <p class="brown text-md-start text-center">Software documentation is a crucial element of the software
                        development process because it serves as a helping resource for developers, testers, and users. It
                        makes you understand how the software works, how you can effectively use it, and how to troubleshoot
                        issues that may arise while working with it.</p>
                    <p class="brown text-md-start text-center">Besides, it provides a roadmap for developers to navigate the
                        complex codebase, making it easier to maintain, update, and debug the software. Additionally, It
                        enables efficient collaboration among team members, promotes consistency, and ensures that everyone
                        is on the same page.</p>
                    <p class="brown text-md-start text-center">Moreover, well-written software documentation enhances the
                        user experience by providing clear instructions, examples, and best practices, helping you get the
                        most out of the software. Software documentation is an essential ingredient that elevates the
                        software development process, making it smoother, more efficient, and user-friendly.</p>

                    <h3 class="link-color">Types of software documentation</h3>
                    <p class="brown text-md-start text-center">There are various types of software documentation, and each
                        type serves a unique purpose, catering to different audiences. Here are some types of software
                        documentation that you may need to create as a technical writer;</p>


                    <div class="w-100 blogcardImage"
                        style="
                background-image: url({{ asset('assets/types-sd.jpg') }});
                background-repeat: no-repeat;
                height: 100vh;
                background-size: 100% 100%;
              ">
                    </div>

                    <ul class="ms-4 brown">
                        <li><b>User manuals: </b>Provide instructions and guidelines for end-users on how to install the
                            software, configure, and use the software.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>API documentation: </b>Documents the software's application programming interface (API),
                            providing information on how to interact with it programmatically.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Release notes:</b> Detail the changes, fixes, and enhancements in each software release,
                            helping users understand what's new and what; 's improved.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Installation guides:</b> Offer step-by-step instructions for installing the software,
                            including system requirements, prerequisites, and configuration settings.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Troubleshooting guides: </b>Provide solutions and workarounds for common issues that users
                            may encounter while using the software.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Technical documentation: </b>Targeted toward developers and technical personnel, including
                            technical specifications, architecture diagrams, and design documentation.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Tutorials and examples: </b>Walk users through practical use cases and illustrate using the
                            software in real-world scenarios.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>FAQs (Frequently Asked Questions):</b> Address common questions and provide quick answers to
                            help users resolve common doubts or issues.</li>
                    </ul>

                    <h3 class="link-color">Common challenges in creating software documentation</h3>

                    <p class="brown text-md-start text-center">Being a technical writer, you may face certain challenges
                        while creating software documentation. But worry not because later in this article, we'll tell you
                        some best practices to help you create effective software documentation.</p>
                    <p class="brown text-md-start text-center">You can face these challenges while creating software
                        documentation;</p>
                    <ul class="ms-4 brown">
                        <li><b>Technical jargon: </b>Simplifying complex technical language for easy understanding by
                            non-technical users.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Lack of consistency: </b>Maintaining consistent formatting, style, and tone for a cohesive
                            and professional look.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Outdated information: </b>Ensuring documentation is updated with the latest software version
                            and features.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Time constraints: </b>Balancing documentation creation with project timelines and release
                            deadlines.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>User perspective: </b>Anticipating and addressing end-users questions, concerns, and pain
                            points.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Review and feedback: </b>Incorporating feedback from stakeholders, including developers,
                            testers, and users.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Accessibility: </b>Ensuring documentation is accessible to users with disabilities.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Document management: </b>Managing a large volume of documents, versions, and revisions and
                            maintaining proper version control.</li>
                    </ul>
                    <p class="brown text-md-start text-center">Knowing these challenges beforehand, you can effectively
                        address them and find possible solutions to create high-quality software documentation. </p>



                    <h3 class="link-color">Best Practices for Writing Software Documentation</h3>
                    <p class="brown text-md-start text-center">If you want to create software documentation that is
                        effective for your development team and your target users, then follow these best practices;</p>
                    <h3 class="link-color">Identify the target audience and their needs</h3>
                    <p class="brown text-md-start text-center">This step is crucial for any writing, be it technical or
                        non-technical. You have to specifically determine and understand who is your intended audience. Are
                        they end users, developers, or technical support personnel? What are their needs, and what
                        information will help them the most?</p>
                    <p class="brown text-md-start text-center">For example, suppose your software application is designed
                        for business professionals. In that case, your target audience may need documentation that explains
                        how to use the software for various business tasks, such as creating reports or managing customer
                        data.</p>
                    <h3 class="link-color">Define the purpose and goals of the documentation</h3>
                    <p class="brown text-md-start text-center">In this step, you determine this documentation's intended
                        purpose and goal. What are you trying to achieve through your documentation? Is it to educate users
                        on how to use the software, troubleshoot issues, or provide technical reference material? Clearly
                        defining the purpose and goals of the documentation will help you create content that meets those
                        objectives.</p>
                    <h3 class="link-color">Use a clear and concise writing style.</h3>
                    <p class="brown text-md-start text-center">You've to specifically use a clear and concise writing style
                        when creating software documentation because you must deliver your message easily to your audience.
                        Avoid using technical jargon or complex language that may be difficult for your target audience to
                        understand. Use straightforward instructions that are easy to follow, and avoid using long sentences
                        or excessive use of technical terms.</p>
                    <h3 class="link-color">Organize the documentation effectively</h3>
                    <p class="brown text-md-start text-center">Your software documentation must be easy to navigate.
                        Organizing the documentation using headings, subheadings, and bullet points to create a clear and
                        organized structure. Group related information together and use a consistent and intuitive
                        navigation system to help users find the information they need quickly and easily.</p>
                    <h3 class="link-color">Use appropriate documentation tools for efficiency and accuracy</h3>
                    <p class="brown text-md-start text-center">Use appropriate tools to minimize redundant tasks if you want
                        to be quick and efficient with your documentation process. You may use tools like word processors,
                        content management systems (CMS), wikis, or specialized documentation software. Choose tools that
                        are appropriate for your target audience and the purpose of your documentation.</p>
                    <h3 class="link-color">Incorporate visuals and examples to enhance understanding</h3>
                    <p class="brown text-md-start text-center">Visuals make information easily scannable. Visuals like
                        diagrams, screenshots, and videos can greatly enhance understanding of complex concepts or
                        procedures. Use visuals strategically to support your written content and make it more engaging and
                        accessible. Additionally, provide relevant examples that illustrate the usage of the software in
                        real-world scenarios.</p>
                    <h3 class="link-color">Follow the established writing style guide for consistency</h3>
                    <p class="brown text-md-start text-center">Consistency is key in the documentation. You must follow an
                        established writing style guide, which may include grammar, punctuation, capitalization, formatting,
                        and tone guidelines.Consistency in writing style helps users to easily understand the documentation
                        and ensures a professional and polished look and feel.</p>
                    <p class="brown text-md-start text-center">By following these practices, you can curate user-friendly,
                        informative documentation that meets your target audience's needs.</p>

                    <h3 class="link-color">How to Write Effective Documentation for a Software Project</h3>
                    <p>To create effective documentation for your software project, you can follow mentioned below steps;
                    </p>
                    <ul class="ms-4 brown">
                        <li><b>Understand the software project and its requirements </b>by reviewing project documentation,
                            discussing with stakeholders, and understanding the intended purpose and functionality of the
                            software.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Collaborate with the development team </b>for accurate information by interviewing
                            developers, attending meetings, and verifying information to ensure the documentation is based
                            on accurate and reliable sources.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Use a structured approach </b>for creating documentation (e.g., outline, templates) to ensure
                            that the documentation is organized, coherent, and easy to navigate for readers.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Tailor the documentation </b>for different audiences (end users, developers, etc.) by
                            effectively using language, tone, and level of technical detail that is appropriate for them.
                        </li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Include relevant information </b>such as installation instructions, configuration details,
                            troubleshooting tips, and any other necessary information that users may need to effectively use
                            the software.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Test and review </b>the documentation for accuracy and usability by verifying that all
                            information is correct, instructions are clear, and the documentation is user-friendly. You must
                            incorporate feedback from users and stakeholders to improve the documentation and ensure its
                            effectiveness.</li>
                    </ul>
                    <h3 class="link-color">Documentation Tools for Creating Effective Software Documentation</h3>
                    <ul class="ms-4 brown">
                        <li><b>Microsoft Word or Google Docs </b>are commonly used word processors for creating written
                            documentation with formatting options for headings, subheadings, lists, and more.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Content management systems (CMS) </b>like WordPress or Drupal can be used for creating and
                            managing documentation online, allowing for easy organization, searchability, and updates.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Wiki platforms </b>like MediaWiki or Confluence are popular for collaborative documentation
                            creation, where multiple users can contribute and edit documentation in a structured manner.
                        </li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Screen capture and recording tools </b>like Snagit or Camtasia can capture screenshots,
                            record videos, or create tutorials to visually illustrate software usage.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Diagramming tools </b>like Microsoft Visio or Lucidchart can create visual diagrams,
                            flowcharts, or process maps to explain complex concepts or workflows.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Version control systems </b>like Git or SVN can manage documentation versions, allowing
                            collaboration, tracking changes, and maintaining document history.</li>
                    </ul>
                    <ul class="ms-4 brown">
                        <li><b>Collaboration and communication tools </b>like Google Drive, Trello, or Slack can be used for
                            collaborative document editing, task tracking, and communication among team members during the
                            document creation process.</li>
                    </ul>




                    <div class="w-100 blogcardImage"
                        style="
              background-image: url({{ asset('assets/Image2.svg') }});

              background-size: cover;
            ">
                    </div>
                    <h3 class="">Last Words</h3>
                    <p class="brown text-md-start text-center">In a nutshell, software documentation is crucial for
                        effective software development, serving as a guidebook for users and developers alike. However, you
                        can face certain challenges that you can overcome by following the best practices we mentioned
                        earlier. By following these practices, you can create high-quality documentation that enhances
                        software development, promotes user satisfaction, and facilitates smooth navigation through the
                        software's intricacies.</p>
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
