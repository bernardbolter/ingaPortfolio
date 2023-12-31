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

get_header(); 
?>

<div class="main">
      <a href="mailto:hello@ingakatcoleman.com">
          <img src="<?php echo get_template_directory_uri(); ?>/ikc.png" alt="Inga Kat Coleman info" />
      </a>
  </div>
</body>

<?php
get_footer();