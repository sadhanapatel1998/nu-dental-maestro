<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'seo.php'; ?>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo htmlspecialchars($pageMeta['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageMeta['keywords']); ?>">
    <meta name="author" content="NU Dental Maestro – Multispeciality Dental Clinic & Implant Centre">
    <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">

    <?php if (!empty($pageMeta['canonical'])): ?>
        <link rel="canonical" href="<?php echo $pageMeta['canonical']; ?>">
    <?php endif; ?>

    <title><?php echo htmlspecialchars($pageMeta['title']); ?></title>

    <!--====== Favicon Icon ======-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/home-one/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/home-one/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/home-one/favicon//favicon-16x16.png">
    <link rel="manifest" href="assets/images/home-one/favicon//site.webmanifest">

    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon_medolia.css">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <!--====== Magnific-popup css ======-->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <!--====== Nice Select CSS ======-->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!--====== AOS Animation ======-->
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <!--====== Spacing CSS  ======-->
    <link rel="stylesheet" href="assets/css/spacings.css">
    <!--====== Common Style css ======-->
    <link rel="stylesheet" href="assets/css/common-style.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/pages/home-one.css">
    <link rel="stylesheet" href="assets/css/pages/home-two.css">
    <link rel="stylesheet" href="assets/css/pages/innerpage.css">

</head>

<body>
    <!--====== Start Loader Area ======-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--====== End Loader Area ======-->
    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>

    <?php require_once("include/header.php"); ?>

    <?= $content ?? ''; ?>

    <?php require_once('include/footer.php') ?>
    <div class="back-to-top"><i class="far fa-angle-up"></i></div>

    <!-- FLOATING CONTACT BUTTONS -->
    <div class="floating-contact">

        <!-- WhatsApp -->
        <a href="https://wa.me/919211345449" target="_blank" class="float-btn whatsapp">
            <span class="icon">
                <i class="fab fa-whatsapp"></i>
            </span>
            <span class="text">
                WhatsApp
            </span>
        </a>

        <!-- Call -->
        <a href="tel:+919211345449" class="float-btn call">
            <span class="icon">
                <i class="fas fa-phone-alt"></i>
            </span>
            <span class="text">
                Call Now
            </span>
        </a>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="assets/js/plugins/jquery-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/plugins/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!--====== Waypoint js ======-->
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <!--====== CounterUp js ======-->
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <!--====== Slick js ======-->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <!--====== Nice Select js ======-->
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <!--====== AOS js ======-->
    <script src="assets/js/plugins/aos.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/common.js"></script>
    <!--====== Page specific js ======-->
    <script src="assets/js/home-one.js"></script>
    <script src="assets/js/home-two.js"></script>

    <script>
        $(document).ready(function () {
            $('.gallery-popup').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });

            AOS.init({
                duration: 1000,
                once: true
            });
        });
    </script>



</body>

</html>