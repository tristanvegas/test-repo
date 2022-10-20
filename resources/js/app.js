import "./bootstrap";
import "./fontawesome";
import "../js/swiper-bundle.min"

import "../sass/app.scss";

import "../css/app.css";
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
                });
            },
            function(){
                $('div.read-more', this).hide();
                $('div', this).animate({
                    height: '10rem',
                });
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
    $(".testimonial-prev").click(function () {
        const prev = $(".card-prev");
        const active = $(".card-active");
        const next = $(".card-next");

        next.addClass("card-hide");
        next.removeClass("card-next");

        active.addClass("card-next");
        active.removeClass("card-active");

        prev.addClass("card-active");
        prev.removeClass("card-prev");

        if (prev.prev().html() == undefined) {
            $(".testimonial-card:last-child").addClass("card-prev");
            $(".testimonial-card:last-child").removeClass("card-hide");
        } else {
            prev.prev().addClass("card-prev");
            prev.prev().removeClass("card-hide");
        }
    });
    $(".testimonial-next").click(function () {
        const prev = $(".card-prev");
        const active = $(".card-active");
        const next = $(".card-next");

        prev.addClass("card-hide");
        prev.removeClass("card-prev");
        active.addClass("card-prev");
        active.removeClass("card-active");
        next.addClass("card-active");
        next.removeClass("card-next");

        if (next.next().html() == undefined) {
            $(".testimonial-card:first-child").addClass("card-next");
            $(".testimonial-card:first-child").removeClass("card-hide");
        } else {
            next.next().addClass("card-next");
            next.next().removeClass("card-hide");
        }

        // console.log(prev.next());
        // console.log(active.next());
        // console.log(next.next());
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
