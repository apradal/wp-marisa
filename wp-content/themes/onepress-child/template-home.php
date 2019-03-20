<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div id="content" class="custom-template">
    <div class="slick-slider">
        <div>
            <div class="slide-content">
                <img src="http://wp-marisa.local/wp-content/uploads/custom/slider1.jpg" alt="" id="slide1-img">
                <div class="content">
                    <h2>texto prueba</h2>
                    <p>fddssdfdff sdsfdf</p>
                    <a href="http://wp-marisa.local/terapia">SOBRE MI</a>
                </div>
            </div>
        </div>
        <div>
            <div class="slide-content">
                <img src="http://wp-marisa.local/wp-content/uploads/custom/slider2.jpg" alt="" id="slide2-img">
                <div class="content">
                    <h2>texto prueba</h2>
                    <p>fddssdfdff sdsfdf</p>
                    <a href="http://wp-marisa.local/terapia">PSICOLOGIA</a>
                </div>
            </div>
        </div>
        <div>
            <div class="slide-content">
                <img src="http://wp-marisa.local/wp-content/uploads/custom/slider3.jpeg" alt="" id="slide3-img">
                <div class="content">
                    <h2>texto prueba</h2>
                    <p>fddssdfdff sdsfdf</p>
                    <a href="http://wp-marisa.local/terapia">SERVICIOS</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function(){
        jQuery('.slick-slider').slick({
            autoplay: true,
            arrows: false
        });
    });
</script>

<?php get_footer(); ?>