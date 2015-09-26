var pContainerHeight = $('.bird-box').height();
// Conflit avec Wordpress qui renvoie null pour la hauteur du header
if(pContainerHeight==null)
{
	pContainerHeight=600;
}
// Conflit avec Wordpress qui renvoie null pour la hauteur du header
$(window).scroll(function(){
	
  var wScroll = $(this).scrollTop();
		var headerpos = $('#header').position()
	var headerposdown = headerpos.bottom;
	console.log(headerpos);
  if (wScroll <= pContainerHeight) {
/* Modifie la position des images lors du scroll */
    
	$('.logo').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });

    $('.back-bird').css({
      'transform' : 'translate(0px, '+ wScroll /4 +'%)'
    });

    $('.fore-bird').css({
      'transform' : 'translate(0px, -'+ wScroll /40 +'%)'
    });
	
	$('.barremenu_parallax').css({
      'transform' : 'translate(0px, -'+ wScroll /40 +'%)'
    });
	
	
  }


  
});
