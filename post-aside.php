<?php
/**
 * The template for post aside
 *
 * @package Ryu
 */
?>
<?php

	$today = getdate();
	$args = array(
		'date_query' => array(
			//simply subtract one year from current year
			'year' => $today["year"]-1,
			'month' => $today["mon"],
			'day' => $today["mday"],
			),
		'category__not_in' => 86,
		'posts_per_page' => '1'
	);
	
$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<div class="on-this-day">

		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ryu' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php } ?>				

        <h3>On this day <span class="years-ago">One year ago</span></h3>

		<h4><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '... ' ); ?></a></h4>

					<p><?php echo wp_trim_words( get_the_content(), 35, ' ... '  ); ?> <a href="<?php the_permalink() ?>"> Read on <span class="meta-nav">&rarr;</span></a></p>
						
		</div>

 <?php endwhile; 
  wp_reset_postdata();
 endif; ?>
 
<?php
	$today = getdate();
	$args = array(
		'date_query' => array(
			//simply subtract one year from current year
			'year' => $today["year"]-3,
			'month' => $today["mon"],
			'day' => $today["mday"],
			),
		'category__not_in' => 86,
		'posts_per_page' => '1',
	);
	
$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<div class="on-this-day">

		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ryu' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php } ?>				

        <h3>On this day <span class="years-ago">Three years ago</span></h3>

		<h4><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '... ' ); ?></a></h4>

					<p><?php echo wp_trim_words( get_the_content(), 35, ' ... '  ); ?> <a href="<?php the_permalink() ?>"> Read on <span class="meta-nav">&rarr;</span></a></p>
						
		</div>

 <?php endwhile; 
  wp_reset_postdata();
 endif; ?>

<?php
	$today = getdate();
	$args = array(
		'date_query' => array(
			//simply subtract one year from current year
			'year' => $today["year"]-5,
			'month' => $today["mon"],
			'day' => $today["mday"],
			),
		'category__not_in' => 86,
		'posts_per_page' => '1',
	);
	
$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<div class="on-this-day">

		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ryu' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php } ?>				

        <h3>On this day <span class="years-ago">Five years ago</span></h3>

		<h4><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '... ' ); ?></a></h4>

					<p><?php echo wp_trim_words( get_the_content(), 35, ' ... '  ); ?> <a href="<?php the_permalink() ?>"> Read on <span class="meta-nav">&rarr;</span></a></p>
						
		</div>

 <?php endwhile; 
  wp_reset_postdata();
 endif; ?>

<?php
	$today = getdate();
	$args = array(
		'date_query' => array(
			//simply subtract one year from current year
			'year' => $today["year"]-8,
			'month' => $today["mon"],
			'day' => $today["mday"],
			),
		'category__not_in' => 86,
		'posts_per_page' => '1',
	);
	
$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<div class="on-this-day">

		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ryu' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php } ?>				

        <h3>On this day <span class="years-ago">Eight years ago</span></h3>

		<h4><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '... ' ); ?></a></h4>

					<p><?php echo wp_trim_words( get_the_content(), 35, ' ... '  ); ?> <a href="<?php the_permalink() ?>"> Read on <span class="meta-nav">&rarr;</span></a></p>
						
		</div>

 <?php endwhile; 
  wp_reset_postdata();
 endif; ?>

<?php
	$today = getdate();
	$args = array(
		'date_query' => array(
			//simply subtract one year from current year
			'year' => $today["year"]-10,
			'month' => $today["mon"],
			'day' => $today["mday"],
			),
		'category__not_in' => 86,
		'posts_per_page' => '1',
	);
	
$query = new WP_Query( $args );

?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<div class="on-this-day">

		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ryu' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="<?php the_ID(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php } ?>				

        <h3>On this day <span class="years-ago">Ten years ago</span></h3>

		<h4><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '... ' ); ?></a></h4>

					<p><?php echo wp_trim_words( get_the_content(), 35, ' ... '  ); ?> <a href="<?php the_permalink() ?>"> Read on <span class="meta-nav">&rarr;</span></a></p>
						
		</div>

 <?php endwhile; 
  wp_reset_postdata();
 endif; ?>

