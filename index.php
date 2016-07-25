<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ryu
 */

get_header(); ?>

		<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* Get the Lead */ ?>
			<ul class="lead-story wrap">
			
			<?php 
			
			$args = array(
				'cat' => 9366,
				'posts_per_page' => 1
			); 
				
			$query = new WP_Query( $args );
						
			$ids = array();

			?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php
					$ids[] = get_the_ID();
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'lead' );
					
				?>

			<?php endwhile; wp_reset_postdata(); endif; ?>
			
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
								<span class="future-post"><?php the_title(); ?></span>  <span class="coming">| Posting on <?php the_time('j F, Y'); ?></span>
							</li>
						<?php endforeach; ?>
				
						</ul>
						
						<small><em>*Dates may change</em></small>


					</div><!-- .entry-wrap -->
		
			</div>
				
			<?php /* Start the Loop */ ?>
			<ul class="homepage wrap">
			
			<?php 
			
			$args = array(
				'post__not_in' => $ids, 
				'cat' => -8838,
				'paged' => get_query_var('paged'),
				'posts_per_page' => 16
			); 
				
			$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'category' );
					
				?>

			<?php endwhile; wp_reset_postdata(); endif; ?>

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

<?php get_template_part( 'recommended-posts' ); ?>

<?php get_footer(); ?>