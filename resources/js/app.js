import "./bootstrap";
import "./fontawesome";
// import "./swiper-bundle.min"
import "./gallery";
import "./testimonial";

import "../sass/app.scss";

import "../css/app.css";
import "../css/gallery.css";
import "../css/testimonial.css";
import "../css/font/raleway.css";
import "../css/font/abel.css";
// import "../css/swiper-bundle.min.css"
// import "../css/swiper.css"

$(document).ready(function () {
    $('.feat-container').each(function(){
        $(this).hover(
            function(){
                $('div.read-more', this).show();
                $('div', this).animate({
                    height: '12rem',
                }, 50);
            },
            function(){
                $('div.read-more', this).hide();
                $('div', this).animate({
                    height: '10rem',
                }, 50);
            }
        );
    });

    $(".toTop").click(function () {
        this.scrollTo = 0;
    });

    let count = 0;
    $(window).scroll(function(){
        if(isVisible($('#counts')) && count == 0){
            $('.count-num').each(function () {
                count++;
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        }

        if($(window).scrollTop() < ($('#services').offset().top - 100)){
            changeActiveMenu($('.nav-link.hero'));
        }else if($(window).scrollTop() < $('#featuredWork').offset().top - 100){
            changeActiveMenu($('.nav-link.services'));
        }else if($(window).scrollTop() < $('#aboutUs').offset().top - 100){
            changeActiveMenu($('.nav-link.featuredWork'));
        }else{
            changeActiveMenu($('.nav-link.aboutUs'));
        }
    });
});

function isVisible($el) {
    const winTop = $(window).scrollTop();
    const winBottom = winTop + $(window).height();
    const elTop = $el.offset().top;
    const elBottom = elTop + $el.height();
    return ((elBottom <= winBottom) && (elTop >= winTop));
}
function changeActiveMenu(e){
    $('.active-menu').removeClass('active-menu');
    e.parent().addClass('active-menu');
}
