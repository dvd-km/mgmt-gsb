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

			<!-- Post Details -->
			<div class="content-area grid- w-100 bg-yellow-light blue serif">

			<div class="container-center ">
				
			<?php the_title( '<h1>', '</h1>' ); ?>
			<div class="embed-container grid-slideshow">
				<?php

					// get iframe HTML
					$iframe = get_field('video_11');

					// use preg_match to find iframe src
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];

					// add extra params to iframe src
					$params = array(
						'controls'    => 0,
						'hd'  => 0,
						'autohide'    => 0,
						'title' => 0,
						'byline' => 0,
						'portrait' => 0,
						'autoplay' => 0,
						'loop' => 0
					);
					$new_src = add_query_arg($params, $src.'');
					$iframe = str_replace($src, $new_src, $iframe);

					// add extra attributes to iframe html
					$attributes = 'frameborder="0" allow="autoplay; fullscreen" allowfullscreen" id="vimeo_player"';

					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe><script src="https://player.vimeo.com/api/player.js"></script>', $iframe);

					// echo $iframe
					echo $iframe;

					?>

				</div>
				<div class="pt-4 w-100"></div>
				<p>
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
				</p>

				</div>

				
			</div>
		
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer>

</article><!-- #post-## -->
