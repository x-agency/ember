<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>

</div> <!-- ast-container -->

</div><!-- #content -->

<!-- Footer -->
<div id="EmberFooter" class="container">
    <div class="row footer-top">
        <div class="footer-logo"><img src="/wp-content/themes/ember/img/ember-logo.svg" alt=""></div>
        <div class="footer-links">
            <ul class="list-unstyled">
                <li><a href="/home/#ember-experience">Ember Experience</a></li>
                <li><a href="/home/#membership">Membership</a></li>
                <li><a href="/contact">Contact us</a></li>
            </ul>
        </div>
        <div class="call-btn"><a href="tel86470223685"><img src="/wp-content/themes/ember/img/call-icon.png" alt=""></a>
        </div>
    </div>
    <div class="footer-bottom row">
        <div class="footer-address footer-info">
            <span>Ember Modern Medicine</span> <br>1068 North Church Street <br>Greenville, SC 29601
        </div>
        <div class="footer-contact footer-info">
            <span>Email:</span><br> <a
                href="mailto:hello@embermodernmedicine.com">hello@embermodernmedicine.com</a><br><span>Phone:</span> <a
                href="tel:8647022365">864-702-2365</a>
        </div>
        <div class="footer-contact footer-info">
            <span>Stay Connected</span><br>
            <div class="social-link"><a href="https://www.facebook.com/EmberModernMedicine/" target="_blank"><i
                        class="bi bi-facebook"></i></a></div>
            <div class="social-link"><a href="https://www.instagram.com/embermodernmedicine/" target="_blank"><i
                        class="bi bi-instagram"></i></a></div>
        </div>
        <div class="icon">

        </div>
    </div>

</div>



</div><!-- #page -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="mobile-menu">
                <?php
	 	  wp_nav_menu( array(
	 	  'menu'              => 'main',
	 	  'theme_location'    => 'primary',
	 	  'depth'             => 2,
	 	  'container'         => 'div',
	 	  'container_class'   => '',
	 	  'container_id'      => '',
	 	  'menu_class'        => 'navbar-nav',
	 	  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	 	  'walker'            => new wp_bootstrap_navwalker())
           );?>
                <div class="mobile-logo"><a href="/home"><?php
				echo file_get_contents( get_theme_file_uri( '/img/ember-logo.svg' ) );
				?></a></div>
                <div class="mobile-close" data-dismiss="modal"><i class="bi bi-x-circle-fill"></i>
                </div>
                <div class="mobile-patients"><a class="btn" href="">For Patients <i class="bi bi-person-fill"></i></a>
                </div>
                <div class="mobile-patients"><a class="btn" href="">Become A Member </a>
                </div>
                <!-- <div class="mobile-call"><a href="tel:8647022365"><img src="/wp-content/themes/ember/img/call-icon.png"
                            alt=""></a></div> -->
                <div class="menu-flame"><img src="/wp-content/themes/ember/img/svg/flame-icon.svg" alt=""></div>
            </div>
        </div>
    </div>
</div>

<?php astra_body_bottom(); ?>

<?php wp_footer(); ?>

</body>

</html>