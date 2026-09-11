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

                    <div class="col-lg-4">
                        <div class="medolia-team-item mb-30" data-aos="fade-up" data-aos-duration="1000">
                            <div class="member-image">
                                <img src="assets/images/home-one/team/dr-aneesh-ganguly.jpg" alt="Dr. Aneesh Ganguly">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="member-info-wrap mb-30" data-aos="fade-up" data-aos-duration="1200">

                            <h4>Dr. Aneesh Ganguly</h4>

                            <span class="position">Consultant Oral & Maxillofacial Surgeon | Oral, Head & Neck Cancer Specialist</span>

                            <p>
                                <strong>BDS, MDS, FOO, FHNO, FGCOI</strong><br>
                                Ex-Fellow, Dr. B. Barooah Cancer Institute, Guwahati<br>
                                Ex-Fellow, Tata Memorial Hospital, Mumbai
                            </p>

                            <p>
                                Dr. Aneesh Ganguly is dedicated to delivering advanced oral and maxillofacial surgery alongside expert head and neck cancer care, ensuring personalized treatment, optimal healing, and long-term recovery for every patient.
                            </p>

                            <div class="medolia-button">
                                <a href="contact-us.php" class="theme-btn style-one">GET APPOINTMENT</a>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Team Details Info -->
                <div class="team-details-info" data-aos="fade-up" data-aos-duration="1200">

                    <h3>Specialized Care by Dr. Aneesh Ganguly</h3>

                    <p>
                        Dr. Aneesh Ganguly provides comprehensive surgical care with expertise in oral and maxillofacial procedures, facial trauma management, head and neck cancer treatment, and advanced dental implant solutions for functional and aesthetic restoration.
                    </p>

                    <ul class="check-list style-one">
                        <li><i class="fas fa-check-circle"></i>Consultant Oral & Maxillofacial Surgeon with advanced surgical expertise.</li>

                        <li><i class="fas fa-check-circle"></i>Oral, Head & Neck Cancer Specialist with fellowship experience at Dr. B. Barooah Cancer Institute and Tata Memorial Hospital.</li>

                        <li><i class="fas fa-check-circle"></i>Specialized in Facial Trauma Management and complex reconstructive procedures.</li>

                        <li><i class="fas fa-check-circle"></i>Expert in Impacted Teeth Extraction and Structural Bone Reconstruction.</li>

                        <li><i class="fas fa-check-circle"></i>Provides high-precision dental implant treatments focused on painless procedures, accurate placement, and complete smile restoration.</li>
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