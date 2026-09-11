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
                        <h1>Dr . Aneesh Ganguly</h1>
                        <ul>
                            <li>
                                <a href="/">
                                    Home </a>
                            </li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">
                                Dr . Aneesh Ganguly </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medolia-team-details-sec pt-80">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="row align-items-center">

                    <!-- Doctor Image -->
                    <div class="col-lg-4">
                        <div class="medolia-team-item mb-30" data-aos="fade-up" data-aos-duration="1000">
                            <div class="member-image">
                                <img src="assets/images/home-one/team/dr-aneesh-ganguly.jpg" alt="Dr. Aneesh Ganguly">
                            </div>
                        </div>
                    </div>

                    <!-- Doctor Info -->
                    <div class="col-lg-8">
                        <div class="member-info-wrap mb-30" data-aos="fade-up" data-aos-duration="1200">

                            <h4>Dr. Aneesh Ganguly</h4>
                            <p>
                                <strong>Dr. Aneesh Ganguly, BDS, MDS, FOO, FHNO, FGCOI, Consultant Oral & Maxillofacial Surgeon, Oral, Head and Neck Cancer Specialist (Ex- Fellow Dr. B. Barooah Cancer Institute, Guwahati) (Ex- Fellow Tata Memorial Hospital, Mumbai)</strong>
                            </p>
                            <p class="mb-0">Dedicated to delivering advanced oral and maxillofacial surgery alongside expert head and neck cancer care, tailored for optimal healing and recovery. </p>
                            <p>Specialized in Facial Trauma Management, Impacted Teeth Extraction and Structural Bone Reconstruction.<br>
                                High-precision implant treatment dedicated to painless visits, flawless placement, and total restoration of your oral health.
                            </p>

                            <div class="medolia-button mt-30">
                                <a href="contact-us.php" class="theme-btn style-one">
                                    GET APPOINTMENT
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Specialized Care Section -->
                <div class="team-details-info" data-aos="fade-up" data-aos-duration="1200">

                    <h3>Specialized Care by Dr. Aneesh Ganguly</h3>

                    <p>
                        Delivering comprehensive oral and maxillofacial surgical care with a patient-focused approach, combining advanced surgical techniques, precision implantology, and specialized head and neck cancer expertise for effective treatment and lasting recovery.
                    </p>

                    <ul class="check-list style-one">

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Advanced Oral & Maxillofacial Surgery with personalized treatment planning.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Oral, Head & Neck Cancer Specialist with fellowship experience from Dr. B. Barooah Cancer Institute and Tata Memorial Hospital.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Specialized in Facial Trauma Management for complex injuries and reconstruction.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Expert in Impacted Teeth Extraction with minimally invasive surgical techniques.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Structural Bone Reconstruction for restoring function and facial aesthetics.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            High-Precision Dental Implants focused on painless procedures, accurate placement, and complete oral restoration.
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>