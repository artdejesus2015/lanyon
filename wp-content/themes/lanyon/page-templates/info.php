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
                        <h5>Who Will Be at Lanyon Live</h5>
                        <ul>
                            <li>Marketing Directors, CMOs, Programs Managers</li>
                            <li>Global Events Directors, Event Marketing Managers, Conference Directors</li>
                            <li>Corporate Meetings Directors, Strategic Meetings Management Specialists, Sourcing Directors</li>
                            <li>Corporate Travel Buyers, Procurement Executives, Supply Chain Managers, Corporate Travel Intermediaries</li>
                            <li>Hotel Sales Executives, Global Distribution and Strategy Directors</li>
                        </ul>
                    </div>

                    <h2 class="title section-title">What’s in it for me?</h2>
                    <div class="grid-info">
                        <div class="grid-info-item">

                            <div class="description copy">
                                <h5>CMO, Marketing Director, Programs Manager</h5>
                                <p>You oversee all areas of marketing within your organization, including your brand presence at trade shows and other conventions. At Lanyon Live 2015, you’ll get the latest tips to drive more pipeline from your events, as make lasting connections with like minded industry leaders.</p>

                                <h6>Connect with:</h6>
                                <p>Mentors (or mentees!), marketing professionals facing similar challenges and offering solutions.</p>
                            </div>

                        </div>

                        <div class="grid-info-item">
                            <div class="description copy">
                                <h5>Global Events Director, Event Marketing Manager, Conference Director</h5>
                                <p>You’re charged with creating a great experience for your attendees, partners and sales staff, while demonstrating how your events deliver real business results and ROI. At Lanyon Live 2015, you’ll learn from experienced leaders in the industry and make connections that will serve you throughout your career.</p>
                                <h6>Connect with:</h6>
                                <p>Fellow event planners who face similar challenges and can offer innovative solutions, hoteliers who are looking to win business from event planners</p>
                            </div>

                        </div>

                        <div class="grid-info-item">
                            <div class="description copy">
                                <h5>Corporate Meetings Director, Strategic Meetings Management Specialist</h5>
                                <p>You’re the ultimate multi-tasker. Every day, you juggle your attendees’ needs and your organization’s business objectives — all while staying on-budget and reporting ROI. At Lanyon Live 2015, you’ll connect with and learn from experienced leaders in the industry and make connections that will serve you throughout your career.</p>
                                <h6>Connect with:</h6>
                                <p>Professionals running global SMM programs in an increasingly compantative landscape. Hoteliers looking to build relationships with corporate meeting planners.</p>
                            </div>

                        </div>

                        <div class="grid-info-item">
                            <div class="description copy">
                                <h5>Corporate Travel Buyer, Supply Chain Manager, Corporate Travel Intermediary</h5>
                                <p>Lanyon software makes your job easier and saves you money by helping you negotiate with suppliers, while giving you a 360º view of your travel spend.
                                    At Lanyon Live 2015, you’ll learn directly from the experts and creators how to get the most out of our products — making a working solution work even better.</p>
                                <h6>Connect with:</h6>
                                <p>Field experts who’ve overcome industry challenges and can share results. Hotel professionals eager to build relationships with corporate travel buyers</p>
                            </div>

                        </div>

                        <div class="grid-info-item">
                            <div class="description copy">
                                <h5>Procurement Director, Global Supply Chain Manager</h5>
                                <p>Meetings and travel play a vital role in your company. They’re also a big expense, and it’s important that you have control over those costs. Our software helps with that — a lot. At Lanyon Live 2015, you’ll trade best practices with other experts and learn innovative ways to make our software work even better for your organization — and make valuable contacts in the process.</p>
                                <h6>Connect with:</h6>
                                <p>Meeting and travel professionals eager to share challenges and best practices, managers who are leading travel and meeting program consolidation, hospitality professionals with worldwide reach </p>
                            </div>

                        </div>

                        <div class="grid-info-item">
                            <div class="description copy">
                                <h5>Hotel Sales Executive, Global Distribution and Strategy Director</h5>
                                <p>Corporate transient and group business is the most profitable sector for hotels — but one of the most challenging to win. Like our leading-edge software, Lanyon Live connects hoteliers with decision-makers in the transient and group travel business. </p>
                                <h6>Connect with:</h6>
                                <p>Meetings, events and travel professionals from around the globe, fellow hospitality professionals sharing best practices for driving transient and group business</p>
                            </div>

                        </div>

                        <div class="grid-info-item">
                            <div class="description copy">
                                <h5>Housing Director, Destination Services Manager, Director of Market Strategy</h5>

                                <p>You work hard to attract events and meetings to your destination.  Lanyon’s software helps you attract corporate planners to your area and partner with local and regional hotels to simplify housing management — even for the largest, most complex events.  At Lanyon Live 2015, you’ll hear about industry trends while you make new contacts.  And Lanyon experts will be there to help you find new ways to be even more effective.</p>
                                <h6>Connect with:</h6>
                                <p>Corporate event and meeting planning executives who seek to improve their meetings and events.  Hotel executives who want to build relationships.</p>
                            </div>

                        </div>
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