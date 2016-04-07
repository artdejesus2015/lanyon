<?php
get_header();

$banner_bg = get_field('banner_image_home', 'option');

// thumbnail
$banner_size = 'banner_bg';
$banner_thumb = $banner_bg ['sizes'][ $banner_size ];

?>

<div class="banner banner-home animatedParent" style="background-image: url('<?php echo $banner_thumb;?>');">
    <div class="banner-caption">
        <h1 class="title banner-title animated fadeInDownShort delay-250"><?php the_field('banner_title_home', 'option') ?></h1>
        <img class="banner-cap-img animated fadeIn" src="<?php the_field('banner_year_image_home', 'option') ?>">
        <ul class="animated fadeInUpShort delay-500">
            <?php if( have_rows('banner_list_home', 'option') ):
                    while ( have_rows('banner_list_home', 'option') ) : the_row();
                        $bannerl_item = get_sub_field('banner_list_item_home', 'option'); ?>
                        <li><?php echo $bannerl_item?></li>
             <?php endwhile; endif;  ?>
        </ul>

        <div class="description animated fadeIn delay-750">
            <?php the_field('banner_description_home', 'option'); ?>
        </div>

        <div class="button-wrap animated fadeIn delay-1000">
            <a href="#" class="btn btn-primary btn-mw">register now</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-mw btn-bordered" data-toggle="modal" data-target="#myModal">
                watch 2015 recap
            </button>
        </div>
    </div>

    <a href="#down" class="arrow-down animated fadeIn delay-1250"><span class="icon-angle-down"></span></a>
</div>

<section>
    <div class="section bg-blue text-center section-featured animatedParent" id="down">
        <div class="container">
            <h2 class="title section-title small-title featured-title animated fadeInDownShort">Latest & Greatest</h2>
            <div class="description animated fadeInUpShort delay-250">
                <p>Attend for less! Take advantage of our special registration launch rate!</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="section text-center section-attend animatedParent">
        <div class="container">
            <h2 class="title section-title animated fadeInDownShort"><?php the_field('section_title_attend', 'option'); ?></h2>
            <div class="description animated fadeInUpShort delay-250">
                <?php the_field('description_attend', 'option'); ?>
            </div>

            <div class="grid-wrap grid-wrap-attend animated fadeInUpShort delay-500">
                <ul class="grid-list">
                    <?php if( have_rows('grids_attend', 'option') ):
                        while ( have_rows('grids_attend', 'option') ) : the_row();
                            $grid_img = get_sub_field('grid_image_attend', 'option');
                            $grid_title = get_sub_field('grid_title_attend', 'option');
                            $grid_desc = get_sub_field('grid_description_attend', 'option'); ?>

                            <li>
                                <div class="grid-item">
                                    <div class="grid-item-img">
                                        <img src="<?php echo $grid_img; ?>">
                                    </div>
                                    <h3 class="grid-title"><?php echo $grid_title; ?></h3>
                                    <div class="description">
                                        <p><?php echo $grid_desc; ?></p>
                                    </div>
                                </div>
                            </li>

                    <?php endwhile; endif;  ?>



                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="section text-center section-gallery animatedParent">
        <div id="carousel-gallery" class="carousel slide carousel-gallery" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner animated fadeInUpShort" role="listbox" id="links">

                <?php
                    $cntr = 0;
                    if( have_rows('list_of_images', 'option') ):
                    while ( have_rows('list_of_images', 'option') ) : the_row(); ?>

                            <div class="item <?php echo ($cntr == 0) ? 'active' : ''; ?>">
                                <ul>
                                    <?php $cnt = 1;  if( have_rows('images_item_gallery', 'option') ):
                                        while ( have_rows('images_item_gallery', 'option') ) : the_row();
                                            $list_item_img = get_sub_field('images_gallery', 'option');

                                            // Image Size To be Used
                                            $gallery_size = 'gallery_img'; // you can replace the value with 'large, medium, thumbnail or full'
                                            $gallery_thumb = $list_item_img ['sizes'][ $gallery_size ];
                                            ?>

                                            <li>
                                                <a href="<?php echo $gallery_thumb; ?>" title="Gallery<?php echo $cnt; ?>">
                                                    <img src="<?php echo $gallery_thumb; ?>">
                                                </a>
                                            </li>
                                    <?php   $cnt++; endwhile; endif;  ?>
                                </ul>
                            </div>

                    <?php $cntr++; endwhile; endif;  ?>


            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-gallery" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left icon-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-gallery" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right icon-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
        </div>
    </div>
