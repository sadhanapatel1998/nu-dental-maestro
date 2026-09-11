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
                    <div class="page-content text-center">
                        <h1>Dr. Ankit Agarwal</h1>

                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">Dr. Ankit Agarwal</li>
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
                                <img src="assets/images/home-one/team/dr-ankit-agarwal.jpg" alt="Dr. Ankit Agarwal">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="member-info-wrap mb-30" data-aos="fade-up" data-aos-duration="1200">

                            <h4>Dr. Ankit Agarwal</h4>

                            <span class="position">Consultant Periodontist & Implantologist</span>

                            <p>
                                <strong>BDS, MDS, PhD</strong>
                            </p>

                            <p>
                                Dr. Ankit Agarwal is dedicated to providing expert periodontal and implant care, helping patients achieve healthy gums, preserve their natural teeth, and restore confident smiles through advanced and personalized treatment.
                            </p>

                            <div class="medolia-button">
                                <a href="contact-us.php" class="theme-btn style-one">GET APPOINTMENT</a>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Team Details Info -->
                <div class="team-details-info" data-aos="fade-up" data-aos-duration="1200">

                    <h3>Specialized Care by Dr. Ankit Agarwal</h3>

                    <p>
                        Dr. Ankit Agarwal offers comprehensive periodontal and implant solutions focused on maintaining healthy gums, preventing tooth loss, and restoring smiles with precise, comfortable, and long-lasting treatment.
                    </p>

                    <ul class="check-list style-one">
                        <li><i class="fas fa-check-circle"></i>Consultant Periodontist with advanced expertise in gum disease treatment.</li>

                        <li><i class="fas fa-check-circle"></i>Dedicated to protecting natural teeth through preventive and specialized periodontal care.</li>

                        <li><i class="fas fa-check-circle"></i>Expert in diagnosing and treating complex gum-related conditions.</li>

                        <li><i class="fas fa-check-circle"></i>Provides precise and painless dental implant treatments for lasting smile restoration.</li>

                        <li><i class="fas fa-check-circle"></i>Focused on restoring healthy gums, functional teeth, and confident smiles with personalized care.</li>
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