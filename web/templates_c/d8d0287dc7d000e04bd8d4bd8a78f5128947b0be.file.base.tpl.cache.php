<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-11 14:45:44
         compiled from "C:\xampp\htdocs\templates\Web.Plantilla\web\templates\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21714550047086b1bc1-99688903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d0287dc7d000e04bd8d4bd8a78f5128947b0be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\base.tpl',
      1 => 1426008457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21714550047086b1bc1-99688903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo_proyecto' => 0,
    'ruta_favicon' => 0,
    'head' => 0,
    'active_home' => 0,
    'active_formulario' => 0,
    'active_contact' => 0,
    'active_dropdown' => 0,
    'titulo_pagina' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550047087989d2_84870766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550047087989d2_84870766')) {function content_550047087989d2_84870766($_smarty_tpl) {?><!DOCTYPE html>
<HTML>
<HEAD>

	<TITLE><?php echo $_smarty_tpl->tpl_vars['titulo_proyecto']->value;?>
</TITLE>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="<?php echo $_smarty_tpl->tpl_vars['ruta_favicon']->value;?>
" rel="shortcut icon">

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
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="#">Bootstrap theme</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="<?php echo $_smarty_tpl->tpl_vars['active_home']->value;?>
"><a href="index.php">Home</a></li>
					<li class="<?php echo $_smarty_tpl->tpl_vars['active_formulario']->value;?>
"><a href="formulario.php">Formulario</a></li>
					<li class="<?php echo $_smarty_tpl->tpl_vars['active_contact']->value;?>
"><a href="#contact">Contact</a></li>
					<li class="dropdown <?php echo $_smarty_tpl->tpl_vars['active_dropdown']->value;?>
">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>				
			</div><!--/.nav-collapse -->
		</div>
	</nav>

    <div class="container">
		<div class="row">
			<div class="col-md-12">	
				<h1><?php echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;?>
</h1>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['pagina']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			</div>		
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
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
 	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>-->
</body>
</html><?php }} ?>
