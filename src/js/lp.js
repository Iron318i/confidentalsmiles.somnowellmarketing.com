+function ($) {
    $('.recent-treatments').owlCarousel({
        responsiveClass: true,
        dots: true,
        nav: false,
        margin: 10,
        items: 1,
        loop: false,
        autoplay: false,
        autoplayTimeout: 3000,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.1 43.4" fill="currentColor"><path d="M0 21.7L21.7 0l1.4 1.4L2.7 21.7 23.1 42l-1.4 1.4L0 21.7z"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.1 43.4" fill="currentColor"><path d="M1.4 43.4L0 42l20.4-20.3L0 1.4 1.4 0l21.7 21.7L1.4 43.4z"></path></svg>'],
        responsive: {
            576: {
                items: 2
            },
            768: {
                items: 2,
                margin: 35,
            },
            1280: {
                items: 3,
                margin: 35,
                dots: false,
                nav: true
            },
        }
    });
    $(window).on("load resize", function () {
        $('.treatment p').samesizr();
    });
}(jQuery);