  
  @extends('blogs.mainHeader')

@section('body')
  <!--Waves Container-->
    <section id="services" class="features-boxed" style="background: #D9EEEC;overflow: hidden;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">services</h2>
                <p class="text-center">Explore our services to learn how NEURODATA is operationalising AI to address a wide variety of common enterprise needs.</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-in-up" data-aos-duration="150" data-aos-delay="450" class="box">
                        <i class="fas fa-hand-holding-dollar icon"></i>
                        <h3 class="name">FINANCIAL SERVICES</h3>
                        <p class="description">In the financial services industry, machine learning is helping mitigate
                            risk for financial institutions, optimising trade execution, automating processes, and
                            dynamically determining pricing.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-out-up" data-aos-duration="150" data-aos-delay="500" class="box">
                        <i class="fas fa-handshake icon"></i>
                        <h3 class="name">MANUFACTURING</h3>
                        <p class="description">Learn how AI is working hand-in-hand with human intelligence to enable
                            factory automation and higher efficiency as well as improve workplace safety, security, and
                            accessibility.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="zoom-out-up" data-aos-duration="200" data-aos-delay="550" class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">RETAIL </h3>
                        <p class="description">Retailers and consumers alike have come to rely on recommendation engines
                            and hyper-personalisation to help customers make ever more ideal purchasing decisions.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="fade-up" data-aos-duration="250" data-aos-delay="250" class="box"><i class="fa fa-leaf icon"></i>
                        <h3 class="name">HEALTHCARE </h3>
                        <p class="description">From early disease detection to precision medicine, nowhere is there more
                            potential for machine learning to improve the lives of people than in healthcare and life
                            sciences.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="fade-up" data-aos-duration="250" data-aos-delay="300" class="box"><i class="fa fa-plane icon"></i>
                        <h3 class="name">TRANSPORTATION AND MOBILITY </h3>
                        <p class="description">Find out how Aicadium customers have used machine learning to improve
                            employee satisfaction and maximize revenue through hyper-personalisation and dynamic
                            pricing.</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div data-aos="fade-up" data-aos-duration="250" data-aos-delay="300" class="box">
                        <i class="fa fa-magnifying-glass icon"></i>
                        <h3 class="name">OTHER</h3>
                        <p class="description">The potential for machine learning to positively affect various sectors
                            is almost limitless. Explore case studies where we have helped government agencies, wildlife
                            reserves, and more!</p><a class="learn-more" href="#">Learn more »</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--wave container -->
    <div style="height: 150px; overflow: hidden; margin-top: -5px;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #D9EEEC;">

            </path>
        </svg>
    </div>
    <!--wave container -->
    <section class="text-center content-section bgggg" id="about">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>WHY NEURODATA ?</h2>
                    <p class="w-lg-50 why_neurodata"><strong>NEURODATA</strong>™<strong> is on a mission to bring The World’s AI to
                            the Enterprise everywhere.</strong><br></p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <div class="card about_us">
                        <div class="card-body p-4" style="text-align: justify;">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="margin: auto;background: black;text-align: center;"><i class="fas fa-business-time"></i></div>
                            <h4 class="card-title why_neurodata" style="text-align: center;"><strong>Productivity Increase
                                    Workforce Productivity&nbsp;&nbsp;</strong><br></h4>
                            <p class="card-text why_neurodata">Use AI automated tools to increase productivity and speed time to
                                value. Reduce repetitive tasks and enable better collaboration across teams. Use
                                pre-built AI models to automate decision-making and dramatically reduce the time it
                                takes to prepare and deploy AI models.<br></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card about_us">
                        <div class="card-body p-4" style="text-align: justify;">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="text-align: left;margin: auto;background: black;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-up-arrow">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z">
                                    </path>
                                </svg></div>
                            <h4 class="card-title why_neurodata" style="text-align: center;"><strong>Profitability&nbsp;Drive&nbsp;
                                    Profitable Growth&nbsp;</strong><br></h4>
                            <p class="card-text why_neurodata">With AI automation you can reduce costs, deliver new products and
                                services faster and deliver innovative solutions. Using one integrated AI platform you
                                have all the tools you need to deploy AI solutions with fixed and manageable costs.<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card about_us">
                        <div class="card-body p-4" style="text-align: justify;">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: black;text-align: center;margin: auto;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-lightning-charge">
                                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z">
                                    </path>
                                </svg></div>
                            <h4 class="card-title why_neurodata" style="text-align: center;"><strong>Excellence Establish an AI Center
                                    Of Excellence</strong><br></h4>
                            <p class="card-text why_neurodata">Continuous innovation leads to sustainable differentiation. Stay on the
                                cutting edge and make AI a core competency within your enterprise. We offer the
                                technology and AI expertise to make AI adoption easier. We provide the tools to help.
                                You get started quickly and evolve your AI over time.<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SVG  SVG -->
    <div style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #D9EEEC;">

            </path>
        </svg>
    </div>

    <!--Blog Part-->


    <div class="wrapper">

        <div class="item-bg" style="height: 0px; width: 0px;"></div>

        <div class="news-slider">
            <div class="detail-box">
                <h1>
                    Our Blogs
                </h1>
            </div>



            <div class="news-slider__wrp swiper-wrapper">
                <div class="news-slider__item swiper-slide">


                
                    <a href="#" class="news__item">
                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-2.webp" alt="news">
                        </div>
                        <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-date">

                            <span class="news-date__txt">24 May | 01:17pm</span>
                            <!--  <p class="date">on Apr 28, 2022 | <span>01:17pm</span></p>! -->
                        </div>


                        <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s...
                        </p>


                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news">
                        </div>
                        <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-date">
                            <span class="news-date__txt">24 May | 01:17pm</span>
                        </div>


                        <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s...
                        </p>


                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-4.webp" alt="news">
                        </div>
                        <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-date">
                            <span class="news-date__txt">24 May | 01:17pm</span>
                        </div>


                        <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s...
                        </p>

                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">
                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-2.webp" alt="news">
                        </div>
                        <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-date">
                            <span class="news-date__txt">24 May | 01:17pm</span>
                        </div>


                        <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s...
                        </p>


                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-5.webp" alt="news">
                        </div>
                        <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-date">
                            <span class="news-date__txt">24 May | 01:17pm</span>
                        </div>


                        <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s...
                        </p>

                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">
                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-4.webp" alt="news">
                        </div>
                        <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-date">
                            <span class="news-date__txt">24 May | 01:17pm</span>
                        </div>


                        <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s...
                        </p>


                    </a>
                </div>
            </div>

            <div class="news-slider__ctr">

                <div class="news-slider__arrows">
                    <button class="news-slider__arrow news-slider-prev">
                        <span class="icon-font">
                            <svg class="icon icon-arrow-left">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                        </span>
                    </button>
                    <button class="news-slider__arrow news-slider-next">
                        <span class="icon-font">
                            <svg class="icon icon-arrow-right">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </span>
                    </button>
                </div>

                <div class="news-slider__pagination"></div>

            </div>

        </div>

        <!--End Blog Part-->


        <!--Papers Part-->
        <div class="news-slider">

            <div class="detail-box">
                <h1>
                    Research
                </h1>
            </div>
            <div class="news-slider__wrp swiper-wrapper">
                <div class="news-slider__item swiper-slide">

                    <a href="#" class="news__item">
                        <div class="news__title" id="header__Papers">
                            Lorem Ipsum Dolor Sit Amed
                        </div>



                        <div class="news-authors">
                            <span class="news-authors__title">Auteur 1 | auteur 2</span>
                        </div>
                        <div class="news-speciality">
                            <span class="news-speciality__title">Nature Machine Intelligence</span>
                            <span class="news-speciality__title"> 24 May</span>
                        </div>

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-2.webp" alt="news">
                        </div>
                        <div class="buttons">

                            <button class="fill">Full Paper</button>
                            <button class="fill">Read More</button>
                        </div>
                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">
                        <div class="news__title" id="header__Papers">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-authors">
                            <span class="news-authors__title">Auteur 1 | auteur 2</span>
                        </div>
                        <div class="news-speciality">
                            <span class="news-speciality__title">Nature Machine Intelligence</span>
                            <span class="news-speciality__title"> 24 May</span>
                        </div>

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news">
                        </div>
                        <div class="buttons">

                            <button class="fill">Full Paper</button>
                            <button class="fill">Read More</button>
                        </div>





                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">

                        <div class="news__title" id="header__Papers">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-authors">
                            <span class="news-authors__title">Auteur 1 | auteur 2</span>
                        </div>
                        <div class="news-speciality">
                            <span class="news-speciality__title">Nature Machine Intelligence</span>
                            <span class="news-speciality__title"> 24 May</span>
                        </div>

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news">
                        </div>
                        <div class="buttons">

                            <button class="fill">Full Paper</button>
                            <button class="fill">Read More</button>
                        </div>
                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">
                        <div class="news__title" id="header__Papers">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-authors">
                            <span class="news-authors__title">Auteur 1 | auteur 2</span>
                        </div>
                        <div class="news-speciality">
                            <span class="news-speciality__title">Nature Machine Intelligence</span>
                            <span class="news-speciality__title"> 24 May</span>
                        </div>

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news">
                        </div>
                        <div class="buttons">

                            <button class="fill">Full Paper</button>
                            <button class="fill">Read More</button>
                        </div>

                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">

                        <div class="news__title" id="header__Papers">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-authors">
                            <span class="news-authors__title">Auteur 1 | auteur 2</span>
                        </div>
                        <div class="news-speciality">
                            <span class="news-speciality__title">Nature Machine Intelligence</span>
                            <span class="news-speciality__title"> 24 May</span>
                        </div>

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news">
                        </div>
                        <div class="buttons">

                            <button class="fill">Full Paper</button>
                            <button class="fill">Read More</button>
                        </div>

                    </a>
                </div>

                <div class="news-slider__item swiper-slide">
                    <a href="#" class="news__item">
                        <div class="news__title" id="header__Papers">
                            Lorem Ipsum Dolor Sit Amed
                        </div>
                        <div class="news-authors">
                            <span class="news-authors__title">Auteur 1 | auteur 2</span>
                        </div>
                        <div class="news-speciality">
                            <span class="news-speciality__title">Nature Machine Intelligence</span>
                            <span class="news-speciality__title"> 24 May</span>
                        </div>

                        <div class="news__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news">
                        </div>
                        <div class="buttons">

                            <button class="fill">Full Paper</button>
                            <button class="fill">Read More</button>
                        </div>


                    </a>
                </div>
            </div>

            <div class="news-slider__ctr">

                <div class="news-slider__arrows">
                    <button class="news-slider__arrow news-slider-prev">
                        <span class="icon-font">
                            <svg class="icon icon-arrow-left">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                        </span>
                    </button>
                    <button class="news-slider__arrow news-slider-next">
                        <span class="icon-font">
                            <svg class="icon icon-arrow-right">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </span>
                    </button>
                </div>

                <div class="news-slider__pagination"></div>

            </div>

        </div>
    </div>

    <svg hidden="hidden">
        <defs>
            <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                <title>arrow-left</title>
                <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
                </path>
            </symbol>
            <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                <title>arrow-right</title>
                <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
                </path>
            </symbol>
        </defs>
    </svg>

    <!--End Papers Part-->







    </div>

    <svg hidden="hidden">
        <defs>
            <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                <title>arrow-left</title>
                <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
                </path>
            </symbol>
            <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                <title>arrow-right</title>
                <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
                </path>
            </symbol>
        </defs>
    </svg>

    <!--End Papers Part-->










    <!--Waves Container-->

    <!-- ======= Partners Section ======= -->

    <section class="partners_section text-center content-section">
        <div class="container">

            <div class="row">

                <div class="detail-box partners">
                    <h1>
                        Meet our Partners
                    </h1>
                </div>

                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/WB-Logo-color-topbottom-transparent-bkg.png" alt="">

                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/images.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/NAANATECH.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/logo_basket_of-art.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/96f00029-ad8a-40d9-b55d-596ce1cfcbeb.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/1185px-Logo_Philip_morris_international.svg.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/WB-Logo-color-topbottom-transparent-bkg.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/images.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/NAANATECH.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/logo_basket_of-art.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/96f00029-ad8a-40d9-b55d-596ce1cfcbeb.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/1185px-Logo_Philip_morris_international.svg.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/WB-Logo-color-topbottom-transparent-bkg.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/images.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/NAANATECH.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/logo_basket_of-art.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/96f00029-ad8a-40d9-b55d-596ce1cfcbeb.png" alt="">
                        </div>
                        <div class="slide">
                            <img id="image" src="/assets/img/logos/1185px-Logo_Philip_morris_international.svg.png" alt="">
                        </div>
                    </div>
                </div>


            </div>

        </div>
        </div>
    </section>
    <!-- End Partners Section -->

   
@endsection