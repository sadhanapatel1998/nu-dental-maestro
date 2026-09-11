<?php
ob_start();
?>
<main>
    <section class="page-banner">
        <div class="shape shape-one"><span></span></div>
        <div class="shape shape-two"><span></span></div>
        <div class="shape shape-three"><span></span></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Page Content -->
                    <div class="page-content text-center">
                        <h1>Aligners</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">Aligners </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Start Blog Details Section ======-->
    <section class="medolia-blog-details-sec pt-50 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-details-wrapper mb-40">
                        <div class="blog-post-main mb-70">
                            <div class="blog-post-item">
                                <div class="post-thumbnail">
                                    <img src="assets/images/home-two/service/aligners-2.jpg" alt="Clear Aligners Treatment">
                                </div>

                                <div class="post-content" data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title">Clear Aligners</h3>

                                    <p>
                                        At NU Dental Maestro, clear aligner treatment offers a modern and discreet solution for
                                        straightening teeth and improving smile aesthetics. Aligners help correct spacing,
                                        crowding, and mild to moderate bite concerns comfortably.
                                    </p>

                                    <p>
                                        Using advanced digital planning and a patient-friendly approach, our dental specialists
                                        carefully design customized aligners that gradually move your teeth into proper alignment
                                        with precision and predictable results.
                                    </p>

                                    <p>
                                        Suitable for teenagers and adults, our clear aligner services emphasize comfort,
                                        convenience, and aesthetics—helping you achieve a confident, well-aligned smile
                                        without traditional braces.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="medolia-faq-sec pb-80">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="medolia-sticky-wrapper">
                                        <div class="medolia-content-box mb-5 mb-xl-0 ps-0">
                                            <div class="section-title mb-50" data-aos="fade-up" data-aos-duration="1000">
                                                <h2 class="mb-20">FAQs</h2>
                                                <p>
                                                    Find answers to common questions about clear aligners,
                                                    treatment duration, and patient care at NU Dental Maestro.
                                                </p>
                                            </div>

                                            <div class="accordion" id="accordionOne">

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="800">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse1" aria-expanded="true">
                                                            Do I need to book an appointment for clear aligner consultation?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse1" class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, booking an appointment in advance allows our specialists to
                                                                assess your alignment needs and plan the most suitable aligner treatment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1000">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse2" aria-expanded="false">
                                                            What issues can clear aligners correct?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse2" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Clear aligners can correct crowding, spacing, and mild to moderate
                                                                bite issues, depending on individual dental conditions.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1200">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse3" aria-expanded="false">
                                                            Are clear aligners comfortable to wear?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse3" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, clear aligners are designed for comfort, are removable, and
                                                                allow you to maintain normal eating habits and oral hygiene.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1400">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse4" aria-expanded="false">
                                                            Is NU Dental Maestro CGHS empaneled?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse4" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, NU Dental Maestro is CGHS empaneled, making clear aligner
                                                                treatment accessible and convenient for eligible patients.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div><!-- accordion -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <?php include('./include/service-sidebar.php') ?>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Blog Details Section ======-->

</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>