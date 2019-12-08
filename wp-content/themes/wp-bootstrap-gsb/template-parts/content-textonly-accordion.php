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
                    <h1><?php wp_title(''); ?></h1>
                    <?php the_field('textonly-21'); ?>
                    <div class="repeater serif">
                        <!--accordion repeater-->
                        <div class="tabs">
                            <?php if( have_rows('staffs') ): ?>
                                <?php while( have_rows('staffs') ): the_row(); 
                                    $portrait = get_sub_field('staffs_1');
                                    $name = get_sub_field('staffs_2');
                                    $title= get_sub_field('staffs_3');
                                    $email= get_sub_field('staffs_4');
                                    $bio= get_sub_field('staffs_5');
                                    ?>
                                    <div class="tab">
                                        <input type="checkbox" id="chck-<?php echo get_row_index(); ?>">
                                        <label class="tab-label" for="chck-<?php echo get_row_index(); ?>">
                                            <div class="w-100">
                                                <div class="col-2 pl-0">
                                                    <img src="<?php echo $portrait; ?>" />
                                                </div>
                                                <div class="col-8 pr-0">
                                                    <h1 class="pb-0"> <?php echo $name; ?></h1>
                                                    <p><?php echo $title; ?></p>
                                                    <?php echo $email; ?><br>
                                                </div>  
                                            </div>
                                        </label>
                                        <div class="tab-content">
                                            <p><?php echo $bio; ?></p>  
                                        </div>                                 
                                        </div>
                                <?php endwhile; ?>
                             <?php endif; ?>
                        </div>
                        <!--accordion repeater ends-->
                </div>
            </div>	
        </div>
		<!-- .entry-content -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer>

</article><!-- #post-## -->
