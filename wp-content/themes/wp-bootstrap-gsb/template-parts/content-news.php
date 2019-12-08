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
	<header class="entry-header">
		<span class="search-term d-block text-center">
		<a href="<?php echo esc_url( home_url( '/' )); ?>about-mdes-news-and-events/">
			<?php
				$terms = wp_get_object_terms( $post->ID, 'newscategory' );
				foreach( $terms as $term )
					$term_names[] = $term->name;
				echo implode( '<div class="d-inline-block ml-3"></div>', $term_names ); ?>
		</a></span>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
		<?php if( !empty(get_the_post_thumbnail()) ) { ?>
			<div class="col-6-1 mb-4 position-relative ml-12 img-blue">
						<?php the_post_thumbnail(); ?>
				</div>
			<?php } else { ?>
				<div class="col-6 mb-4 position-relative ml-12 img-blue img-landscape gallery-icon">
				</div>
		<?php } ?>
	<!--	event modules <div class="col-6 mb-4">
			
			 <?php
			$newscategory = get_the_term_list($post->ID, 'newscategory', '<span>', '</span> <span>', '</span>');
			if( !empty($newscategory) ):?>
			<span class="section-title">Category</span><br>
			<p class="text-left mt-0"><?php echo $newscategory; ?></p>
			<?php endif; ?> -->
			<!-- <?php 
				$eventtime = get_field('eventtime');
				$eventtime_2 = get_field('eventtime_2');
				if( !empty($eventtime) && empty($eventtime_2) ): ?>
				<span class="section-title">Date</span><br>
				<p class="text-left mt-0"> <?php echo $eventtime; ?></p> 
			<?php endif; ?>
			<?php 
				$eventtime = get_field('eventtime');
				$eventtime_2 = get_field('eventtime_2');
				if( !empty($eventtime) && !empty($eventtime_2) ): ?>
				<span class="section-title">Date</span><br>
				<p class="text-left mt-0"> <?php echo $eventtime; ?> — <br><?php echo $eventtime_2; ?></p> 
			<?php endif; ?> 
			<?php 
				$eventlocation = get_field('eventlocation');
				if( !empty($eventlocation) ): ?>
				<span class="section-title">Location</span><br>
				<p class="text-left mt-0"><?php echo $eventlocation; ?></p>
			<?php endif; ?>
			<?php 
				$eventnote = get_field('eventnote');
				if( !empty($eventnote) ): ?>
				<h4 class="text-left mt-0"><?php echo $eventnote; ?></h4>
			<?php endif; ?> 
			<?php
			$newstag = get_the_term_list($post->ID,'newstag', '<span class="category-display-label">', '</span> <span class="category-display-label">', '</span>');
			if( !empty($newstag) ):?>
			<p class="pt-2"><?php echo $newstag; ?></p>
			<?php endif; ?>
		</div>-->
	<!-- <div class="w-100 clearfix"></div> -->
	<div class="w-100 mb-4 clearfix">
		<p style="text-indent:0;">
			<?php
				if ( is_single() ) :
					the_content();
				else :
					the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
				endif;

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
						'after'  => '</div>',
					) );
			?>
		</p>
	</div>
	<!-- <div class="w-100 clearfix"></div>
	<div class="w-100 pt-4 mb-4 clearfix">
	    <? echo do_shortcode('[display-posts post_type="news-and-events" taxonomy="news-and-events" posts_per_page="10" &nbsp;columns="2" wrapper_class="news-listing" content_class="news-listing-item" image_size="thumbnail" taxonomy="newscategory" tax_term="news-and-events"]');?>
	</div> -->
		<!--.body copy-->
	<!-- .entry-content -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
