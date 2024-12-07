<style>
        .sd-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--color-primary);
        }
        .sd-contents {
            font-size: 1.25rem;
            font-weight: 400;
            color: #666;
        }
        .xb-item--image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .xb-item--image:hover {
            transform: scale(1.05);
        }
        .project-name-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            text-align: center;
            background: rgba(38, 219, 219, 0.9);
            color: #fff;
            font-size: 1.25rem;
            font-weight: 600;
            transform: translateY(100%);
            transition: transform 0.3s ease-in-out;
        }
        .xb-item--image:hover .project-name-overlay {
            transform: translateY(0);
        }
        /* Fade-in animation for images */
        .xb-item--image {
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .pricing-one__card {
            border-radius: 50%;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .pricing-one__card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
        }

        .card-body {
            border-radius: 15px;
            position: relative;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        }

        .icon-low-cost,
        .icon-best-price {
            text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
        }


        .btn {
            box-shadow: 0 4px 6px rgba(38, 219, 219, 0.5);
        }

        .card {
            border-radius: 50% 50% 0 0;
          
        }

        .pricing-one__card__list {
            border-radius: 50%;
            border-style: dotted;
        }
    </style>


<!-- main area start  -->
<main>
            <!-- service details area start -->
            <div class="service-details pt-125 ">
                <div class="container">
                    <div class="row mt-none-30 align-items-center">
                        <div class="col-lg-6 mt-30">
                            <div class="section-title">
                                <span class="sub-title wow fadeInRight" data-wow-duration=".7s">Web Development</span>
                                <h3 class="title xb-split-text split-in-right mb-15">Building Smart and Scalable Websites <span>with SNMRGROUP</span></h3>
                            </div>
                            <div class="service-single-content">
                                <p class="mb-40 wow fadeInUp" data-wow-duration=".7s">
                                    Our mission is to create dynamic, responsive, and user-centric websites that empower businesses to thrive online. We aim to deliver web solutions that blend innovation and functionality, exceeding client expectations.
                                </p>
                                <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".7s">
                                    Our vision is to be a leading force in web development, recognized for delivering cutting-edge solutions, exceptional quality, and unparalleled customer satisfaction.
                                </p>
                            </div>

                        </div>
                        <div class="col-lg-6 mt-30">
                            <div class="service-details_image">
                                <img class="ukiyo" data-u-speed="1.2" src="assets/img/about/webdev.png" alt="web-dev">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-80">
                        <div class="col-lg-8">
                            <div class="sv-details mt-30">
                                <h3 class="sv-title">Great web development ensures seamless performance, user-friendly interfaces, <br> and robust functionality without compromising on design!</h3>
                                <ul class="sv-list">
                                    <li>Custom website design and development</li>
                                    <li>Responsive and mobile-friendly design</li>
                                    <li>Website optimization for better performance</li>
                                    <li>Ongoing support and maintenance services</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="sd-details">
                                <h3 class="sd-title">WEB DEVELOPMENT</h3>
                                <p class="sd-content pb-60">Our mission is to deliver high-quality web solutions that drive business growth, ensuring exceptional user experiences and optimized functionality for your online presence.</p>
                                <a href="contact.php" class="sd-button">Let’s Talk <img src="assets/img/icon/SD-01.svg" alt="icon"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- service details area end  -->

            <!-- service details slider area two end  -->
            <section class="service_details-slider z-3 pt-130">
    <div class="container mb-5">
        <!-- Section Title -->
        <h2 class="sd-title text-center mb-4">Our Projects</h2>
    </div>

    <!-- Swiper Container -->
    <div class="service-gallery-slider swiper-container">
        <div class="swiper-wrapper">
            <!-- Project 1 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/city.png" alt="Dhanbad City School Project" class="img-fluid">
                    <div class="project-name-overlay">Dhanbad City School Project</div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/kart.png" alt="SnmrKart Website" class="img-fluid">
                    <div class="project-name-overlay">SnmrKart Website</div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/siri.png" alt="Sirions Website" class="img-fluid">
                    <div class="project-name-overlay">Sirions Website</div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/one.png" alt="Oneglobe Consolidators" class="img-fluid">
                    <div class="project-name-overlay">Oneglobe Consolidators</div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/uni.png" alt="Uniglobe website" class="img-fluid">
                    <div class="project-name-overlay">Uniglobe Website</div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/logitrust.png" alt="Logitrusrt Voyages Website" class="img-fluid">
                    <div class="project-name-overlay">Logitrusrt Voyages Website</div>
                </div>
            </div>

            <!-- Project 7 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/aeropost.png" alt="Aeropost Logistics Website" class="img-fluid">
                    <div class="project-name-overlay">Aeropost Logistics Website</div>
                </div>
            </div>

            <!-- Project 8 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/singapore.png" alt="Oneglobe Singapore Website" class="img-fluid">
                    <div class="project-name-overlay">Oneglobe Singapore Website</div>
                </div>
            </div>

            <!-- Project 9 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/hk.png" alt="Oneglobe Logistics (HK) Website" class="img-fluid">
                    <div class="project-name-overlay">Oneglobe Logistics (HK) Website</div>
                </div>
            </div>

            <!-- Project 10 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/india.png" alt="Oneglobe Logistics India Pvt. Ltd. Website" class="img-fluid">
                    <div class="project-name-overlay">Oneglobe Logistics India Pvt. Ltd. Website</div>
                </div>
            </div>

            <!-- Project 11 -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/anvesak.png" alt="Anvesak Website" class="img-fluid">
                    <div class="project-name-overlay">Anvesak Website</div>
                </div>
            </div>

        </div>
        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Section Description -->
    <div class="container mt-5">
        <h3 class="sd-contents text-center">
            Showcasing our expertise in web development, where we create responsive, high-performance websites tailored to your business goals and user needs. Check out our latest work!
        </h3>
    </div>
</section>


            <!-- service details slider area two end  -->

            <!--  marquee start -->
            <section class="sd-marquee pt-120 pb-10">
                <div class="marquee-left">
                    <h2 class="marquee-item">WEB DEVELOPMENT</h2>
                    <h2 class="marquee-item">RESPONSIVE DESIGN</h2>
                    <h2 class="marquee-item">USER EXPERIENCE</h2>
                    <h2 class="marquee-item">CUSTOM SOLUTIONS</h2>
                    <h2 class="marquee-item">SEO OPTIMIZATION</h2>
                    <h2 class="marquee-item">WEB APPLICATIONS</h2>
                    <h2 class="marquee-item">ECOMMERCE DEVELOPMENT</h2>
                    <h2 class="marquee-item">CONTENT MANAGEMENT</h2>
                    <h2 class="marquee-item">CLOUD SERVICES</h2>
                    <h2 class="marquee-item">TECHNICAL SUPPORT</h2>
                </div>
            </section>

            <!--  marquee end -->

            <section class="pricing-one py-5" id="pricing">
                <div class="container">
                    <div class="sec-title-two text-center mb-5">
                        <h6 class="sec-title-two__tagline text-uppercase fw-bold d-inline-block py-2 px-4 rounded-pill shadow-lg text-white bg-gradient">
                            <span class="sec-title-two__tagline__left me-2"><i class="icofont-rounded-double-left"></i></span>
                            Our Pricing Plan
                            <span class="sec-title-two__tagline__right ms-2"><i class="icofont-rounded-double-right"></i></span>
                        </h6>


                        <h3 class="sec-title-two__title mt-3">The Terms and Conditions Plan</h3>
                    </div>
                    <div class="row justify-content-center">
                        <!-- Basic Plan -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card text-center shadow-lg position-relative pricing-one__card bg-dark text-white rounded-top">
                                <div class="card-body p-4 position-relative">
                                    <div class="pricing-one__card__icon mb-3">
                                        <i class="icon-low-cost text-warning display-4"></i>
                                    </div>
                                    <h4 class="pricing-one__card__title mb-3">Web-Development <br> Basic Plan</h4>
                                    <h3 class="pricing-one__card__price mb-4" style="color: var(--color-primary);">starts at just $799</h3>
                                    <ul class="list-unstyled pricing-one__card__list rounded border border-dotted p-3">
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Page Limit: Up to 5 pages
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Standard Cloud Hosting
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Basic SEO setup
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Basic website analytics
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Content updation once a month
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Standard SSL certificate
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> AI-Powered Chatbot
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Accessibility Features
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Stunning Animations
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Integration Support
                                        </li>
                                    </ul>

                                    <a href="contact.php" class="btn rounded-pill px-4 py-2 mt-3" style="background: var(--color-primary);">Get Started</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card text-center shadow-lg position-relative pricing-one__card bg-dark text-white rounded-top">
                                <div class="card-body p-4 position-relative">
                                    <div class="pricing-one__card__icon mb-3">
                                        <i class="icon-low-cost text-warning display-4"></i>
                                    </div>
                                    <h4 class="pricing-one__card__title mb-3">Web-Development <br>Advanced Plan</h4>
                                    <h3 class="pricing-one__card__price mb-4" style="color: var(--color-primary);">starts at  just $1000</h3>
                                    <ul class="list-unstyled pricing-one__card__list rounded border border-dotted p-3">
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Page Limit: Up to 10 pages
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Premium Cloud Hosting
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Advanced SEO setup
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Comprehensive analytics
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Content updation once a month
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i>Integration Support
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Advanced SSL certificate
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> AI-Powered Chatbot
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Accessibility Features
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fas fa-check-circle me-2" style="color: var(--color-primary);"></i> Stunning Video Animations
                                        </li>
                                    </ul>

                                    <a href="contact.php" class="btn rounded-pill px-4 py-2 mt-3" style="background: var(--color-primary);">Get Started</a>
                                </div>
                            </div>
                        </div>

                    </div>
            </section>


            <!-- services-nav area start  -->
            <div class="services-nav pt-140 pb-150">
                <div class="container">
                    <div class="ul_li_between">
                        <a href="web_development.php" class="service-nav-item">
                            <span class="sd-link"><i class="fal fa-long-arrow-left"></i> PREVIEW</span>
                            <h2 class="sd-title">RESPONSIVE DESIGN</h2>
                        </a>
                        <a href="#"><img src="assets/img/icon/SD.svg" alt="services"></a>
                        <a href="software_development.php" class="service-nav-item service-nav-item--next">
                            <span class="sd-link">Next <i class="fal fa-long-arrow-right"></i></span>
                            <h2 class="sd-title">CUSTOM WEB SOLUTIONS</h2>
                        </a>
                    </div>
                </div>
            </div>

            <!-- services-nav area end -->

        </main>
        <!-- main area end  -->