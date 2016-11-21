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

   <div class="row mt-m--s black-transparent pa-m--m pa-s--s">
      <div class="col s12 m6 pr-m--m">
         <?php
            $author_id=$post->post_author;
         ?>
         <div class="row ">
            <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
            </div>
            <a href="/<?php echo get_the_author_meta( 'nicename' ); ?>" class="cyan-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></a>
            <p class="no-fluff vhs-font"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes  </p>
         </div>

         <h2><a class="yellow-text text-darken-2 tw-ultrabold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <p class="white-text no-fluff"><?php the_excerpt(); ?></p>
      </div>
      <div class="col s12 m5 offset-m1">
         <div class="video-container">
            <?php $value = get_field( "youtube" );
               if( $value ) {
                  echo $value;
               } else {
                  $main_image = get_field( "main_image" );
                  ?> <img src="<?php echo $main_image;?>" >
                  <?php
               }
            ?>
         </div>
      </div>
   </div>


      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
   <?php endif; ?>
</div>
<?php print_r($heroids); ?>
