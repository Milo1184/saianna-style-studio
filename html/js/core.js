// JavaScript Document

$(document).ready(function() {
    "use strict";
	
	$('.products-grid .product').mouseenter(function() {
		$(this).find('.details').slideDown('fast');
	});

	$('.products-grid .product').mouseleave(function() {
		$(this).find('.details').slideUp('fast');
	});
	
	$(".rslides").responsiveSlides({
		auto: true,             // Boolean: Animate automatically, true or false
		speed: 500,            // Integer: Speed of the transition, in milliseconds
		timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		pager: false,           // Boolean: Show pager, true or false
		nav: true,             // Boolean: Show navigation, true or false
		random: false,          // Boolean: Randomize the order of the slides, true or false
		pause: false,           // Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: "Previous",   // String: Text for the "previous" button
		nextText: "Next",       // String: Text for the "next" button
		maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		manualControls: "",     // Selector: Declare custom pager navigation
		namespace: "rslides",   // String: Change the default namespace used
		before: function(){},   // Function: Before callback
		after: function(){}     // Function: After callback
	});
	
	$('.link-1').each(function() {
		if ( $(this).hasClass('prev') ) {
	        $(this).prepend(' <span>&#10094;</span>');
		} else {
	        $(this).append(' <span>&#10095;</span>');
		}
    });
	
	$('.link-1').mouseenter(function() {
		if ( $(this).hasClass('prev') ) {
			$(this).animate({
				'padding-left': 20
			}, 300);
			$(this).find( 'span' ).toggle( "slide", 100 );
		} else {
			$(this).animate({
				'width': 230
			}, 300);
			$(this).find( 'span' ).toggle( "slide", {directon:"right"}, 100 );
		}
	});
	
	$('.link-1').mouseleave(function() {
		if ( $(this).hasClass('prev') ) {
			$(this).animate({
				'padding-left': 5
			}, 300);
			$(this).find( 'span' ).toggle( "slide", 100 );
		} else {
			$(this).animate({
				'width': 220
			}, 300);
			$(this).find( 'span' ).toggle( "slide", {directon:"right"}, 100 );
		}
	});	
});