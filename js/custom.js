// feuille javascript
$(document).ready(function(){  

	// preloader site
	$(window).on('load', function() { // makes sure the whole site is loaded 
  		$('#preloader').delay(10000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  		$('body').delay(7000).css({'overflow':'visible',});
  		$(".buttonSkipe").click(function(){ 
    		$("#preloader").remove();
  		});
	});

	$(function () {
    	$('.tlt').textillate();
	});

});