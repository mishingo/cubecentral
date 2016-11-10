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


                                <?php the_title(); ?>

                                <?php the_excerpt();  ?>


               <?php
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

<div class="glitch-transition">
   <main class="cd-main-content">
   	<div class="center">
   		<h1>Glitch</h1>
   		<a href="#modal-1" class="cd-btn cd-modal-trigger">Start Effect</a>
   	</div>
   </main> <!-- .cd-main-content -->

   <div class="cd-modal" id="modal-1">
   	<div class="modal-content">
   		<h2>My Modal Content</h2>

   		<p>
   			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad modi repellendus, optio eveniet eligendi molestiae? Fugiat, temporibus! A rerum pariatur neque laborum earum, illum voluptatibus eum voluptatem fugiat, porro animi tempora? Sit harum nulla, nesciunt molestias, iusto aliquam aperiam est qui possimus reprehenderit ipsam ea aut assumenda inventore iste! Animi quaerat facere repudiandae earum quisquam accusamus tempora, delectus nesciunt, provident quae aliquam, voluptatum beatae quis similique in maiores repellat eligendi voluptas veniam optio illum vero! Eius, dignissimos esse eligendi veniam.
   		</p>

   		<p>
   			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis saepe amet sit fugit rerum, corporis minus vitae officia quaerat incidunt voluptate, blanditiis ea est quibusdam voluptas animi quasi totam magni, commodi praesentium. Possimus quam illo ipsam iste unde totam cupiditate deleniti, impedit assumenda hic eligendi natus tempora dolores quod mollitia ab non sunt eaque adipisci, suscipit quas aliquid officiis beatae. Necessitatibus voluptatibus, perferendis tenetur perspiciatis adipisci nesciunt eum ex fuga commodi iure numquam enim rem ullam labore nisi magni sint voluptatem quos! Eum iure exercitationem voluptates repellendus culpa doloremque laborum animi illum, sint fugit soluta possimus a fuga veritatis molestias corporis placeat illo pariatur dolor reiciendis earum, sapiente omnis. Placeat maiores omnis, porro officia, laborum eos. Fugiat mollitia inventore consequuntur odit eaque, rerum recusandae, eum sint molestiae consequatur culpa deserunt quae aliquid dolor tempora tenetur architecto repellendus enim quasi atque, odio voluptas. Tenetur repellendus explicabo ipsum inventore quia aut eos expedita necessitatibus asperiores blanditiis! Delectus nisi laudantium ipsum! Quasi blanditiis corrupti dicta maiores placeat laboriosam delectus ipsum facere voluptas, magnam voluptatibus, perferendis alias ullam saepe, perspiciatis recusandae voluptates, dolores praesentium?
   		</p>
   	</div> <!-- .modal-content -->

   	<a href="#0" class="modal-close">Close</a>
   </div> <!-- .cd-modal -->

   <div class="cd-transition-layer" data-frame="25">
   	<div class="bg-layer"></div>
   </div> <!-- .cd-transition-layer -->
</div>
<?php get_footer(); ?>
