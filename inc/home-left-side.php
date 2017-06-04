<?php
$query = new WP_Query(
 array(
  'category__in' => array(5),
  'posts_per_page' => 8,
  'post_type' => 'post',
 )
 );
?>
 <div class="row white-text">
      <div class="row horizontal-scroll">
<?php 
if ( $query->have_posts() ) {
 while ( $query->have_posts() ) {
  $query->the_post();
  // do something
  ?>

 
 
        <div class="party-card center-align">
          <a href="<?php the_permalink(); ?>">
            <div class="party-image" style="background-image:url(<?php echo the_field("main_image") ?>)">
            </div>
            <p class="no-fluff white-text"><?php echo the_field( "event_title" ); ?></p>
            <p class="no-fluff green-text"><?php echo the_field( "date" ); ?></p>
          </a> 
        </div>
        

 


<?php
 }
} 
?>
     </div>
  </div>
<?php 
wp_reset_postdata();
?>