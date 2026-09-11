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
                        <h1>Dental Implants</h1>
                        <ul>
                            <li>
                                <a href="/">
                                    Home </a>
                            </li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">
                                Dental Implants </li>
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
                                    <img src="assets/images/home-two/service/dental-implants-2.jpg" alt="Dental Implants">
                                </div>

                                <div class="post-content" data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title">Dental Implants</h3>

                                    <p>
                                        At NU Dental Maestro, dental implants provide a reliable and long-term solution for
                                        replacing missing teeth while restoring natural function and appearance. Implants
                                        are designed to look, feel, and function like natural teeth.
                                    </p>

                                    <p>
                                        Using advanced implant technology and a patient-focused approach, our experienced
                                        dental specialists carefully plan and place implants to ensure stability, comfort,
                                        and long-lasting results.
                                    </p>

                                    <p>
                                        Suitable for adults with missing teeth, our dental implant services emphasize
                                        precision, safety, and personalized care—helping you regain confidence, comfort,
                                        and a healthy smile.
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
                                                    Find answers to common questions about dental implants,
                                                    appointments, and patient care at NU Dental Maestro.
                                                </p>
                                            </div>

                                            <div class="accordion" id="accordionOne">

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="800">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse1" aria-expanded="true">
                                                            Do I need to book an appointment for dental implants?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse1" class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, booking an appointment in advance allows our specialists to
                                                                evaluate bone health and determine suitability for implant treatment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1000">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse2" aria-expanded="false">
                                                            What are dental implants made of?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse2" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Dental implants are typically made of biocompatible titanium
                                                                that integrates securely with the jawbone for strong support.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1200">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse3" aria-expanded="false">
                                                            Are dental implants safe and long-lasting?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse3" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, dental implants are a safe and proven solution with proper
                                                                care, offering long-term durability and functionality.
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
                                                                Yes, NU Dental Maestro is CGHS empaneled, making dental implant
                                                                treatment accessible for eligible patients.
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