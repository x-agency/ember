<?php
   /*
    Template Name: coming-soon
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section id="page-header" class="coming-soon">
    <img src="/wp-content/themes/ember/img/ember-logo.svg" max-width="400">
    <div class="flame">
        <?php echo file_get_contents('wp-content/themes/ember/img/flame.svg'); ?>
        <div>
            <h1 class="special">Ignite</h1>
            <h2>Your Health.</h2>
        </div>
        <p class="special">Better <span><strong>Care</strong></span>. Better <span><strong>Health</strong></span>.
            Better <span><strong>You</strong></span>.</p>
        <p class="opening">Opening <span>February 2021</span> | Greenville, SC</p>
    </div>
    <div class="main">
        <p>
            <strong>
                <span>Introducing Ember.</span><br>
                &nbsp;A direct primary care practice focused<br>
                &nbsp;on a more personal approach to medicine.
            </strong>
        </p>
        <p>We provide a more comprehensive pathway to personal well-being,<br>
            &nbsp;combining <span>lifestyle</span>, <span>nutrition</span>, <span>health training</span>, and
            <span>direct access</span> to your<br>
            &nbsp;medical provider 24/7 for a fixed monthly cost without a limit or co-pays.
        </p>
        <div class="signup">
            <p>Sign-up to receive more information on our opening, upcoming events,<br>
                &nbsp;and to learn how Ember plans to change the way you're treated.</p>
            <?php //echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
            <button id="popup-btn" role="button">Sign Up</button>
        </div>
    </div>
    <!--div class="social">
        <a href="" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        <a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div-->
    <div class="popup-wrapper">
        <div class="popup">
            <div class="close">X</div>
            <?php echo file_get_contents('wp-content/themes/ember/img/flame.svg'); ?>
            <h2>Learn about a more personal approach to</h2>
            <h1><span><em>Modern</em></span> Medicine</h1>
            <p>We look forward to caring for you and your family’s needs.</p>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
            <?php echo file_get_contents('wp-content/themes/ember/img/flame-03.svg'); ?>
        </div>
    </div>
</section>

<script async defer>
jQuery(document).ready(function($) {
    $('#popup-btn').click(function() {
        if ($('.popup-wrapper').hasClass('show')) {
            $('.popup-wrapper').css("opacity", 0);
            setTimeout(function() {
                $('.popup-wrapper').removeClass("show");
            }, 600);
        } else {
            $('.popup-wrapper').addClass("show");
            setTimeout(function() {
                $('.popup-wrapper').css("opacity", 1);
            }, 50);
        }
    });

    $('.close').click(function() {
        $('.popup-wrapper').css("opacity", 0);
        setTimeout(function() {
            $('.popup-wrapper').removeClass("show");
        }, 600);
    })
});
</script>

<?php get_footer(); ?>