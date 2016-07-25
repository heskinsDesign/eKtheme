<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Ryu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

			<div class="wrap email-signup">
				<div class="entry-wrap wrap clear">
	
					<h3 class="latest-posts">Never miss a post!</h3>

					<?php 

					$widgetNL = new WYSIJA_NL_Widget(true);
					echo $widgetNL->widget(array('form' => 2, 'form_type' => 'php'));

					?>						

				</div><!-- .entry-wrap -->
		
			</div>

		</div><!-- #content -->
				
	</div><!-- #primary -->

<?php get_template_part( 'festivals-tags' ); ?>

<?php get_footer(); ?>