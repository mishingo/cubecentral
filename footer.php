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
						<?php wp_nav_menu( array( 'theme_location' => 'footer-1', 'menu_id' => 'footer-menu' ) ); ?>
					</div>
				</div>
				<div class="col-1of4 mtm--m">
					<div class="row">
						<p class="h4 tc-white"> Resume Tools</p>
					</div>
					<div class="row mts">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-b', 'menu_id' => 'footer-menu' ) ); ?>
					</div>
				</div>
				<div class="col-1of4 mtm--m pull">
					<div class="row">
						<p class="h4 tc-white"> Help & Support</p>
					</div>
					<div class="row mts" id="footer-menu">
						<ul>
							<li>(866) 930-3205</li>
							<li>199 E Flagler ST #214 Miami FL 33131</li>
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
				<p class="tc-white ts-small tw-normal"> © 2016, ORB LLC. All rights reserved. | <a href="/terms-of-service" class="tc-white">Terms of Service</a> | <a href="/privacy-policy" class="tc-white">Privacy Policy</a></p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- endinject -->

<?php wp_footer(); ?>




<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-54006220-12', 'auto');
</script>
<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-54006220-12']);
	_gaq.push(['_setDomainName', 'onlineresumebuilders.com']);
	_gaq.push(['_trackPageview']);
</script>

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script>
$( document ).ready(function() {
    //$( "#mobile-menu-bar" ).hide();
    $("#mobile-menu-action").click(function(){
    	$( "#mobile-menu-bar" ).slideToggle();
    });

    $("#plain-text-display").click(function(){
    	$( "#plain-text-sample" ).slideToggle();
    });
});
</script>

</body>
</html>
