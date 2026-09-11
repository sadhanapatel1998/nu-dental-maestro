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
                        <h1>Oral Health Screening</h1>
                        <ul>
                            <li>
                                <a href="/">
                                    Home </a>
                            </li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">
                                Oral Health Screening </li>
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
                                    <img src="assets/images/home-two/service/oral-health-screening-2.jpg" alt="Oral Health Screening">
                                </div>

                                <div class="post-content" data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title">Oral Health Screening</h3>

                                    <p>
                                        At NU Dental Maestro, oral health screening plays a vital role in maintaining a healthy
                                        smile and preventing future dental problems. Our screenings focus on early detection of
                                        tooth decay, gum disease, oral infections, and other dental concerns.
                                    </p>

                                    <p>
                                        Using modern diagnostic techniques and a patient-friendly approach, our experienced
                                        dental professionals carefully assess your teeth, gums, and overall oral condition to
                                        ensure accurate evaluation and timely care.
                                    </p>

                                    <p>
                                        Suitable for children, adults, and senior patients, our oral health screening services
                                        emphasize safety, hygiene, and personalized guidance—helping you make informed decisions
                                        for long-term oral wellness.
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
                                                    Find answers to common questions about oral health screening,
                                                    appointments, and patient care at NU Dental Maestro.
                                                </p>
                                            </div>

                                            <div class="accordion" id="accordionOne">

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="800">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse1" aria-expanded="true">
                                                            Do I need to book an appointment for oral health screening?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse1" class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, we recommend booking an appointment in advance to ensure
                                                                sufficient consultation time and minimal waiting.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1000">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse2" aria-expanded="false">
                                                            What does an oral health screening include?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse2" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                The screening includes examination of teeth, gums, oral tissues,
                                                                bite alignment, and overall mouth health to detect early dental issues.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1200">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse3" aria-expanded="false">
                                                            Is oral health screening suitable for children and seniors?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse3" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, our screenings are safe, gentle, and tailored for patients
                                                                of all age groups, including children and elderly individuals.
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
                                                                Yes, NU Dental Maestro is CGHS empaneled, making quality dental
                                                                care accessible for eligible patients.
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