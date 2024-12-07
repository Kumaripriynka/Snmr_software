<!doctype html>
<html lang="zxx">
<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SNMR-SOFTWARE|Contact</title>

    <link rel="shortcut icon" href="assets/img/logo/icon.png" type="images/x-icon" />

    <!-- css include -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/imageRevealHover.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .social-icon i {
            transition: color 0.3s ease, transform 0.3s ease;
            /* Smooth transition */
        }

        .social-icon:hover i {
            color: var(--hover-color, #333);
            /* Set color dynamically */
            transform: scale(1.1);
            /* Slightly enlarge icon on hover */
        }

        /* Map brand colors using data attributes */
        .social-icon:hover {
            --hover-color: attr(data-color);
        }
    </style>


</head>

<body>
    <div class="body_wrap">

        <!-- header start -->
       
        <?php  
   require 'components/nav.php';
   ?>
        <!-- header end -->

        <!-- main area start  -->
        <main>
            <!-- breadcrumb start  -->
            <section class="breadcrumb pt-105 pb-90">
                <div class="container">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title">Contact us</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb-item"><a href="index.php">HOme</a></li>
                            <li class="breadcrumb-item">Contact us</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end  -->

            <!-- contact start -->
            <section class="contact pt-110 pb-180">
                <div class="container">
                    <div class="row pb-125">
                        <div class="section-title pb-60">
                            <h3 class="title xb-split-text split-in-right">WE CREATE DIGITAL <br> <span>SOLUTIONS</span></h3>
                        </div>
                        <ul class="contact-location list-unstyled">
                            <li>
                                <h3>Location</h3>
                                <p>3rd Floor Flat No.-303 Khanuja Enclave, Saraidela Near Pragati Hospital, Dhanbad (Jharkhand)</p>
                            </li>
                            <li class="text-lowercase">
                                <h3>Contact</h3>
                                <p>info@snmrgroup.com, +918368739891</p>
                            </li>
                            <li>
                                <h3>Social</h3>
                                <div class="d-flex gap-3">
                                    <a href="https://www.instagram.com/snmrgroup?igsh=Mmg3NGF5ZzFuOWVs" target="_blank" class="text-decoration-none text-dark social-icon" data-color="#E4405F">
                                        <i class="fab fa-instagram fs-4"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/snmrgroup///linkdln" target="_blank" class="text-decoration-none text-dark social-icon" data-color="#EA4C89">
                                        <i class="fab fa-linkedin fs-4"></i>
                                    </a>
                                    <a href="https://bit.ly/SNMR-Facebbok" target="_blank" class="text-decoration-none text-dark social-icon" data-color="#1877F2">
                                        <i class="fab fa-facebook fs-4"></i>
                                    </a>
                                    <a href="https://bit.ly/3utQ1eH" target="_blank" class="text-decoration-none text-dark social-icon" data-color="#1DA1F2">
                                        <i class="fab fa-twitter fs-4"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <div class="row">
                        <div class="section-title contact-title mb-35">
                            <span class="sub-title">Share your creative ideas with us and <br>
                                get back designs that impres <br>
                                and engage</span>
                        </div>
                        <div class="contact-form-inner">
                            <form class="contact-form pos-rel" method="POST" action="contact_handler.php">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <label for="name">Your Name</label>
                                            <input id="name" type="text" name="name" placeholder="Gomez Golatria" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="text" placeholder="gomez@example.com" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <label for="phone">Phone</label>
                                            <input id="phone" name="phone" type="text" placeholder="+91 8001234568" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <label for="company">Company</label>
                                            <input id="company" name="company" type="text" placeholder="xpressbuddy Digital Solutions" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="xb-item--field xb-item--textarea">
                                            <label for="message">Your message</label>
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Hello Dennis, can you help me with..."></textarea>
                                        </div>
                                        <button type="submit" class="circle-btn port-btn">
                                            <span class="button__bg"></span>Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact end -->

        </main>
        <!-- main area end  -->

        <!-- footer start -->
        <?php  
   require 'components/footer.php';
   ?>
        <!-- footer end -->

    </div>

    <!-- jquery include -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/touchspin.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/imageRevealHover.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/easing.min.js"></script>
    <script src="assets/js/scrollspy.js"></script>
    <script src="assets/js/ukiyo.min.js"></script>
    <script src="assets/js/lenis.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>