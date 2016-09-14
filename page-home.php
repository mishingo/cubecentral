<?php
/*
    Template Name: Home Page
*/

get_header();

$params = $_SERVER['QUERY_STRING'];
?>

<div class="hero pb-l--s">
   <div class="container">
      <nav>
         <div class="nav-wrapper pll prl">
            <a href="{{ url('/') }}" class="brand-logo"><img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/logo-white.svg" width="212"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a  href="#"><i class="material-icons left">phone</i>(800) 393-9030</a></li>
              <li><a href="/dashboard">Sign in</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
              <li><a href="/job/create" class="waves-effect waves-red btn-white">Post a Job</a></li>
            </ul>
         </div>
      </nav>

      <div class="row mt-m--s">
         <div class="row center-align">
            <h1 class="white-text tw-ultrabold">Create a Legal Document in Minutes</h1>
            <h4 class="yellow-text"> Download and print your legal documents in minutes</h4>
         </div>
         <div class="row mt-l--s mb-l--m">
            <div class="col s12 m4 pl-m--s pr-m--s mt-m--s mt-f--m">
              	<div class="white pa-s--s pb-m--s pt-m--s br-s z-depth-2 center-align">
                	<div class="row center-align">
                  	<h4 class="blue-text text-darken-4"> Lease Agreement</h4>
                	</div>
                	<img class="mt-m--s" src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/house.svg" width="120" height="100" alt="">
                	<div class="row mt-s--s">
                  	<p>Contracted Legal agreements, Rental agreements, Residental </p>
                	</div>
                	<div class="row mt-s--s ">
                  	<a class="waves-effect waves-light btn blue darken-3 white-text">Start Now</a>
                	</div>
              	</div>
            </div>
            <div class="col s12 m4 pl-m--s pr-m--s mt-m--s mt-f--m">
              	<div class="white pa-s--s pb-m--s pt-m--s br-s z-depth-2 center-align">
                	<div class="row center-align">
                  	<h4 class="blue-text text-darken-4"> Lease Agreement</h4>
                	</div>
                	<img class="mt-m--s" src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/billofsale.svg" width="68" height="100" alt="">
                	<div class="row mt-s--s">
                  	<p>Contracted Legal agreements, Rental agreements, Residental </p>
                	</div>
                	<div class="row mt-s--s ">
                  	<a class="waves-effect waves-light btn blue darken-3 white-text">Start Now</a>
                	</div>
              	</div>
            </div>
            <div class="col s12 m4 pl-m--s pr-m--s mt-m--s mt-f--m">
              	<div class="white pa-s--s pb-m--s pt-m--s br-s z-depth-2 center-align">
                	<div class="row center-align">
                  	<h4 class="blue-text text-darken-4">Non-Disclosure Agreement</h4>
                	</div>
                	<img class="mt-m--s" src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/handshake.svg" width="155" height="100" alt="">
                	<div class="row mt-s--s">
                  	<p>Contracted Legal agreements, Rental agreements, Residental </p>
                	</div>
                	<div class="row mt-s--s ">
                  	<a href="/nda" class="waves-effect waves-light btn blue darken-3 white-text">Start Now</a>
                	</div>
              	</div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row grey lighten-3 pa-s--s ">
   <div class="container">
      <div class="row center-align">
         <img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/seenon.png" width="1100"/>
      </div>
   </div>
</div>
<div class="row white hero2">
	<div class="container">
		<div class="row pt-m--s pb-l--s">
			<div class="col s12 m6 pa-s--s  pa-l--m ">
				<h2 class="blue-text text-darken-2 thin"> The easiest way to make your legal forms </h2>
				<h4 class="light mt-m--m">Yo... it's appointment only! Jeez, you look like... Lex Luthor. I got two dudes turned into raspberry slushy and flushed down my toilet.</h4>
				<div class="row center-align mt-l--s">
					<a class="waves-effect waves-light btn-large btn-blue-grad  white-text">Find out more</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row blue darken-2 center-align pr-m--s pl-m--s">
	<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/savead.svg" width="900">
</div>
<div class="row white hero-cabinet">
	<div class="container">
		<div class="row pt-m--s pb-l--s">
			<div class="col s12 m12 l6 pa-s--s  pa-l--m right white-text center-align">
				<h2 class="tw-ultrabold"> Attorney Crafted Legal Forms you can trust</h2>
				<h4 class="mt-m--m">With our quick easy steps,  you will have your document ready for your client in a breeze. </h4>
				<div class="row center-align mt-l--s">
					<a class="waves-effect waves-light btn-large amber  blue-text text-darken-3">View our Legal Forms</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row white hero3">
	<div class="container">
		<div class="row pt-m--s pb-l--s">
			<div class="col s12 m12 l6 pa-s--s  pa-l--m right">
				<h2 class="thin blue-text text-darken-2"> Stop Hiring Attorneys to do your easy work!</h2>
				<h4 class="mt-m--m light">Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you! </h4>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="container pa-m--s">
		<div class="row center-align">
			<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/legalguarded.svg">
			<h4 class="h1">We make sure you're protected!</h4>
			<p class="h4">We have a dedicated team to make sure your documents are 100% full proof and tested to be ready to use for anyone.  <p>
		</div>
	</div>
