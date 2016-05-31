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

	</div><!-- #content -->

	<footer id="colophon" class="background-black" role="footeringo">
		<div class="container pal">
			<div class="row">
				<div class="col-1of4 mtm--m">
					<div class="row">
						<p class="h4 tc-white"> Helpful Tips </p>
					</div>
					<div class="row mts">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-1', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</div>
				<div class="col-1of4 mtm--m">
					<div class="row">
						<p class="h4 tc-white"> Resume Tools</p>
					</div>
					<div class="row">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-2', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</div>
				<div class="col-1of4 mtm--m">
					<div class="row">
						<p class="h4 tc-white"> Help & Support</p>
					</div>
					<div class="row mts">
						<ul>
							<li><a href="">Customer Service </a></li>
							<li><a href="">Forgot Password</a></li>
							<li><a href="">Contact Us</a></li> 
						</ul>
					</div>
				</div>
				<div class="col-1of4 mtm--m">
					<div class="row">
						<p class="h4 tc-white">About Us</p>
					</div>
					<div class="row mts">
						<ul>
							<li><a href="">Terms of Service </a></li>
							<li><a href="">Privacy Policy </a></li>
							<li> </li> 
						</ul>
					</div>
				</div>
			</div>
			<div class="row mtl">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                	<img src="https://s3.amazonaws.com/localstaffing-resources/orb/img/logo-small.svg">
            	</a>
			</div>
			<div class="row mtm">
				<p class="tc-white ts-small tw-normal"> © 2016, ORB LLC. All rights reserved. </p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- endinject -->

<?php wp_footer(); ?>

</body>
</html>
