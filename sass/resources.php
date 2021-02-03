<?php /* Template Name: Resources */ ?>

<?php get_header(); ?>

<div class="container resources">
    <h1><?php echo get_the_title(); ?></h1>

    <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
    ?>
</div>

<?php get_footer(); ?>