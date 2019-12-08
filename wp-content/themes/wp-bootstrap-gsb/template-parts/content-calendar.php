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
					<?php $calendar_2= get_field('calendar_2'); 
						$calendar_3= get_field('calendar_3');  
						$calendar_4= get_field('calendar_4');  
					if( $calendar_2 ): 	
					?>
						<li class="menu-item"><a href="#calendar_2"><?php echo $calendar_2['calendar_2_title']; ?></a></li>
						<li class="menu-item"><a href="#calendar_3"><?php echo $calendar_3['calendar_3_title']; ?></a></li>
						<li class="menu-item"><a href="#calendar_4"><?php echo $calendar_4['calendar_4_title']; ?></a></li>
                </ul>
                <?php endif; ?>
                </nav>
         </div>
    </div>
    <div class="content-area grid- ">
		<!--4. Calendar Details -->
		<?php $calendar_2 = get_field('calendar_2'); 
			if( $calendar_2 ): 	
			?>
            <div class="w-100 bg-yellow-light blue" style="padding:2rem;display:table" >
                <span class="anchor" id="calendar_2"></span>
                <strong><?php echo $calendar_2['calendar_2_title']; ?></strong>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                <script>
                    jQuery(document).ready(function ($) {


                    function myFunction() {
                    var month = new Array();
                    month[0] = "January";
                    month[1] = "February";
                    month[2] = "March";
                    month[3] = "April";
                    month[4] = "May";
                    month[5] = "June";
                    month[6] = "July";
                    month[7] = "August";
                    month[8] = "September";
                    month[9] = "October";
                    month[10] = "November";
                    month[11] = "December";

                    var d = new Date();
                    var n = month[d.getMonth()];
                    document.getElementById("month").innerHTML = n;
                    }
                });
                    </script>
                    <h1 id="month"></h1>
                    <div class="container-center pt-0">
                    <iframe src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FNew_York&amp;src=bWtpbTEyQGFsdW1uaS5yaXNkLmVkdQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=cmlzZC5lZHVfa3JhY3AwdXNvZG5jcWc5cDY1YTdndnFycGdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=cmlzZC5lZHVfNGlxMTU1bDlsMTY0anIxcjhhbmptYmwyZjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23F6BF26&amp;color=%234285F4&amp;color=%23795548&amp;color=%237CB342&amp;color=%23F09300&amp;showTitle=0&amp;showNav=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showPrint=0&amp;showDate=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>                    <style>
                        #calendarTitle {
                            display:none;
                        }
                    </style>
                    </div>
            </div> 
        <?php endif; ?>
        <?php $calendar_3 = get_field('calendar_3'); 
			if( $calendar_3 ): 	
			?>
            <div class="w-100 bg-green grey-dark" style="padding:2rem;display:table">
            <span class="anchor" id="calendar_3"></span>
                <div class="w-100"><strong><?php echo $calendar_3['calendar_3_title']; ?></strong></div>
                <div class="col-6 text-center col-6-img pl-0">
                    
                        <img src="<?php echo $calendar_3['calendar_3_img']; ?>" class="no-slide"/>
               
                </div>
                <div class="col-6 small serif pr-0">
                    <a href="<?php echo esc_url($calendar_3['calendar_3_cta']['url']);?>" ><strong><?php echo esc_html($calendar_3['calendar_3_cta']['title']); ?></strong></a>
                    <p><?php echo $calendar_3['calendar_3_copy']; ?></p>
                </div>
             </div> 
        <?php endif; ?>
        <?php $calendar_4 = get_field('calendar_4'); 
			if( $calendar_4 ): 	
			?>
            <div class="w-100 bg-yellow-light grey-dark" style="padding:2rem;display:table">
                <span class="anchor" id="calendar_4"></span>
                 <div class="w-100"><strong><?php echo $calendar_4['calendar_4_title']; ?></strong></div>
                <div class="col-6 text-center col-6-img pl-0">
                        <img src="<?php echo $calendar_4['calendar_4_img']; ?>" class="no-slide" />
                </div>
                <div class="col-6 small serif pr-0"> 
                    <a href="<?php echo esc_url($calendar_4['calendar_4_cta']['url']);?>" ><strong><?php echo esc_html($calendar_4['calendar_4_cta']['title']); ?></strong></a>
                    <p><?php echo $calendar_4['calendar_4_copy']; ?></p>
                </div>
            </div> 
        <?php endif; ?>
	</div>
</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
