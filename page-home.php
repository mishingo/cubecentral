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
      <div class="row mt-m--s white-text pa-s--s grey darken-4">

      </div>
      <div class="row mt-m--s white-text">
         <?php
            $posts = get_posts(array(
	            'posts_per_page'	=> 9,
	            'post_type'			=> 'post'
            ));

         if( $posts ): ?>
      	<?php
            foreach( $posts as $post ):
      		   setup_postdata( $post )
      	?>
         <?php
            //print_r($posts);
            $class = get_field('featured_post');
            echo $class;
         ?>
         <div class="rowmt-l--s">
            <div class="col s12 m6 pr-m--m">
               <span class="black yellow-text pa-xs--s pl-s--s pr-s--s"><?php the_date(); ?></span>
               <h2><a class="yellow-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

      <div class="row">
         <div class="col m7">
            <div class="row">
               <span class="black green-text pa-xs--s pl-s--s pr-s--s tw-ultrabold">NEW SHIT</span>
            </div>
            <div class="row">
               <?php
	               $args = array(
                     'numberposts' => '5'
                  );
	               $recent_posts = wp_get_recent_posts( $args );
	                  foreach( $recent_posts as $recent ){
                        if ($recent === reset($recent_posts)){
                           echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                        } else {
                           echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                        }
	                  }
	               wp_reset_query();
               ?>
            </div>
         </div>
         <div class="col m5">
            <div class="row">

            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>
