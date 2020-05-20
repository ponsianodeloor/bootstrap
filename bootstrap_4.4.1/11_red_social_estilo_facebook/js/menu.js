$(function(){
	var boton = $('#btn-menu');
	var fondo_enlace = $('#fondo-enlace');

 var divBarraLateralIzquierda = $('#barra-lateral-izquierda');

	boton.on('click', function(e){
		fondo_enlace.toggleClass('active');
  fondo_enlace.css('visibility', 'visible');
		$('#barra-lateral-izquierda').toggleClass('active');
		e.preventDefault();
	});

	fondo_enlace.on('click', function(e){
		fondo_enlace.toggleClass('active');
  fondo_enlace.css('visibility', 'hidden');
		$('#barra-lateral-izquierda').toggleClass('active');
		e.preventDefault();
	});

 divBarraLateralIzquierda.on('click', function(e){
		fondo_enlace.toggleClass('active');
  fondo_enlace.css('visibility', 'hidden');
		$('#barra-lateral-izquierda').toggleClass('active');
		e.preventDefault();
	});
}())
