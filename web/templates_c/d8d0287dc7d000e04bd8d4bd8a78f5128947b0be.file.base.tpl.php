<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 15:28:37
         compiled from "C:\xampp\htdocs\templates\Web.Plantilla\web\templates\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316254ff4b402f8b67-94982260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d0287dc7d000e04bd8d4bd8a78f5128947b0be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\base.tpl',
      1 => 1426170481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316254ff4b402f8b67-94982260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ff4b40390d77_78880972',
  'variables' => 
  array (
    'titulo_proyecto' => 0,
    'head' => 0,
    'titulo_pagina' => 0,
    'scripts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff4b40390d77_78880972')) {function content_54ff4b40390d77_78880972($_smarty_tpl) {?><!DOCTYPE html>
<HTML>
<HEAD>

	<TITLE><?php echo $_smarty_tpl->tpl_vars['titulo_proyecto']->value;?>
</TITLE>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="img/favicon.ico" rel="shortcut icon">

	<link rel="stylesheet" href="../lib/bootstrap-3.3.2-dist/css/bootstrap.min.css">

	<!--<?php echo '<script'; ?>
 type="text/javascript" src="recursos/ladda-bootstrap-master/dist/spin.min.js"><?php echo '</script'; ?>
>-->
	<!--<?php echo '<script'; ?>
 type="text/javascript" src="recursos/ladda-bootstrap-master/dist/ladda.min.js"><?php echo '</script'; ?>
>-->
	<!--<?php echo '<script'; ?>
 src="recursos/js/url.js"><?php echo '</script'; ?>
>-->
	<!--<?php echo '<script'; ?>
 src="recursos/js/gral.js"><?php echo '</script'; ?>
>-->


	<link rel="stylesheet" href="css/style.css">
	<!--<link href="recursos/ladda-bootstrap-master/dist/ladda-themeless.min.css" rel="stylesheet">-->

	<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

</HEAD>

<BODY>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['menu']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
    <div class="container">
		<div class="row">
			<div class="col-md-12 contenido-pagina">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mensajes']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12">	
				<h1><?php echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;?>
</h1>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['pagina']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>		
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="../lib/jquery-1.11.2/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
   	<?php echo '<script'; ?>
 src="../lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../lib/bootstrap-3.3.2-dist/docs/assets/js/docs.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/urls.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/gral.js"><?php echo '</script'; ?>
>
	<?php echo $_smarty_tpl->tpl_vars['scripts']->value;?>

 	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>-->
</body>
</html><?php }} ?>
