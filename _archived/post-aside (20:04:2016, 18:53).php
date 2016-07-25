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

<?php if ( function_exists('tptn_show_pop_posts') ) tptn_show_pop_posts(); ?>

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



