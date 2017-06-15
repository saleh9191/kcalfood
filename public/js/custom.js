(function($) { "use strict";
    
    /* Animate loader off screen */
    jQuery(window).load(function() {
        jQuery('body').addClass('loaded');
    });
    
	/* niceScroll */
	jQuery("html").niceScroll({
		scrollspeed: 60,
		mousescrollstep: 38,
		cursorwidth: 6,
		cursorborder: 0,
		cursorcolor: '#6c6c6c', // color
		autohidemode: false,
		zindex: 9999999,
		horizrailenabled: false,
		cursorborderradius: 0,
	});
	
    /* add class sticky in header */
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.sticky header').addClass('sticky')
        } else {
            jQuery('.sticky header').removeClass('sticky')
        }
        return false;
    });
    

    

    /* main menu */
    jQuery('a.open_close').on('click', function() {
        jQuery('#main-menu').toggleClass('show');
        jQuery('.layer').toggleClass('layer-is-visible');
    });
    
    jQuery('a.show-submenu').on('click', function() {
        jQuery(this).next().toggleClass('show_normal');
    });
    
    jQuery('a.show-submenu-mega').on('click', function() {
        jQuery(this).next().toggleClass('show_mega');
    });
    
    jQuery(window).width() <= 600 && jQuery('a.open_close').on('click', function() {
        jQuery('.np-toggle-switch').removeClass('active');
    });
    
	/* Go up */
	jQuery(window).on('scroll', function () {
		if(jQuery(this).scrollTop() > 100 ) {
			jQuery(".go-up").css("right","20px");
		}else {
			jQuery(".go-up").css("right","-60px");
		}
	});
    
	jQuery(".go-up").on('click', function(){
		jQuery("html,body").animate({scrollTop:0},500);
		return false;
	});
    
    /* sticky sidebar */
    jQuery('.sticky-sidebar').theiaStickySidebar({
      // Settings
      additionalMarginTop: 100,
      additionalMarginBottom: 25,
    });
    
    /* slideshow */
	if (jQuery(".tp-banner").length) {
		jQuery('.tp-banner').revolution({
			delay:5000,
			startwidth:1170,
			startheight:700,
			hideThumbs:10,
			fullWidth:"off",
			fullScreen:"off"
		});
	}
	if (jQuery(".tp-banner-2").length) {
		jQuery('.tp-banner-2').revolution({
			delay:5000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,
			fullWidth:"off",
			fullScreen:"off"
		});
	}
    
    // remove-recipe-col
    jQuery(".remove-recipe-col").on('click', function(){
		jQuery(this).parent().remove();
		return false;
	});
    
    // Products Filter
    $("#range_slider").ionRangeSlider({
        type: "double",
        grid: true,
        min: 1,
        max: 1000,
        from: 250,
        to: 600,
        prefix: "$"
    });
	
})(jQuery);