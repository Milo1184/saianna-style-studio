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
});