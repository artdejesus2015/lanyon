<?php
/**
 * Template Name: Sponsor Page
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <div class="banner banner-sub banner-sponsors  banner--<?php echo $post_slug;?>  animatedParent animateOnce" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <div class="banner-caption">
            <div class="description animated fadeIn delay-250">
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <h1 class="title banner-title animated fadeInUpShort"><?php the_title();?></h1>
    </div>

    <section>
        <div class="section-sponsor text-center">
            <div class="gap-20"></div>
            <div class="container">
                <div class="diamond-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diamond.png" class="diamond1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diamond-spark.png" class="diamond-spark diamond-spark1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diamond-spark.png" class="diamond-spark diamond-spark2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diamond-spark.png" class="diamond-spark diamond-spark3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diamond-spark.png" class="diamond-spark diamond-spark4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/diamond-spark.png" class="diamond-spark diamond-spark5">
                </div>
                <h2 class="title section-title"><?php the_field('content_title');?></h2>

                <div class="description">
                    <p><?php the_field('content_description'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="text-center section-join section-sponsors-logo" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-bg.png');">
            <div class="logo-wrap sponsors-logo-wrap">
                <ul class="logo-list">
                    <li>
                        <?php while (have_rows('diamond_logo')): the_row(); ?>
                            <div class="logo-item diamond-logo">
                                <p><?php the_sub_field('logo'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </li>

                    <li>
                        <?php while (have_rows('platinum_logo')): the_row(); ?>
                            <div class="logo-item platinum-logo">
                                <p><?php the_sub_field('logo_1'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </li>

                    <li>
                        <?php while (have_rows('gold_logo')): the_row(); ?>
                            <div class="logo-item gold-logo">
                                <p><?php the_sub_field('logo_2'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </li>

                    <li>
                        <?php while (have_rows('silver_logo')): the_row(); ?>
                            <div class="logo-item silver-logo">
                                <p><?php the_sub_field('logo_3'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </li>

                    <?php while (have_rows('bronze_logo')): the_row(); ?>
                        <li>
                            <?php while (have_rows('logo_4')): the_row(); ?>
                                <div class="logo-item bronze-logo">
                                    <p><?php the_sub_field('logo_5'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/Lanyon-Live-2016-Sponsor-Exhibitor-Prospectus-FINAL.pdf" target='_blank' class="btn btn-primary btn-green">Download the Prospectus</a>
                <a href="#" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </section>

    <section>
        <div class="section text-center section-join animatedParent animateOnce" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-home.jpg');">
            <div class="container">
                <div class="view-wrapper">
                    <img class="img-join animated fadeInDownShort" src="<?php echo get_stylesheet_directory_uri(); ?>/images/join-icon.png">
                    <div class="description animated fadeIn delay-250">
                        <p>Join us on this incredible journey — and give us the chance
                            to show you that we’re indeed Better Together.</p>
                    </div>

                    <a href="#" class="btn btn-primary animated fadeInUpShort delay-500">register now</a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="section text-center section-scoop animatedParent animateOnce">
            <div class="container">
                <h2 class="title section-title animated fadeInDownShort">Get the Latest Scoop</h2>

                <div class="description animated fadeIn delay-250">
                    <p>Sign up to get the latest news, special deals,  and updates on Lanyon Live</p>
                </div>

                <div class="form-inline animated fadeInUpShort delay-500">
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