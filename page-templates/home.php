<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section id="hero" class="home-hero">
    <div class="container-fluid p-0">
        <div class="row header-wrapper">
            <div class="header-title ">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A <br>Better Life Begins
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With <span>You</span>.
                    <br><span>&nbsp;&nbsp;&nbsp;&nbsp;Ignite</span>
                    Your <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Health.
                </h1>
            </div>
            <div class="col-md-8 header-slider-wrapper">
                <div class="header-slider">
                    <img class="w-100" src="/wp-content/themes/ember/img/hero-img.jpg" alt="">
                    <div class="explore-btn">
                        <a href="">Explore Ember</a>
                    </div>
                </div>
                <div class="slider-bottom-text">
                    Better <span>Care</span>. Better <span>Health</span>. Better <span>You</span>.
                </div>

            </div>
        </div>
    </div>
</section>

<section id="home-intro">
    <div class="container">
        <div class="row">
            <div class="col-12"><img src="/wp-content/themes/ember/img/e-flame.png" alt=""></div>
            <div class="col-12">
                <h1>Introducing <span>Ember</span>.</h1>
            </div>
            <div class="col-12">
                <h3>A <span>member-based, direct primary care practice</span> focused on a more comprehensive, personal
                    approach to
                    medicine.</h3>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>