<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oscar Batlle
 */

?>

<footer class="row blue darken-4" role="footeringo">
	<div class="container">
		<div class="row pt-l--s pb-l--s pl-m--s pr-m--s">
			<div class="col s12 m4">
				<div class="row">
					<a  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="brand-logo"><img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/logo-white.svg" width="212"></a>
					<p class="white-text mt-m--s"> © 2016, ORB LLC. All rights reserved.</p>
					<p> <a href="/terms-of-service" class="white-text">Terms of Service</a> | <a href="/privacy-policy" class="white-text">Privacy Policy</a></p>
				</div>


			</div>
			<div class="col s12 m2 mt-m--s mt-f--m">
				<p class="h4 white-text"> Helpful Tips </p>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-1', 'menu_id' => 'footer-menu' ) ); ?>
			</div>
			<div class="col s12 m2">
				<p class="h4 white-text"> Helpful Tips </p>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-b', 'menu_id' => 'footer-menu' ) ); ?>
			</div>
			<div class="col m3 mt-m--s mt-f--m">
				<div class="row ">
					<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/contactbubble.svg" width="120">

					<p class="white-text">199 E Flagler ST #214 Miami FL 33131</p>
					<p class="white-text h3"><i class="material-icons">phone</i> (866) 930-3205 </p>
					<p class="no-fluff white-text"><strong>Mon-Fri, 10am - 6pm EDT</strong></p>
				</div>
			</div>
		</div>
		
	</div>
</footer>





<!-- endinject -->

<?php wp_footer(); ?>


</body>
</html>
