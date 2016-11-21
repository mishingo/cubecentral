<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Oscar Batlle
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
                            <a href="/<?php echo get_the_author_meta( 'nicename' ); ?>" class="black-text text-accent-3 tw-ultrabold vhs-font"><?php echo get_the_author_meta( 'nicename' ); ?></a>
                            <p class="no-fluff vhs-font"><?php the_date(); ?> &sect; Reading Time <?php the_field('reading_time'); ?> minutes </p>
                        </div>
                        <div class="row mt-m--m mt-s--s">
                            <div class="post_thumb--b" style="background-image:url(<?php the_field('main_image');?>);">
                            </div>
                        </div>

                        <h3><a class="green-text text-darken-2 tw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <p class="black-text no-fluff">
                            <?php the_field('copy_1'); ?>
                        </p>
                        <div class="row pt-m--m pb-m--m pt-s--s pb-s--s">
                            <?php the_field('ad_1'); ?>
                        </div>
                        <p class="black-text no-fluff">
                            <?php the_field('copy_2'); ?>
                        </p>
                        <div class="row pt-m--m pb-m--m pt-s--s pb-s--s">
                            <?php the_field('ad_2'); ?>
                        </div>
                        <p class="black-text no-fluff">
                            <?php the_field('copy_3'); ?>
                        </p>
                        <div class="row pt-m--m pb-m--m pt-s--s pb-s--s">
                            <?php the_field('ad_3'); ?>
                        </div>



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
                                    <div style="background-image: url(<?php the_post_thumbnail_url('medium')?> );background-size:cover;height:150px;">
                                    </div>

                                    <a rel="external" href="<? the_permalink()?>">
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
        <div class="col s12 m3 left">
            <div class="row center-align mt-l--s">
               <a href="https://www.addiliate.com/redirect.html?ad=VQ6873UL" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/img/bestquotes/300250.jpg"></a>
            </div>

        </div>





    </div>
    <!-- close row primary-->
</div>
<!-- close container -->

<?php get_footer(); ?>
