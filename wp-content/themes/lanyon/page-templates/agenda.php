<?php
/**
 * Template Name: Agenda
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
                <p><?php the_content(); ?></p>
            </div>
        </div>

        <h1 class="title banner-title animated fadeInUpShort"><?php the_title(); ?></h1>
    </div>

    <section>
        <div class="section text-center section-intro section-attend animatedParent animateOnce">
            <div class="container">
                <h2 class="title section-title animated fadeIn delay-500">General Agenda</h2>
                <div class="general-list animated fadeInUpShort delay-750">
                    <?php
                    query_posts(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'order'        => 'asc'
                    ));
                    if ( have_posts() ) : ?>
                        <ul>
                            <?php while(have_posts()) : the_post(); ?>
                                <li>
                                    <div class="general-list-holder">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php $dates = DateTime::createFromFormat('Ymd', get_field('time')); ?>
                                            <h1><?php echo $dates->format('l'); ?></h1>
                                            <p><?php echo $dates->format('F j'); ?></p>
                                        </a>
                                    </div>
                                </li>
                            <?php endwhile; wp_reset_query(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if (get_field('show_schedule_at_a_glance_section')): ?>
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
    <?php endif; ?>

    <section>
        <div class="banner banner-sub banner-subcontent" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-agenda-sub.jpg');">
            <div class="banner-caption animatedParent animateOnce">
                <h1 class="title banner-title-subpage animated fadeInDownShort"><?php the_field('content_title'); ?></h1>
                <div class="gap-20"></div>
                <div class="description animated fadeInUpShort">
                    <?php the_field('content_description'); ?>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="section text-center section-proposal animatedParent animateOnce">
            <div class="container">
                <h2 class="title section-title animated fadeInDownShort">Call for Proposals</h2>
                <p class="deadline-text animated fadeIn delay-500">May 1, 2016</p>

                <div class="description copy animated fadeIn delay-750">

                    <h5>What is Lanyon Live?</h5>
                    <p>Lanyon is the leading provider of software solutions for corporate meetings, events and travel programs. Every day, we help thousands of organizations and hotels around the world - including over 80 percent of the Fortune 100, thousands of small and medium businesses, and over 100,000 hotels - to automate manual tasks, engage their customers, reduce costs and grow revenue in ways they never thought possible. Lanyon Live brings together leadership and decision makers from across the meetings, events, travel and hotel industries. For two and a half days, they will network with global peers and hear from industry experts in sessions focused on thought leadership and best practices. You can be a part of this year’s program! We are very interested in innovative presentation formats including case studies, panel discussions, and other cutting-edge learning formats. We welcome all new ideas and encourage forward-thinking presentations.</p>

                    <h3 class="content-title">Audience</h3>
                    <p>Since Lanyon provides services to both supply and demand side, we have attendees from all areas of the meetings, events and travel industries, including:</p>

                    <ul>
                        <li>Marketing directors, CMOs, programs managers</li>
                        <li>Global events directors, event marketing managers, conference directors</li>
                        <li> Corporate meetings directors, strategic meetings management specialists, sourcing directors</li>
                        <li> Corporate travel buyers, procurement executives, supply chain managers, corporate travel intermediaries</li>
                        <li>Hotel sales executives, global distribution and strategy directors</li>
                        <li> Destination marketing, CVB and meeting management company executives</li>
                    </ul>

                    <h5>Education: </h5>
                    <p>All program sessions are 60 minutes in length and are designed to share information on industry trends, insights, opportunities and education specific to the meetings, events and travel industry. Session formats may include: facilitated discussions, case studies, hands-on learning, panels, etc. We challenge you to submit unique topic ideas as well as unique formats for delivery. All education will take place on Wednesday & Thursday, October 26-27, 2016. </p>

                    <h5>More information:</h5>

                    <ul>
                        <li>Submission does not guarantee inclusion</li>
                        <li>Session times are 45-60 minutes in length and audience size will vary (20 to 100 ppl)</li>
                        <li> Lanyon may record session; presenters who grant Lanyon permission to record are given preference in the selection process</li>
                        <li> Complimentary registration; speakers are responsible for all travel costs</li>
                        <li>Important Dates:
                            <ul class="under-list">
                                <li><p>April 4, 2016 </p>Open for submissions</li>
                                <li><p>May 1, 2016 </p>Deadline for submitting proposal</li>
                                <li><p>May 31, 2016 </p>Notification of accepted proposals</li>
                                <li><p>May, 2016 </p>Speaker Portal Opens</li>
                                <li><p>September 30, 2016 </p>Presentations, bio, headshot due on speaker portal</li>
                            </ul>
                        </li>
                    </ul>

                    <p>If you have questions, please contact LanyonLive@Lanyon.com. </p>

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