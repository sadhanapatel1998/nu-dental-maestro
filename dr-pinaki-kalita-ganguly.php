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
                        <h1>Dr. Pinaki Kalita</h1>

                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">Dr. Pinaki Kalita</li>
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
                                <img src="assets/images/home-one/team/dr-pinaki-kalita-ganguly.jpg" alt="Dr. Pinaki Kalita">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="member-info-wrap mb-30" data-aos="fade-up" data-aos-duration="1200">

                            <h4>Dr. Pinaki Kalita</h4>

                            <span class="position">Orthodontist & Dentofacial Orthopedics Specialist</span>

                            <p>
                                <strong>MDS (Orthodontics & Dentofacial Orthopedics)</strong>
                            </p>

                            <p>
                                Dr. Pinaki Kalita is dedicated to providing specialist orthodontic care, helping patients achieve perfectly aligned teeth, a balanced bite, and confident, healthy smiles through personalized treatment for all ages.
                            </p>

                            <div class="medolia-button">
                                <a href="contact-us.php" class="theme-btn style-one">GET APPOINTMENT</a>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Team Details Info -->
                <div class="team-details-info" data-aos="fade-up" data-aos-duration="1200">

                    <h3>Specialized Care by Dr. Pinaki Kalita</h3>

                    <p>
                        Dr. Pinaki Kalita offers advanced orthodontic treatments designed to align teeth, correct bite issues, and improve overall dental function and facial harmony with comfortable, customized care.
                    </p>

                    <ul class="check-list style-one">
                        <li><i class="fas fa-check-circle"></i>Specialist in Orthodontics & Dentofacial Orthopedics.</li>

                        <li><i class="fas fa-check-circle"></i>Expert in teeth alignment and bite correction for children, teenagers, and adults.</li>

                        <li><i class="fas fa-check-circle"></i>Provides personalized orthodontic treatment plans for every patient.</li>

                        <li><i class="fas fa-check-circle"></i>Focuses on improving dental function, facial balance, and smile aesthetics.</li>

                        <li><i class="fas fa-check-circle"></i>Committed to creating healthy, confident smiles with modern orthodontic care.</li>
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