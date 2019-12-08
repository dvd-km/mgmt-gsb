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
					<p><?php the_field('newslist_12');  ?></p>
				</div>

		<!--4. News List Details -->
				<div class="grid-8 bg-red yellow-light" id="newslist_21">
					<?php $newslist_21 = get_field('newslist_21'); 
						if( $newslist_21 ): 	
						?>
						<p><?php echo $newslist_21['newslist_21_copy']; ?></p>
						<a class="button" href="<?php echo esc_url($newslist_21['newslist_21_cta']['url']);?>" >
							<?php echo esc_html($newslist_21['newslist_21_cta']['title']); ?></a>
						<?php endif; ?>
				</div> 
			
				<div class="grid-4 bg-red grid-slideshow sh-l" id="newslist_22">
					<?php if( get_field('newslist_22') ): ?>
						<img src="<?php the_field('newslist_22'); ?>" />
					<?php endif; ?>
				</div>
			</div>	

				<div class="grid- w-100 bg-yellow-light grey-dark" id="newslist_3">
					<strong>News</strong>
					<?php echo do_shortcode( '[display-posts post_type="news-and-events" wrapper_class="news-listing" content_class="news-listing-item" posts_per_page="3" meta_key="eventtime"  orderby="eventtime" order="ASC" image_size="thumbnail" posts_per_page="5" include_excerpt="true" include_excerpt_dash="false"]' ); ?>
				</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
