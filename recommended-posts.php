<?php
/**
 * The template for recommended posts
 *
 * @package Ryu
 */
?>

<div class="minus-top light-grey clear">

<div class="wrap">

<div class="recommended-posts">

	<h3>Recommended articles</h3>

	<ul class="post-lists wrap">

  	  <?php

		$bestposts = get_posts('numberposts=6&orderby=rand&cat=9366');
    	foreach($bestposts as $post) :
   	     setup_postdata($post); ?>

        <li id="clickablebox">

		<?php 
			if ( ! in_category( 8838 ) ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
			} else {
				$large_image_url = ' ';
			}
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?> >
			<div class="entry-wrap clear">

				<header class="entry-header landing-background" style="background: #1c2833 url(<?php echo $large_image_url[0] ?>) no-repeat 50% 50%; background-size:cover;">

				<span class="entry-format-badge genericon"><span class="screen-reader-text"><?php _e( ' ', 'ryu' ); ?></span></span>

					<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '... ' ); ?></a></h2>

				</header><!-- .entry-header -->
		
				<footer>
		
				<div class="entry-content">
					<?php 
						global $more;
						$more = 0;
				
						echo c2c_get_custom('rating', '<span class="rating">','</span>');

						the_content(' '); 
						
						
					?>
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
		
			</div><!-- .entry-wrap -->

		</article>

		</li><!-- #post-## -->

   	 <?php endforeach; ?>

	</ul>

</div>

</div>

</div>