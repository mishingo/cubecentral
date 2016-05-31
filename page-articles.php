<?php
/*
    Template Name: Articles-template
*/
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();
get_template_part('inc/navbar','page'); 
?>

<!-- MAIN CONTENT -->

<div class="row pam pao--m">
    <div class="container">
        <div class="col-2of12">
            <div class="row mtl">
                <h4> Helpful Resume Tips</h4>
            </div>
            <div class="row">
                <?php wp_nav_menu( array( 'theme_location' => 'l-sidebar', 'menu_id' => 'l-sidebar-menu' ) ); ?>
            </div>
        </div>
        <div class="col-8of12 background-white sal pam pbxl">
            <div class="row">
                <?php custom_breadcrumbs(); ?>
            </div>
            <div class="row mts">
            <?php if (has_post_thumbnail())
            { ?>
                <h1><?php the_title(); ?></h1>
                <section class="row mts" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; height: 300px;">
                </section>
                <!-- end of section with class feature-image feature-image-default -->
            <?php } else
            { ?>

                <section class="row" data-type="background" data-speed="2">
                    <h1><?php the_title(); ?></h1>
                </section>
                <!-- end of section with class feature-image feature-image-default -->
            <?php } ?>
            </div>
            <div class="container mts">
                <div class="row" id="primary">
                    <div id="content" class="col-sm-12">
                        <section class="main-content">

                            <?php while (have_posts()) : the_post(); ?>

                                <?php the_content(); ?>

                            <?php endwhile; ?>

                        </section>
                        <!-- end of section with class main-content -->
                    </div>
                    <!-- end of div with id content -->
                </div>
                <!-- end of div with class row -->
            </div>
            <!-- end of container -->
        </div>
        <div class="col-2of12">
        </div>
    </div>
</div>
<?php get_footer(); ?>
