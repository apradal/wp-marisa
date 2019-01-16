<?php
/**
* Template Name: Custom
*/

$desc = wp_kses_post( get_theme_mod( 'onepress_about_desc') );

get_header(); ?>

    <div id="content" class="site-content">
        <main id="main" class="site-main" role="main">
            <div class="content-wrapper" style="width:70%;margin: 0 auto">
                <h2 style="text-align: center"><?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true )); ?></h2>
                <?php
                    echo '<div class="section-desc">' . apply_filters( 'onepress_the_content', $desc ) . '</div>';
                ?>
            </div>
        </main><!-- #main -->
    </div><!-- #content -->

<?php get_footer(); ?>