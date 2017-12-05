//Main navigation fadeout
$(document).ready(function(){ 
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 40) {
				$('#bandeau').fadeOut();
			} else {
				$('#bandeau').fadeIn();
			}
			
			if ($(this).scrollTop() > 20) {
				$('#menu-langues').fadeOut();
			} else {
				$('#menu-langues').fadeIn();
			}
			
			if ($(this).scrollTop() > 40) {
				$('#image-bandeau').stop(true, false);
				$('#image-bandeau').animate({opacity: 0.5},400);
			} else {
				$('#image-bandeau').stop(true, false);
				$('#image-bandeau').animate({opacity: 1},400);
			}
			
		});
	});
});

// Nivo slider trigger
$(window).load(function() {
	$('#slider').nivoSlider({
		effect: 'fold', // Specify sets like: 'fold,fade,sliceDown'
		slices: 15, // For slice animations				
		directionNav: false, // Next & Prev navigation	
				//randomStart: true
	});			
});
