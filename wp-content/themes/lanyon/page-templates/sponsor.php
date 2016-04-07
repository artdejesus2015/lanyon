<?php
/**
 * Template Name: Sponsor Page
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner_bg', false, '' );

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
        <div class="section-sponsor text-center animatedParent animateOnce">
            <div class="gap-20"></div>
            <div class="container">
                <h2 class="title section-title animated fadeInDownShort"><?php the_field('section_title_sponsor', 'option'); ?></h2>

                <div class="description animated fadeIn delay-250">
                    <?php the_field('description_sponsor', 'option'); ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="text-center section-join section-sponsors-logo animatedParent animateOnce" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-bg.png');">
            <div class="logo-wrap sponsors-logo-wrap animated fadeInUpShort delay-500">
                <ul class="logo-list">
                    <li>
                        <div class="logo-item diamond-logo">
                            <p>Diamond</p>
                        </div>
                        <div class="logo-item diamond-logo">
                            <p>Diamond</p>
                        </div>
                    </li>

                    <li>
                        <div class="logo-item platinum-logo">
                            <p>Platinum</p>
                        </div>
                    </li>
                </ul>
                <a href="<?php the_field('button_green_link'); ?>" target='_blank' class="btn btn-primary btn-green"><?php the_field('button_green_label'); ?></a>
                <a href="<?php the_field('button_blue_link'); ?>" class="btn btn-primary"><?php the_field('button_blue_label'); ?></a>
            </div>
        </div>
    </section>

    <section>
        <div class="section text-center section-join animatedParent animateOnce" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-home.jpg');">
            <div class="container">
                <div class="view-wrapper">
                    <div class="description animated fadeIn delay-500">
                        <?php the_field('registration_cta', 'option'); ?>
                    </div>

                    <a href="<?php the_field('registration_cta_link', 'option'); ?>" class="btn btn-primary">register now</a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="section text-center section-scoop animatedParent">
            <div class="container">
                <h2 class="title section-title animated fadeInDownShort"><?php the_field('subscription_title', 'option');?></h2>

                <div class="description animated fadeIn delay-250">
                    <?php the_field('subscription_description', 'option');?>
                </div>

                <div class="form-inline animated fadeIn delay-500">
                    <form>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </section>


<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer();