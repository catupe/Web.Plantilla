$(document).ready(function(){
	$("#recargar-imagen").click(function(){
		$.ajax({
				type: "POST",
				url: GETCAPTCHA_URL,
				data: '',
				success: success_recargarImagen,
				error: error_handler,
				dataType: "json",
				complete: function(){}
			});
	});
});

function success_recargarImagen(data, status, xhttpr){
	estado = data.status;
	if(estado == "ok"){
		$("#imagen-captcha").attr("src", data.captcha);
	}
	else{
		if(estado == "error"){
			$('#mensaje-error').remove();
			var mensaje = '<div class="alert alert-danger alert-dismissible" id="mensaje-error"><a class="close" data-dismiss="alert">&times;</a>ESTO ES PRUEBA'+data.mensajeError+'</div>';
			$(".contenido-pagina").prepend(mensaje);
		}
	}
}