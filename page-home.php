<?php
/*
    Template Name: Home Page
*/

get_header();

$params = $_SERVER['QUERY_STRING'];
?>

<div class="hero pb-l--s">
   <div class="container">
      <nav>
         <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png"></a>
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
            <ul class="side-nav" id="mobile-demo">
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
              <li><a href="/job/create" class="waves-effect waves-red btn-white">Post a Job</a></li>
            </ul>
         </div>
      </nav>
      <div class="row mt-s--s white-text pa-s--s pl-l--s pr-l--s grey darken-4">
         <div class="col s12 m12 l9 hide-on-med-and-down">
            <ul class="inline-list">
               <li>Trending: </li>
               <li>#George Clanton</li>
               <li> Shut Up Lets Talk</li>
               <li>SlutGun Music </li>
            </ul>

         </div>
         <div class="col s12 m12 l3 right--m-center social-pad">
            <i class="i-facebook"></i>
            <i class="i-twitter"></i>
            <i class="i-youtube"></i>
            <i class="i-instagram"></i>
            <i class="i-snapchat"></i>
         </div>

      </div>
      <div class="row mt-m--s white-text">
         <?php
            $posts = get_posts(array(
	            'posts_per_page'	=> 1,
	            'post_type'			=> 'post',
	            'meta_key'		=> 'featured_post',
	            'meta_value'	=> True
            ));

         if( $posts ): ?>
      	<?php
            foreach( $posts as $post ):
      		   setup_postdata( $post );

            $heroid = get_the_id();
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

      <div class="row mt-m--s">
         <div class="col s12 m4  pr-m--m">
            <div class="row">
               <span class="black green-text pa-xs--s pl-s--s pr-s--s tw-ultrabold h3"><i class="material-icons">flash_on</i> EVENTS</span>
            </div>

               <?php
                  $posts = get_posts(array(
      	            'posts_per_page'	=> 3,
      	            'post_type'			=> 'post',
                     'category'        => 3
                  ));

                  if( $posts ): ?>
               	<?php
                     foreach( $posts as $post ):
               		   setup_postdata( $post );
               	?>

               <?php
                  if(get_the_id() != $heroid){
                     $fp = get_field( "featured_post" );
                     if($fp == 1){
                     ?>
                        <div class="row">
                           <?php
                              $author_id=$post->post_author;
                           ?>

                        </div>

                     <?php
                     } else {
                     ?>
                        <div class="row black-transparent  pa-m--m pt-m--s pl-m--m pr-m--m white-text mt-m--s">
                           <?php
                              $author_id=$post->post_author;
                           ?>
                              <div class="row">
                                 <div class="post_thumb--b" style="background-image:url(<?php the_field('main_image');?>);">
                                 </div>
                              </div>
                              <div class="row pa-s--s ">
                                 <h3 class=" mt-s--s"><a class="yellow-text text-darken-2 tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                 <p class="white-text no-fluff vhs-font"><i class="material-icons">date_range</i> <?php the_field("date_of_event"); ?> </p>
                                 <p class="white-text no-fluff vhs-font"><i class="material-icons small">time_to_leave</i> <?php the_field("location_of_event"); ?></p>
                                 <p class="white-text no-fluff vhs-font"><i class="material-icons small">access_time</i> <?php the_field("time_of_event"); ?></p>


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
         <div class="col m8 mt-m--s mt-f--m">
            <div class="row">
               <span class="black green-text pa-xs--s pl-s--s pr-s--s tw-ultrabold h3"><i class="material-icons">insert_emoticon</i> NEW SHIT</span>
            </div>
            <div class="row">
               <?php
                  $posts = get_posts(array(
      	            'posts_per_page'	=> 22,
      	            'post_type'			=> 'post',
                     'category'        => 4
                  ));

               if( $posts ): ?>
            	<?php
                  foreach( $posts as $post ):
            		   setup_postdata( $post );
            	?>

               <?php
                  if(get_the_id() != $heroid){
                     $fp = get_field( "featured_post" );
                     if($fp == 1){
                     ?>
                        <div class="row black-transparent  pa-s--m pl-m--m pr-m--m white-text mt-m--s">
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
                                       <a href="/<?php echo get_the_author_meta( 'nicename' ); ?>" class="cyan-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></a>
                                       <p class="no-fluff vhs-font"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes </p>
                                    </div>
                                    <h3><a class="yellow-text text-darken-2 tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="white-text no-fluff"><?php the_excerpt(); ?> </p>
                                 </div>
                              </div>
                        </div>

                     <?php
                     } else {
                     ?>
                        <div class="row black-transparent  pa-s--m pl-m--m pr-m--m white-text mt-m--s">
                           <?php
                              $author_id=$post->post_author;
                           ?>
                              <div class="row pa-s--s">
                                 <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
                                 </div>
                                 <a href="/<?php echo get_the_author_meta( 'nicename' ); ?>" class="cyan-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></a>
                                 <p class="no-fluff vhs-font"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes  </p>
                              </div>
                              <div class="row">
                                    <div class="post_thumb--b" style="background-image:url(<?php the_field('main_image');?>);">
                                    </div>
                              </div>
                              <div class="row pa-s--s pl-m--s pr-m--s">
                                    <h3><a class="yellow-text text-darken-2 tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <span class="white-text no-fluff"><?php the_excerpt(); ?> </span>
                                 </div>
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
<?php get_footer(); ?>
