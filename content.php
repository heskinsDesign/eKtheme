<?php
/**
 * @package Ryu
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?> >
	<div class="entry-wrap wrap clear">
		<?php if ( '' != get_the_post_thumbnail() || '' != get_post_meta ( $post->ID, 'postimage', true )) : ?>
			<?php if ( ! is_single() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ryu' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>" class="ryu-featured-thumbnail">
				<?php the_post_thumbnail( 'ryu-featured-thumbnail' ); ?>
			</a>
			<?php elseif ( get_post_meta ( $post->ID, 'postimage', true ) ) : ?>

				<div class="attachment-ryu-featured-thumbnail">
				<?php echo get_post_meta( $post->ID, 'postimage', true ); ?>
				</div>
			<?php else : ?>
				<?php the_post_thumbnail( 'ryu-featured-thumbnail' ); ?>
			<?php endif; ?>
		<?php endif; ?>

		<header class="entry-header">
			<?php
				$categories_list = get_the_category_list( __( ', ', 'ryu' ) );
				if ( $categories_list && ryu_categorized_blog() )
					echo '<span class="categories-links">' . $categories_list . '</span>';

				if ( ! is_single() ) :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				else :
					the_title( '<h1 class="entry-title">', '</h1>' );
				endif;
			?>
		</header><!-- .entry-header -->

		<footer class="entry-meta">
			<?php ryu_entry_meta(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'ryu' ), __( '1 Comment', 'ryu' ), __( '% Comments', 'ryu' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'ryu' ), '<span class="edit-link">', '</span>' ); ?>
			
			<?php if ( is_single() ) : ?>
				
				<div class="categories">
					<ul>
					<?php wp_list_categories('exclude=72,86,3,2479,2478&title_li=&depth=1'); ?>
					<?php wp_list_categories('include=3&title_li=&depth=1'); ?>
					<?php wp_list_categories('child_of=3&title_li=&depth=0&exclude=21,20,19,22,5317,5318'); ?>
</ul>
</div>
		
			<?php endif; ?>

		</footer><!-- .entry-meta -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ryu' ) ); ?>
			
			<?php if ( is_single() ) : ?>

				<?php if  ( get_post_meta ( $post->ID, 'bluraydetails', true ) || get_post_meta ( $post->ID, 'dualdetails', true ) || get_post_meta ( $post->ID, 'dvddetails', true ) || get_post_meta ( $post->ID, 'laserdiscdetails', true ) )  : ?>
			
				<?php 

					echo '<span class="discdetails"><h3>Home media details</h3>';
					echo c2c_get_custom('bluraydetails');
					echo c2c_get_custom('dualdetails');
					echo c2c_get_custom('dvddetails');	
					echo c2c_get_custom('laserdiscdetails');	
					echo '</span>';

				?>

				<?php endif; ?>
				
				<?php if  ( get_post_meta ( $post->ID, 'bookdetails', true ) ) : ?>

				<?php 

					echo '<span class="discdetails"><h3>Book details</h3>';
					echo c2c_get_custom('bookdetails');
					echo '</span>';

				?>

				<?php endif; ?>
 
				<span class="author-section">
				
				<h3 class="author">About the author</h3>

				<span class="author-pic"><?php echo get_avatar( get_the_author_email(), '80' ); ?></span>
				<span class="author-desc"><strong><?php the_author(); ?></strong><br />
				<?php the_author_description(); ?>
				<?php
				$author = get_the_author(); 
				if ($author == "dakkar"):?>
				<a rel="license"
				href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img
				alt="Creative Commons License" style="border-width:0"
				src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a><br />
				This <span xmlns:dct="http://purl.org/dc/terms/"
				href="http://purl.org/dc/dcmitype/Text" rel="dct:type">review</span>
				by <a xmlns:cc="http://creativecommons.org/ns#"
				href="http://www.thenautilus.net/" property="cc:attributionName"
				rel="cc:attributionURL">Gianni Ceccarelli</a> is licensed under a <a
				rel="license"
				href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative
				Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.
				<?php endif; ?>
				
				</span>
			
			<?php endif; ?>
				
			<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ryu' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<span class="entry-format-badge genericon"><span class="screen-reader-text"><?php _e( ' ', 'ryu' ); ?></span></span>

 		<?php if ( is_single() ) : ?>
 				<div class="post-aside">
					<?php get_template_part( 'post-aside' ); ?>
				</div>

		<?php endif; ?>
		
	</div><!-- .entry-wrap -->


</article><!-- #post-## -->