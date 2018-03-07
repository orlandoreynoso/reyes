$(document).ready(function(){
 
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.10);
		
		$('#contenedor02').css({
			'background-position': '0 -' + posicion + 'px'
		});

		$('#contenedor03').css({
		'background-position': '0 -' + posicion + 'px'
		});
 
	});

	/*=============*/

	$(window).resize(function(){
	if ($(window).width() <= 479){	
		
		$('#contenedor02').css({
			'background-position': 'center', 'center';
		});

		}	
	});


});;