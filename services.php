<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SNMR-SOFTWARE|Web-Development</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="body_wrap">

        <!-- header start -->
        <?php
        require 'components/nav.php';
        ?>
        <!-- header end -->

    <!-- hero section start  -->
    <section class="breadcrumb pt-105 pb-90">
                <div class="container">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title">Our Services</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb-item"><a href="index.php">HOme</a></li>
                            <li class="breadcrumb-item">Our Services</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- hero section end  -->

            <?php
    // Get the 'id' parameter from the URL (default to 'default' if not set)
    $id = isset($_GET['id']) ? $_GET['id'] : 'default';

    // Switch case to render different sections based on 'id'
    switch($id) {
        case 'web':
            require 'services/web_development.php';  
            break;
        case 'mobile':
            require 'services/mobile_development.php';  
            break;
        case 'software':
            require 'services/software_development.php'; 
            break;
        case 'ux':
            require 'services/ux_design.php'; 
            break;
        case 'dm':
            require 'services/digital-marketing.php'; 
            break;  
        default:
            echo "<section id='default'>
                    <h1>Default Section</h1>
                    <p>No specific ID found, showing the default section.</p>
                  </section>";
            break;
    }
    ?>

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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>


</body>

</html>