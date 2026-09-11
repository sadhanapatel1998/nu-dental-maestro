<?php
ob_start();
include('php-mailer.php');
?>

<main>
    <!--====== Start Hero Section ======-->
    <div class="hero-slider desktop-hero">
        <div>
            <a href="contact-us.php">
                <img src="assets/images/home-one/hero/new-banner.jpeg" class="w-100">
            </a>
        </div>
        <div><img src="assets/images/home-one/hero/banner1.jpg" class="w-100"></div>
    </div>

    <div class="hero-slider mobile-hero">
        <div>
            <a href="contact-us.php">
                <img src="assets/images/home-one/hero/m-banner-2.jpg" class="w-100">
            </a>
        </div>
        <div><img src="assets/images/home-one/hero/m-banner-1.jpg" class="w-100"></div>
    </div>


    <!--====== Start About Section ======-->
    <section class="medolia-about-sec pt-80 pb-70 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="medolia-image-box">
                        <!-- Medolia Image -->
                        <div class="medolia-image" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/images/home-one/about/about-img1.jpg" alt="about image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="medolia-content-box">

                        <!-- Section Title -->
                        <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                            <span class="sub-title">About Us</span>
                            <h2>Trusted Dental Care with Modern Expertise</h2>
                        </div>

                        <p class="mb-25" data-aos="fade-up" data-aos-duration="1000">
                            NU DENTAL MAESTRO (CGHS Empaneled) is a trusted Dental Clinic in South Delhi,
                            offering advanced, painless, and personalized dental care in a hygienic
                            and comfortable environment with modern technology and ethical treatment practices.
                        </p>

                        <!-- Icon Box -->
                        <div class="medolia-left-icon-box bg-one mb-30" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon">
                                <i class="flaticon-first-aid-kit"></i>
                            </div>
                            <div class="content">
                                <h4>Experienced & Ethical Dental Specialists</h4>
                                <p>
                                    Our expert team delivers precise treatments with a strong focus on
                                    patient comfort, safety, and long-term oral health.
                                </p>
                            </div>
                        </div>

                        <!-- Icon Box -->
                        <div class="medolia-left-icon-box bg-two mb-30" data-aos="fade-up" data-aos-duration="1400">
                            <div class="icon">
                                <i class="flaticon-tooth"></i>
                            </div>
                            <div class="content">
                                <h4>Comprehensive Dental Solutions</h4>
                                <p>
                                    From routine check-ups and root canal treatments to dental implants,
                                    cosmetic dentistry, and pediatric care.
                                </p>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="medolia-button-box d-flex align-items-center gap-30 mb-40"
                            data-aos="fade-up" data-aos-duration="1600">

                            <div class="medolia-button">
                                <a href="about-us.php" class="theme-btn style-one">Know More</a>
                            </div>

                            <div class="medolia-author-box d-flex align-items-center">
                                <div class="author-thumbnail">
                                    <a href="tel:+918750641144" class="icon phone-animate">
                                        <i class="flaticon-phone"></i>
                                    </a>
                                </div>
                                <div class="author-info ms-2">
                                    <h5 class="mb-0">Call Us</h5>
                                    <span class="position">+91 87506 41144</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About Section ======-->

    <!--======  Start Service Section  ======-->
    <section class="medolia-services-sec gray-light-color pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title -->
                    <div class="section-title mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Our Services</span>
                        <h2>Comprehensive Dental Care</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="medolia-arrows mb-60" data-aos="fade-up" data-aos-duration="1200"></div>
                </div>
            </div>

            <!-- Service Slider -->
            <div class="service-slider">

                <!-- Service 1 -->
                <div class="medolia-service-item">
                    <div class="thumbnail">
                        <img src="assets/images/home-two/service/oral-health-screening.jpg" alt="Oral Health Screening">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-tooth-1"></i>
                        </div>
                        <h4><a href="oral-health-screening.php">Oral Health Screening</a></h4>
                        <p>Comprehensive oral health screening for early detection and prevention.</p>
                        <a href="oral-health-screening.php" class="read-more style-one">Read More</a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="medolia-service-item">
                    <div class="thumbnail">
                        <img src="assets/images/home-two/service/complete-smile-designing.jpg" alt="Complete Smile Designing">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-tooth-1"></i>
                        </div>
                        <h4><a href="complete-smile-designing.php">Complete Smile Designing</a></h4>
                        <p>Personalized smile designing treatments to enhance facial aesthetics.</p>
                        <a href="complete-smile-designing.php" class="read-more style-one">Read More</a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="medolia-service-item">
                    <div class="thumbnail">
                        <img src="assets/images/home-two/service/orthodontics.jpg" alt="Orthodontics">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-tooth-1"></i>
                        </div>
                        <h4><a href="orthodontics.php">Orthodontics</a></h4>
                        <p>Advanced orthodontic care to correct alignment and bite issues.</p>
                        <a href="orthodontics.php" class="read-more style-one">Read More</a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="medolia-service-item">
                    <div class="thumbnail">
                        <img src="assets/images/home-two/service/aligners.jpg" alt="Aligners">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-tooth-1"></i>
                        </div>
                        <h4><a href="aligners.php">Aligners</a></h4>
                        <p>Clear aligner treatments for comfortable and discreet teeth alignment.</p>
                        <a href="aligners.php" class="read-more style-one">Read More</a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="medolia-service-item">
                    <div class="thumbnail">
                        <img src="assets/images/home-two/service/root-canal-treatment.jpg" alt="Root Canal Treatment">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-tooth-1"></i>
                        </div>
                        <h4><a href="root-canal-treatment.php">Root Canal Treatment</a></h4>
                        <p>Painless and precise root canal treatments to save teeth.</p>
                        <a href="root-canal-treatment.php" class="read-more style-one">Read More</a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="medolia-service-item">
                    <div class="thumbnail">
                        <img src="assets/images/home-two/service/dental-implants.jpg" alt="Dental Implants">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <i class="flaticon-tooth-1"></i>
                        </div>
                        <h4><a href="dental-implantss.php">Dental Implants</a></h4>
                        <p>Advanced dental implant solutions to restore function and confidence.</p>
                        <a href="dental-implants.php" class="read-more style-one">Read More</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--======  End Service Section  ======-->

    <!--====== Start Process Section ======-->
    <section class="medolia-process-sec pt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Title -->
                    <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Our Process</span>
                        <h2>Smile Journey to Better</h2>
                        
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Item 01 -->
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1000">

                        <div class="step-stroke">01</div>

                        <div class="icon">
                            <i class="flaticon-diagnostic-report"></i>
                        </div>

                        <div class="content">
                            <h4>Oral Assessment</h4>
                            <p>Thorough dental examination to understand oral health.</p>
                        </div>

                    </div>
                </div>

                <!-- Item 02 -->
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1200">

                        <div class="step-stroke">02</div>

                        <div class="icon">
                            <i class="flaticon-treatment-plan"></i>
                        </div>

                        <div class="content">
                            <h4>Treatment Plan</h4>
                            <p>Personalized dental care plan for effective treatment.</p>
                        </div>

                    </div>
                </div>

                <!-- Item 03 -->
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1400">

                        <div class="step-stroke">03</div>

                        <div class="icon">
                            <!-- Using pre-loaded tooth icon -->
                            <i class="flaticon-tooth"></i>
                        </div>

                        <div class="content">
                            <h4>Dental Treatment</h4>
                            <p>Advanced and painless dental procedures performed safely.</p>
                        </div>

                    </div>
                </div>

                <!-- Item 04 -->
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1600">

                        <div class="step-stroke">04</div>

                        <div class="icon">
                            <i class="flaticon-24-7"></i>
                        </div>

                        <div class="content">
                            <h4>Aftercare Support</h4>
                            <p>Ongoing care to maintain long-term oral health.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--====== End Process Section ======-->


    <!--====== Start Choose Section ======-->
    <section class="medolia-choose-sec pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8">
                    <!-- Medolia Content Box -->
                    <div class="medolia-content-box mb-60">
                        <div class="section-title mb-20" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">Why Choose us</span>
                            <h2>Experience Excellence in Medical Care</h2>
                        </div>
                        <p data-aos="fade-up" data-aos-duration="1200">
                            Expert receive top-quality medical care, advanced treatment, compassionate support,
                            and personalized healthcare solutions designed to ensure comfort, safety, faster recovery,
                            and long-term well-being for every patient, with trusted specialists and modern facilities.
                        </p>
                    </div>

                </div>
                <div class="col-xl-7 col-lg-8">
                    <!-- Medolia Image Box -->
                    <div class="medolia-image-box mb-70" data-aos="fade-up" data-aos-duration="1200">
                        <div class="medolia-image">
                            <a href="contact-us.php">
                                <img src="assets/images/home-one/hero/why-choose-us.jpg" alt="choose image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <!-- Medolioa Iconic Box -->
                    <div class="medolia-iconic-box text-center bg_one mb-40" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div class="icon">
                            <i class="flaticon-timer"></i>
                        </div>
                        <div class="content">
                            <h4>Quick Response</h4>
                            <p>Receive top-quality medical care advanced treatment</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <!-- Medolioa Iconic Box -->
                    <div class="medolia-iconic-box text-center bg_two mb-40" data-aos="fade-up"
                        data-aos-duration="1200">
                        <div class="icon">
                            <i class="flaticon-aim"></i>
                        </div>
                        <div class="content">
                            <h4>Patients Focus</h4>
                            <p>Patients first personalized and compassionate care</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <!-- Medolioa Iconic Box -->
                    <div class="medolia-iconic-box text-center bg_three mb-40" data-aos="fade-up"
                        data-aos-duration="1400">
                        <div class="icon">
                            <i class="flaticon-doctor"></i>
                        </div>
                        <div class="content">
                            <h4>Expert Doctors</h4>
                            <p>Experience doctor providing specialized quality</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <!-- Medolioa Iconic Box -->
                    <div class="medolia-iconic-box text-center bg_four mb-40" data-aos="fade-up"
                        data-aos-duration="1600">
                        <div class="icon">
                            <i class="flaticon-24-7"></i>
                        </div>
                        <div class="content">
                            <h4>24/7 Support</h4>
                            <p>Round-the-clock support for your healthcare</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Choose Section ======-->


    <!--====== Start Booking Section ======-->
    <section class="medolia-booking-sec pt-80 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Medolia Content Box -->
                    <div class="medolia-content-box mb-50">
                        <div class="section-title mb-40" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">Booking</span>
                            <h2 class="mb-20">Book Your Appointment Schedule Today</h2>
                            <p>Book your appointment today for expert medical & personalized And treatment,
                                compassionate support for a healthier.</p>
                        </div>
                        <div class="medolia-image" data-aos="fade-up" data-aos-duration="1200">
                            <img src="assets/images/home-one/hero/appointment.jpg" alt="Booking Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Booking Wrapper -->
                    <div class="booking-wrapper" data-aos="fade-up" data-aos-duration="1400">
                        <h3>Make an Appointment</h3>
                        <form class="booking-form" method="POST" action="">
                            <input type="hidden" name="form_type" value="appointment">

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form_control"
                                            name="name" placeholder="Enter Name"
                                            value="<?= htmlspecialchars($name) ?>">
                                        <span class="error"><?= $nameErr ?></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form_control"
                                            name="phone" placeholder="Phone Number"
                                            value="<?= htmlspecialchars($phone) ?>">
                                        <span class="error"><?= $phoneErr ?></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form_control"
                                            name="email" placeholder="Email Address"
                                            value="<?= htmlspecialchars($email) ?>">
                                        <span class="error"><?= $emailErr ?></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form_control"
                                            name="subject" placeholder="Subject"
                                            value="<?= htmlspecialchars($subject) ?>">
                                        <span class="error"><?= $subjectErr ?></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form_control"
                                            name="message" rows="4"
                                            placeholder="Message"><?= htmlspecialchars($message) ?></textarea>
                                        <span class="error"><?= $messageErr ?></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mt-20">
                                        <button type="submit" class="theme-btn style-one">
                                            Book Appointment
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Booking Section ======-->

    <!--====== Start Testimonial Section ======-->
    <section class="medolia-testimonial-sec pt-80 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!--=== Medolia Content Box ===-->
                    <div class="medolia-content-box mb-50">
                        <div class="section-title mb-50" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">Testimonials</span>
                            <h2 class="mb-20">Patient Testimonials Healthier Happier Smiles</h2>
                            <p>Discover real patient testimonials highlighting our expert medical care and
                                personalized treatments, and compassionate support.</p>
                        </div>
                        <div class="testimonial-slider" data-aos="fade-up" data-aos-duration="1200">
                            <div class="medolia-testimonial-item">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>
                                        I was always uncomfortable with dental visits, but this experience completely changed my mindset. The doctors were calm, reassuring, and made me feel relaxed throughout the treatment.
                                    </h4>
                                    <div class="medolia-author-box">
                                        <div class="author-thumbnail">
                                            <img src="assets/images/home-one/testimonial/t1.png" alt="author">
                                        </div>
                                        <div class="author-info">
                                            <span class="position">Shakun Singh</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="medolia-testimonial-item">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>
                                        From consultation to completion, everything was smooth and professional. The dental bridge looks completely natural and feels comfortable, giving me full confidence in my smile.
                                    </h4>

                                    <div class="medolia-author-box">
                                        <div class="author-thumbnail">
                                            <img src="assets/images/home-one/testimonial/t2.png" alt="author">
                                        </div>
                                        <div class="author-info">
                                            <span class="position">Rashi Sharma</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="medolia-testimonial-item">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>
                                        The entire experience was well-managed and reassuring. The clinic maintains excellent hygiene standards and the doctors ensure you feel comfortable and confident during treatment.
                                    </h4>

                                    <div class="medolia-author-box">
                                        <div class="author-thumbnail">
                                            <img src="assets/images/home-one/testimonial/t3.png" alt="author">
                                        </div>
                                        <div class="author-info">
                                            <span class="position">Dhritiman Goswami</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="medolia-testimonial-item">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>
                                        The doctors were attentive, gentle, and highly professional. Every step of the treatment was explained clearly, making the process smooth, painless, and stress-free.
                                    </h4>

                                    <div class="medolia-author-box">
                                        <div class="author-thumbnail">
                                            <img src="assets/images/home-one/testimonial/t1.png" alt="author">
                                        </div>
                                        <div class="author-info">
                                            <span class="position">Shaista Bhat</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="medolia-testimonial-item">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>
                                        Exceptional care and professionalism throughout the treatment journey. The doctors explained everything clearly and ensured I felt comfortable and confident at every step.
                                    </h4>
                                    <div class="medolia-author-box">
                                        <div class="author-thumbnail">
                                            <img src="assets/images/home-one/testimonial/t4.png" alt="author">
                                        </div>

                                        <div class="author-info">
                                            <span class="position">Aneesh Ganguly</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="medolia-testimonial-item">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>
                                        From the first visit, the experience felt professional and reassuring. The team was friendly, skilled, and focused on delivering excellent results with care.
                                    </h4>
                                    <div class="medolia-author-box">
                                        <div class="author-thumbnail">
                                            <img src="assets/images/home-one/testimonial/t5.png" alt="author">
                                        </div>

                                        <div class="author-info">
                                            <span class="position">DJ Raj Baambay</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <!--=== Medolia Image ===-->
                    <div class="medolia-image mb-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="assets/images/home-one/hero/testimonial-side.jpg" alt="testimonial img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Testimonial Section ======-->


    <!--====== Start Counter Section ======-->
    <section class="medolia-counter-sec pt-40 pb-30 mt-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-md-6 counter-column">
                    <div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1000">
                        <div class="content">
                            <div class="medolia-counter-item">

                                <div class="avatar-group">
                                    <span class="avatar">
                                        <img src="assets/images/home-one/testimonial/t5.png" alt="">
                                    </span>
                                    <span class="avatar">
                                        <img src="assets/images/home-one/testimonial/t2.png" alt="">
                                    </span>
                                    <span class="avatar">
                                        <img src="assets/images/home-one/testimonial/t3.png" alt="">
                                    </span>
                                    <span class="avatar">
                                        <img src="assets/images/home-one/testimonial/t4.png" alt="">
                                    </span>
                                </div>

                            </div>

                            <h4 class="mt-2">300+ Appointments<br> Successfully </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 counter-column">
                    <div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1200">
                        <div class="content">
                            <h2><span class="counter">10</span>+</h2>
                            <h4>Years of Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 counter-column">
                    <div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1400">
                        <div class="content">
                            <h2><span class="counter">500</span>+</h2>
                            <h4>Happy Patient</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 counter-column">
                    <div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1600">
                        <div class="content">
                            <h2><span class="counter">50</span>+</h2>
                            <h4>Winning Awards</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Counter Section ======-->

    <!--====== Start Faq Section ======-->
    <section class="medolia-faq-sec pt-80 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 order-2 order-xl-1">
                    <!--=== Medolia Image Box ===-->
                    <div class="medolia-image-box">
                        <!-- Medolia Image -->
                        <div class="medolia-image mb-30" data-aos="fade-up" data-aos-duration="1000">
                            <img src="assets/images/home-one/hero/faqs-side.jpg" alt="Dental FAQ">
                        </div>
                        <!-- Medolia Info Box -->
                        <div class="medolia-info-area" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon">
                                <i class="far fa-phone-alt"></i>
                            </div>
                            <div class="info">
                                <span>Need Assistance?</span>
                                <h4><a href="tel:+9211345449">+91 9211345449</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-8 order-1 order-xl-2">
                    <!-- Medolia Content Box -->
                    <div class="medolia-content-box mb-5 mb-xl-0">
                        <div class="section-title mb-50" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">FAQ’s</span>
                            <h2 class="mb-20">Dental FAQs – Everything You Should Know</h2>
                            <p>
                                Find clear answers to common questions about our clinic, appointments,
                                safety standards, and patient care approach.
                            </p>
                        </div>

                        <!--====== Accordion  ======-->
                        <div class="accordion" id="accordionOne">

                            <!-- FAQ 1 -->
                            <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="800">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse1"
                                        aria-expanded="true">
                                        Do I need to book an appointment before visiting the clinic?
                                    </h6>
                                </div>
                                <div id="collapse1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionOne">
                                    <div class="accordion-content">
                                        <p>
                                            We recommend booking an appointment in advance to ensure
                                            timely consultation and minimal waiting time for patients.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1000">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse2"
                                        aria-expanded="false">
                                        Is your clinic safe and hygienic?
                                    </h6>
                                </div>
                                <div id="collapse2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionOne">
                                    <div class="accordion-content">
                                        <p>
                                            Yes, we strictly follow advanced sterilization and hygiene
                                            protocols to ensure a safe and comfortable environment.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1200">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse3"
                                        aria-expanded="false">
                                        Do you provide care for children and senior patients?
                                    </h6>
                                </div>
                                <div id="collapse3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionOne">
                                    <div class="accordion-content">
                                        <p>
                                            Yes, we offer dental care for patients of all age groups,
                                            with a gentle and patient-friendly approach.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1400">
                                <div class="accordion-header">
                                    <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse4"
                                        aria-expanded="false">
                                        Is your clinic CGHS empaneled?
                                    </h6>
                                </div>
                                <div id="collapse4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionOne">
                                    <div class="accordion-content">
                                        <p>
                                            Yes, NU DENTAL MAESTRO is CGHS empaneled, making dental care
                                            accessible and convenient for eligible patients.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Faq Section ======-->
</main>
<!--====== Start Footer ======-->

<?php
$content = ob_get_clean();
require 'layout.php';
?>