jQuery(function($){
			
			$(document).ready(function(){
				
				$('#lbx-contact').click(function(){
					$('#inscriptionform').hide();
					//modifie la taile de la lightbox
					$('.box').css('width','700px');
					$('.box').css('height','500px');
					$('#contactform').show();
					
				});
	        });
});
			
		