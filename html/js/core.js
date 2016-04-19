// JavaScript Document

$(document).ready(function() {
    "use strict";
	
	$('.products-grid .product').mouseenter(function() {
		$(this).find('.details').slideDown('fast');
	});

	$('.products-grid .product').mouseleave(function() {
		$(this).find('.details').slideUp('fast');
	});
	
	$(function() {
		$(".rslides").responsiveSlides();
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