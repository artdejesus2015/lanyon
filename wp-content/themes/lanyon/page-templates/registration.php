<?php
/**
 * Template Name: Registration Page
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner_bg', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="banner banner-sub banner--<?php echo $post_slug;?> animatedParent animateOnce" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <div class="banner-caption">
            <div class="description animated fadeIn delay-250">
                <p><?php the_content(); ?></p>
            </div>
        </div>

        <h1 class="title banner-title animated fadeInUpShort">Register</h1>
    </div>

    <section>
        <div class="section text-center section-conference section-intro section-sub-conference animatedParent animateOnce">
            <div class="container">
                <h2 class="title section-title animated fadeInDownShort">Conference Pass</h2>
                <h3 class="title section-title-small animated fadeIn delay-250">Register now to get the best price</h3>

                <div class="circle-wrap animated fadeIn delay-500">

                    <ul class="grid-conference">
                        <li>
                            <div class="big-circle">
                                <p>$399 <span>Now through 6/30/16</span></p>
                            </div>
                        </li>

                        <li>
                            <div class="big-circle big-circle-blue">
                                <p>$499 <span>Now through 6/30/16</span></p>
                            </div>
                        </li>

                        <li>
                            <div class="big-circle big-circle-orange">
                                <p>$599 <span>Now through 6/30/16</span></p>
                            </div>
                        </li>
                    </ul>

<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray1 circle-initial-right"></div>-->
<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray2 circle-initial-tright"></div>-->
<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray3 circle-initial-tleft"></div>-->
<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray4 circle-initial-bleft"></div>-->
<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray5"></div>-->
<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray6 circle-initial-top"></div>-->
<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray7"></div>-->
<!--                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray8 circle-initial-tleft"></div>-->
<!---->
<!--                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray9 circle-initial-top"></div>-->
<!--                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray10"></div>-->
<!--                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray11"></div>-->
<!--                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray12"></div>-->
<!--                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray13"></div>-->


                </div>

                <div class="description animated fadeInUpShort delay-750">
                    <?php the_field('register_content'); ?>
                </div>

                <div class="content animated fadeInUpShort delay-1000">
                    <h4 class="title content-title"><?php the_field('register_include'); ?></h4>

                    <ul class="grid-list-green">
                        <?php while (have_rows('includes_list')): the_row(); ?>
                            <li><?php the_sub_field('includes'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>

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