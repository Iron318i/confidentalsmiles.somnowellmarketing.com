+function ($) {
    $('.recent-treatments').owlCarousel({
        responsiveClass: true,
        dots: false,
        nav: true,
        margin: 30,
        items: 1,
        loop: false,
        autoplay: false,
        autoplayTimeout: 3000,
        responsive: {
            576: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });
}(jQuery);