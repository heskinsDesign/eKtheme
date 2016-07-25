<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ryu
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="wrap">
					<h1 class="page-title">
						<?php
								printf( __( '%s', 'ryu' ), '<span>' . single_tag_title( '', false ) . '</span>' );
						?>
					</h1>
					<?php
						// Show an optional term description.
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $tag_description );
						endif;
					?>
				</div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<ul class="contents wrap">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'category' );
				?>

			<?php endwhile; ?>
			</ul>
			<?php ryu_content_nav( 'nav-below' ); ?>
			
			<div class="wrap clear"> &nbsp; </div>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

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

<?php get_template_part( 'latest-posts' ); ?>	

<?php get_footer(); ?>