<div class="popular-posts clear">
<div class="tptn_posts ">
<h3>Trending this month</h3>
<ul>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/news/in-memoriam-makiko-futaki-animator">
<img class="tptn_thumb tptn_featured" title="In Memoriam: Makiko Futaki, Animator" alt="In Memoriam: Makiko Futaki, Animator" src="http://www.easternkicks.com/wp-content/uploads/2004/12/spirited-away-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/news/in-memoriam-makiko-futaki-animator">
<span class="tptn_title">In Memoriam: Makiko Futaki, Animator</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/features/31-asian-films-to-watch-in-2016">
<img class="tptn_thumb tptn_featured" title="31 Asian Films to watch in 2016" alt="31 Asian Films to watch in 2016" src="http://www.easternkicks.com/wp-content/uploads/2015/12/001372a9ae271442b6a817-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/features/31-asian-films-to-watch-in-2016">
<span class="tptn_title">31 Asian Films to watch in 2016</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/features/johnnie-to-interview">
<img class="tptn_thumb tptn_featured" title="Johnnie To interview: “We almost used a whole year for editing!”" alt="Johnnie To interview: “We almost used a whole year for editing!”" src="http://www.easternkicks.com/wp-content/uploads/2016/05/26712205341_d02fa135fb_b-1-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/features/johnnie-to-interview">
<span class="tptn_title">Johnnie To interview: “We almost used a whole year for editing!”</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/reviews/hime-anole">
<img class="tptn_thumb tptn_featured" title="Hime-Anole" alt="Hime-Anole" src="http://www.easternkicks.com/wp-content/uploads/2016/04/Himeanole-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/reviews/hime-anole">
<span class="tptn_title">Review: Hime-Anole
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/features/an-interview-with-yang-ya-che-director-of-gfbf">
<img class="tptn_thumb tptn_featured" title="An interview with Yang Ya-Che, director of Gf*Bf*" alt="An interview with Yang Ya-Che, director of Gf*Bf*" src="http://www.easternkicks.com/wp-content/uploads/2013/03/Yang-Ya-Che-e1362852530551-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/features/an-interview-with-yang-ya-che-director-of-gfbf">
<span class="tptn_title">An interview with Yang Ya-Che, director of Gf*Bf*</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/reviews/fresh-wave-2015-in-silence">
<img class="tptn_thumb tptn_featured" title="1Review: Fresh Wave 2015: In Silence" alt="Review: Fresh Wave 2015: In Silence" src="http://www.easternkicks.com/wp-content/uploads/2016/05/insilence3-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/reviews/fresh-wave-2015-in-silence">
<span class="tptn_title">Review: Fresh Wave 2015: In Silence</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/features/shu-qi-from-cat-iii-to-cannes">
<img class="tptn_thumb tptn_featured" title="Feature: Shu Qi, From Cat III to Cannes" alt="Feature: Shu Qi, From Cat III to Cannes" src="http://www.easternkicks.com/wp-content/uploads/2016/05/IMG_6509-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/features/shu-qi-from-cat-iii-to-cannes">
<span class="tptn_title">Feature: Shu Qi, From Cat III to Cannes</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/features/top-10-most-essential-zatoichi-films">
<img class="tptn_thumb tptn_featured" title="Top 10 most essential Zatoichi films" alt="Top 10 most essential Zatoichi films" src="http://www.easternkicks.com/wp-content/uploads/2015/09/zatoichi-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/features/top-10-most-essential-zatoichi-films">
<span class="tptn_title">Top 10 most essential Zatoichi films</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/reviews/journey-to-the-shore">
<img class="tptn_thumb tptn_featured" title="Review: Journey to the Shore" alt="Review: Journey to the Shore" src="http://www.easternkicks.com/wp-content/uploads/2016/05/journey_to_the_shore_still_07_24749262626_o-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/reviews/journey-to-the-shore">
<span class="tptn_title">Review: Journey to the Shore</span>
</a>
</span>
</li>
<li>
<a class="tptn_link" href="http://www.easternkicks.com/news/festivals/uk-premiere-of-the-lost-arcade-comes-to-london">
<img class="tptn_thumb tptn_featured" title="UK Premiere of The Lost Arcade comes to London" alt="UK Premiere of The Lost Arcade comes to London" src="http://www.easternkicks.com/wp-content/uploads/2016/05/Player-by-Jesse-Garrison-e1463649585859-150x150.jpg">
</a>
<span class="tptn_after_thumb">
<a class="tptn_link" href="http://www.easternkicks.com/news/festivals/uk-premiere-of-the-lost-arcade-comes-to-london">
<span class="tptn_title">UK Premiere of The Lost Arcade comes to London</span>
</a>
</span>
</li>

</ul>
<div class="tptn_clear"></div>
</div>
<br>
</div>

<div class="popular-posts coming-soon-aside light-grey clear">

			<h3>Coming soon*</h3>

			<ul>
			<?php


			$args = array( 'numberposts' => 5, 'post_status' => 'future', 'order' => 'ASC' );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li>
					<span class="future-post"><?php the_title(); ?></span>
					<span class="coming"><?php the_time('j F, Y'); ?></span>
				</li>
			<?php endforeach; 
			wp_reset_postdata();?>
	
			</ul>
			
			<small><em>*Dates may change</em></small>

</div>



