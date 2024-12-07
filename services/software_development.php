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

        .sd-pricing .icon {
    font-size: 3rem;
    margin-bottom: 15px;
}
.sd-pricing .card:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease-in-out;
}

    </style>
<!-- main area start -->
<main>
    <!-- service details area start -->
    <div class="service-details pt-125">
        <div class="container">
            <div class="row mt-none-30 align-items-center">
                <div class="col-lg-6 mt-30">
                    <div class="section-title">
                        <span class="sub-title wow fadeInRight" data-wow-duration=".7s">Software Development</span>
                        <h3 class="title xb-split-text split-in-right mb-15">Smart and Scalable Solutions for <span>Your Business Growth</span></h3>
                    </div>
                    <div class="service-single-content">
                        <p class="mb-40 wow fadeInUp" data-wow-duration=".7s">
                            We specialize in building bespoke software solutions tailored to your specific business needs. From idea to execution, our solutions are designed to maximize efficiency and ROI.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".7s">
                            Whether it's a cloud-based application, mobile app, or enterprise system, we deliver excellence with cutting-edge technology and a customer-first approach.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mt-30">
                    <div class="service-details_image">
                        <img class="ukiyo" data-u-speed="1.2" src="assets/img/about/software.png" alt="Software Development">
                    </div>
                </div>
            </div>
            <div class="row pt-80">
                <div class="col-lg-8">
                    <div class="sv-details mt-30">
                        <h3 class="sv-title">Quality software ensures seamless performance, robust architecture, and user-centric design for business success!</h3>
                        <ul class="sv-list">
                            <li>Custom software and application development</li>
                            <li>Enterprise-level solutions</li>
                            <li>API development and integration</li>
                            <li>Cloud migration and support</li>
                            <li>Continuous maintenance and updates</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-30">
                    <div class="sd-details">
                        <h3 class="sd-title">SOFTWARE DEVELOPMENT</h3>
                        <p class="sd-content pb-60">We deliver high-quality, scalable, and secure software solutions that transform businesses and enhance customer experiences.</p>
                        <a href="contact.php" class="sd-button">Let’s Talk <img src="assets/img/icon/SD-01.svg" alt="software-development"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->

    <!-- service projects slider start -->
    <section class="service_details-slider z-3 pt-130">
    <div class="container mb-5">
        <h2 class="sd-title text-center mb-4">We Provide a Variety of Software Projects</h2>
    </div>
    <div class="service-gallery-slider swiper-container">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/e-learning.png" alt="Educational Portal" class="img-fluid">
                    <div class="project-name-overlay">Educational Portal</div>
                </div>
            </div>

           <!-- Healthcare Management System -->
           <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/healthcare.png" alt="Healthcare Management System" class="img-fluid">
                    <div class="project-name-overlay">Healthcare Management System</div>
                </div>
            </div>

             <!-- Logistics Management System -->
             <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/logistics.png" alt="Logistics Management System" class="img-fluid">
                    <div class="project-name-overlay">Logistics Management System</div>
                </div>
            </div>
             <!-- E-Commerce Platform -->
             <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/e-commerse.png" alt="E-Commerce Platform" class="img-fluid">
                    <div class="project-name-overlay">E-Commerce Platform</div>
                </div>
            </div>

             <!-- Custom CRM Solution -->
             <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/crm.png" alt="Custom CRM Solution" class="img-fluid">
                    <div class="project-name-overlay">Custom CRM Solution</div>
                </div>
            </div>

            <!-- Mobile Banking App -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/mobile_banking.png" alt="Mobile Banking App" class="img-fluid">
                    <div class="project-name-overlay">Mobile Banking App</div>
                </div>
            </div>
           
         
            <!-- Enterprise Management System -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/enterprise.png" alt="Enterprise Management System" class="img-fluid">
                    <div class="project-name-overlay">Enterprise Management System</div>
                </div>
            </div>

               <!-- Inventory Management System -->
               <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/inventory.png" alt="Inventory Management System" class="img-fluid">
                    <div class="project-name-overlay">Inventory Management System</div>
                </div>
            </div>
           
            
            <!-- SaaS Application -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/saas.png" alt="SaaS Application" class="img-fluid">
                    <div class="project-name-overlay">SaaS Application</div>
                </div>
            </div>
         
           
            <!-- Cloud-Based Collaboration Tool -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/tool.png" alt="Cloud-Based Collaboration Tool" class="img-fluid">
                    <div class="project-name-overlay">Cloud-Based Collaboration Tool</div>
                </div>
            </div>
            <!-- AI-Powered Chatbot -->
            <div class="swiper-slide">
                <div class="xb-item--image position-relative">
                    <img src="assets/img/searvice/chatbot.png" alt="AI-Powered Chatbot" class="img-fluid">
                    <div class="project-name-overlay">AI-Powered Chatbot</div>
                </div>
            </div>
           
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="container mt-5">
        <h3 class="sd-contents text-center">
            Explore our portfolio of innovative software solutions crafted to solve real-world challenges for businesses like yours.
        </h3>
    </div>
