<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 11:35:32
         compiled from "C:\xampp\htdocs\templates\Web.Plantilla\web\templates\menu\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161755501a295932498-30746599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '920a8001cacccb1563b2bc2c5e2a6ad67681e2bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\menu\\menu.tpl',
      1 => 1426170931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161755501a295932498-30746599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501a29595c602_09392671',
  'variables' => 
  array (
    'active_home' => 0,
    'active_formulario' => 0,
    'active_captcha' => 0,
    'active_contact' => 0,
    'active_dropdown' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501a29595c602_09392671')) {function content_5501a29595c602_09392671($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
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
				<li class="<?php echo $_smarty_tpl->tpl_vars['active_captcha']->value;?>
"><a href="captcha.php">Captcha</a></li>
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
<?php }} ?>
