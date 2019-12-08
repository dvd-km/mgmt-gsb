<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area w-100 bg-yellow-light grey-dark">
		<main id="main" class="site-main  container-center" role="main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-news', get_post_format() );
			// the_meta();
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
