import "./bootstrap";
import "./fontawesome";
import "../js/swiper-bundle.min"
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
    $('.count-num').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    // Thumbnail
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 5,
        slidesPerGroup: 5,
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
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        thumbs: {
        swiper: swiper,
        },
    });
});
