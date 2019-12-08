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
	<div class="grid bg-yellow-light">
			<div class="grid-8 grid-slideshow sh-r">
				<?php 
				$hero = get_field('hero', false, false);
					$hero_shortcode = '[' . 'gallery ids="' . implode(',', $hero) . '"]';
					echo do_shortcode( $hero_shortcode );
				?> 
			</div>
			<div class="grid-4 bg-yellow-light red" id="hero_copy">
				<nav class="navbar navbar-inverse submenu align-items-start">
				<?php the_title( '<strong>', '</strong>' ); ?>
				<ul class="nav navbar-nav">
					<?php $apply_21 = get_field('apply_21'); 
						$apply_32 = get_field('apply_32'); 
						$apply_51 = get_field('apply_51');
					if( $apply_21 ): 	
					?>
						<li class="menu-item"><a href="#apply_21"><?php echo $apply_21['apply_21_title']; ?></a></li>
						<li class="menu-item"><a href="#apply_32"><?php echo $apply_32['apply_32_title']; ?></a></li>
						<li class="menu-item"><a href="#apply_51"><?php echo $apply_51['apply_51_title']; ?></a></li>
					</ul>
					<?php endif; ?>
				</nav>
				<?php 
					$apply_12 = get_field('apply_12');
					if( $apply_12 ): 
					?>
						<p class="button">
							<a href="mailto:<?php echo $apply_12['apply_12_email']; ?>" ><?php echo $apply_12['apply_12_copy']; ?></a><br>
							<a href="mailto:<?php echo $apply_12['apply_13_email']; ?>" ><?php echo $apply_12['apply_13_copy']; ?></a>
						</p>
				<?php endif; ?>
			</div>
		<!-- page details -->
		<div class="grid-8 bg-green yellow-light row-span-2">
			<span class="anchor" id="apply_21"></span>
			<?php $apply_21 = get_field('apply_21'); 
			if( $apply_21 ): 	
			?>
				<strong><?php echo $apply_21['apply_21_title']; ?></strong>
				<p><?php echo $apply_21['apply_21_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($apply_21['apply_21_cta']['url']);?>" >
					<?php echo esc_html($apply_21['apply_21_cta']['title']); ?></a>
			<?php endif; ?>
			<?php if( have_rows('apply_21_repeater') ): ?>
				<?php while( have_rows('apply_21_repeater') ): the_row(); 
					$content = get_sub_field('apply_21_repeater_copy');
					?>
					<div class="serif small"><?php echo $content; ?></div>
				<?php endwhile; ?>
			<?php endif; ?> 
		</div>
		<div class="grid-4 bg-red yellow-light" id="apply_22">
			<?php the_field('apply_22'); ?>
		</div>
		<div class="grid-4 bg-yellow-light blue">
			<?php $apply_32 = get_field('apply_32'); 
			if( $apply_32 ): 	
			?>
				<span class="anchor" id="apply_32"></span>
				<strong><?php echo $apply_32['apply_32_title']; ?></strong>
				<p><?php echo $apply_32['apply_32_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($apply_32['apply_32_cta']['url']);?>" >
					<?php echo esc_html($apply_32['apply_32_cta']['title']); ?></a>
			<?php endif; ?>
		</div>
		<div class="grid-12 w-100 clearfix" style="height:0; min-height:0; padding:0;"></div>
		<div class="grid-4 grid-slideshow sh-r bg-blue" id="apply_41">
			<?php if( get_field('apply_41') ): ?>
				<img src="<?php the_field('apply_41'); ?>" />
			<?php endif; ?>
		</div>
		<div class="grid-8 bg-blue yellow-light p-0" style="max-height:33.33vw;" id="apply_42">
			<!-- <?php the_field('apply_42'); ?> -->

			<?php if( have_rows('apply_42') ): ?>
							<div id="carousel">
								<div class="btn-bar">
									<div id="buttons">
										<a id="prev" href="#"><</a><a id="next" href="#">></a> 
									</div>
								</div>
								<div id="slides">
									<ul>
									<?php while( have_rows('apply_42') ): the_row(); 
                                    $text = get_sub_field('apply_42_copy');
                                    ?>
										<li class="slide sh-r bg-blue">
											<div class="quoteContainer">
												<p><?php echo $text; ?></p>
											</div>
										</li>
										<?php endwhile; ?>
                               
									</ul>
								</div>
							</div>


				<?php endif; ?>

		</div>
		<div class="grid-4 bg-yellow-light blue">
			<span class="anchor" id="apply_51"></span>
			<?php $apply_51 = get_field('apply_51'); 
			if( $apply_51 ): 	
			?>
				<p><strong><?php echo $apply_51['apply_51_title']; ?></strong><br>
				<a  href="<?php echo esc_url($apply_51['apply_51_cta']['url']);?>">
					<?php echo esc_html($apply_51['apply_51_cta']['title']); ?></a></p>
				<!-- <p><strong><?php echo $apply_51['apply_51_title_2']; ?></strong><br>
				<a  href="<?php echo esc_url($apply_51['apply_51_cta_2']['url']);?>">
					<?php echo esc_html($apply_51['apply_51_cta_2']['title']); ?></a></p> -->
				<?php 
					$apply_51_cta_2 = $apply_51['apply_51_cta_2'];
					if( $apply_51_cta_2 ): 
					?>
						<a class="button" href="mailto:<?php echo $apply_51_cta_2['apply_51_cta_2_email']; ?>" ><?php echo $apply_51_cta_2['apply_51_cta_2_copy']; ?></a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="grid-8 grid-slideshow sh-l bg-yellow-light" id="apply_52">
			<?php if( get_field('apply_52') ): ?>
				<img src="<?php the_field('apply_52'); ?>" />
			<?php endif; ?>
		</div>
	</div>
</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
