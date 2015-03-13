<?php
set_include_path(
	//__DIR__ . ".." . DIRECTORY_SEPARATOR . "lib" . PATH_SEPARATOR . DIRECTORY_SEPARATOR .
	".." . DIRECTORY_SEPARATOR . "lib" . PATH_SEPARATOR . 
	//"../../Web-Nucleo/lib".	PATH_SEPARATOR .
	get_include_path()
);
/*
include_once("Sesion.php");
include_once("Configuracion.php");
include_once("nucleo/PHPSesion.php");
include_once("nucleo/WSCliente.php");
*/

//+define ('RUTA','C:' . DIRECTORY_SEPARATOR . 'xampp' . DIRECTORY_SEPARATOR . 'htdocs' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'Web.Plantilla' . DIRECTORY_SEPARATOR );
define ('RUTA', '..');
//define ('SMARTY_DIR', RUTA . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Smarty-3.1.21' . DIRECTORY_SEPARATOR);

//include_once(SMARTY_DIR /*. DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Smarty-3.1.21'*/ . 'libs' . DIRECTORY_SEPARATOR  . 'Smarty.class.php');
require('Smarty-3.1.21' . DIRECTORY_SEPARATOR  . 'libs' . DIRECTORY_SEPARATOR  . 'Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir 	= RUTA . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR  . 'templates';
//$smarty->config_dir 	= RUTA . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR  . 'configs';
$smarty->config_dir 	= RUTA . DIRECTORY_SEPARATOR . 'cfg';// . DIRECTORY_SEPARATOR  . 'configs';
$smarty->cache_dir	 	= RUTA . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR  . 'cache';
//$smarty->compile_dir 	= RUTA . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR  . 'templates_c';

//$smarty->plugins_dir 	= RUTA .'lib' . DIRECTORY_SEPARATOR . 'Smarty-3.1.21' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'plugins';
					/*
					array(
                       'plugins', // the default under SMARTY_DIR
                       RUTA.'lib' . DIRECTORY_SEPARATOR . 'Smarty-3.1.21' . DIRECTORY_SEPARATOR,
                       '../../includes/my/plugins'
                       );
					 */  

