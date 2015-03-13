<?php
	/*
	//cargamos las librerías de smarty
	require('include.php');

	class index {

				 public function display()
				 {
						global $smarty;
						$smarty->assign("algo", "VARIABLE");
						//Muestra por pantalla todos los diferentes templates
						$smarty->display('hola.tpl');
					   
				}
	}

	$call = new index();
	$call->display();

	
	*/
	
	// load Smarty library
	//define ('RUTA','http://localhost/templates/trabajo/');
	/*
	include_once('C:/xampp/htdocs/templates/trabajo/Smarty-3.1.21/libs/Smarty.class.php');

	$smarty = new Smarty;

	$smarty->template_dir = 'C:/xampp/htdocs/templates/trabajo/templates';
	$smarty->config_dir = 'C:/xampp/htdocs/templates/trabajo/configs';
	$smarty->cache_dir = 'C:/xampp/htdocs/templates/trabajo/cache';
	$smarty->compile_dir = 'C:/xampp/htdocs/templates/trabajo/templates_c';
	*/
	require('includes.php');
	
	/*	
	//$smarty->assign('algo','variable ALGO');
	$smarty->assign('algo','la variable dinamica');
	
	
	$smarty->assign('este','otro.tpl');
	$smarty->assign('foo','variable de otro');
	
	error_log("################################");
	error_log(print_r($_POST,1));
	error_log("################################");
	
	if(isset($_POST["login"]) and ($_POST["login"] != "")){
		$smarty->assign('aceptado','MANDARON DATOS POR POST ==> '.$_POST["login"]);
	}
	else{
		$smarty->assign('aceptado','');
	}
	*/
	error_log("?????????????????? index?????????????????");
	
	$smarty->assign("active_home",			"active");
	$smarty->assign("active_formulario",	"");
	$smarty->assign("active_contact",		"");
	$smarty->assign("active_dropdown",		"");
	$smarty->assign("active_captcha",		"");
	$smarty->assign("mensajes", "");
	
	$smarty->configLoad('es.conf','index');
	if(isset($_POST["es"]) and ($_POST["es"] != "")){
		$smarty->configLoad('es.conf','index');
	}
	elseif(isset($_POST["en"]) and ($_POST["en"] != "")){
		$smarty->configLoad('en.conf','index');
	}
	
	$smarty->assign("titulo_proyecto", "Web.Plantilla.2");
	$smarty->assign("head", "");
	$smarty->assign("scripts", "");
	
	$smarty->assign("mensajes", "mensajes/empty.tpl");
	
	$smarty->assign("menu", "menu/menu.tpl");
	$smarty->assign("pagina", "base/ppal.tpl");
	$smarty->assign("titulo_pagina", "");
	
	$smarty->display('base.tpl');
?>	