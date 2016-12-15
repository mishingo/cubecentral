<?php
/*
    Template Name: Home Page
*/

get_header();

$params = $_SERVER['QUERY_STRING'];
get_template_part('inc/navbar','page');
?>

<div id="home-page" class="row">
   <div class="container">
      <div class="row mt-m--s white-text">
         <?php
            $posts = get_posts(array(
               'posts_per_page'	=> 3,
               'post_type'			=> 'post',
               'meta_key'		=> 'featured_post',
               'meta_value'	=> True
            ));

         if( $posts ): ?>
         <?php
            $heroids = array();
            foreach( $posts as $post ):
               setup_postdata( $post );

               $heroid = get_the_id();
               array_push($heroids, $heroid);
         ?>


               <div class="col s12 m12 l4 pa-s--m pa-f--s black-text">
                  <div class="row white pa-s--s">
                     <?php
                        $author_id=$post->post_author;
                     ?>
                     <div class="row">
                        <?php $value = get_field( "youtube" );
                           if( $value ) {
                              ?>
                              <a href="<?php the_permalink(); ?>">
                                 <div class="video-container">
                                    <?php echo $value; ?>
                                 </div>
                              </a>
                              <?php
                           } else {
                              $main_image = get_field( "main_image" );
                              ?>
                              <a href="<?php the_permalink(); ?>">
                                 <div class="" style="height:222px;width:100%;background-size:cover;background-position:center center;background-image:url(<?php echo $main_image;?>);">
                                 </div>
                              </a>
                              <?php
                           }
                        ?>
                     </div>
                     <div class="row mt-s--s mb-xs--s">
                        <a class="h3 green-text text-darken-3 tw-ultrabold mt-xs--s" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <h4 class="mt-s--s tw-ultrabold"><?php the_field('byline');?></h4>
                     </div>
                  </div>
               </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
         <?php endif; ?>
      </div>

   </div>
</div>

<div class="row">
   <div class="container ">
      <div class="row mt-m--s">
         <div class="col s12 m4  pr-m--m">
            <?php get_template_part('inc/home-left-side','page'); ?>
         </div>
         <div class="col m8 mt-m--s mt-f--m">

            <div class="row">

               <?php
                  $posts = get_posts(array(
                     'posts_per_page'	=> 22,
                     'post_type'			=> 'post'
                  ));

               if( $posts ): ?>
               <?php
                  foreach( $posts as $post ):
                     setup_postdata( $post );
               ?>

               <?php

                  if(!in_array(get_the_id(), $heroids)){
                     $fp = get_field( "featured_post" );
                     if($fp == 1){
                     ?>
                        <div class="row white  pa-s--m pl-m--m pr-m--m white-text mt-m--s">
                           <?php
                              $author_id=$post->post_author;
                           ?>
                              <div class="row">
                                 <div class="col s3 pa-s--s">
                                    <div class="post_thumb--a" style="background-image:url(<?php the_field('main_image');?>);">
                                    </div>
                                 </div>
                                 <div class="col s9 pa-s--s">
                                    <div class="row">
                                       <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
                                       </div>
                                       <a href="/<?php echo get_the_author_meta( 'nicename' ); ?>" class="black-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></a>
                                       <p class="no-fluff vhs-font"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes </p>
                                    </div>
                                    <h3><a class="green-text text-darken-2 tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="black-text no-fluff"><?php the_excerpt(); ?> </p>
                                 </div>
                              </div>
                           </div>


                     <?php
                     } else {
                     ?>
                        <div class="row white  pa-s--m pl-m--m pr-m--m white-text mt-m--s">
                           <?php
                              $author_id=$post->post_author;
                           ?>
                              <div class="row pa-s--s">
                                 <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
                                 </div>
                                 <a href="/<?php echo get_the_author_meta( 'nicename' ); ?>" class="black-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></a>
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
                     <?php
                     }

                  }
               ?>
               <?php endforeach; ?>
               <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>

         </div>
      </div>
   </div>
</div>
<?php get_template_part('inc/social-bar','page'); ?>
<?php get_footer(); ?>
