<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Oscar Batlle
 */

get_header(); 
get_template_part('inc/navbar','page'); 
?>
<div class="row plm prm pbm pao--m">
    <div class="container plm prm background-white">
        <section class="pal ta-center">
            <h1 class="page-title">Sorry! That page can't be found.</h1>
            <div class=" background-primary background-triangle-blue ptm pbm pls prs ta-center tc-white br-m sal mtm col-5 mhc">
                <div class="row">
                  <h2 class="tw-ultrabold t-shadow">Start your Resume Today!</h2>
                </div>
                <div class="row mtm">
                  <img src="http://s3.amazonaws.com/localstaffing-resources/orb/img/resume.svg">
                </div>
                <div class="row mtm">
                  <a href="https://app.onlineresumebuilders.com/basicinfo?utm_source=sidebar" class="btn-a-f btn-yellow-flat pas h3 br-m">Start Now!</a>
                </div>
            </div>
        </section>

        
        <!-- end of div with class container -->
    </div>
</div>


<?php get_footer(); ?>
