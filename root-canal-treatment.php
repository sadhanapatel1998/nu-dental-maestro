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
                        <h1>Root Canal Treatment</h1>
                        <ul>
                            <li>
                                <a href="/">
                                    Home </a>
                            </li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">
                                Root Canal Treatment </li>
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
                                    <img src="assets/images/home-two/service/root-canal-treatment-2.jpg" alt="Root Canal Treatment">
                                </div>

                                <div class="post-content" data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title">Root Canal Treatment</h3>

                                    <p>
                                        At NU Dental Maestro, root canal treatment is performed to save infected or severely
                                        damaged teeth while relieving pain and discomfort. The procedure removes infected pulp
                                        and helps restore the natural function of the tooth.
                                    </p>

                                    <p>
                                        Using advanced equipment and precise techniques, our experienced dental professionals
                                        carefully clean, disinfect, and seal the tooth to prevent further infection and ensure
                                        long-lasting oral health.
                                    </p>

                                    <p>
                                        Suitable for patients experiencing tooth pain, sensitivity, or deep decay, our root
                                        canal treatments emphasize comfort, safety, and effective pain management—helping you
                                        preserve your natural smile.
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
                                                    Find answers to common questions about root canal treatment,
                                                    appointments, and patient care at NU Dental Maestro.
                                                </p>
                                            </div>

                                            <div class="accordion" id="accordionOne">

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="800">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse1" aria-expanded="true">
                                                            Do I need to book an appointment for root canal treatment?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse1" class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, booking an appointment in advance allows our dentist to
                                                                properly examine the tooth and plan the required treatment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1000">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse2" aria-expanded="false">
                                                            Is root canal treatment painful?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse2" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Modern root canal procedures are performed under anesthesia,
                                                                making the treatment comfortable and virtually pain-free.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1200">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse3" aria-expanded="false">
                                                            When is a root canal treatment required?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse3" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Root canal treatment is recommended when tooth pulp becomes
                                                                infected due to deep decay, cracks, or dental trauma.
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
                                                                Yes, NU Dental Maestro is CGHS empaneled, making root canal
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