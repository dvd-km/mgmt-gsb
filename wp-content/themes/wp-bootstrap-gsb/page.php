<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area w-100">
		<main id="main" class="site-main" role="main">
		<!--hero starts-->
		<?php $hero = get_field('hero');	
		if( $hero ): 
		?>
			<div id="hero" class="grid-12">	
			<!--heroslide-->	
				<div class="grid-8">
				<?php $image_ids = get_field('1_hero_slideshow', false, false);
					$shortcode = '[' . 'gallery ids="' . implode(',', $image_ids) . '"]';
					echo do_shortcode( $shortcode );
				?> </div>
			<!--side cta box-->	
				<div class="content grid-4">
					<p><?php echo $hero ['2_copy']; ?></p>
					<a class="button" href="<?php echo esc_url($hero['1_hero_copy_cta']);?>" ><?php echo esc_html($hero['1_hero_copy_cta']['title']); ?></a>
				</div>
			</div>
			<style type="text/css">
				#hero .content {
					background: <?php echo $hero['1_hero_copy_bg_color']; ?>;
					color: <?php echo $hero['1_hero_copy_text_color']; ?>;
				}
			</style>
		<?php endif; ?><!--hero ends-->	
		<!--post template-->
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>
		<!--post template-->
		</main><!-- #main -->
	</section><!-- #primary -->
<?php
get_sidebar();
get_footer();
