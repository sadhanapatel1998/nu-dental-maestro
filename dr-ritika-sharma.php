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
                        <h1>Dr. Ritika Sharma</h1>

                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">Dr. Ritika Sharma</li>
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
                                <img src="assets/images/home-one/team/dr-ritika-sharma.jpg" alt="Dr. Ritika Sharma">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="member-info-wrap mb-30" data-aos="fade-up" data-aos-duration="1200">

                            <h4>Dr. Ritika Sharma</h4>

                            <span class="position">Dental Surgeon</span>

                            <p>
                                <strong>BDS (Dental Surgeon)</strong>
                            </p>

                            <p>
                                Dr. Ritika Sharma is dedicated to preventive dental care, routine checkups, precision restorative treatments, and root canal therapy, helping patients maintain strong, healthy teeth and confident smiles.
                            </p>

                            <div class="medolia-button">
                                <a href="contact-us.php" class="theme-btn style-one">GET APPOINTMENT</a>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Team Details Info -->
                <div class="team-details-info" data-aos="fade-up" data-aos-duration="1200">

                    <h3>Specialized Care by Dr. Ritika Sharma</h3>

                    <p>
                        Dr. Ritika Sharma provides comprehensive general dentistry with a focus on preventive care, early diagnosis, restorative treatments, and root canal therapy to preserve natural teeth and promote lifelong oral health.
                    </p>

                    <ul class="check-list style-one">
                        <li><i class="fas fa-check-circle"></i>Expert in preventive dental care and routine oral health checkups.</li>

                        <li><i class="fas fa-check-circle"></i>Provides precision restorative treatments for damaged or decayed teeth.</li>

                        <li><i class="fas fa-check-circle"></i>Specialized in root canal treatments to save natural teeth.</li>

                        <li><i class="fas fa-check-circle"></i>Focuses on early diagnosis and personalized treatment planning.</li>

                        <li><i class="fas fa-check-circle"></i>Dedicated to helping patients maintain strong, healthy, and confident smiles.</li>
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