$('.gallery-control-next').click(function(){
    galleryNext();
    galleryThumbNext();
});
$('.gallery-control-prev').click(function(){
    galleryPrev();
    galleryThumbPrev();
});
$('.gallery-thumb-item').click(async function(){
    const img = $('.gallery-active');
    const difference = img.attr('data-gal-id') - $(this).attr('data-gal-id');

    for(let i = 0;i < Math.abs(difference);i++){
        if(difference < 0){
            galleryNext();
            galleryThumbNext();
        }else{
            galleryPrev();
            galleryThumbPrev();
        }
        await sleep(300);
    }
});
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
window.setInterval(function(){
    galleryNext();
    galleryThumbNext();
}, 5000);
function galleryNext(){
    const hideLeft = $('.gallery-hidden-left');
    const prev = $('.gallery-prev');
    const active = $('.gallery-active');
    const next = $('.gallery-next');
    const hideRight = $('.gallery-hidden-right');

    $('.gallery-item').removeAttr('data-gal-id');

    hideLeft.addClass('gallery-hidden');
    hideLeft.removeClass('gallery-hidden-left');
    hideLeft.attr('data-gal-id', 1);

    prev.addClass('gallery-hidden-left');
    prev.removeClass('gallery-prev');
    prev.attr('data-gal-id', 2);

    active.addClass('gallery-prev');
    active.removeClass('gallery-active');
    active.attr('data-gal-id', 3);

    next.addClass('gallery-active');
    next.removeClass('gallery-next');
    next.attr('data-gal-id', 4);

    hideRight.addClass('gallery-next');
    hideRight.removeClass('gallery-hidden-right');
    hideRight.attr('data-gal-id', 5);

    if (hideRight.next().html() == undefined) {
        $(".gallery-item:first-child").addClass("gallery-hidden-right");
        $(".gallery-item:first-child").removeClass("gallery-hidden");
        $(".gallery-item:first-child").attr('data-gal-id', 6);
        $(".gallery-item:first-child").next().attr('data-gal-id', 7);
    } else {
        hideRight.next().addClass("gallery-hidden-right");
        hideRight.next().removeClass("gallery-hidden");
        hideRight.next().attr('data-gal-id', 6);

        if(hideRight.next().next().html() == undefined){
            $(".gallery-item:first-child").attr('data-gal-id', 7);
        }else{
            hideRight.next().next().attr('data-gal-id', 7);
        }
    }
}
function galleryPrev(){
    const hideLeft = $('.gallery-hidden-left');
    const prev = $('.gallery-prev');
    const active = $('.gallery-active');
    const next = $('.gallery-next');
    const hideRight = $('.gallery-hidden-right');

    $('.gallery-item').removeAttr('data-gal-id');

    hideRight.addClass('gallery-hidden');
    hideRight.removeClass('gallery-hidden-right');
    hideRight.attr('data-gal-id', 7);;

    next.addClass('gallery-hidden-right');
    next.removeClass('gallery-next');
    next.attr('data-gal-id', 6);

    active.addClass('gallery-next');
    active.removeClass('gallery-active');
    active.attr('data-gal-id', 5);

    prev.addClass('gallery-active');
    prev.removeClass('gallery-prev');
    prev.attr('data-gal-id', 4);

    hideLeft.addClass('gallery-prev');
    hideLeft.removeClass('gallery-hidden-left');
    hideLeft.attr('data-gal-id', 3);

    if (hideLeft.prev().html() == undefined) {
        $(".gallery-item:last-child").addClass("gallery-hidden-left");
        $(".gallery-item:last-child").removeClass("gallery-hidden");
        $(".gallery-item:last-child").attr('data-gal-id', 2);
        $(".gallery-item:last-child").prev().attr('data-gal-id', 1);
    } else {
        hideLeft.prev().addClass("gallery-hidden-left");
        hideLeft.prev().removeClass("gallery-hidden");
        hideLeft.prev().attr('data-gal-id', 2);
        if(hideLeft.prev().prev().html() == undefined){
            $(".gallery-item:last-child").attr('data-gal-id', 1);
        }else{
            hideLeft.prev().prev().attr('data-gal-id', 1);
        }
    }
}

