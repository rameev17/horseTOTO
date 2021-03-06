jQuery(function($){
	//topmenu GNB
	$.fn.topmenu = function(options) {
		var opts = $.extend(options);
		var topmenu = $(this);
		var topmenuList = topmenu.find('>ul>li');
		var submenu = topmenu.find('.submenu');
		var submenuList = submenu.find('>ul>li');

		function showMenu() {
			t = $(this).parent('li');
			if (!t.hasClass('m_active')) {
				topmenuList.removeClass('m_active');
				t.addClass('m_active');
				submenu.hide();
				t.find('.submenu').show().css('top', 50).animate( { top: 115, opacity:1 }, 200 );
			}
		}

		function hideMenu() {
			topmenuList.removeClass('m_active');
			submenu.hide();
			activeMenu();
		}

		function activeMenu() {
			if(opts.d1) {
				t = topmenuList.eq(opts.d1-1); 
				t.addClass('m_active');
				t.find('.submenu').show().css('top', 50).animate( { top: 115, opacity:1 }, 200 );
				if(opts.d2) {
					t.find('.submenu>ul>li').eq(opts.d2-1).addClass('on');
				}
			}
		}
		
		return this.each(function() {
			activeMenu();
			topmenuList.find('>a').mouseover(showMenu).focus(showMenu);
			topmenu.mouseleave(hideMenu);
		});
	}
	
	$('#layerPop01, #layerPop02, #layerPop03, #layerPop04').hide();
	$('.layerPop01').click(function(){
		$('#layerPop01').fadeIn();
	});
	$('.layerPop02').click(function(){
		$('#layerPop02').fadeIn();
	});
	$('.layerPop03').click(function(){
		$('#layerPop03').fadeIn();
	});
	$('.layerPop04').click(function(){
		$('#layerPop04').fadeIn();
	});
	$('.closeBtn .close').click(function(){
		$('#layerPop01, #layerPop02, #layerPop03, #layerPop04').fadeOut();
	});
	




	$("#topmenu > ul > li > a").mouseenter(function(){
		$(this).next(".subbox").slideDown("fast");
	});
	
	$("#topmenu > ul > li").mouseleave(function(){
		$(this).find(".subbox").slideUp("fast");
	});

	

	//Slide

	HTML CSS JSResult Skip Results Iframe
	EDIT ON
	var slideIndex = 0;
	showSlides();

	function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
	}



	//SNB
	$('#SNB .depth').click(function(){
		if($(this).find('ul').css('display')=='block'){
			$(this).find('ul').slideUp('fast')	
		} else {
			$('#SNB .depth ul').slideUp('fast')	
			$(this).find('ul').slideDown('fast')	
		}
	});
	$('#SNB').mouseleave(function(){
		$('#SNB .depth ul').slideUp('fast')	
	});
	$('.TabType01 .menu').click(function(){
		if ($(this).next('ul').css('display') == 'none'){
			$(this).next('ul').slideDown(300);
		} else {
			$(this).next('ul').slideUp(300);
		}
	});
	$(window).resize(function(){
		var winW  = $(window).width();
			winH  = $(window).height();
			
		if (winW > 641){
			$('.TabType01 ul').show();
		} else {
			$('.TabType01 ul').hide();
		}
	}).resize();


});



//????????????, ????????? ?????? ?????????
function setuplabel(){
	if ($('.comm_check_label input').length) {
		$('.comm_check_label').each(function(){ 
			$(this).removeClass('check_on');
		});
		$('.comm_check_label input:checked').each(function(){ 
			$(this).parent('label').addClass('check_on');
		});                
	};
	if ($('.comm_radio_label input').length) {
		$('.comm_radio_label').each(function(){ 
			$(this).removeClass('radio_on');
		});
		$('.comm_radio_label input:checked').each(function(){ 
			$(this).parent('label').addClass('radio_on');
		});
	};
};


$(document).ready(function(){
	
	//????????????, ????????? ?????? ????????? - ????????? ??????
	$('.comm_check_label, .comm_radio_label').click(function(){
		setuplabel();
	});
	setuplabel(); 

	
	/* ???????????? ?????? : ???????????? ??????*/
	$(".btn-allmenu").click(function(){
		$(".all-menu-contain").toggle();
	});
	$(".all-menu-contain").mouseleave(function(){
		$(this).hide();
	});



	/* ~~ ?????? ???????????? ??????~~ */

	
	var wow = new WOW(
	  {
		boxClass:     'ani',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       0,          // distance to the element when triggering the animation (default is 0)
		mobile:       true,       // trigger animations on mobile devices (default is true)
		live:         true,       // act on asynchronously loaded content (default is true)
		callback:     function(box) {
		  // the callback is fired every time an animation is started
		  // the argument that is passed in is the DOM node being animated
		},
		scrollContainer: null // optional scroll container selector, otherwise use window
	  }
	);
	wow.init();	



});