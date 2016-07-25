<?php
/**
 * @package Ryu
 */
?>

<li id="clickablebox">

<?php $large_image_url = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'full'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?> >
	<div class="entry-wrap clear">

		<header class="entry-header landing-background" style="background: #1c2833 url(<?php echo $large_image_url[0] ?>) no-repeat 50% 50%; background-size:cover;">

		<span class="entry-format-badge genericon"><span class="screen-reader-text"><?php _e( ' ', 'ryu' ); ?></span></span>

			<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php echo c2c_get_custom('authorname'); ?></a></h2>

		</header><!-- .entry-header -->
		
		<footer>

		<div class="entry-content">
			<blockquote><p><?php echo c2c_get_custom('authorbio'); ?> <a href="<?php the_permalink() ?>">Read more</a></p></blockquote>
		</div><!-- .entry-content -->

		</footer><!-- .entry-meta -->
		
	</div><!-- .entry-wrap -->


</article>

</li><!-- #post-## -->