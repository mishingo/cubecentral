<?php
/*
    Template Name: How-To
*/

get_header();

$params = $_SERVER['QUERY_STRING'];
get_template_part('inc/navbar','page');
?>

<div class="row">
   <div class="container">

      <div class="row">
         <div class="col m8 mt-f--m">

            <div class="row">
               <?php
                  $btpgid=get_queried_object_id();
                  $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  $args = array( 'posts_per_page' => 5,
                  'paged' => $paged,'post_type' => 'post', 'cat' => '4' );
                      $postslist = new WP_Query( $args );

                   if ( $postslist->have_posts() ) :
                       while ( $postslist->have_posts() ) : $postslist->the_post();
               ?>

               <div class="row white  pa-s--m pl-m--m pr-m--m white-text mt-m--s">
                  <?php
                     $author_id=$post->post_author;
                  ?>
                     <div class="row pa-s--s">
                        <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
                        </div>
                        <p class="black-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></p>
                        <p class="no-fluff black-text"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes  </p>
                     </div>
                     <div class="row">
                           <div class="post_thumb--b" style="background-image:url(<?php the_field('main_image');?>);">
                           </div>
                     </div>
                     <div class="row pa-s--s pl-m--s pr-m--s">
                           <h3><a class="green-text text-darken-2 tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                           <span class="black-text no-fluff"><?php the_excerpt(); ?> </span>
                     </div>
               </div>
               <?php endwhile; ?>


               <p class="btn mt-m--s green hard-white-text">
                  <?php next_posts_link( 'Older Entries', $postslist->max_num_pages );
                  previous_posts_link( 'Next Entries &raquo;' );
                     wp_reset_postdata();
                  endif;
                  ?>

               </p>

            </div>

         </div>
         <div class="col s12 m4  pa-m--m">
            word
         </div>
      </div>
   </div>
</div>







<?php get_template_part('inc/popunder','page'); ?>
<?php get_footer(); ?>
