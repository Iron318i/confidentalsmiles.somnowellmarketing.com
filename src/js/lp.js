+function ($) {
    if ($.fn.owlCarousel) {
        var slidePost = $('.recent-treatments');
        slidePost.owlCarousel({
            items: 3,
            margin: 0,
            loop: true,
            autoplay: true,
            autoplayTimeout: 7000,
            smartSpeed: 1500,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                601: {
                    items: 2
                },
                768: {
                    items: 3
                },
            }
        });
    }
}(jQuery);