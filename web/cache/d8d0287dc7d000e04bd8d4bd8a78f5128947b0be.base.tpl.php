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
    'fd4f9e1ca479918985cdb79f92ea75ae1a5ec69f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\captcha\\ppal.tpl',
      1 => 1426017153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21714550047086b1bc1-99688903',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5500479a2d5465_01256895',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5500479a2d5465_01256895')) {function content_5500479a2d5465_01256895($_smarty_tpl) {?><!DOCTYPE html>
<HTML>
<HEAD>

	<TITLE>Web.Plantilla.2</TITLE>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="" rel="shortcut icon">

	<link rel="stylesheet" href="../lib/bootstrap-3.3.2-dist/css/bootstrap.min.css">

	<!--<script type="text/javascript" src="recursos/ladda-bootstrap-master/dist/spin.min.js"></script>-->
	<!--<script type="text/javascript" src="recursos/ladda-bootstrap-master/dist/ladda.min.js"></script>-->
	<!--<script src="recursos/js/url.js"></script>-->
	<!--<script src="recursos/js/gral.js"></script>-->


	<link rel="stylesheet" href="css/style.css">
	<!--<link href="recursos/ladda-bootstrap-master/dist/ladda-themeless.min.css" rel="stylesheet">-->

	
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
					<li class=""><a href="index.php">Home</a></li>
					<li class="active"><a href="formulario.php">Formulario</a></li>
					<li class=""><a href="#contact">Contact</a></li>
					<li class="dropdown ">
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
				<h1>Captcha</h1>
				<div class="row">
	<div class="col-sm-12">	
		<form class="form-horizontal" method="POST" action="">
		<!--<form class="form-horizontal" method="POST" action="" id="formulario" name="formulario">-->
			<div class="form-group">
				<div class="form-inline">
					<div class="col-sm-offset-2 col-sm-10">
						<img src="/templates/Web.Plantilla/lib/simple-php-captcha.php?_CAPTCHA&amp;t=0.17065600+1426081690" alt="CAPTCHA code">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-inline">
					<label for="inputPassword3" class="col-sm-2 control-label">Ingrese el c&oacute;digo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo" value="">
						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-inline">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" name="aceptar" class="btn btn-primary">Aceptar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-12">	
		---------->  <-----------
	</div>
</div>
			</div>		
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="../lib/jquery-1.11.2/jquery-1.11.2.min.js"></script>
   	<script src="../lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
	<script src="../lib/bootstrap-3.3.2-dist/docs/assets/js/docs.min.js"></script>
 	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
</body>
</html><?php }} ?>
