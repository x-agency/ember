<?php
   /*
    Template Name: Contact
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section id="contact-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Your Journey Starts <span>Now</span>.</h1>
                <h3>Sign up to get notified about the latest at Ember and to get pre-opening pricing.</h3>
            </div>
        </div>
    </div>
</section>
<section id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 contact-img-block">
                <div class="contact-flame"><img src="/wp-content/themes/ember/img/svg/contact-flame.svg" alt=""></div>
                <img class="contact-img" src="/wp-content/themes/ember/img/contact-img.jpg" alt="">

            </div>
            <div class="col-xl-6 contact-form-wrapper">
                <div class="form">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 13, 'title' => false, 'description' => false ) ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="map">
    <div class="map-wrapper container">
        <iframe src="https://snazzymaps.com/embed/285166" width="100%" height="500px" style="border:none;"></iframe>
    </div>
</section>
<?php get_footer(); ?>