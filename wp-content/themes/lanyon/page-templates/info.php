<?php
/**
 * Template Name: Info Page
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <div class="banner banner-sub  banner--<?php echo $post_slug;?> animatedParent animateOnce" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <div class="banner-caption">
            <div class="description animated fadeIn delay-250">
                <?php the_content(); ?>
            </div>
        </div>

        <h1 class="title banner-title animated fadeInUpShort">Info</h1>
    </div>

    <section>
        <div class="section text-center section-intro section-info">
            <div class="container">
                <div class="content content-info">
                    <div class="description copy">

                        <h5><?php the_field('heading_title'); ?></h5>
                        <?php the_field('info_content');?>
                    </div>

                    <h2 class="title section-title">What’s in it for me?</h2>
                    <div class="grid-info">
                        <?php while (have_rows('info_item')): the_row(); ?>
                            <div class="grid-info-item">
                                <div class="description copy">
                                    <h5><?php the_sub_field('info_item_title'); ?></h5>
                                    <p><?php the_sub_field('info_item_content'); ?></p>

                                    <h6>Connect with:</h6>
                                    <p><?php the_sub_field('info_connect'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section text-center section-intro bg-dark-gray">
            <div class="container">
                <h2 class="title section-title text-white">Frequently Asked Questions</h2>

                <div class="frequently-wrap">
                    <div class="panel-group panel-frequently" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php
                        query_posts(array(
                                'post_type' => 'faqs',
                                'posts_per_page' => 20,
                                'order'        => ASC,
                        ));
                        if ( have_posts() ) : ?>
                            <?php $cntr = 0; while(have_posts()) : the_post(); ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading<?php echo $cntr; ?>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $cntr; ?>" aria-expanded="true" aria-controls="collapse<?php echo $cntr; ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $cntr; ?>" class="panel-collapse collapse <?php echo ($cntr == 0) ? 'in' : '' ?>" role="tabpanel" aria-labelledby="heading<?php echo $cntr; ?>">
                                        <div class="panel-body">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $cntr++; endwhile; wp_reset_query(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section>-->
    <!--    <div class="section text-center section-mobile-app bg-gray">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-6 phone-wrap">-->
    <!--                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png" class="phone-left">-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-md-6 pull-right">-->
    <!--                    <div class="content">-->
    <!--                        <h2 class="title section-title section-mini-title">What’s happening</h2>-->
    <!--                        <div class="description">-->
    <!--                            <p>Engage, schedule, and network all in the palm of your hand</p>-->
    <!--                        </div>-->
    <!---->
    <!--                        <div class="button-wrap">-->
    <!--                            <a href="#">-->
    <!--                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-1.png">-->
    <!--                            </a>-->
    <!---->
    <!--                            <a href="#">-->
    <!--                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-2.png">-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <section>
        <div class="section text-center section-happened">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title section-title section-mini-title">What’s happening</h2>

                        <div class="content content-left">
                            <div class="description description-bordered">
                                <p>How has the American Cancer Society consolidated their #SMMP programs?
                                    Find out on 3/29. <a href="#">#MeetingProfs</a> <a href="#">#EventProfs</a> <a href="http://ow.ly/ZDMW1">http://ow.ly/ZDMW1</a> </p>
                            </div>

                            <div class="description description-bordered">
                                <p>We’ve already started planning for #LanyonLive! You’re going to love what
                                    we have in store! <a href="#">#EventProfs</a> <a href="#">#Hotels</a> </p>
                            </div>

                            <div class="description description-bordered">
                                <p>It's that time of year again—it's conference season! 5 tips on becoming a conference superstar <a href="#">#EventProfs</a> <a href="http://ow.ly/ZC1Qw">http://ow.ly/ZC1Qw</a> </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h2 class="title section-title section-mini-title">How to Get Involved</h2>

                        <div class="content content-right">
                            <div class="description">
                                <div class="circle-number">1</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>

                            <div class="description">
                                <div class="circle-number">2</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>

                            <div class="description">
                                <div class="circle-number">3</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="section text-center section-join" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-home.jpg');">
            <div class="container">
                <div class="view-wrapper">
                    <div class="description">
                        <p>Check out what happened last year</p>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-mw btn-bordered" data-toggle="modal" data-target="#myModal">
                        watch 2015 recap
                    </button>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section text-center section-scoop animatedParent">
            <div class="container">
                <h2 class="title section-title animated fadeInDownShort">Get the Latest Scoop</h2>

                <div class="description animated fadeIn delay-250">
                    <p>Sign up to get the latest news, special deals,  and updates on Lanyon Live</p>
                </div>

                <div class="form-inline animated fadeIn delay-500">
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