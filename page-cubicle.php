<?php
/*
    Template Name: Cubicle
*/

get_header();

$params = $_SERVER['QUERY_STRING'];
?>

<nav class="black mininav">
   <div class="container">
      <div class="nav-wrapper">
         <a href="/" class="brand-logo"><img class="image-tiny" src="<?php echo get_template_directory_uri();?>/assets/img/logo-small.png" height="40"></a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
         <ul class="right hide-on-med-and-down">
           <?php
            wp_nav_menu( array(
               'menu' => 'home-menu',
               'theme_location'=>'home-menu',
               'menu_class' => 'red-links',
               'walker' => new wp_materialize_navwalker()
            ));
            ?>
         </ul>
      </div>
   </div>
</nav>

<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<div class="row page-hero" style="background-image:url(<?php echo $thumb_url; ?>);">

</div>
<div class="row">
   <div class="container">

      <div class="row mt-m--s">

         <div class="col m8 offset-m2 mt-m--s mt-f--m pb-l--s">

            <div class="row glitch-transition">
               <?php
                  $btpgid=get_queried_object_id();
                  $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  $args = array( 'posts_per_page' => 5, 'author__in'=> array(3),
                  'paged' => $paged,'post_type' => 'post' );
                      $postslist = new WP_Query( $args );

                   if ( $postslist->have_posts() ) :
                       while ( $postslist->have_posts() ) : $postslist->the_post();
               ?>
                  <div class="row pa-s--s grey lighten-5 mt-s--s">
                     <?php
                        $titlez = get_the_title();
                        $sanititle = strtolower(str_replace(' ', '-', $titlez));
                     ?>
                     <h4 class="black-text ">
                        <a class="tw-ultrabold black-text h2" href="<?php echo $sanititle; ?>" data-navigo >
                           <?php the_title(); ?>
                        </a>
                     </h4>
                     <div class="row">

                        <p class="no-fluff"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes </p>
                     </div>
                        <a class="tw-ultrabold black-text h2" href="<?php echo $sanititle; ?>" data-navigo >
                           <div class="post_thumb--b mt-s--s" style="background-image:url(<?php the_field('main_image');?>);">
                           </div>
                        </a>
                        <div class="row mt-s--s">
                           <?php the_excerpt();  ?>
                        </div>
                  </div>


                  <div class="cd-modal" id="<?php echo $sanititle; ?>">
                  	<div class="modal-content">
                  		<h2><?php the_title(); ?></h2>
                        <div class="post_thumb--b mt-s--s" style="background-image:url(<?php the_field('main_image');?>);">
                        </div>
                  		<?php the_content();  ?>
                  	</div> <!-- .modal-content -->

                  	<a href="#0" class="modal-close">Close</a>
                  </div> <!-- .cd-modal -->

               <?php
                  endwhile;
                  next_posts_link( 'Older Entries', $postslist->max_num_pages );
                  previous_posts_link( 'Next Entries &raquo;' );
                     wp_reset_postdata();
                  endif;
               ?>
               <div class="cd-transition-layer" data-frame="25">
               	<div class="bg-layer"></div>
               </div> <!-- .cd-transition-layer -->
            </div>

         </div>
      </div>
   </div>
</div>








<?php get_footer(); ?>