</section>

    <!-- service projects slider end -->
</main>


            <!-- service details slider area two end  -->

            <!--  marquee start -->
            <section class="sd-marquee pt-120 pb-10">
    <div class="marquee-left">
        <h2 class="marquee-item">SOFTWARE DEVELOPMENT</h2>
        <h2 class="marquee-item">ENTERPRISE SOLUTIONS</h2>
        <h2 class="marquee-item">CLOUD APPLICATIONS</h2>
        <h2 class="marquee-item">MOBILE APP DEVELOPMENT</h2>
        <h2 class="marquee-item">AI & MACHINE LEARNING</h2>
        <h2 class="marquee-item">CUSTOM SOFTWARE</h2>
        <h2 class="marquee-item">API INTEGRATION</h2>
        <h2 class="marquee-item">BLOCKCHAIN DEVELOPMENT</h2>
        <h2 class="marquee-item">SAAS DEVELOPMENT</h2>
        <h2 class="marquee-item">CYBERSECURITY SOLUTIONS</h2>
    </div>
</section>

<section class="sd-pricing pt-120 pb-90">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Tailored Software Development Services</h2>
            <p class="lead">We provide customized solutions with pricing that adapts to your specific needs. Let's build your next big idea!</p>
        </div>
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-body text-center">
                        <div class="icon mb-4">
                            <i class="bi bi-laptop fs-1 text-info"></i>
                        </div>
                        <h5 class="card-title fw-bold text-info">Custom Software</h5>
                        <ul class="list-unstyled mb-4  text-white">
                            <li>Bespoke software tailored to your business</li>
                            <li>Scalable architecture for growth</li>
                            <li>Optimized for performance and reliability</li>
                        </ul>
                        <p class="text-white"><strong>Price:</strong> As per customer requirement</p>
                        <a href="contact.php" class="btn btn-outline-info mt-5">Get a Quote</a>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card-body text-center">
                        <div class="icon mb-4">
                            <i class="bi bi-building fs-1 text-info "></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color:var(--color-primary);">Enterprise Solutions</h5>
                        <ul class="list-unstyled mb-4  text-white">
                            <li>ERP, CRM, and business management tools</li>
                            <li>Integration with existing systems</li>
                            <li>Secure and reliable solutions</li>
                        </ul>
                        <p class="text-white"><strong>Price:</strong> As per customer requirement</p>
                        <a href="contact.php" class="btn btn-outline-info mt-5">Get a Quote</a>
                    </div>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card-body text-center">
                        <div class="icon mb-4">
                            <i class="bi bi-cloud fs-1 text-info"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color:var(--color-primary)">Cloud-Based Applications</h5>
                        <ul class="list-unstyled mb-4 text-white">
                            <li>Cloud-native software development</li>
                            <li>Seamless scalability and high availability</li>
                            <li>Integration with cloud services</li>
                        </ul>
                        <p class="text-white "><strong>Price:</strong> As per customer requirement</p>
                        <a href="contact.php" class="btn btn-outline-info mt-5">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!--  marquee end -->
</main>
 <!-- main area end  -->