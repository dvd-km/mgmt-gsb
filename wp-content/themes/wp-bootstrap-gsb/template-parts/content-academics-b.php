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
			<div class="grid-4 bg-green yellow-light" id="hero_copy">
				<nav class="navbar navbar-inverse submenu align-items-start">
				<?php the_title( '<strong>', '</strong>' ); ?>
				<ul class="nav navbar-nav">
					<?php $academics_21 = get_field('academics_21'); 
						$academics_22 = get_field('academics_22'); 
						$academics_31 = get_field('academics_31'); 
						$academics_32 = get_field('academics_32'); 
						$academics_42 = get_field('academics_42'); 
					if( $academics_21 ): 	
					?>
						<li class="menu-item"><a href="#<?php echo $academics_21['academics_21_title']; ?>"><?php echo $academics_21['academics_21_title']; ?></a></li>
						<li class="menu-item"><a href="#<?php echo $academics_22['academics_22_title']; ?>"><?php echo $academics_22['academics_22_title']; ?></a></li>
						<li class="menu-item"><a href="#<?php echo $academics_31['academics_31_title']; ?>"><?php echo $academics_31['academics_31_title']; ?></a></li>
						<li class="menu-item"><a href="#<?php echo $academics_32['academics_32_title']; ?>"><?php echo $academics_32['academics_32_title']; ?></a></li>
						<li class="menu-item"><a href="#<?php echo $academics_42['academics_42_title']; ?>"><?php echo $academics_42['academics_42_title']; ?></a></li>

					</ul>
					<?php endif; ?>
				</nav>
			</div>
		<!--4. academics_details -->
		<?php $academics_21 = get_field('academics_21'); 
			if( $academics_21 ): 	
			?>
				<div class="grid-4 bg-red yellow-light serif small" style="grid-row-end: span 3;" 
				id="<?php 		
				// $academics_21 = str_replace(" ", "-", $academics_21);
				// echo strtolower($academics_21['academics_21_title']); 
			 	echo $academics_21['academics_21_title']; 
				?>">

				<strong><?php echo $academics_21['academics_21_title']; ?></strong>
					<p><?php echo $academics_21['academics_21_copy']; ?></p>
					<a class="button" href="<?php echo esc_url($academics_21['academics_21_cta']['url']);?>" ><?php echo esc_html($academics_21['academics_21_cta']['title']); ?></a>
				</div> 
			<?php endif; ?>
		<?php $academics_22 = get_field('academics_22'); 
			if( $academics_22 ): 	
			?>
				<div class="grid-8 bg-yellow-light blue" style="grid-row-end: span 3;" id="<?php echo strtolower($academics_22['academics_22_title']); ?>">
						<strong><?php echo $academics_22['academics_22_title']; ?></strong>
						<p><?php echo $academics_22['academics_22_copy']; ?></p>
						<a class="button" href="<?php echo esc_url($academics_22['academics_22_cta']['url']);?>" ><?php echo esc_html($academics_22['academics_22_cta']['title']); ?></a>
						<div class="repeater serif small"><!--academics_22_repeater -->
							<?php if( have_rows('academics_22_repeater') ): ?>
							<?php while( have_rows('academics_22_repeater') ): the_row(); 
								$content = get_sub_field('academics_22_repeater_copy');
								$link = get_sub_field('academics_22_repeater_cta');
								?>
								<p><?php echo $content; ?></p>
								<p>
									<?php if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo $link_url; ?>" class="san-serif"><?php echo esc_html($link_title); ?></a>
									<?php endif; ?>
								</p>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
				</div> 
			<?php endif; ?>
			<?php $academics_31 = get_field('academics_31'); 
				if( $academics_31 ): 	
				?>
					<div class="grid-4 grid-square bg-green yellow-light" id="<?php echo $academics_31['academics_31_title']; ?>">
						<strong><?php echo $academics_31['academics_31_title']; ?></strong>
						<p><?php echo $academics_31['academics_31_copy']; ?></p>
						<a class="button" href="<?php echo esc_url($academics_31['academics_31_cta']['url']);?>" >
							<?php echo esc_html($academics_31['academics_31_cta']['title']); ?></a>
					</div> 
				<?php endif; ?>
				<?php $academics_32 = get_field('academics_32'); 
				if( $academics_32 ): 	
				?>
					<div class="grid-4 grid-square bg-blue yellow-light" id="<?php echo $academics_32['academics_32_title']; ?>">
						<strong><?php echo $academics_32['academics_32_title']; ?></strong>
						<p><?php echo $academics_32['academics_32_copy']; ?></p>
						<a class="button" href="<?php echo esc_url($academics_32['academics_32_cta']['url']);?>" >
							<?php echo esc_html($academics_32['academics_32_cta']['title']); ?></a>
					</div> 
				<?php endif; ?>
				<div class="grid-4 grid-square  grid-slideshow sh-l">
					<?php if( get_field('academics_33') ): ?>
						<img src="<?php the_field('academics_33'); ?>" />
					<?php endif; ?>
				</div>
				<div class="grid-4 grid-square  grid-slideshow sh-r">
					<?php if( get_field('academics_41') ): ?>
						<img src="<?php the_field('academics_41'); ?>" />
					<?php endif; ?>
				</div>

				<?php $academics_42 = get_field('academics_42'); 
				if( $academics_42 ): 	
				?>
					<div class="grid-8 grid-square  bg-yellow-light red" id="<?php echo $academics_42['academics_42_title']; ?>">
						<strong><?php echo $academics_42['academics_42_title']; ?></strong>
						<p><?php echo $academics_42['academics_42_copy']; ?></p>
						<a class="button" href="<?php echo esc_url($academics_42['academics_42_cta']['url']);?>" >
							<?php echo esc_html($academics_42['academics_42_cta']['title']); ?></a>
					</div> 
				<?php endif; ?>
	</div>
</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
