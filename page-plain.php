<?php
/*
    Template Name: Plain-Template
*/
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();
get_template_part('inc/navbar','page');
?>

<!-- MAIN CONTENT -->

<div class="row plm prm pbm pao--m">
   <div class="row">
      <?php if (has_post_thumbnail())
      { ?>
         <div class="table">
            <div class="row mts table-cell-f article-hero" style="background-image: url(<?php echo $thumbnail_url; ?>);">
               <div class="ta-center tw-ultrabold tc-white pas plm prm br-m background-secondary col-7 mhc bbrr-m sal ta-center--m">
                  <h1 class="tw-ultrabold ta-center t-shadow-dark"><?php the_title(); ?></h1>
               </div>
            </div>
         </div>
          <!-- end of section with class feature-image feature-image-default -->
      <?php }?>
   </div>
   <div class="row">
      <div class="container plm prm ">
         <div class="col-9of12 background-white  ptm pbxl">
            <div class="row plm prm">
               <?php custom_breadcrumbs(); ?>
            </div>

            <article class="mts plm prm ptm">
               <div class="row" id="primary">
                  <div class="col-sm-12">
                     <div class="main-content">
                        <?php while (have_posts()) : the_post(); ?>
                           <span class="h2"><?php the_title(); ?></span>
                           <?php the_content(); ?>
                        <?php endwhile; ?>
                     </div>
                  </div>
               </div>
            </article>

         </div>
         <div class="col-3of12 dn-m">
            <div class=" background-primary background-triangle-blue ptm pbm pls prs ta-center tc-white br-m sal mtm">
               <div class="row">
                  <h2 class="tw-ultrabold t-shadow">Start your Resume Today!</h2>
               </div>
               <div class="row mtm">
                  <img src="https://s3.amazonaws.com/localstaffing-resources/orb/img/resume.svg">
               </div>
               <div class="row mtm">
                  <a href="https://app.onlineresumebuilders.com/basicinfo?utm_source=sidebar" class="btn-a-f btn-yellow-flat pas h3 br-m">Start Now!</a>
               </div>
            </div>
         </div>
      </div>
   </div>

<?php get_footer(); ?>
