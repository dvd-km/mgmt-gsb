<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content" >	
		<div class="grid">
			<div class="grid-8 grid-slideshow sh-r">
				<?php 
				$hero = get_field('hero', false, false);
					$hero_shortcode = '[' . 'gallery ids="' . implode(',', $hero) . '"]';
					echo do_shortcode( $hero_shortcode );
				?> 
			</div>
			<div class="grid-4 bg-green yellow-light" id="hero_copy">
				<nav class="navbar navbar-inverse submenu align-items-start">
					<?php the_title( '<strong>', '</strong>' ); ?>
				</nav>
			</div>
		</div>
			<!-- Post Details -->
			<div class="content-area grid- w-100 bg-yellow-light blue serif">
				<div class="container-center">
					<?php
					if ( is_single() ) :
						the_content();
					else :
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
					endif;

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
							'after'  => '</div>',
						) );
					?>

				</div>		
			</div>
		
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer>

</article><!-- #post-## -->
