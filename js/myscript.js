// JavaScript Document
$(document).ready(function(){
	"use strict";
	
	var nav = $('nav');
	$('.btn-mobile').click(function(){
		nav.slideToggle();
	});
	
	$(window).resize(function(){
		if($(window).width() >= 780){
			nav.show();
		}else{
			nav.hide();
		}	
	});
	
	//if($(window).width() >= 540){
		$('.projects-gallery a').hover(function(){
			$(this).find('h4').stop().fadeIn();
			$(this).find('.small-icon').stop().animate({ bottom: 8}, 600);
		},function(){
			$(this).find('h4').stop().fadeOut();
			$(this).find('.small-icon').stop().animate({ bottom: -62}, 600);
		});
	//}

	var copyright = "Constantin Nistor &copy; 2017 - All right reserved";
	$('.copyright p').append(copyright);

	$('.main-iso img').load(function(){
		$('.main-iso').isotope({
			itemSelector: '.item',
			layoutMode: 'masonry'
		});
	});


	$('.projects-nav ul li').click(function(){
		$('.projects-nav ul li').removeClass('active');
		$(this).addClass('active');
		
		var selector = $(this).attr('data-filter');
		$('.main-iso').isotope({
			filter: selector
		});
		return false;
	});

	// Remove hash from url
	$('body').click(function(){
		$('.contact-message p').slideUp();
		history.pushState("", document.title, window.location.pathname);
	});

	/* === Navigation scroll === */
		$('a[href*="#"]:not([href="#"])').click(function() {
			history.pushState("", document.title, window.location.pathname);
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length && $(window).width() >= 799) {
					$('html,body').animate({
						scrollTop: target.offset().top - 55
					}, 1000);
					return false;
				}else {
					$('html,body').animate({
						scrollTop: target.offset().top - 91
					}, 1000);
					return false;
				}			
			}
		});

	
});