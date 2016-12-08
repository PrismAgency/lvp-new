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

	//full page
	$('#fullpage').fullpage({
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		sectionsColor: ['#000000', '#000000', '#000000'],
		slidesNavigation: false,
		keyboardScrolling: false,
	});

	// modal bootstrap javascript
	$('#myModal').on('shown.bs.modal', function () {
  		$('#myInput').focus()
	});

	$('.various').click(function(){
   		setTimeout(function() {window.location.replace("#firstPage/slide5") },5000);
	});

	//fancybox
	$(".various").fancybox({
        fitToView   : false,
        overlayColor :'#ffffff',
        transitionIn :'elastic',
        transitionOut :'elastic',
        overlayOpacity : 0.7,
        padding : 0,
        width       : '100%',
        height      : '100%',
        autoSize    : true,
        autoDimensions : true,
        closeClick  : 'elastic',
        openEffect  : 'elastic',
        scrolling : 'no',
    });

});
