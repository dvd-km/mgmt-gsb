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
				<?php the_field('textonly-21'); ?>

				<div class="repeater serif"><!--textonly-22_repeater -->
							<?php if( have_rows('textonly-22-repeater') ): ?>
							<?php while( have_rows('textonly-22-repeater') ): the_row(); 
								$ac = get_sub_field('textonly-22-repeater-ac');
								$text = get_sub_field('textonly-22-repeater-copy');
								?>
								<p><?php echo $ac; ?></p>
								<p>
							
								<p><?php echo $text; ?></p>
						
								</p>
							<?php endwhile; ?>
							<?php endif; ?>
				</div>
				<?php the_field('textonly-23'); ?>

			</div>
			
				
			</div>
		
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer>

</article><!-- #post-## -->