const thumbClasses = [
    'gallery-thumb-hidden',
    'gallery-thumb-prev-3',
    'gallery-thumb-prev-2',
    'gallery-thumb-prev-1',
    'gallery-thumb-active',
    'gallery-thumb-next-1',
    'gallery-thumb-next-2',
    'gallery-thumb-next-3',
];
function galleryThumbPrev(){
    const prev3 = $('.gallery-thumb-prev-3');
    const prev2 = $('.gallery-thumb-prev-2');
    const prev1 = $('.gallery-thumb-prev-1');
    const active = $('.gallery-thumb-active');
    const next1 = $('.gallery-thumb-next-1');
    const next2 = $('.gallery-thumb-next-2');
    const next3 = $('.gallery-thumb-next-3');

    $('.gallery-thumb-item').removeAttr('data-gal-id');

    next3.addClass(thumbClasses[0]);
    next3.removeClass(thumbClasses[7]);

    next2.addClass(thumbClasses[7]);
    next2.removeClass(thumbClasses[6]);
    next2.attr('data-gal-id', 7);

    next1.addClass(thumbClasses[6]);
    next1.removeClass(thumbClasses[5]);
    next1.attr('data-gal-id', 6);

    active.addClass(thumbClasses[5]);
    active.removeClass(thumbClasses[4]);
    active.attr('data-gal-id', 5);

    prev1.addClass(thumbClasses[4]);
    prev1.removeClass(thumbClasses[3]);
    prev1.attr('data-gal-id', 4);

    prev2.addClass(thumbClasses[3]);
    prev2.removeClass(thumbClasses[2]);
    prev2.attr('data-gal-id', 3);

    prev3.addClass(thumbClasses[2]);
    prev3.removeClass(thumbClasses[1]);
    prev3.attr('data-gal-id', 2);

    if(prev3.prev().html() == undefined){
        $('.gallery-thumb-item:last-child').addClass(thumbClasses[1]);
        $('.gallery-thumb-item:last-child').removeClass(thumbClasses[0]);
        $('.gallery-thumb-item:last-child').attr('data-gal-id', 1);
    }else{
        prev3.prev().addClass(thumbClasses[1]);
        prev3.prev().removeClass(thumbClasses[0]);

        if(prev3.prev().html() == undefined){
            $('.gallery-thumb-item:last-child').attr('data-gal-id', 1);
        }else{
            prev3.prev().attr('data-gal-id', 1);
        }
    }

    // console.log(thumbs);
}
function galleryThumbNext(){
    const prev3 = $('.gallery-thumb-prev-3');
    const prev2 = $('.gallery-thumb-prev-2');
    const prev1 = $('.gallery-thumb-prev-1');
    const active = $('.gallery-thumb-active');
    const next1 = $('.gallery-thumb-next-1');
    const next2 = $('.gallery-thumb-next-2');
    const next3 = $('.gallery-thumb-next-3');

    $('.gallery-thumb-item').removeAttr('data-gal-id');

    prev3.addClass(thumbClasses[0]);
    prev3.removeClass(thumbClasses[1]);

    prev2.addClass(thumbClasses[1]);
    prev2.removeClass(thumbClasses[2]);
    prev2.attr('data-gal-id', 1);

    prev1.addClass(thumbClasses[2]);
    prev1.removeClass(thumbClasses[3]);
    prev1.attr('data-gal-id', 2);

    active.addClass(thumbClasses[3]);
    active.removeClass(thumbClasses[4]);
    active.attr('data-gal-id', 3);

    next1.addClass(thumbClasses[4]);
    next1.removeClass(thumbClasses[5]);
    next1.attr('data-gal-id', 4);

    next2.addClass(thumbClasses[5]);
    next2.removeClass(thumbClasses[6]);
    next2.attr('data-gal-id', 5);

    next3.addClass(thumbClasses[6]);
    next3.removeClass(thumbClasses[7]);
    next3.attr('data-gal-id', 6);

    if(next3.next().html() == undefined){
        $('.gallery-thumb-item:first-child').addClass(thumbClasses[7]);
        $('.gallery-thumb-item:first-child').removeClass(thumbClasses[0]);
        $('.gallery-thumb-item:first-child').attr('data-gal-id', 7);
    }else{
        next3.next().addClass(thumbClasses[7]);
        next3.next().removeClass(thumbClasses[0]);
        if(next3.next().html() == undefined){
            $('.gallery-thumb-item:first-child').attr('data-gal-id', 7);
        }else{
            next3.next().attr('data-gal-id', 7);
        }
    }


    // console.log(thumbs);
}
