<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage IngPortfolio
 */

get_header();?>
<section class="header-container">
    <?php get_template_part( 'logo' ); ?>
    <?php get_template_part( 'nav' ); ?>
</section>

<section class="single-container">

<?php
/* Start the Loop */
while ( have_posts() ) :

    the_post();
	the_content();

endwhile; // End of the loop.
?>

</section>

<?php

get_footer();