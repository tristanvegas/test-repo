import "./bootstrap";
import "./fontawesome";
import "./testimonial";

import "../sass/app.scss";

import "../css/app.css";
import "../css/testimonial.css";
import "../css/font/raleway.css";
import "../css/font/abel.css";

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


});
