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
                        <h1>Complete Smile Designing</h1>
                        <ul>
                            <li>
                                <a href="/">
                                    Home </a>
                            </li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">
                                Complete Smile Designing </li>
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
                                    <img src="assets/images/home-two/service/complete-smile-designing-2.jpg" alt="Complete Smile Designing">
                                </div>

                                <div class="post-content" data-aos="fade-up" data-aos-duration="800">
                                    <h3 class="title">Complete Smile Designing</h3>

                                    <p>
                                        At NU Dental Maestro, complete smile designing focuses on enhancing the overall appearance
                                        of your smile by improving tooth shape, alignment, color, and proportion. The goal is to
                                        create a natural, confident, and aesthetically pleasing smile.
                                    </p>

                                    <p>
                                        Using advanced digital smile planning and a personalized approach, our dental experts
                                        carefully evaluate facial features, dental structure, and smile aesthetics to design
                                        results that complement your appearance.
                                    </p>

                                    <p>
                                        Suitable for adults seeking cosmetic improvement, our smile designing services emphasize
                                        precision, comfort, and customized care—helping you achieve a balanced, radiant smile
                                        with long-lasting results.
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
                                                    Find answers to common questions about complete smile designing,
                                                    appointments, and patient care at NU Dental Maestro.
                                                </p>
                                            </div>

                                            <div class="accordion" id="accordionOne">

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="800">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse1" aria-expanded="true">
                                                            Do I need to book an appointment for smile designing?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse1" class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, booking an appointment allows our specialists to understand
                                                                your concerns and plan a personalized smile design treatment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1000">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse2" aria-expanded="false">
                                                            What treatments are included in smile designing?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse2" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Smile designing may include veneers, whitening, alignment,
                                                                reshaping, or restorative treatments based on individual needs.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1200">
                                                    <div class="accordion-header">
                                                        <h6 class="accordion-title" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse3" aria-expanded="false">
                                                            Is complete smile designing safe?
                                                        </h6>
                                                    </div>
                                                    <div id="collapse3" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionOne">
                                                        <div class="accordion-content">
                                                            <p>
                                                                Yes, smile designing is safe when performed by experienced
                                                                professionals using advanced techniques and quality materials.
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
                                                                Yes, NU Dental Maestro is CGHS empaneled, making smile designing
                                                                services accessible for eligible patients.
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