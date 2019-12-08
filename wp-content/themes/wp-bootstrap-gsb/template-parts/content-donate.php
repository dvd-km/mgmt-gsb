<?php
/**
 * Template part for displaying posts
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
				<div class="grid-4 bg-yellow-light red" id="hero_copy">
					<?php the_title( '<strong>', '</strong>' ); ?>
					<p><?php get_field('donate_12');  ?></p>
					<?php $donate_12= get_field('donate_12'); 
					if( $donate_12 ): 	
					?>
					<p><?php echo $donate_12['donate_12_copy']; ?></p>
					<p class="button"> 
						<a href="<?php echo esc_url($donate_12['donate_12_cta']['url']);?>" >
							<?php echo esc_html($donate_12['donate_12_cta']['title']); ?></a><br>
						<a href="<?php echo esc_url($donate_12['donate_12_cta_2']['url']);?>" >
						<?php echo esc_html($donate_12['donate_12_cta_2']['title']); ?></a>
					</p>
					<?php endif; ?>	
				</div>

		<!--page details  -->
				
				<div class="grid-4 bg-red grid-slideshow sh-r" id="donate_21">
					<?php if( get_field('donate_21') ): ?>
						<img src="<?php the_field('donate_21'); ?>" />
					<?php endif; ?>
				</div>
				<div class="grid-8 bg-red yellow-light" id="donate_22">
					<?php $donate_22 = get_field('donate_22'); 
						if( $donate_22 ): 	
						?>
						<p><?php echo $donate_22['donate_22_copy']; ?></p>
						<?php endif; ?>
				</div> 
				<div class="grid-8 bg-yellow-light blue row-span-2 serif small" id="donate_31">
					<?php the_field('donate_31');  ?>
				</div>
				<div class="grid-4 bg-yellow-light grid-slideshow sh-l" id="donate_32">
					<?php if( get_field('donate_32') ): ?>
						<img src="<?php the_field('donate_32'); ?>" />
					<?php endif; ?>
				</div>
				<div class="grid-4 bg-yellow-light grid-slideshow sh-l" id="donate_42">
					<?php if( get_field('donate_42') ): ?>
						<img src="<?php the_field('donate_42'); ?>" />
					<?php endif; ?>
				</div>
		</div>	
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
