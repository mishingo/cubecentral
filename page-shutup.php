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
            <div class="row">
               <span class="black green-text pa-xs--s pl-s--s pr-s--s tw-ultrabold h3"><i class="material-icons">insert_emoticon</i> NEW SHIT</span>
            </div>
            <div class="row">
               <?php
                  $btpgid=get_queried_object_id();
                  $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                  $args = array( 'posts_per_page' => 5, 'author__in'=> array(3),
                  'paged' => $paged,'post_type' => 'post' );
                      $postslist = new WP_Query( $args );

                   if ( $postslist->have_posts() ) :
                       while ( $postslist->have_posts() ) : $postslist->the_post();


                            echo "<div style='border:2px groove black; margin-bottom:5px;'><h3 class='btposth'>";
                                the_title();
                            echo "</h3><div class='btpostdiv'>";
                                the_excerpt();
                            echo "</div></div>";

                        endwhile;

                            next_posts_link( 'Older Entries', $postslist->max_num_pages );
                            previous_posts_link( 'Next Entries &raquo;' );
                       wp_reset_postdata();
                   endif;
               ?>

            </div>

         </div>
         <div class="col s12 m4  pr-m--m">
            word
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>
