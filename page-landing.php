<?php
/**
Template Name: Landing
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Ryu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php query_posts('posts_per_page=5'); ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'landing' );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
		
<article  <?php post_class( 'clear' ); ?> >
	<div class="entry-wrap wrap clear post-lists">
	
			<h3 style="color: #fff">Coming soon...</h3>

<ul>
<?php


$args = array( 'numberposts' => 3, 'post_status' => 'future', 'order' => 'ASC' );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li>
		<?php the_title(); ?> | <span class="datetime">Publishing <?php the_time('j F, Y'); ?></span>
	</li>
<?php endforeach; 
wp_reset_postdata();?>

</ul>

	</div><!-- .entry-wrap -->


</article><!-- #post-## -->

		</div><!-- #content -->
		
	</div><!-- #primary -->

<?php get_template_part( 'festivals-tags' ); ?>

<?php get_template_part( 'recommended-posts' ); ?>

<?php get_footer(); ?>