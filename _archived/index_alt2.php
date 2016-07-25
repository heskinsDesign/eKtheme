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

			<?php 
			
$args = array(
	'posts_per_page' => 1,
	'post__in'  => get_option( 'sticky_posts' ),
	'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args );

			while ($query->have_posts()) : $query->the_post(); ?>

			<ul class="lead-story wrap">

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'lead' );
				?>

			</ul>

			<?php endwhile; wp_reset_query(); ?>
						
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
			
				<?php $all_other_posts = array(
    				'post__not_in' => get_option('sticky_posts')
				);
				global $wp_query;
				$merged_query_args = array_merger($wp_query->query, $all_other_posts);

				query_posts($merged_query_args); ?>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'category' );
					
				?>

				<?php endwhile; endif; wp_reset_query(); ?>
						
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