</section>

<section>
    <div class="section text-center section-conference animatedParent">
        <div class="container">
            <h2 class="title section-title animated fadeInDownShort"><?php the_field('section_title_conference', 'option'); ?></h2>
            <h3 class="title section-title-small animated fadeIn delay-250"><?php the_field('section_sub_title_conference', 'option'); ?></h3>

            <div class="circle-wrap">
                <div class="big-circle">
                    <p><?php the_field('bubble_price_conference', 'option'); ?> <span><?php the_field('bubble_date_conference', 'option'); ?></span></p>
                </div>
                <div class="circle-icon circle-xlarge big-circle-orange circle-bordered-gray2"></div>
                <div class="circle-icon circle-xlarge big-circle-blue circle-bordered-orange1"></div>

            </div>

            <div class="description animated fadeIn delay-500">
                <?php the_field('description_conference', 'option'); ?>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="section bg-blue text-center section-schedule animatedParent">
        <div class="container">
            <div class="schedule-grid">

                <div class="schedule-grid-line animated"></div>

                <div class="circle-white animated fadeInUpShort delay-250">
                    <p><?php the_field('section_title_schedule', 'option'); ?></p>
                </div>

                <?php
                    $cntr = 1;
                    $delay_cntr = 2;

                    if( have_rows('list_of_schedules', 'option') ):
                        while ( have_rows('list_of_schedules', 'option') ) : the_row();
                            $scheduled = get_sub_field('schedule_date', 'option');
                            $schedule_desc = get_sub_field('schedule_description', 'option'); ?>

                            <div class="schedule-grid-item animated fadeInUpShort delay-<?php echo $delay_cntr * 250; ?>">
                                <div class="<?php echo ($cntr % 2) ? 'pull-right' : 'pull-left'; ?> schedule-grid-description">
                                    <div class="schedule-description">
                                        <h4 class="schedule-date"><?php echo $scheduled; ?></h4>
                                        <div class="description">
                                            <?php echo $schedule_desc; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <?php $delay_cntr++; $cntr++; endwhile; endif;  ?>



                <a href="travel.php" class="circle-black">
                    <p>Travel Info</p>
                    <p class="small-letters">click here</p>
                </a>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="section text-center section-sponsorship animatedParent">
        <div class="container">
            <h2 class="title section-title animated fadeInDownShort"><?php the_field('section_title_sponsor', 'option'); ?></h2>

            <div class="description animated fadeIn delay-250">
                <?php the_field('description_sponsor', 'option'); ?>
            </div>

            <div class="logo-wrap animated fadeInUpShort delay-500">
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
            </div>

            <a href="mailto:<?php the_field('button_link_sponsor', 'option') ?>" class="btn btn-primary"><?php the_field('button_label_sponsor', 'option') ?></a>
        </div>
    </div>
</section>


<section>
    <div class="section text-center section-join animatedParent" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-home.jpg');">
        <div class="container">
            <div class="view-wrapper">

                <div class="join-wrap animated fadeInDownShort">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <?php
                                $cntr = 0;
                                    $residential_slider =  array(
                                        'post_type' => 'testimonials',
                                        'post_status' => 'publish',
                                        'orderby' => 'id',
                                        'order' => 'asc',
                                        'posts_per_page' => -1);

                                    $the_query = new WP_Query( $residential_slider );
                                    while ( $the_query->have_posts() ) :$the_query->the_post();
                                        $img_item = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );?>

                                <div class="item <?php echo ($cntr == 0) ? 'active' : ''; ?>">
                                    <div class="item-img" style="background-image: url('<?php echo $img_item[0]; ?>')"></div>
                                    <div class="item-caption">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qoute.png" class="qoute-img">
                                        <div class="description">
                                            <?php the_content(); ?>
                                        </div>

                                        <p class="author-name"><?php the_title(); ?></p>
                                        <p class="author-title"><?php the_field('author_job_title'); ?></p>
                                    </div>
                                </div>

                            <?php   $cntr++; endwhile; ?>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php for ( $i = 0; $i < $cntr; $i++ ): ?>
                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
                                <?php endfor; ?>
                            </ol>
                        </div>
                    </div>
                </div>
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



<?php get_footer();?>

<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>

