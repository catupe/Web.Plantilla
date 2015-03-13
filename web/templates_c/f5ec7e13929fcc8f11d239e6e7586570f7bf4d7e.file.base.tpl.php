<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-13 15:47:34
         compiled from "..\web\templates\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321135502f886738116-48351355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ec7e13929fcc8f11d239e6e7586570f7bf4d7e' => 
    array (
      0 => '..\\web\\templates\\base.tpl',
      1 => 1426257912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321135502f886738116-48351355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo_proyecto' => 0,
    'head' => 0,
    'titulo_pagina' => 0,
    'scripts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5502f8867bd439_89089307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502f8867bd439_89089307')) {function content_5502f8867bd439_89089307($_smarty_tpl) {?><!DOCTYPE html>
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
