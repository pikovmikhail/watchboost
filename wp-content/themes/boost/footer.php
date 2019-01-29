<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boost_Normal
 */

?>

	</div><!-- #content -->

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'boost' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'boost' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'boost' ), 'boost', '<a href="http://Moyogeorge.com">Moyo George</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<footer class="footer">
		<div class="row justify-content-center">
			<div class="col-3 text-center">
				<i class="fa fa-google-plus" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
			</div>
			<div class="col-3 text-center">
				<p class="bold montserratFont primary_orange_text">© 2017 Overwatch Boost Pro. All Rights Reserved</p>
			</div>
			<div class="col-3 text-center">
				<a class="bold montserratFont secondary_white_text" href="http://overwatchboostpro.edu/terms-of-service/">Terms Of Service</a>
			</div>
		</div>
	</footer>


</div><!-- #page -->
<script src="https://use.fontawesome.com/f01dd32311.js"></script>
<?php wp_footer(); ?>

</body>
</html>
