import "./bootstrap";
import "./fontawesome";
import "./swiper-bundle.min"
import "./testimonial";

import "../sass/app.scss";

import "../css/app.css";
import "../css/testimonial.css";
import "../css/font/raleway.css";
import "../css/font/abel.css";
import "../css/swiper-bundle.min.css"
import "../css/swiper.css"

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

        if(isVisible($('#hero'))){
            changeActiveMenu($('.nav-link.hero'));
        }else if(isVisible($('#services'))){
            changeActiveMenu($('.nav-link.services'));
        }else if(isVisible($('#featuredWork'))){
            changeActiveMenu($('.nav-link.featuredWork'));
        }else if(isVisible($('#aboutUs'))){
            changeActiveMenu($('.nav-link.aboutUs'));
        }
    });

    // Thumbnail
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 6,
        // slidesPerGroup: 5,
        freeMode: true,
        watchSlidesProgress: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    // carousel inner
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        thumbs: {
        swiper: swiper,
        },
        // autoplay: {
        //   delay: 2500,
        //   disableOnInteraction: false,
        // },
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
    console.log(e.html());
    $('.active-menu').removeClass('active-menu');
    e.parent().addClass('active-menu');
}
