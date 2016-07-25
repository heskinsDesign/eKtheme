<?php
/**
 * @package Ryu
 */
?>

<?php
global $more;
$more = 0;
?>

<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>

<div class="landing-background" style="background: #1c2833 url(<?php echo $large_image_url[0] ?>) no-repeat 50% 50%; background-size:cover;">

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?> >

	<div class="entry-wrap wrap clear">

		<header class="entry-header">
			<?php
				$categories_list = get_the_category_list( __( ', ', 'ryu' ) );
				if ( $categories_list && ryu_categorized_blog() )
					echo '<span class="categories-links">' . $categories_list . '</span>';

				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );

			?>
		</header><!-- .entry-header -->

		<footer class="entry-meta">
			<?php ryu_entry_meta(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'ryu' ), __( '1 Comment', 'ryu' ), __( '% Comments', 'ryu' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'ryu' ), '<span class="edit-link">', '</span>' ); ?>

		</footer><!-- .entry-meta -->

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ryu' ) ); ?>
		</div><!-- .entry-content -->

		<span class="entry-format-badge genericon"><span class="screen-reader-text"><?php _e( ' ', 'ryu' ); ?></span></span>

		
	</div><!-- .entry-wrap -->


</article>

</div><!-- #post-## -->