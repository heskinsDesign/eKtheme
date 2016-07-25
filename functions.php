<?php
/**
 * Ryu functions and definitions
 *
 * @package Ryu
 */

function ryu_entry_meta() {


	if ( is_sticky() && is_home() && ! is_paged() ) {
	
		printf( __( '<span class="featured-post"><a href="%1$s" title="%2$s" rel="bookmark">Sticky</a></span>', 'ryu' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() )
		);

		echo c2c_get_custom('rating', '<span class="rating">','</span>');
		
	};

	if ( 'post' == get_post_type() && ! is_single() ) {
	
		printf( __( '<span class="entry-date"><a href="%1$s" title="%2$s" rel="bookmark"><time datetime="%3$s">%4$s</time></a></span><span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span>', 'ryu' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'ryu' ), get_the_author() ) ),
			get_the_author()
		);

		echo c2c_get_custom('rating', '<span class="rating">','</span>');
		
	};
	
	if ( 'post' == get_post_type() && is_single() ) {
	
		printf( __( '<span class="entry-date"><a href="%1$s" title="%2$s" rel="bookmark"><time datetime="%3$s">%4$s</time></a></span><span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span>', 'ryu' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'ryu' ), get_the_author() ) ),
			get_the_author()
		);
						
		echo c2c_get_custom('rating', '<span class="rating">','</span>');

		echo c2c_get_custom('details', '<span class="details">','</span>');
		 

/* if(get_field('affiliates_amazonuk'))
{
	echo '<span class="affliate">BUY FROM AMAZON UK<br><br>' . get_field('affiliates_amazonuk') . '</span>';
} */

		echo c2c_get_custom('affiliates_amazonuk', '<span class="affliate">BUY FROM AMAZON UK<br><br>','</span>');

		echo c2c_get_custom('affiliates_yesasia', '<span class="affliate">BUY FROM YESASIA<br><br>','</span>');

		echo c2c_get_custom('whatsthat', '<span class="whatsthat">','</span>');

		echo c2c_get_custom('topten', '<span class="topten">','</span>');
		
	};

};

/* Register additional sidebar to be used IN post content */

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Content widget',
		'id' => 'content-widgets',
		'before_widget' => '<div id="%1$s" class="widget %2$s content-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

/* Call Sidebar with a Shortcode */

function content_widget_sc( $atts ) {
    ob_start();
    dynamic_sidebar('content-widgets');
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}
add_shortcode( 'content-widget', 'content_widget_sc' );

/**
 * Add Custom Avatar Field
 * @author Bill Erickson
 * @link http://www.billerickson.net/wordpress-custom-avatar/
 *
 * @param object $user
 */
function be_custom_avatar_field( $user ) { ?>
	<h3>Custom Avatar</h3>
	 
	<table>
	<tr>
	<th><label for="be_custom_avatar">Custom Avatar URL:</label></th>
	<td>
	<input type="text" name="be_custom_avatar" id="be_custom_avatar" value="<?php echo esc_attr( get_the_author_meta( 'be_custom_avatar', $user->ID ) ); ?>" /><br />
	<span>Type in the URL of the image you'd like to use as your avatar. This will override your default Gravatar, or show up if you don't have a Gravatar. <br /><strong>Image should be 100x100 pixels.</strong></span>
	</td>
	</tr>
	</table>
	<?php 
}
add_action( 'show_user_profile', 'be_custom_avatar_field' );
add_action( 'edit_user_profile', 'be_custom_avatar_field' );

/**
 * Save Custom Avatar Field
 * @author Bill Erickson
 * @link http://www.billerickson.net/wordpress-custom-avatar/
 *
 * @param int $user_id
 */
function be_save_custom_avatar_field( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
		update_usermeta( $user_id, 'be_custom_avatar', $_POST['be_custom_avatar'] );
}
add_action( 'personal_options_update', 'be_save_custom_avatar_field' );
add_action( 'edit_user_profile_update', 'be_save_custom_avatar_field' );

/**
 * Use Custom Avatar if Provided
 * @author Bill Erickson
 * @link http://www.billerickson.net/wordpress-custom-avatar/
 *
 */
function be_gravatar_filter($avatar, $id_or_email, $size, $default, $alt) {
	
	// If provided an email and it doesn't exist as WP user, return avatar since there can't be a custom avatar
	$email = is_object( $id_or_email ) ? $id_or_email->comment_author_email : $id_or_email;
	if( is_email( $email ) && ! email_exists( $email ) )
		return $avatar;
	
	$custom_avatar = get_the_author_meta('be_custom_avatar');
	if ($custom_avatar) 
		$return = '<img src="'.$custom_avatar.'" width="'.$size.'" height="'.$size.'" alt="'.$alt.'" />';
	elseif ($avatar) 
		$return = $avatar;
	else 
		$return = '<img src="'.$default.'" width="'.$size.'" height="'.$size.'" alt="'.$alt.'" />';

	return $return;
}
add_filter('get_avatar', 'be_gravatar_filter', 10, 5);

// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

}

// hook in late to make sure the parent theme's registration 
// has fired so you can undo it. Otherwise the parent will simply
// enqueue its script anyway.
add_action('wp_enqueue_scripts', 'ryu_script_fix', 100);
function ryu_script_fix()
{
    wp_dequeue_script('ryu-theme');
    wp_enqueue_script('new-ryu-theme', get_stylesheet_directory_uri().'/js/new-ryu.js', ( 'jquery' ), '20150718', true);
}

// SNAP
// Increased http request timeout from default 5 to 10 for wordpress, used by SNAP too.
add_filter('http_request_timeout', function(){return 10;});

// function social_on_feed($content) {  
//     if(is_feed()) {  
//         $post_id = get_the_ID();  
//         $output .= '' . get_post_meta($post_id, "SocialTW", true) . '<br><br>';  
//         $content = $output.$content;  
//     }  
//     return $content;  
// }  
// add_filter('the_content','social_on_feed');

?>