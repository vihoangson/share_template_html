$(function() {
	
	"use strict";
	
	// TOOLTIP	
	$(".header-links .fa, .tool-tip").tooltip({
		placement: "bottom"
	});
	$(".btn-wishlist, .btn-compare, .display .fa").tooltip('hide');
	
	//MAGNIFIC POPUP
	$('.images-block').magnificPopup({
		delegate: 'a', 
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	
	// TABS
	$('.nav-tabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});	
	
});