</div>
<div class="row white">
	<div class="container">
		<div class="row pa-m--m pt-xl--m  pb-l--s pb-xl--m pa-s--s">
			<div class="col s12 m7">
				<h2 class="thin blue-text text-darken-2"> Save Money for your Business</h2>
				<p>Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you!</p>
			</div>
			<div class="col s12 m5 center-align mt-m--s mt-f--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/piggy.png" width="200">
			</div>
		</div>
	</div>
</div>
<div class="row white hero4">
	<div class="container">
		<div class="row pt-m--s pb-l--s">
			<div class="col s12 m12 l6 pa-s--s  pa-l--m right">
				<h2 class="thin blue-text text-darken-2"> Stop Hiring Attorneys to do your easy work!</h2>
				<h4 class="mt-m--m light">Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you! </h4>
			</div>
		</div>
	</div>
</div>
<div class="row white">
	<div class="container pa-m--s pt-l--m pb-m--m">
		<div class="row center-align">
			<h3 class="h2"> Features Built with You in Mind </h3>
		</div>
		<div class="row mt-l--s mb-l--s">
			<div class="col s12 m4 pl-s--s pl-m--m pr-s--s pl-m--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/i-stack.svg" width="30">
				<h4> Document Templates </h4>
				<p>Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you!</p>
			</div>
			<div class="col s12 m4 pl-s--s pl-m--m pr-s--s pr-m--m mt-m--s mt-f--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/i-hand.svg" width="30">
				<h4> Document Templates </h4>
				<p>Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you!</p>
			</div>
			<div class="col s12 m4 pl-s--s pl-m--m pr-s--s pr-m--m mt-m--s mt-f--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/i-mobile.svg" width="30">
				<h4> Document Templates </h4>
				<p>Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you!</p>
			</div>
		</div>
		<div class="row mt-l--m ">
			<div class="col s12 m4 pl-s--s pl-m--m pr-s--s pr-m--m mt-m--s mt-f--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/i-clock.svg" width="30">
				<h4> Document Templates </h4>
				<p>Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you!</p>
			</div>
			<div class="col s12 m4 pl-s--s pl-m--m pr-s--s pr-m--m mt-m--s mt-f--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/i-value.svg" width="30">
				<h4> Document Templates </h4>
				<p>Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you!</p>
			</div>
			<div class="col s12 m4 pl-s--s pl-m--m pr-s--s pr-m--m mt-m--s mt-f--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/i-print.svg" width="30">
				<h4> Document Templates </h4>
				<p>Easy and Affordable to fit what you are looking for. Don’t go chasing for a attorny that might not even be trust worthy. Get connected with template legal and we do the rest for you!</p>
			</div>
		</div>
		<div class="row mt-xl--s center-align pb-l--s">
			<a class="waves-effect waves-light btn-large btn-blue-grad  white-text">Get Started Now</a>
		</div>
	</div>
</div>
<div class="row white pa-m--s pb-xl--s">
	<div class="container">
		<div class="row center-align">
			<h3 class="h2"> What our customers are saying </h3>
		</div>
		<div class="row">
			<div class="col s12 m4 pa-m--s">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
					  <img class="activator" src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/testimonial-paige.jpg">
					</div>
					<div class="card-content">
					  <span class="card-title activator grey-text text-darken-4">Really Easy for me  :)<i class="material-icons right">more_vert</i></span>
					  <p>It was always too expensive for me to get legal documents from a lawyer, now I can easily...</p>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					  <p>It was always too expensive for me to get legal documents from a lawyer, now I can easily make my documents and save them all in one place.</p>
					  	<p>Paige Lawrence<p>
						<p> Florist </p>
					</div>
				</div>
			</div>
			<div class="col s12 m4 pa-m--s">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
					  <img class="activator" src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/testimonial-john.jpg">
					</div>
					<div class="card-content">
					  <span class="h5 card-title activator grey-text text-darken-4">Affordable! <i class="material-icons right">more_vert</i></span>
					  <p><a href="#">This is a link</a></p>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					  <p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4 pa-m--s">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
					  <img class="activator" src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/testimonial-barry.jpg">
					</div>
					<div class="card-content">
					  <span class="card-title activator grey-text text-darken-4">Very Simple to use<i class="material-icons right">more_vert</i></span>
					  <p><a href="#">This is a link</a></p>
					</div>
					<div class="card-reveal">
					  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					  <p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>
