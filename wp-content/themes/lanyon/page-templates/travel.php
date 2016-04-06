<?php
/**
 * Template Name: Travel Page
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <div class="banner banner-sub banner-travel banner--<?php echo $post_slug;?> animatedParent animateOnce" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <h1 class="title banner-title animated fadeInUpShort"><?php the_title(); ?></h1>
    </div>

    <section>
        <div class="section section-travel">
            <div class="container">
                <div class="travel-grid">
                    <div class="travel-grid-item travel-grid-item1">
                        <div class="col-md-6 travel-grid-description">
                            <div class="travel-grid-img">
                                <div class="travel-clouds" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/travel-cloud.png')"></div>
                                <img class="travel-airplane" src="<?php echo get_stylesheet_directory_uri(); ?>/images/travel-airplane.png">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/travel-building.png" class="travel-building">
                            </div>
                        </div>
                        <div class="col-md-6 travel-grid-description">
                            <h2 class="title section-title"><?php the_field('travel_title'); ?></h2>
                            <div class="description">
                                <?php the_field('travel_description'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="travel-grid-item travel-grid-item2">
                        <div class="col-md-6 pull-right travel-grid-description">
                            <div class="travel-grid-img">
                                <?php while (have_rows('travel_images')): the_row(); ?>
                                    <div class="travel-content-img" style="background-image: url('<?php the_sub_field('travel_image'); ?>');"></div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="col-md-6 pull-left travel-grid-description">
                            <h2 class="title section-title"><?php the_field('travel_title_1'); ?></h2>
                            <div class="description">
                                <?php the_field('travel_description_1'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="https://resweb.passkey.com/Resweb.do?mode=welcome_ei_new&eventID=14677675" class="btn btn-register">Book Now</a>
                    </div>

                    <div class="travel-grid-item travel-grid-item3">
                        <div class="col-md-6 travel-grid-description">
                            <div class="travel-grid-img">
                                <div class="travel-grid-img">
                                    <div class="travel-clouds" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/travel-cloud.png')"></div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/travel-building2.png" class="travel-building">
                                    <div class="travel-road-line"></div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/travel-car-1.png" class="travel-car travel-car1">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/travel-car-2.png" class="travel-car travel-car2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 travel-grid-description">
                            <h2 class="title section-title"><?php the_field('travel_title_2'); ?></h2>
                            <div class="description">
                                <?php the_field('travel_description_2'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section text-center section-scoop">
            <div class="container">
                <h2 class="title section-title">Get the Latest Scoop</h2>

                <div class="description">
                    <p>Sign up to get the latest news, special deals,  and updates on Lanyon Live</p>
                </div>

                <div class="form-inline">
                    <form>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">register now</button>
                    </form>
                </div>

            </div>
        </div>
    </section>


<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer();