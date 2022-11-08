jQuery(document).ready(function(){

	jQuery("#menuzord").menuzord({
		align: "right",
		scrollable: true
	});
	jQuery(".js-video-button").modalVideo({
		youtube:{
			controls:0,
			nocookie: true
		}
	});

	jQuery('.toggle').click(function() {
	    jQuery(this).toggleClass('toggle-active');
	    jQuery('.overlay').toggleClass('nav-active');
	});

	jQuery('#cssmenu li.active').addClass('open').children('ul').show();
	jQuery('#cssmenu li.has-sub>a').on('click', function(){
		jQuery(this).removeAttr('href');
		var element = jQuery(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp(200);
		} else {
			element.addClass('open');
			element.children('ul').slideDown(200);
			element.siblings('li').children('ul').slideUp(200);
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp(200);
		}
	});

	jQuery('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		centerMode: false,
		asNavFor: '.slider-nav'
	});
	jQuery('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		arrows: true,
		centerMode: false,
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: false
			}
    	},
		
		{
			breakpoint: 900,
			settings: {
		        slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
		        slidesToShow: 3,
				slidesToScroll: 1
			}
		},
	    {
			breakpoint: 600,
			settings: {
		        slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
				arrows: true
		      }
		}
		]
	});

	jQuery('.videobox').flashy({
		showClass: 'fx-fadeIn',
		hideClass: 'fx-fadeOut'
	});

	jQuery('.flexslider').flexslider({
		startAt: function() {
			var slideCount = jQuery('.total-slides').text(slider.count);
			var mySlide = Math.floor((Math.random()*slideCount)+1);
			return mySlide;
	    }
	});

	jQuery('.accordion .content').hide();
    jQuery('.accordion h2:first').addClass('active').next().slideDown('slow');

    jQuery('.accordion h2').click(function() {
		if(jQuery(this).next().is(':hidden')) {
			jQuery('.accordion h2').removeClass('active').next().slideUp('slow');
			jQuery(this).toggleClass('active').next().slideDown('slow');
		} else {
			jQuery(this).removeClass("active");
			jQuery(".content").hide("active");
		}
    });

    jQuery('.gallery').featherlightGallery({ gallery: { fadeIn: 300, fadeOut: 300 }, openSpeed: 300, closeSpeed: 300 });
    jQuery('.gallery2').featherlightGallery({ gallery: { next: 'next »', previous: '« previous' }, variant: 'featherlight-gallery2' });

    jQuery('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				jQuery('html, body').animate({
					scrollTop: target.offset().top
				}, 2000);
				return false;
			}
	    }
	});

	wow = new WOW({
		animateClass: 'animated',
		offset: 100,
		callback: function(box) {
			//console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}
	});
	wow.init();

	jQuery('#overlayhide').show();
	if( jQuery(window).width() > 767 ){
		jQuery('.menucontrol').show();
	} else {
		jQuery('.menucontrol').hide();
	}

});

jQuery(window).on('load', function(){

	if( jQuery(".backbtm").length > 0 ) {
		if( jQuery(window).width() > 420 ) {
			jQuery('html,body').animate({scrollTop:jQuery(".backbtm").offset().top+620},'slow');
		} else {
			jQuery('html,body').animate({scrollTop:jQuery(".backbtm").offset().top+720},'slow');
		}
	}

	jQuery('.flexslider').flexslider();

});
