<?php
	session_start();
	set_include_path(
		//__DIR__ . ".." . DIRECTORY_SEPARATOR . "lib" . PATH_SEPARATOR . DIRECTORY_SEPARATOR .
		"../../" . DIRECTORY_SEPARATOR . "lib" . PATH_SEPARATOR .
		//"../../Web-Nucleo/lib".	PATH_SEPARATOR .
		get_include_path()
	);
	
	require('../includes.php');
	include("../../lib/simple-php-captcha.php");

	$_SESSION['simple-php-captcha'] = simple_php_captcha(array('color' => '#337AB7'));
		
	$sal = new stdClass();
	$sal->status 		= "ok";
	$sal->mensajeError 	= "";
	$sal->captcha 		= $_SESSION['simple-php-captcha']['image_src'];
	
	//$json = new Services_JSON;
	echo json_encode($sal);
?>	