<footer>
    <div class="footer">
        <div class="container">
            <ul class="list social-media-list">

                <?php
                $cntr = 1;
                if( have_rows('social_media', 'option') ):
                    while ( have_rows('social_media', 'option') ) : the_row();
                        $media_img = get_sub_field('media_image', 'option');
                        $media_link = get_sub_field('media_link', 'option'); ?>

                        <li class="icon icon<?php echo $cntr; ?>"><a href="<?php echo $media_link; ?>"><span class="<?php echo $media_img; ?>"></span></a></li>

                <?php $cntr++; endwhile; endif;  ?>
            </ul>

            <p>© 2016 Lanyon Live. All Rights Reserved. Lanyon Live is organized by <a href="https://www.lanyon.com/">Lanyon</a></p>
        </div>
    </div>
</footer>



<?php if(get_field('video_link', 'option')): ?>
<!-- Modal -->
<div class="modal modal-video2015 fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="560" height="315" src="<?php the_field('video_link', 'option'); ?>" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<?php wp_footer(); ?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>