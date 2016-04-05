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
                <div class="circle-wrap">
                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray1"></div>
                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray2"></div>
                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray3"></div>
                    <div class="circle-icon circle-xsmall circle-bordered circle-bordered-gray circle-bordered-gray4"></div>

                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray5"></div>
                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray6"></div>
                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray7"></div>
                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray8"></div>
                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray9"></div>
                    <div class="circle-icon circle-small circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray10"></div>

                    <div class="circle-icon circle-medium circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray11"></div>
                    <div class="circle-icon circle-medium circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray12"></div>

                    <div class="circle-icon circle-large circle-bordered circle-bordered-thick circle-bordered-gray circle-bordered-gray13"></div>

                    <div class="circle-icon big-circle-small circle-bordered-orange circle-bordered-orange1"><p>persona 7</p></div>
                    <div class="circle-icon big-circle-medium circle-bordered-orange circle-bordered-orange2"><p>persona 12</p></div>
                    <div class="circle-icon big-circle-large circle-bordered-orange circle-bordered-orange3"><p>persona 3</p></div>

                    <div class="circle-icon big-circle-small circle-bordered-green circle-bordered-green1"><p>persona 4</p></div>
                    <div class="circle-icon big-circle-small circle-bordered-green circle-bordered-green2"><p>persona 6</p></div>
                    <div class="circle-icon big-circle-medium circle-bordered-green circle-bordered-green3"><p>persona 8</p></div>
                    <div class="circle-icon big-circle-medium circle-bordered-green circle-bordered-green4"><p>persona 9</p></div>
                    <div class="circle-icon big-circle-large circle-bordered-green circle-bordered-green5"><p>persona 2</p></div>

                    <div class="circle-icon big-circle-small circle-bordered-blue circle-bordered-blue1"><p>persona 5</p></div>
                    <div class="circle-icon big-circle-small circle-bordered-blue circle-bordered-blue2"><p>persona 10</p></div>
                    <div class="circle-icon big-circle-medium circle-bordered-blue circle-bordered-blue3"><p>persona 11</p></div>
                    <div class="circle-icon big-circle-large circle-bordered-blue circle-bordered-blue4"><p>persona 1</p></div>

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

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Who’s Lanyon?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body">
                                    <p>Lanyon believes that when people get together amazing things can happen. Relationships are built and business gets done. We’ve created the industry's leading cloud-based software for managing corporate meetings, events and travel programs, so that we can help you do what you do best. Only better. </p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        What is Lanyon Live 2016?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body">
                                    <p>Lanyon Live brings together leaders and decision-makers from across the meetings, events, travel and hotel industries. For two and a half days, attendees network with global peers and hear from industry experts in sessions focused on thought leadership and best practices.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Where is Lanyon Live 2016?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body">
                                    <p>Renaissance Dallas Hotel <br>
                                        Dallas, Texas </p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        When is Lanyon Live 2016?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="panel-body">
                                    <p>Tuesday, October 25 through Thursday, October 27</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        I want to go to Lanyon Live 2016. How much does it cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body">
                                    <p>Regular Price: $499 <br>
                                        Late: $599<br>
                                        Onsite: $699</p>

                                    <p> Please refer to your invitation for any special offers. If you have questions, please contact your Lanyon representative.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading6">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        That’s a great price! What’s included with my ticket?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                <div class="panel-body">
                                    <p>Admission to all keynote, general and breakout sessions, access to the expanded [Lanyon Tech Pavilion], invitations to evening events and celebrations Tuesday and Wednesday night, conference meals — breakfast and lunch — Wednesday and Thursday.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading7">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        Why should I attend Lanyon Live 2016?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p>At Lanyon Live, you’ll connect with leaders and decision-makers from across the meetings, events, travel and hotel industries. You’ll make lasting connections with global peers and learn from industry experts in sessions focused on thought leadership and best practices.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading8">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        What’s the recommended attire for the conference?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                <div class="panel-body">
                                    <p>Business casual. </p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading9">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                        What’s the weather like in Dallas in October?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                <div class="panel-body">
                                    <p>Dallas weather is notoriously unpredictable, but fall temperatures typically vary from 56°F to 72°F. We’re looking forward to beautiful weather – though you should pack an umbrella just in case.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading10">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        Who from my organization should attend the conference?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                <div class="panel-body">
                                    <p>Whether you’re a meetings or event planner, a procurement specialist, a travel manager or a hotelier, you’re sure to find something of value at Lanyon Live 2016. In this industry, we succeed when we all work together — so let’s connect!</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading11">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                        How do I get from the airport to the Renaissance Dallas Hotel?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                <div class="panel-body">
                                    <p>From Dallas Love Field, there are a number of transportation options to get you to the Renaissance Dallas Hotel, including taxi, car rental and limousine services. Average cab fares range from $20 - $30.</p>

                                    <p>From DFW International, cabs are easily available and charge around $50 to get to the hotel. A number of shuttle services are also available.</p>

                                    <p>Another option? Dallas airports (Both DFW and Dallas Love) accommodate rideshare services – Lyft or Uber – so you can get curbside pickup.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading12">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                        How do I book my hotel reservation, and what’s the cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                <div class="panel-body">
                                    <p> Upon completing your registration, you’ll be directed to book your hotel within our room block using Lanyon Passkey. Lanyon has a negotiated room rate of $229.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading13">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                        Do I need to pre-register for sessions?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                <div class="panel-body">
                                    <p>We’ll notify you as soon as session registration is available. Stay tuned!</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading14">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                        I have dietary restrictions. Can you accommodate me?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                <div class="panel-body">
                                    <p>Absolutely! Just let us know about your dietary restrictions during the registration process, and we’ll take it from there.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading15">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                        Can I transfer my ticket to someone else?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                <div class="panel-body">
                                    <p>Yes! You may transfer your ticket to another representative from your company. As the current registrant, please email us, and we’ll help you make the transfer.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading16">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                        Can I get a refund on my ticket?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                                <div class="panel-body">
                                    <p>No, tickets are nonrefundable but can be transferred to another representative from your company.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading17">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                        Can I apply to be a speaker? Or suggest someone as a speaker?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                                <div class="panel-body">
                                    <p>Please <a href="mailto:lanyonlive@lanyon.com">email us</a> if you have interest in speaking at Lanyon Live or would like to suggest someone to speak.</p>

                                </div>
                            </div>
                        </div>

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

                    <a href="#" class="btn btn-primary btn-mw btn-bordered">watch 2015 recap</a>

                </div>
            </div>
        </div>
    </section>


<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer();