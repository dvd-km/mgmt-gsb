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
		<div class="grid-4 bg-red yellow-light" id="hero_copy">
			<?php $landing_12 = get_field('landing_12'); 
				if( $landing_12 ): 	
				?>
				<p><?php echo $landing_12 ['landing_12_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($landing_12['landing_12_cta']['url']);?>" ><?php echo esc_html($landing_12['landing_12_cta']['title']); ?></a>
		<?php endif; ?>	
		</div>
	<!-- landing-details -->
	<!-- BUGGGGG
		gallery 1 <- getting images all other slides 
		gallery 2 <-only get its own
		gallery 3 <- getting images all other slides 
		-->
		<div class="grid-4 bg-yellow-light blue" id="landing_shoutout_1">
			<?php $landing_21 = get_field('landing_21'); 
			if( $landing_21 ): 	
			?>
				<p><?php echo $landing_21['landing_21_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($landing_21['landing_21_cta']['url']);?>" >
					<?php echo esc_html($landing_21['landing_21_cta']['title']); ?></a>
			<?php endif; ?>
		</div> 
		<div class="grid-4 bg-green yellow-light" id="landing_shoutout_2">
			<?php $landing_22 = get_field('landing_22'); 
			if( $landing_22 ): 	
			?>
				<p><?php echo $landing_22['landing_22_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($landing_22['landing_22_cta']['url']);?>" >
					<?php echo esc_html($landing_22['landing_22_cta']['title']); ?></a>
			<?php endif; ?>
		</div> 
		<div class="grid-4 grid-slideshow sh-l">
			<?php if( get_field('landing_23') ): ?>
				<img src="<?php the_field('landing_23'); ?>" />
			<?php endif; ?>
		</div>
		<div class="grid-4 bg-green yellow-light" id="landing_schoolevent_copy">
			<?php $landing_31 = get_field('landing_31'); 
			if( $landing_31 ): 	
			?>
				<p><?php echo $landing_31['landing_31_copy']; ?></p>
				<!-- <a class="button" href="<?php echo esc_url($landing_31['landing_31_cta']['url']);?>" >
					<?php echo esc_html($landing_31['landing_31_cta']['title']); ?></a> -->

					<a class="button" href="<?php echo $landing_31['landing_31_cta']['url']; ?>"><?php echo $landing_31['landing_31_cta']['title']; ?></a>

			<?php endif; ?>
		</div>
		<div class="grid-8 grid-slideshow embed-container">
				<div class="btn-circle bg-red yellow-light">
					<div class="btn-circle-copy">
					<?php 
					$video_link = get_field('landing_32_cta');
					if( $video_link ): 
						$video_link_url = $video_link['url'];
						$video_link_title = $video_link['title'];
						$video_link_target = $video_link['target'] ? $video_link['target'] : '_self';
						?>
						<a href="<?php echo esc_url($video_link_url); ?>" target="<?php echo esc_attr($video_link_target); ?>">
							<?php echo esc_html($video_link_title); ?></a>
					<?php endif; ?>
					</div>
				</div>
			<div class="embed-container-cover"></div>
			<?php

				// get iframe HTML
				$iframe = get_field('landing_32');

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
					'autoplay' => 1,
					'loop' => 1
				);
				$new_src = add_query_arg($params, $src.'');
				$iframe = str_replace($src, $new_src, $iframe);

				// add extra attributes to iframe html
				$attributes = 'frameborder="0" allow="autoplay; fullscreen" allowfullscreen" id="vimeo_player"';

				$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe><script src="https://player.vimeo.com/api/player.js"></script>', $iframe);

				// echo $iframe
				echo $iframe;

				?>
				<script>
					var player = new Vimeo.Player(document.getElementById("vimeo_player"));
					player.on('play', function() {
						player.setVolume(0)
					});
				</script>	
			</div>
			<div class="grid-4 grid-slideshow sh-r">
				<?php if( get_field('landing_41') ): ?>
					<img src="<?php the_field('landing_41'); ?>" />
				<?php endif; ?>
			</div>
			<?php $landing_schoolevent_2 = get_field('landing_42'); 
			if( $landing_schoolevent_2 ): 	
			?>
				<div class="grid-8 bg-blue yellow-light">
					<div class="g-wrapper" id="landing_schoolevent_2">
						<div class="col-6">
							<p><?php echo $landing_schoolevent_2['landing_42_copy']; ?></p>
							<a class="button" href="<?php echo esc_url($landing_schoolevent_2['landing_42_cta']['url']);?>" >
							<?php echo esc_html($landing_schoolevent_2['landing_42_cta']['title']); ?></a>
						</div>
						<div class="col-6">
							<?php echo do_shortcode( '[display-posts post_type="news-and-events" wrapper_class="news-listing" content_class="news-listing-item" posts_per_page="3"  orderby="eventtime" ]' ); ?>
							<a class="button" href="<?php echo esc_url( home_url( '/' )); ?>calender/">See our event calendar</a>
						</div>
					</div>
				</div>
			<?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
