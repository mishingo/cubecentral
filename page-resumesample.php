<?php
/*
    Template Name: Resume Sample Template
*/
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();
get_template_part('inc/navbar','page'); 
?>

<!-- MAIN CONTENT -->

<div class="row">
   <div class="row">
      <?php if (has_post_thumbnail()){ ?>     
      <div class="table">
         <div class="row mts table-cell-f article-hero" style="background-image: url(<?php echo $thumbnail_url; ?>);">
            <div class="ta-center tw-ultrabold tc-white pas plm prm br-m background-green col-7 mhc bbrr-m sal ta-center--m">
               <h1 class="tw-ultrabold ta-center t-shadow-dark"><?php the_title(); ?> Resume Sample</h1>
            </div>
         </div>
      </div>
            <!-- end of section with class feature-image feature-image-default -->
      <?php }?>
   </div>
   <div class="row">
      <div class="container">
         <div class="col-9of12 background-white  pam pbxl">
            <div class="row">
               <?php custom_breadcrumbs(); ?>
            </div>    
            <article class="mts">
               <div class="row" id="primary">
                  <div id="content" class="col-sm-12">
                     <section class="main-content mtm">
                        <?php while (have_posts()) : the_post(); ?>
                           <span class="h2"><?php the_title(); ?> Resume Sample</span>
                           <?php the_content(); ?>
                        <?php endwhile; ?>
                     </section>          <!-- end of section with class main-content -->
                  </div>
               </div>
               <?php if(get_field('resume_plain_text')){ ?>
               <div class="row">
                 <button id="plain-text-display" type="button" class="btn-a-f btn-blue-flat col-5 mhc tw-ultrabold paxs" > View Plain Text Resume 
                 </button>
               </div>
               <div class="row mtm" id="plain-text-sample" style="display:none;">
                  <?php the_field('resume_plain_text'); ?>
               </div>
               <?php } ?>
                        
               <div class="row mtm">
                  <h3> Check out our articles with tips to better your resume:</h3>
               </div>
                    <!-- end of div with class row -->
            </article>
            <div class="row">
               <div class="row mtm respond-half">
                  <?php $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".wp_get_post_parent_id( $post_ID )."    AND post_type = 'page' ORDER BY rand() LIMIT 8" , 'OBJECT');    ?>
                  <?php $i=0; ?>
                  <?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
                  <?php
                     //echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); 
                     $post_thumbnail_id = get_post_thumbnail_id($pageChild->ID);
                     $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                     //echo $post_thumbnail_url;                  
                  ?>
                  <?php if($i % 4 == 0) { ?> 
                     <div class="row mtxs">
                  <?php } ?>
                        <div class="child-thumb col-3of12 pull mtm--m" style="background-image:url(<?php echo  $post_thumbnail_url ?>)">
                           <div class="table-all">
                              <div class="table-cell-f ta-center">
                                 <div class="background-secondary pas">
                                    <a class="tc-white tw-bold t-shadow" href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo $pageChild->post_title; ?>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php $i++;  if( $i != 0 && $i % 4 == 0) { ?> 
                     </div>
                     <?php } ?>
                     <?php if ($i == $len - 1) { ?>
                        </div>
                     <?php } ?>
                     <?php endforeach; endif;?>
               </div>
            </div>
         </div>
      </div>
      <div class="col-3of12 dn-m plm pbl">
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