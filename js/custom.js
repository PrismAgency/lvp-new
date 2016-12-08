// feuille javascript
$(document).ready(function(){  

	// animation texte
	$(function () {
    	$('.tlt').textillate();
	});

	// preloader site
	$(window).on('load', function() { // makes sure the whole site is loaded 
  		$('#preloader').delay(12000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  		$('body').delay(9000).css({'overflow':'visible'});
  		$('.buttonClose').click(function(){ 
    		$('#preloader').remove('');
  		});
	});

	$('#fullpage').fullpage({
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		sectionsColor: ['#000000', '#000000', '#000000'],
	});

	// modal bootstrap javascript
	$('#myModal').on('shown.bs.modal', function () {
  		$('#myInput').focus()
	});

});
