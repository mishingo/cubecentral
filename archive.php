<?php
/**
Template Name: Archives
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HGB
 */
get_header(); 
 get_template_part('inc/navbar','page');
?>

<div class="row black">
    <div class="container pb-xl--s">
        <div class="row white-text pt-m--s">
           <h2><span class="deep-purple accent-3 pl-s--s pr-s--s">The Past</span></h2>
        </div>
        <div class="row masonry-layout">
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array( 'post_type' => 'post', 'posts_per_page' => 30, 'paged' => $paged );
        $wp_query = new WP_Query($args);
        while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <div class="pl-s--s pr-s--s pt-xs--s pb-xs--s masonry-layout-panel">
                  <div class="row white border-top--m light-shadow br-m pa-s--s">
                    <div class="col s4">
                        
                        <img src="<?php the_field('main_image');?>" alt="">
                    </div>
                    <div class="col s8 pl-s--s">
                        <p class="no-fluff black-text tw-ultrabold"><small><?php the_date(); ?></small></p>
                        <h4 class="tw-ultrabold deep-purple-text"><?php the_title() ?></h4>
                    </div>
                    
                  </div>
                </div>
            </a>
        <?php endwhile; ?>

        <!-- then the pagination links -->
        <?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
        <?php previous_posts_link( 'Newer posts &rarr;' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
