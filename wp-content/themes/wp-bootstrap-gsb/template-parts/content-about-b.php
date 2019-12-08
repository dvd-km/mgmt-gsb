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
			<nav class="navbar navbar-inverse submenu align-items-start">
			<?php the_title( '<strong>', '</strong>' ); ?>
			<ul class="nav navbar-nav">
				<?php $about_22 = get_field('about_22'); 
					$about_31 = get_field('about_31'); 
					$about_40 = get_field('about_40'); 
					$about_51 = get_field('about_51'); 
					$about_62 = get_field('about_62'); 
					$about_63 = get_field('about_63'); 
					$about_72 = get_field('about_72'); 
					$about_82 = get_field('about_82'); 
				if( $about_22 ): 	
				?>
					<li class="menu-item"><a href="#<?php echo $about_22['about_22_title']; ?>"><?php echo $about_22['about_22_title']; ?></a></li>
					<li class="menu-item"><a href="#<?php echo $about_31['about_31_title']; ?>"><?php echo $about_31['about_31_title']; ?></a></li>
					<li class="menu-item"><a href="#<?php echo $about_40['about_40_title']; ?>"><?php echo $about_40['about_40_title']; ?></a></li>
					<li class="menu-item"><a href="#<?php echo $about_51['about_51_title']; ?>"><?php echo $about_51['about_51_title']; ?></a></li>
					<li class="menu-item"><a href="#<?php echo $about_62['about_62_title']; ?>"><?php echo $about_62['about_62_title']; ?></a></li>
					<li class="menu-item"><a href="#<?php echo $about_63['about_63_title']; ?>"><?php echo $about_63['about_63_title']; ?></a></li>
					<li class="menu-item"><a href="#<?php echo $about_72['about_72_title']; ?>"><?php echo $about_72['about_72_title']; ?></a></li>
					<li class="menu-item"><a href="#<?php echo $about_82['about_82_title']; ?>"><?php echo $about_82['about_82_title']; ?></a></li>

				</ul>
				<?php endif; ?>
			</nav>
		</div>
		<!--3.about-details -->
		<div class="grid-4 bg-green yellow-light" id="about_21">
			<?php $about_21 = get_field('about_21'); 
			if( $about_21 ): 	
			?>
				<p><?php echo $about_21['about_21_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($about_21['about_21_cta']['url']);?>" >
					<?php echo esc_html($about_21['about_21_cta']['title']); ?></a>
				<?php endif; ?>
		</div> 
		<?php $about_22 = get_field('about_22'); 
		if( $about_22 ): 	
		?>
			<div class="grid-8 bg-red yellow-light" style="grid-row-end: span 2;" id="<?php echo $about_22['about_22_title']; ?>">
					<strong><?php echo $about_22['about_22_title']; ?></strong>
					<p><?php echo $about_22['about_22_copy']; ?></p>
						<a class="button" href="<?php echo esc_url($about_22['about_22_cta']['url']);?>" >
						<?php echo esc_html($about_22['about_22_cta']['title']); ?></a>
						<div class="repeater serif small"><!--about_block_3_repeater -->
							<?php if( have_rows('about_22_repeater') ): ?>
							<?php while( have_rows('about_22_repeater') ): the_row(); 
								$content = get_sub_field('about_22_repeater_copy');
								$link = get_sub_field('about_22_repeater_cta');
								?>
								<p><?php echo $content; ?></p>
								<p>
									<?php if( $link ): ?>
										<a class="small san-serif" href="<?php echo $link; ?>" class="san-serif"><?php echo esc_html($link['title']); ?></a>
									<?php endif; ?>
								</p>
							<?php endwhile; ?>
							<?php endif; ?>
				</div>
			</div> 
		<?php endif; ?>
		<?php $about_31 = get_field('about_31'); 
		if( $about_31 ): 	
		?>
			<div class="grid-4 bg-blue yellow-light" id="<?php echo $about_31['about_31_title']; ?>">
				<strong><?php echo $about_31['about_31_title']; ?></strong>
				<p><?php echo $about_31['about_31_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($about_31['about_31_cta']['url']);?>" >
					<?php echo esc_html($about_31['about_31_cta']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<!--offerings-->
		<?php $about_40 = get_field('about_40'); 
			if( $about_40 ): 	
			?>
			<div class="grid-12 bg-yellow-light blue row-span-2" id="<?php echo $about_40['about_40_title']; ?>">
				<strong><?php echo $about_40['about_40_title']; ?></strong>
				<div class="w-100 col-mobile-2">
					<div class="col-6 blue">
						<h2><?php echo $about_40['about_40_title_group1']; ?></h2>
						<div class="repeater serif small"><!--offering_1_repeater -->
							<?php if( have_rows('about_41_repeater') ): ?>
								<?php while( have_rows('about_41_repeater') ): the_row(); 
									$content = get_sub_field('about_41_repeater_copy');
									?>
									<div class="bg-blue yellow-light float-right col-6 mb-3 p-3"><?php echo $content; ?></div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-6 red">
						<h2><?php echo $about_40['about_40_title_group2']; ?></h2>
						<div class="repeater serif small"><!--offering_2_repeater -->
							<?php if( have_rows('about_42_repeater') ): ?>
							<?php while( have_rows('about_42_repeater') ): the_row(); 
								$content = get_sub_field('about_42_repeater_copy');
								?>
								<div class="bg-red yellow-light float-left col-6 mb-3 p-3"><?php echo $content; ?></div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php $about_51 = get_field('about_51'); 
		if( $about_51 ): 	
		?>
			<div class="grid-4 bg-blue yellow-light" id="<?php echo $about_51['about_51_title']; ?>">
				<strong><?php echo $about_51['about_51_title']; ?></strong>
				<p><?php echo $about_51['about_51_copy']; ?></p>
				<p class="button">
					<a href="<?php echo esc_url($about_51['about_51_cta_1']['url']);?>" >
					<?php echo esc_html($about_51['about_51_cta_1']['title']); ?></a><br>
					<a  href="<?php echo esc_url($about_51['about_51_cta_2']['url']);?>" >
					<?php echo esc_html($about_51['about_51_cta_2']['title']); ?></a><br>
					<a  href="<?php echo esc_url($about_51['about_51_cta_3']['url']);?>" >
					<?php echo esc_html($about_51['about_51_cta_3']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<div class="grid-8 grid-slideshow sh-l">
			<?php if( get_field('about_52') ): ?>
				<img src="<?php the_field('about_52'); ?>" />
			<?php endif; ?>
			</div>
		<div class="grid-4 grid-slideshow sh-r">
			<?php if( get_field('about_61') ): ?>
				<img src="<?php the_field('about_61'); ?>" />
			<?php endif; ?>
		</div>
		<?php $about_62 = get_field('about_62'); 
		if( $about_62 ): 	
		?>
			<div class="grid-4 bg-yellow-light blue" id="<?php echo $about_62['about_62_title']; ?>">
				<strong><?php echo $about_62['about_62_title']; ?></strong>
				<p><?php echo $about_62['about_62_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($about_62['about_62_cta']['url']);?>" >
					<?php echo esc_html($about_62['about_62_cta']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<?php $about_63 = get_field('about_63'); 
		if( $about_63 ): 	
		?>
			<div class="grid-4 bg-green yellow-light" id="<?php echo $about_63['about_63_title']; ?>">
				<strong><?php echo $about_63['about_63_title']; ?></strong>
				<p><?php echo $about_63['about_63_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($about_63['about_63_cta']['url']);?>" >
					<?php echo esc_html($about_63['about_63_cta']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<?php $about_71 = get_field('about_71'); 
		if( $about_71 ): 	
		?>
			<div class="grid-4 bg-yellow-light red grid-img-inline" id="about_71">
				<p><?php echo $about_71['about_71_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($about_71['about_71_cta']['url']);?>" >
					<?php echo esc_html($about_71['about_71_cta']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<?php $about_72 = get_field('about_72'); 
		if( $about_72 ): 	
		?>
			<div class="grid-8 bg-red yellow-light grid-img-inline-multiple" id="<?php echo $about_72['about_72_title']; ?>">
				<strong><?php echo $about_72['about_72_title']; ?></strong>
				<p><?php echo $about_72['about_72_copy']; ?></p>
				<div class="w-100 clearfix"></div>
				<a class="button" href="<?php echo esc_url($about_72['about_72_cta']['url']);?>" >
					<?php echo esc_html($about_72['about_72_cta']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<?php $about_81 = get_field('about_81'); 
		if( $about_81 ): 	
		?>
			<div class="grid-4 bg-blue yellow-light serif" id="about_81">
				<p><?php echo $about_81['about_81_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($about_81['about_81_cta']['url']);?>" >
					<?php echo esc_html($about_81['about_81_cta']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<?php $about_82 = get_field('about_82'); 
		if( $about_82 ): 	
		?>
			<div class="grid-4 bg-yellow-light blue serif" id="<?php echo $about_82['about_82_title']; ?>">
				<strong><?php echo $about_82['about_82_title']; ?></strong>
				<p><?php echo $about_82['about_82_copy']; ?></p>
				<a class="button" href="<?php echo esc_url($about_82['about_82_cta']['url']);?>" >
					<?php echo esc_html($about_82['about_82_cta']['title']); ?></a>
			</div> 
		<?php endif; ?>
		<div class="grid-4 grid-slideshow sh-l">
			<?php if( get_field('about_83') ): ?>
				<img src="<?php the_field('about_83'); ?>" />
			<?php endif; ?>
		</div>
	</div>
</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
