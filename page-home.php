<?php
/*
    Template Name: Home Page
*/

get_header(); 
?>


<?php /* Here you include the get_template_part('templates/content', 'NameOfYourTemplate'); */?>
<div class="full-height ng-scope" ui-view=""><form ng-submit="signup()" name="signupForm" class="full-height ng-pristine ng-valid ng-scope">
    <!-- our nested state views will be injected here -->
    <!-- uiView: undefined --><div class="ui-view full-height ng-scope"><section class="row sec-1 ptm ng-scope">
	<nav class="row pbm plm prm">
	  	<div class="container">
	  		<div class="row bottom dn-m">
	  			<div class="col-3of12">
	  				<p class="ta-center mrm sal tc-white background-primary btrr-m btlr-m tw-ultrabold paxs">Need help? (888) 974-2891</p>
	  			
	  			</div>
	  		</div>
	    	<div class="row pas dont-respond">
           		<div class="col-6of12">
             		<img src="https://s3.amazonaws.com/localstaffing-resources/orb/img/logo-white.svg">
           		</div>
           		<div class="col-4of12  ">
            		<div class="table">
						<!--<div class="table-cell-f dn-m-tcell">
							<a ui-sref="faq" class="tw-normal">FAQ</a>
						</div>-->
						<div class="table-cell-f dn-m-tcell">
							<?php wp_nav_menu( array( 'theme_location' => 'home-menu', 'menu_id' => 'home-menu' ) ); ?>
						</div>
						<div class="table-cell-f">
							<a href="https://app.onlineresumebuilders.com/login" class="tw-ultrabold tc-white"><li class="pas plm prm ta-center border-white btn-a-f br-30 hover-yellow"> Login</li></a>
						</div>
            		</div>
           		</div>   
	    	</div>
	  	</div>
	</nav>
	<div class="row mts">
		<div class="container">

			<div class="row ta-center tc-white pls prs">
				<h2 class="tw-light h1 t-shadow">Build your perfect <strong>resume!</strong></h2>
				<h4 class="tw-bold tc-white"> It only takes 5 minutes.</h4>
				<h4 class="tw-light mtm">We make it fast and easy to create the powerful, professional resume, hiring managers are looking for. </h4>

			
				<!-- ngIf: mobilecheck() -->
				<!-- ngIf: !mobilecheck() --><div class="row mtl ng-scope" >
					<a class="btn-a-f-round mhc col-4 pam-1 ta-center h3 btn-yellow-grad" href="https://app.onlineresumebuilders.com/basicinfo"> Create Resume Now </a>
				</div><!-- end ngIf: !mobilecheck() -->

			</div>
			<div class="col-10 mhc prm plm mtl">
				<!-- ngIf: !mobilecheck() --><div class="row sec-hero  dn-m" >
				</div><!-- end ngIf: !mobilecheck() -->
			</div>
		</div>
	</div>
</section>

<section class="row sec-2 pbxl ng-scope">
	
	<div class="container ptxl plm prm pbl ">
		<div class="row ta-center tc-white">
			<h1> Online Resume Builders </h1>
			<h4 class="tw-normal mts"> We have a team of experts that have completed a research study to identify the key factors for an effective resume! </h4>
		</div>
		<div class="row pam ptl ta-center tc-white">
			<h2> How It's Done </h2>
		</div>
		<div class="row mts tc-white">
			<div class="col-1of3 ta-center">
				<img src="https://s3.amazonaws.com/localstaffing-resources/orb/img/sec2-choose.svg">
				<h4 class="tw-normal pts"> Choose a Template </h4>
			</div>
			<div class="col-1of3 ta-center mtm--m">
				<img src="https://s3.amazonaws.com/localstaffing-resources/orb/img/sec2-build.svg">
				<h4 class="tw-normal ptm mtxs"> Build a Resume by answering questions </h4>
			</div>
			<div class="col-1of3 ta-center mtm--m">
				<img class="ptm" src="https://s3.amazonaws.com/localstaffing-resources/orb/img/sec2-hired.svg">
				<h4 class="tw-normal mtl ptxs"> Get Hired! </h4>
			</div>
		</div>
	</div>
	
</section>
<section class="row sec-3 ng-scope">
	<div class="container plm prm ptl pbxl">
		<div class="col-7of12 ta-center">
			<img src="https://s3.amazonaws.com/localstaffing-resources/orb/img/sec3.svg">
		</div>
		<div class="col-5of12 mtm--m pas pbl">
			<h3 class=" tw-bold">Your Online Resume available any time and on any device.</h3>
			<p class="mtm">With Online Resume Builder, you no longer have to worry about spending hours creating a professional looking resume! We have designed the easiest resume building site on the web. In a matter of minutes, your resume will be automatically formatted and ready to go to prospective employers at the click of your fingertips.</p>
			<p class="mts">Create your resume with ease. At Online Resume Builder, we don't just get the job done for you, we practically do it for you! Try us today.</p>
		</div>
	</div>
</section>
<section class="row sec-3 ng-scope">
	<div class="container ptl plm prm paxl">
		<div class="row ta-center pam col-8 mhc">
			<h2 class="tw-light"> We Do All The Work </h2>
			<p class="">We really do make it easy. Simply answer our question and we’ll populate your resume
 with the right look, and in the right place. </p>
			<a  class="round-btn tw-ultrabold  pas plm prm background-tertiary br-30 " href="https://app.onlineresumebuilders.com">Get Started</a>
		</div>
	</div>
</section> 

</div>
</form></div>

<?php get_footer(); ?>

