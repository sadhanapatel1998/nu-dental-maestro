<?php
ob_start();
?>
<main>

    <!--====== Start 404 Section ======-->
    <section class="medolia-error-sec pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Error Content -->
                    <div class="error-content text-center">
                        <h2 data-aos="fade-up" data-aos-duration="1200">
                            Thank You.
                        </h2>

                        <p data-aos="fade-up" data-aos-duration="1400">
                            We have received your request successfully. Our team at
                            <strong>Nu Dental Maestro</strong> will contact you shortly to confirm
                            your appointment.
                        </p>

                        <div class="medolia-button" data-aos="fade-up" data-aos-duration="1600">
                            <a href="/" class="theme-btn style-one">
                                Back to Home
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>