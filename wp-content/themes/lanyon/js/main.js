
(function(window, document, $) {
    'use strict';
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1){
                $('.navbar-menu').addClass('navbar-animated');
                $('body').addClass("is-show");
            }
            else{
                $('.navbar-menu').removeClass('navbar-animated');
                $('body').addClass("is-show");
            }
        });

        $(".navbar-menu-toggle").click(function() {
            $(this).addClass("active");
            $('body').addClass("cbp-spmenu-push-toleft");
            $('.mobile-nav').addClass("cbp-spmenu-open");
        });

        $(".menu-toggle").click(function() {
            $('.navbar-menu-toggle').removeClass("active");
            $('body').removeClass("cbp-spmenu-push-toleft");
            $('.mobile-nav').removeClass("cbp-spmenu-open");
        });



        $(function() {
            $('.banner-home a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        // Gallery Carousel
        $('.carousel').carousel({
            interval: false
        })

        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };



})(window, document, jQuery);

