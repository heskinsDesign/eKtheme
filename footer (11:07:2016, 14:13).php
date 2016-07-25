<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Ryu
 */
?>

	</div><!-- #main -->

	<div class="light-grey">
	
	<div class="footer-ads">
	
		<center><?php echo adrotate_group(10); ?></center>

	</div>

	<footer id="colophon" class="site-footer " role="contentinfo">
		<div class="site-info wrap">
			<?php do_action( 'ryu_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'ryu' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'ryu' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Site based on Ryu Theme by <a href="http://theme.wordpress.com/" rel="designer">WordPress.com</a>
			<br /><br />All articles, reviews, logos and graphics on this site © Andrew Heskins 2002 - <?php echo date('Y'); ?>, except where noted. Site created by <a href="http://www.andrewheskinsdesign.co.uk" target="_blank">Andrew Heskins Design</a>. Links contained on this site are for recommendation only.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
	</div>
	
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
 
var $j = jQuery.noConflict();

$j(document).ready(function(){

	if ( $j(window).width() >= 500 ) { 

	    $j('body').on('touchstart click', '#clickablebox', function(){
		     window.location=$j(this).find("a").attr("href");return false;
   	  	});
	}
	else {
	    $j('body').on('taphold click', '#clickablebox', function(){
		     window.location=$j(this).find("a").attr("href");return false;
   	  	});
	} 
});

</script>	

</body>
</html>