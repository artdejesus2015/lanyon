!function(e,a,$){"use strict";$(e).scroll(function(){$(this).scrollTop()>1?($(".navbar-menu").addClass("navbar-animated"),$("body").addClass("is-show")):($(".navbar-menu").removeClass("navbar-animated"),$("body").addClass("is-show"))}),$(".navbar-menu-toggle").click(function(){$(this).addClass("active"),$("body").addClass("cbp-spmenu-push-toleft"),$(".mobile-nav").addClass("cbp-spmenu-open")}),$(".menu-toggle").click(function(){$(".navbar-menu-toggle").removeClass("active"),$("body").removeClass("cbp-spmenu-push-toleft"),$(".mobile-nav").removeClass("cbp-spmenu-open")}),$(function(){$('.banner-home a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html, body").animate({scrollTop:e.offset().top},1e3),!1}})}),$(".carousel-gallery").carousel({interval:!1}),a.getElementById("links").onclick=function(a){a=a||e.event;var n=a.target||a.srcElement,s=n.src?n.parentNode:n,t={index:s,event:a},o=this.getElementsByTagName("a");blueimp.Gallery(o,t)}}(window,document,jQuery);