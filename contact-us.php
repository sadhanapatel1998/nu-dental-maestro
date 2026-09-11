<?php
ob_start();
include('php-mailer.php');
?>
<main>
    <!--====== Start Page Banner ======-->
    <section class="page-banner">
        <div class="shape shape-one"><span></span></div>
        <div class="shape shape-two"><span></span></div>
        <div class="shape shape-three"><span></span></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Page Content -->
                    <div class="page-content text-center">
                        <h1>Contact Us</h1>
                        <ul>
                            <li>
                                <a href="/">
                                    Home </a>
                            </li>
                            <li><i class="far fa-angle-double-right"></i></li>
                            <li class="active">
                                Contact Us </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Page Banner ======-->

    <!--====== Start Contact Info Section ======-->
    <section class="medolia-contact-info-sec pt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- Item -->
                    <div class="medolia-cn-info bg_one mb-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="content desktop-email">
                            <span>Email Address</span>
                            <h3><a href="https://mail.google.com/mail/?view=cm&fs=1&to=nudentalmaestro@gmail.com" target="_blank">
                                    nudentalmaestro@gmail.com</a></h3>
                            <h3><a href="https://mail.google.com/mail/?view=cm&fs=1&to=dr.aneeshganguly.omfs@gmail.com" target="_blank">
                                    dr.aneeshganguly.omfs@gmail.com</a></h3>
                        </div>
                        <div class="content mobile-email">
                            <span>Email Address</span>
                            <h3><a href="mailto:nudentalmaestro@gmail.com">
                                    nudentalmaestro@gmail.com</a></h3>
                            <h3><a href="mailto:dr.aneeshganguly.omfs@gmail.com">
                                    dr.aneeshganguly.omfs@gmail.com</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- Item -->
                    <div class="medolia-cn-info bg_two mb-40" data-aos="fade-up" data-aos-duration="1200">
                        <div class="icon">
                            <i class="far fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <span>Contact Number</span>
                            <h3><a href="tel:+9211345449">+91 9211345449</a></h3>
                            <h3><a href="tel:+8750641144">+91 8750641144</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- Item -->
                    <div class="medolia-cn-info bg_three mb-40" data-aos="fade-up" data-aos-duration="1400">
                        <div class="icon">
                            <i class="far fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <span>Green Park Extension</span>
                            <h3>H-8, Block H, Green Park Extension, Green Park, New Delhi, Delhi 110016</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- Item -->
                    <div class="medolia-cn-info bg_four mb-40" data-aos="fade-up" data-aos-duration="1400">
                        <div class="icon">
                            <i class="far fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <span>Yojna Vihar</span>
                            <h3> 
                              Shop No 16 & 17, Block-c Market, Block C, Yojna Vihar, Anand Vihar, Delhi, 110092</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Info Section ======-->

    <!--====== Start Contact Section ======-->
    <section class="medolia-contact-sec pt-50 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Medolia Content Box -->
                    <div class="medolia-content-box mb-5 mb-lg-0">
                        <div class="section-title mb-40" data-aos="fade-up" data-aos-duration="800">
                            <span class="sub-title">Booking</span>
                            <h2 class="mb-20">Book Your Appointment Schedule Today</h2>
                            <p>Book your appointment today for expert dental care, personalized treatment plans, and
                                compassionate support for a healthier, confident smile.</p>

                        </div>
                        <div class="medolia-image" data-aos="fade-up" data-aos-duration="1000">
                            <img src="assets/images/home-one/hero/appointment.jpg" alt="contact Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Contact Wrapper -->
                    <div class="contact-wrapper" data-aos="fade-up" data-aos-duration="800">
                        <h3>Make an Appointment</h3>
                        <form class="contact-form" method="POST" action="">
                            <input type="hidden" name="form_type" value="appointment">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form_control" name="name" placeholder="Enter Name"
                                            value="<?= htmlspecialchars($name) ?>">
                                        <span class="error"><?= $nameErr ?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form_control" name="phone"
                                            placeholder="Phone Number" value="<?= htmlspecialchars($phone) ?>">
                                        <span class="error"><?= $phoneErr ?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form_control" name="email"
                                            placeholder="Email Address" value="<?= htmlspecialchars($email) ?>">
                                        <span class="error"><?= $emailErr ?></span>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form_control" name="subject" placeholder="Subject"
                                            value="<?= htmlspecialchars($subject) ?>">
                                        <span class="error"><?= $subjectErr ?></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form_control" name="message" rows="4"
                                            placeholder="Message"><?= htmlspecialchars($message) ?></textarea>
                                        <span class="error"><?= $messageErr ?></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-20">
                                        <button type="submit" class="theme-btn style-one">Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Section ======-->
    <!--====== Start Map Section ======-->
    <section class="medolia-map-sec">
        <!--=== Map Box ===-->
        <div class="map-box" data-aos="fade-up" data-aos-duration="1300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.317180378779!2d77.2051145!3d28.5602368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3516aa25fe5%3A0x4badfa7ca5a3baa3!2sNU%20DENTAL%20MAESTRO%20(CGHS%20Empaneled)!5e0!3m2!1sen!2sin!4v1768457066361!5m2!1sen!2sin"
                loading="lazy"></iframe>
        </div>
    </section>
    <!--====== End Map Section ======-->
</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>