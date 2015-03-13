<?php
	session_start();
	require('includes.php');
		
	include("../lib/simple-php-captcha.php");
	/*
	Ejemplo de parametros para la invocacion
	$cap['captcha'] = simple_php_captcha( array(
						'min_length' => 5,
						'max_length' => 5,
						'backgrounds' => array('img/captcha.backgrounds/polyester-lite.png'),
						'fonts' => array('fonts/font.ttf'),
						'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz23456789',
						'min_font_size' => 28,
						'max_font_size' => 28,
						'color' => '#666',
						'angle_min' => 0,
						'angle_max' => 10,
						'shadow' => true,
						'shadow_color' => '#fff',
						'shadow_offset_x' => -1,
						'shadow_offset_y' => 1
					));
	*/
	
	$smarty->assign("titulo_proyecto", "Web.Plantilla.2");
	$smarty->assign("head", "");
	$smarty->assign("scripts", '<script src="js/captcha.js"></script>');

	$smarty->assign("mensajes", "mensajes/empty.tpl");
	
	$smarty->assign("menu", "menu/menu.tpl");
	$smarty->assign("pagina", "captcha/ppal.tpl");
	$smarty->assign("titulo_pagina", "Captcha");

	/* menu */
	$smarty->assign("active_home",			"");
	$smarty->assign("active_formulario",	"");
	$smarty->assign("active_contact",		"");
	$smarty->assign("active_dropdown",		"");
	$smarty->assign("active_captcha",		"active");
	
	
	$smarty->assign("valido", "");
		
	if(!empty($_POST)){
		error_log("VOY A VALIDAR");
		error_log(print_r($_POST,1));
		error_log(print_r($_SESSION,1));
		if($_POST["codigo"] == $_SESSION["simple-php-captcha"]["code"]){
			$smarty->assign("valido", "VALIDO OK");
			unset($_SESSION['captcha']);
		}
		else{
			$smarty->assign("valido", "NO VALIDO");
			unset($_SESSION['captcha']);
		}
	}
	$_SESSION['simple-php-captcha'] = simple_php_captcha(array('color' => '#337AB7'));
	$smarty->assign("captcha", $_SESSION['simple-php-captcha']['image_src']);
	
	// ejemplo para setear error
	//$smarty->assign("mensajes", "mensajes/error.tpl");
	//$smarty->assign("mensaje_error", "ERROR DE PRUEBA");
	// ejmplo para no setear error
	$smarty->assign("mensajes", "mensajes/empty.tpl");
	
	$smarty->display('base.tpl');

?>