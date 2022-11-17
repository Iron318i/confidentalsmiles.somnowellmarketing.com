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
    $('.team-testimonials').owlCarousel({
        responsiveClass: true,
        dots: true,
        nav: false,
        margin: 16,
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
            },
            1280: {
                items: 3,
                dots: false,
                nav: true
            },
        }
    });
    $(window).on("load resize", function () {
        $('.treatment p').samesizr();
    });

    $('a.toggle').click(function (e) {
        e.preventDefault();

        let $this = $(this);
        $('.toggle').removeClass('active');
        $this.toggleClass('active');

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });

    $(document).ready(function () {
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
        //var totalslides = 10;
        var syncedSecondary = true;

        bigimage
            .owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: true,
                autoplay: false,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.1 43.4" fill="currentColor"><path d="M0 21.7L21.7 0l1.4 1.4L2.7 21.7 23.1 42l-1.4 1.4L0 21.7z"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.1 43.4" fill="currentColor"><path d="M1.4 43.4L0 42l20.4-20.3L0 1.4 1.4 0l21.7 21.7L1.4 43.4z"></path></svg>']
            })
            .on("changed.owl.carousel", syncPosition);

        thumbs
            .on("initialized.owl.carousel", function () {
                thumbs
                    .find(".owl-item")
                    .eq(0)
                    .addClass("current");
            })
            .owlCarousel({
                items: 4,
                dots: true,
                nav: true,
                margin: 30,
                navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.1 43.4" fill="currentColor"><path d="M0 21.7L21.7 0l1.4 1.4L2.7 21.7 23.1 42l-1.4 1.4L0 21.7z"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.1 43.4" fill="currentColor"><path d="M1.4 43.4L0 42l20.4-20.3L0 1.4 1.4 0l21.7 21.7L1.4 43.4z"></path></svg>'],
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: 4,
                responsiveRefreshRate: 100
            })
            .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
            //if loop is set to false, then you have to uncomment the next line
            //var current = el.item.index;

            //to disable loop, comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            //to this
            thumbs
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumbs.find(".owl-item.active").length - 1;
            var start = thumbs
                .find(".owl-item.active")
                .first()
                .index();
            var end = thumbs
                .find(".owl-item.active")
                .last()
                .index();

            if (current > end) {
                thumbs.data("owl.carousel").to(current, 100, true);
            }
            if (current < start) {
                thumbs.data("owl.carousel").to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                bigimage.data("owl.carousel").to(number, 100, true);
            }
        }

        thumbs.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            bigimage.data("owl.carousel").to(number, 300, true);
        });
    });


    $(document).ready(function () {
        size_li = $(".video-testimonials .col-md-6").size();
        x = 4;
        $('.video-testimonials .col-md-6:lt(' + x + ')').show();
        $('#loadMoreVideos').click(function () {
            x = (x + 4 <= size_li) ? x + 4 : size_li;
            $('.video-testimonials .col-md-6:lt(' + x + ')').slideDown('slow');
        });
        $('#showLess').click(function () {
            x = (x - 4 < 0) ? 4 : x - 4;
            $('.video-testimonials .col-md-6').not(':lt(' + x + ')').hide();
        });
    });
}(jQuery);