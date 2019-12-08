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
                <div class="container-center">
                    <?php the_field('textonly-21'); ?>

                    <div class="repeater serif small"><!--textonly-22_repeater -->
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
                    <!-- <?php the_field('textonly-23'); ?> -->
                    <?php echo fredy_custom_excerpt(get_sub_field('textonly-23')); ?> 

                </div>	
			</div>
		<!-- .entry-content -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer>

</article><!-- #post-## -->
