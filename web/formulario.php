<?php
	require('includes.php');
	
	date_default_timezone_set('America/Montevideo');
	
	$smarty->assign("titulo_proyecto", "Web.Plantilla.2");
	$smarty->assign("head", "");
	$smarty->assign("scripts", "");
	
	$smarty->assign("mensajes", "mensajes/empty.tpl");
	
	$smarty->assign("menu", "menu/menu.tpl");
	$smarty->assign("pagina", "formulario/ppal.tpl");
	$smarty->assign("titulo_pagina", "");

	/* menu */
	$smarty->assign("active_home",			"");
	$smarty->assign("active_formulario",	"active");
	$smarty->assign("active_contact",		"");
	$smarty->assign("active_dropdown",		"");
	$smarty->assign("active_captcha",		"");
	
	/* formulario */
	$smarty->assign("class_error_fullname", "");
	$smarty->assign("class_error_date", "");
	$smarty->assign("class_error_email", "");
	
	$smarty->assign("value_fullname", "");
	$smarty->assign("value_date", "");
	$smarty->assign("value_email", "");
	
	$smarty->assign("mensaje_error_fullname", "");
	$smarty->assign("mensaje_error_date", "");
	$smarty->assign("mensaje_error_email", "");
	
	$smarty->assign("datos_post_fullname",	"");
	$smarty->assign("datos_post_date", 		"");
	$smarty->assign("datos_post_email", 	"");
	

	if(!empty($_POST)){
        $smarty->assign("value_fullname", $_POST["FullName"]);
		$smarty->assign("value_date", $_POST["Date"]);
		$smarty->assign("value_email", $_POST["Email"]);

		$ok = true;
		$_date 	= strtotime($_POST["Date"]);
		$_name 	= $_POST["FullName"];
		$_email = $_POST["Email"];
		
		$is_valid_email = !(preg_match('!@.*@|\.\.|\,|\;!', $_email) ||
						  !preg_match('!^.+\@(\[?)[a-zA-Z0-9\.\-]+\.([a-zA-Z]{2,6}|[0-9]{1,3})(\]?)$!', $_email));
        if(!$is_valid_email){
			$ok = false;
		}
		
		$is_valid_date = $_date !== false;
		if(!$is_valid_date){
			$ok = false;
		}
		
		$is_valid_name = !empty($_name);
		if(!$is_valid_name){
			$ok = false;
		}
		
		if($is_valid_email and $is_valid_date and $is_valid_name) {

			$smarty->assign("class_error_fullname", "has-success");
			$smarty->assign("class_error_date", "has-success");
			$smarty->assign("class_error_email", "has-success");
			
			$smarty->assign("datos_post_fullname", $_name);
			$smarty->assign("datos_post_date", date('Y-m-d H:i:s', $_date));
			$smarty->assign("datos_post_email", $_email);
			
			// ejemplo para setear succes
			$smarty->assign("mensajes", "mensajes/succes.tpl");
			$smarty->assign("mensaje_succes", "Formulario OK");
			// ejmplo para no setear error
			//$smarty->assign("mensajes", "mensajes/empty.tpl");
			
		} else {
			$smarty->assign("mensaje_error_fullname", "");
			$smarty->assign("mensaje_error_date", "");
			$smarty->assign("mensaje_error_email", "");
			
			if(!$is_valid_name/*in_array("FullName", $errores)*/){
				$smarty->assign("class_error_fullname", "has-error");
				$smarty->assign("mensaje_error_fullname", "Error al ingresar el nombre");
			}
			else{
				$smarty->assign("class_error_fullname", "has-success");
			}
			if(!$is_valid_date/*in_array("Date", $errores)*/){
				error_log("==============> is_valid_date <=================");
				$smarty->assign("class_error_date", "has-error");
				$smarty->assign("mensaje_error_date", "Formato de fecha no v&aacute;lido");
			}
			else{
				error_log("==============> class_error_date <=================");
				$smarty->assign("class_error_date", "has-success");
			}
			if(!$is_valid_email/*in_array("Email", $errores)*/){
				$smarty->assign("class_error_email", "has-error");
				$smarty->assign("mensaje_error_email", "Formato de email no v&aacute;lido");
			}
			else{
				$smarty->assign("class_error_email", "has-success");
			}
			// ejemplo para setear error
			$smarty->assign("mensajes", "mensajes/error.tpl");
			$smarty->assign("mensaje_error", "Error en el formulario");
			// ejmplo para no setear error
			//$smarty->assign("mensajes", "mensajes/empty.tpl");
		   // error, redraw the form
           //$smarty->assign($_POST);
           //$smarty->display('formulario/ppal.tpl');
		}
    }
	
	$smarty->display('base.tpl');
?>