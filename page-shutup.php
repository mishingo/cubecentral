<?php
/*
    Template Name: Shut Up Let's Talk
*/

get_header();

$params = $_SERVER['QUERY_STRING'];
?>

<nav class="black mininav">
   <div class="container">
      <div class="nav-wrapper">
         <a href="{{ url('/') }}" class="brand-logo"><img class="image-tiny" src="<?php echo get_template_directory_uri();?>/assets/img/logo-small.png" height="40"></a>
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
   </div>
</nav>
<div class="row">
   <div class="container">

      <div class="row mt-m--s">
         <div class="col m8 mt-m--s mt-f--m">

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

                  <h3 class="black-text"><?php the_title(); ?></h3>
                  <?php
                     $titlez = get_the_title();
                     $sanititle = strtolower(str_replace(' ', '-', $titlez));
                  ?>

                  <?php the_excerpt();  ?>
                  <a data-navigo href="<?php echo $sanititle; ?>" class="cd-btn cd-modal-trigger">Start Effect</a>
                  <div class="cd-modal" id="<?php echo $sanititle; ?>">
                  	<div class="modal-content">
                  		<h2><?php the_title(); ?></h2>
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
         <div class="col s12 m4  pr-m--m">
            word
         </div>
      </div>
   </div>
</div>








<?php get_footer(); ?>
