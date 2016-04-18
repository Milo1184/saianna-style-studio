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
        $(this).append(' <span>&#10095;</span>');
    });
	
	$('.link-1').mouseenter(function() {
		$(this).animate({
			'padding-right': 10
		}, 100);
		$(this).find( 'span' ).toggle( "slide", {directon:"right"}, 300 );
	});
	
	$('.link-1').mouseleave(function() {
		$(this).animate({
			'padding-right': 0
		}, 100);
		$(this).find( 'span' ).toggle( "slide", {directon:"right"}, 300 );
	});	
});