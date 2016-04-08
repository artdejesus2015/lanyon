function isIE() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
        return true;
    else                 // If another browser, return 0
        return false;

    return false;
}

(function(window, document, $) {
    'use strict';

    if(isIE() || navigator.userAgent.match(/Windows Phone/i) || (/Edge\/12./i.test(navigator.userAgent)) || (/Edge\/13./i.test(navigator.userAgent)) || (/Edge\/14./i.test(navigator.userAgent))){

        jQuery('body').addClass('IEbrowser');

    }
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
    $('.carousel-gallery').carousel({
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

