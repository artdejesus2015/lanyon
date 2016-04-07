<footer>
    <div class="footer">
        <div class="container">
            <ul class="list social-media-list">
                <li class="icon icon1"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="icon icon2"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="icon icon3"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="icon icon4"><a href="#"><span class="icon-linkedin"></span></a></li>
            </ul>

            <p>© 2016 Lanyon Live. All Rights Reserved. Lanyon Live is organized by <a href="#">Lanyon</a></p>
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