function error_handler(data, status, xhttpr){
/*
	//$('#error-javascript').remove();
	var mensaje = 	'<div id="alerta-js" class="alert alert-danger fade in" id="alert-js">'+
			 		'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
			 		'En este momento no se puede procesar la solicitud.<br />Vuelva a intentarlo en unos minutos.'+
					'</div>';
	$(".contenido-pagina").prepend(mensaje);
*/	
	$('#mensaje-error').remove();
	
	var mensaje = '<div class="alert alert-danger alert-dismissible" id="mensaje-error"><a class="close" data-dismiss="alert">&times;</a>En este momento no se puede procesar la solicitud.<br />Vuelva a intentarlo en unos minutos.</div>';
	
	$(".contenido-pagina").prepend(mensaje);
}