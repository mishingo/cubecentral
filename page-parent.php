<?php
/*
    Template Name: Parent-Template
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
         <div class="col-9of12 background-white  ptm pbl">
            <div class="row plm prm">
               <?php custom_breadcrumbs(); ?>
            </div>

            <article class="mts plm prm ">
               <div class="row" id="primary">
                  <div class="col-sm-12">
                     <div class="main-content">
                        <?php while (have_posts()) : the_post(); ?>
                           <?php if (!has_post_thumbnail()){ ?>
                           <h1 class="h2"><?php the_title(); ?></h1>
                           <?php }?>
                           <?php the_content(); ?>
                        <?php endwhile; ?>
                     </div>
                  </div>
               </div>
            </article>
            <div class="row plm prm ">

               <div class="row">
                  <?php $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' AND post_status = 'publish' ORDER BY menu_order", 'OBJECT');    ?>


                  <?php $numItems = count($child_pages);$index =0; ?>
                  <?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
                  <?php
                     //echo get_the_post_thumbnail($pageChild->ID, 'thumbnail');
                     $post_thumbnail_id = get_post_thumbnail_id($pageChild->ID);
                     $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                     //echo $post_thumbnail_url;
                  ?>

                     <?php if($index % 3 == 0) { ?>
                        <div class="row mtm">
                     <?php } ?>



                        <div class="col-4of12 mtm--m pull">
                           <div class="row sad br-m">
                              <div class="row background-secondary pas plm prm btrr-m btlr-m card-head">
                                 <div class="card-title  ">

                                       <a class=" tc-white tw-bold t-shadow" href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo $pageChild->post_title; ?></a>

                                 </div>
                                 <div class="card-circle">
                                    <a class=" tc-white tw-bold t-shadow" href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
                                     <div class="background-green sal card-circle-container" style="">
                                        <p class="circle-in-card tc-white"><i class="i-eye"></i> </p>
                                     </div>
                                    </a>
                                 </div>
                              </div>

                              <div class="row pam bbrr-m bblr-m background-white card-body">

                                    <p><?php echo $pageChild->post_excerpt; ?></p>
                                    <a href="<?php echo  get_permalink($pageChild->ID); ?>"><small>View More</small></a>

                              </div>

                           </div>
                        </div>

                  <?php
                     $index++;
                     if( $index != 0) {
                        if($index % 3 == 0 && $index != $numItems){
                           echo "</div>";
                        }
                     }
                     if($index === $numItems) {
                        echo "</div>";
                     }
                  ?>




                  <?php endforeach; endif;?>
               </div>
            </div>
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
