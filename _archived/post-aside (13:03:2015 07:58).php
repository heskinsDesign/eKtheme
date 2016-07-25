<?php
/**
 * The template for post aside
 *
 * @package Ryu
 */
?>

<?php
	wp_reset_postdata();

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

<?php wpp_get_mostpopular('header="Trending this week"&header_start="<h3>"&header_end="</h3>"&thumbnail_width=40&thumbnail_height=40&stats_views=0&range=weekly&limit=10&pid="4879,70,4869,4804"'); ?>

</div>

<div class="on-this-day">

        <h3>Never miss a post</h3>

		<?php 

		$widgetNL = new WYSIJA_NL_Widget(true);
		echo $widgetNL->widget(array('form' => 2, 'form_type' => 'php'));

		?>						

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



