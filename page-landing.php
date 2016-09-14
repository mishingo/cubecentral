<?php
/*
    Template Name: Landing-Template
*/
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();
get_template_part('inc/navbar','page');
?>

<!-- MAIN CONTENT -->
<div class="row white pa-m--s pb-l--s">
   <div class="container">
      <div class="row">
         <div class="col s12 m7 pr-m--s">
            <div class="row">
               <h1 class="thin blue-text text-darken-3"><?php the_field('landing_page_cta_title'); ?></h1>
               <p class="h4 light"><?php the_field('landing_page_cta_subtext'); ?></p>
            </div>
            <div class="row mt-l--s">
               <div class="input-field col s12 m6 pl-m--s pr-s--s">
                   <select id="lp-state-select">
                     <option value="" disabled selected>Choose your state</option>
                     <option value="alabama" >Alabama</option>
                     <option value="alaska" >Alaska</option>
                     <option value="Arizona" >Arizona</option>
                     <option value="Arkansas" >Arkansas</option>
                     <option value="California" >California</option>
                     <option value="Colorado" >Colorado</option>
                     <option value="Connecticut" >Connecticut</option>
                     <option value="District of Columbia" >District of Columbia</option>
                     <option value="Delaware" >Delaware</option>
                     <option value="Florida" >Florida</option>
                     <option value="Georgia" >Georgia</option>
                     <option value="Hawaii" >Hawaii</option>
                     <option value="Idaho" >Idaho</option>
                     <option value="Illinois" >Illinois</option>
                     <option value="Indiana" >Indiana</option>
                     <option value="Iowa" >Iowa</option>
                     <option value="Kansas" >Kansas</option>
                     <option value="Kentucky" >Kentucky</option>
                     <option value="Louisiana" >Louisiana</option>
                     <option value="Maine" >Maine</option>
                     <option value="Maryland" >Maryland</option>
                     <option value="Massachusetts" >Massachusetts</option>
                     <option value="Michigan" >Michigan</option>
                     <option value="Minnesota" >Minnesota</option>
                     <option value="Mississippi" >Mississippi</option>
                     <option value="Missouri" >Missouri</option>
                     <option value="Montana" >Montana</option>
                     <option value="Nebraska" >Nebraska</option>
                     <option value="Nevada" >Nevada</option>
                     <option value="New Hampshire" >New Hampshire</option>
                     <option value="New Jersey" >New Jersey</option>
                     <option value="New Mexico" >New Mexico</option>
                     <option value="New York" >New York</option>
                     <option value="North Carolina" >North Carolina</option>
                     <option value="North Dakota" >North Dakota</option>
                     <option value="Ohio" >Ohio</option>
                     <option value="Oklahoma" >Oklahoma</option>
                     <option value="Oregon" >Oregon</option>
                     <option value="Pennsylvania" >Pennsylvania</option>
                     <option value="Rhode Island" >Rhode Island</option>
                     <option value="South Carolina" >South Carolina</option>
                     <option value="South Dakota" >South Dakota</option>
                     <option value="Tennessee" >Tennessee</option>
                     <option value="Texas" >Texas</option>
                     <option value="Utah" >Utah</option>
                     <option value="Vermont" >Vermont</option>
                     <option value="Virginia" >Virginia</option>
                     <option value="Washington" >Washington</option>
                     <option value="West Virginia" >West Virginia</option>
                     <option value="Wisconsin" >Wisconsin</option>
                     <option value="Wyoming" >Wyoming</option>
                   </select>
                   <label>Select Your State:</label>
               </div>
               <div class="col s12 m6 pl-m--s pr-s--s">
                  <a id="lp-state-action" class="btn-large btn-blue-grad white-text" href="<?php the_field('landing_page_cta_link'); ?>">Create Document</a>
               </div>
            </div>
         </div>
         <div class="col s12 m5 pa-m--s center-align">
            <img src="<?php the_field('landing_page_cta_image'); ?>">
         </div>
      </div>
   </div>
</div>

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

      </div>
   </div>

<?php get_footer(); ?>
