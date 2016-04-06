<?php
/**
 * Template Name: Agenda Page
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <div class="banner banner-sub banner-agenda banner--<?php echo $post_slug;?> animatedParent animateOnce" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <div class="banner-caption">
            <div class="description animated fadeIn delay-250">
                <p>Lorem ipsum dolor sit amet</p>
            </div>
        </div>

        <h1 class="title banner-title animated fadeInUpShort">AGENDA</h1>
    </div>

        <div class="section text-center section-proposal animatedParent animateOnce">
            <div class="container">
                <h2 class="title section-title animated fadeInDownShort">Schedule At A Glance</h2>
                <?php $dates = DateTime::createFromFormat('Ymd', get_field('time')); ?>
                <p class="green-date animated fadeIn delay-250">dallas, texas  |  <?php echo $dates->format('F j Y'); ?></p>

                <div class="description animated fadeIn delay-750">

                    <h3 class="content-title">More information:</h3>

                    <?php the_content(); ?>

                    <p>If you have questions, please contact LanyonLive@Lanyon.com. </p>
                </div>
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