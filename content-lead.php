<?php
/**
 * @package Ryu
 */
?>

<li id="clickablebox">

<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?> >
	<div class="entry-wrap clear">

		<header class="entry-header landing-background" style="background: #000000 url(<?php echo $large_image_url[0] ?>) no-repeat 50% 50%; background-size:cover;">

		<span class="entry-format-badge genericon"><span class="screen-reader-text"><?php _e( ' ', 'ryu' ); ?></span></span>

			<h1 class="entry-title"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '... ' ); ?></a></h1>

		</header><!-- .entry-header -->
		
		<footer>

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php echo c2c_get_custom('rating', '<span class="rating">','</span>'); ?>

			<?php the_content( __( 'Read on <span class="meta-nav">&rarr;</span>', 'ryu' ) ); ?>
			
		</div><!-- .entry-content -->

			<?php $parentscategory ="";
			foreach((get_the_category()) as $category) {
			if ($category->category_parent == 0) {
			$parentscategory .= '<a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '">' . $category->name . '</a>, ';
			}
			} 
			
			echo '<span class="categories-links">' . substr($parentscategory,0,-2) . ' by ' . get_the_author() . '</span>';
			?>


		</footer><!-- .entry-meta -->

		<?php endif; ?>
		
	</div><!-- .entry-wrap -->


</article>

</li><!-- #post-## -->