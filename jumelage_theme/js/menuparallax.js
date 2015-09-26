//MENU STAY-TOP
$(function() {
	var menu_position_top = $('#siteweb_band').offset().top;
	var menu_navigation = function(){
		var scroll_top = $(window).scrollTop(); 
			if (scroll_top >= menu_position_top) { 
			$('#siteweb_band').css({ 'position': 'fixed', 'top':'10vh'});
			$('#menu').css({'padding-bottom': '4vh'});
		

		} else {
			$('#siteweb_band').css({ 'position': 'static' }); 
			$('#menu').css({'padding-bottom': '5vh'});
			
		}   
	};

	menu_navigation();
	$(window).scroll(function() {
		 menu_navigation();
	});
});
