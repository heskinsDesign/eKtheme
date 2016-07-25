<?php
/**
Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Ryu
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* Get the Lead */ ?>
			<ul class="lead-story wrap">
			
			<?php query_posts('showposts=1&cat=9366');
				$ids = array();

			while ( have_posts() ) : the_post(); ?>
			
			<?php
				global $more;
				$more = 0;
			?>


				<?php
					$ids[] = get_the_ID();
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'lead' );
					
				?>

			<?php endwhile; ?>
			
			</ul>
						
			<div class="wrap coming-soon">
				<div class="entry-wrap wrap clear post-lists">
	
						<h3 class="latest-posts">Coming soon*...</h3>

						<ul>
						<?php


						$args = array( 'numberposts' => 5, 'post_status' => 'future', 'order' => 'ASC' );

						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<li>
								<span class="future-post"><?php the_title(); ?></span>  <span class="coming">| Coming on <?php the_time('j F, Y'); ?></span>
							</li>
						<?php endforeach; 
						?>
				
						</ul>
						
						<small><em>*Dates may change</em></small>


					</div><!-- .entry-wrap -->
		
			</div>
				
			<?php /* Start the Loop */ ?>
			<ul class="homepage wrap">
			
			<?php query_posts( array('post__not_in' => $ids, 'cat' => -8838, 'posts_per_page' => 16) ); ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<?php
				global $more;
				$more = 0;
			?>


				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'category' );
					
				?>

			<?php endwhile; ?>

			<?php ryu_content_nav( 'nav-below' ); ?>

			</ul>
			
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
		
	</section><!-- #primary -->	
	    
<?php get_template_part( 'festivals-tags' ); ?>

<?php get_footer(); ?>