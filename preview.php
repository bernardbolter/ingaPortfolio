<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage IngaPortfolio
 */

 /* Template Name: Preview  */

get_header(); 
?>

<main class="main-container">
    <section class="header-container">
        <?php get_template_part( 'logo' ); ?>
        <?php get_template_part( 'nav' ); ?>
    </section>
    <div id="projects-container" class="projects-container">
        <h1>Loading projects...</h1>
    </div>
</main>

<?php
get_footer();