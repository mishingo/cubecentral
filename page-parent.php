<?php
/*
    Template Name: Parent-Template
*/
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();
get_template_part('inc/navbar','page'); 
?>

<!-- MAIN CONTENT -->

<div class="row plm prm pbm pao--m">
    <div class="container plm prm ">
        <div class="col-3of12 dn-m">
            <div class=" background-primary background-triangle-blue ptm pbm pls prs ta-center tc-white br-m sal mtm">
                <div class="row">
                  <h2 class="tw-ultrabold t-shadow">Start your Resume Today!</h2>
                </div>
                <div class="row mtm">
                  <img src="http://s3.amazonaws.com/localstaffing-resources/orb/img/resume.svg">
                </div>
                <div class="row mtm">
                  <a href="https://app.onlineresumebuilders.com/basicinfo?utm_source=sidebar" class="btn-a-f btn-yellow-flat pas h3 br-m">Start Now!</a>
                </div>
            </div>
        </div>
        <div class="col-9of12 background-white  ptm pbxl">
            <div class="row plm prm">
                <?php custom_breadcrumbs(); ?>
            </div>
            <div class="row mts">
                <?php if (has_post_thumbnail())
                { ?>
                    
                    <section class="row mts " style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; min-height: 220px; background-position:center center;">

                        <h1 class="h1 tw-ultrabold tc-white t-shadow-dark pas plm prm background-secondary col-7 bbrr-m sal ta-center--m"><?php the_title(); ?></h1>
                    </section>
                    <!-- end of section with class feature-image feature-image-default -->
                <?php } else
                { ?>

                    <section class="row plm" data-type="background" >
                        <h1><?php the_title(); ?></h1>
                    </section>
                    <!-- end of section with class feature-image feature-image-default -->
                <?php } ?>
            </div>
            <div class="container mts plm prm ptm">
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
                <div class="row">
                    <h3> Check out our articles with tips to better your resume:</h3>
                </div>
                <div class="row mtm respond-half">
                    <?php $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."    AND post_type = 'page' ORDER BY menu_order", 'OBJECT');    ?>
                        <?php $i=0; ?>
                        <?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
                            <?php
                                //echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); 
                                $post_thumbnail_id = get_post_thumbnail_id($pageChild->ID);
                                $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                                //echo $post_thumbnail_url;
                                
                            ?>
                            <?php if($i % 4 == 0) { ?> 
                                <div class="row mtxs">
                            <?php } ?>
                            <div class="child-thumb col-3of12 pull mtm--m" style="background-image:url(<?php echo  $post_thumbnail_url ?>)">
                                <div class="table-all">
                                    <div class="table-cell-f ta-center">
                                        <div class="background-primary pas">
                                            <a class="tc-white tw-bold t-shadow" href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo $pageChild->post_title; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;  if( $i != 0 && $i % 4 == 0) { ?> 
                                </div>
                            <?php } ?>
                            <?php if ($i == $len - 1) { ?>
                                </div>
                            <?php } ?>
                    <?php endforeach; endif;?>
                </div>
            </div>
                <!-- end of div with class row -->
            </div>
            <!-- end of container -->
        </div>
    </div>

</div>
<?php get_footer(); ?>
