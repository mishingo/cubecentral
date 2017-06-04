<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HGB
 */

get_header();
get_template_part('inc/navbar','page');
?>

<div class="container">
    <div class="row" >
        <div class="col s12 m9 right pa-s--m mt-m--s">
            <div class="row white pa-m--m pa-s--s">
                <main id="content" class="col-sm-8">

                    <?php while (have_posts()) : the_post(); ?>
                        <div class="row">
                            <div class="avatar-xs left mr-s--s" style="background-image:url(<?php echo get_avatar_url($author_id); ?>);">
                            </div>
                            <p  class="black-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></p>
                            <p class="no-fluff vhs-font"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes </p>
                        </div>
                        <div class="row mt-m--m mt-s--s">
                            <div class="post_thumb--b" style="background-image:url(<?php the_field('main_image');?>);">
                            </div>
                        </div>

                        
                        
                        <?php 
                            $category = get_the_category();
                            $firstCategory = $category[0]->cat_name;
                            if($firstCategory == "events"){
                        ?>
                            <h1 class="no-fluff black-text"><?php echo the_field( "event_title" ); ?></h1>
                            <h2 class="no-fluff green-text"><?php echo the_field( "date" ); ?></h2>
                            <p class="no-fluff black-text"><?php echo the_field( "date" ); ?></p>
                            <p class="no-fluff black-text"><?php echo the_field( "start_time" ); ?> - <?php echo the_field( "end_time" ); ?></p>
                            <p class="no-fluff black-text"><?php echo the_field( "location" ); ?></p>
                            <p class="no-fluff black-text"><?php echo the_field( "event_description" ); ?></p>
                        <?php
                            } else {
                        ?>
                            <h3><a class="green-text  tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_content(); ?>
                        <?php 
                            }
                        ?>
                       

                    


                    <?php endwhile; // End of the loop. ?>
                    <div class="row">
                        <h3>Related posts</h3>
                    </div>
                    <div class="row">

                            <?php
                                $orig_post = $post;
                                global $post;
                                $tags = wp_get_post_tags($post->ID);

                                if ($tags) {
                                    $tag_ids = array();
                                    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                                    $args=array(
                                        'tag__in' => $tag_ids,
                                        'post__not_in' => array($post->ID),
                                        'posts_per_page'=>4, // Number of related posts to display.
                                        'caller_get_posts'=>1
                                    );

                                    $my_query = new wp_query( $args );

                                    while( $my_query->have_posts() ) {
                                        $my_query->the_post();
                            ?>

                            <div class="col s12 m4">
                                <a rel="external" href="<? the_permalink()?>">
                                    <div style="background-image: url(<?php the_post_thumbnail_url('medium')?> );background-size:cover;height:150px;">
                                    </div>

                                   
                                        <?php the_title(); ?>
                                </a>
                            </div>

                                <?php }
                                }
                                $post = $orig_post;
                                wp_reset_query();
                                ?>

                    </div>
                </main>
            </div>
        </div>
        <div class="col s12 m3 left pt-l--m pt-s--s">
            <div class="row white-text pt-m--s">
               <h2><span class="deep-purple accent-3 pl-s--s pr-s--s">Sponsored</span></h2>
            </div>
            <?php get_template_part('inc/ads','page'); ?>

        </div>





    </div>
    <!-- close row primary-->
</div>
<!-- close container -->
<?php get_template_part('inc/popunder','page'); ?>
<?php get_footer(); ?>
