
jQuery(document).ready(function () {
	// appends element after ready document into form on footer section
	appendSpan();

	var links = $('.menu li a');
	var uote = $('.page_header_nav_quote');
	var burger = $('.burger');
	var header = $('.page_header').height();
	var menu = $('.menu');

	// by clicking on quote scrolls to bottom form
	uote.click(function(e){
		e.preventDefault();

		var thisAttr = $(this).attr('href');

		if(thisAttr) {

			links.removeClass('active');
			uote.addClass('active');
			
			if ($(window).width() < 991) {
				$('html, body').stop().animate({
					
					scrollTop: $(thisAttr).offset().top  
				}, 800);
			}
			else {
				$('html, body').stop().animate({
					
					scrollTop: $(thisAttr).offset().top -header
				}, 800);
			}

		}else return
		
	});

	// open nav by clicking on burger menu
	burger.stop().click(function(){
		menu.slideToggle();
		return
	});

	// scroll to needee element by clicking on nav links
	links.click(function(e){
		e.preventDefault();

		var thisAttr = $(this).attr('href');
		if(thisAttr) {

			uote.removeClass('active');
			links.removeClass('active');

			$(this).addClass('active');

			if ($(window).width() < 991) {
				$('html, body').stop().animate({
					
					scrollTop: $(thisAttr).offset().top
				}, 800);

			}else{
				$('html, body').stop().animate({
					
					scrollTop: $(thisAttr).offset().top  -header
				}, 800);
			}
			
		}else return

	});

	// append element for wp form
	function appendSpan() {
		var span = "<span class='checkmark'></span>"; 
		$('.wpcf7-list-item.first.last').addClass('c_started_form_check');
		$('.wpcf7-list-item.first.last').find('label').addClass('label'); 
		$(".wpcf7-list-item.first").find('label').append(span);   
	}

// scrolltop
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.scrollTop').fadeIn();
        } else {
            $('.scrollTop').fadeOut();
        }
    });

    $('.scrollTop').click(function(){
        $('html, body').animate({scrollTop : 0},500);
        return false;
    });


});// end Jquery


//burger func
function myFunction(x) {
	x.classList.toggle("change");
}
// after document loader removes preloader
window.onload = function() {
	
	$(".loader").delay(300).fadeOut("slow");
	$(".loader_inner").fadeOut();
}



