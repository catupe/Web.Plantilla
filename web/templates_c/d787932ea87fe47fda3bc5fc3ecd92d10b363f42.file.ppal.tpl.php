<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-11 17:05:52
         compiled from "C:\xampp\htdocs\templates\Web.Plantilla\web\templates\formulario\ppal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14165500a020c0a193-63918223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd787932ea87fe47fda3bc5fc3ecd92d10b363f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\formulario\\ppal.tpl',
      1 => 1426002752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14165500a020c0a193-63918223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_error_fullname' => 0,
    'value_fullname' => 0,
    'mensaje_error_fullname' => 0,
    'class_error_date' => 0,
    'value_date' => 0,
    'mensaje_error_date' => 0,
    'class_error_email' => 0,
    'value_email' => 0,
    'mensaje_error_email' => 0,
    'datos_post_fullname' => 0,
    'datos_post_date' => 0,
    'datos_post_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5500a020ccd8e4_60182568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5500a020ccd8e4_60182568')) {function content_5500a020ccd8e4_60182568($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">	
		<form class="form-horizontal" method="POST" action="" id="formulario" name="formulario">
			<div class="form-group <?php echo $_smarty_tpl->tpl_vars['class_error_fullname']->value;?>
">
				<div class="form-inline">
					<label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="FullName" id="fname" value="<?php echo $_smarty_tpl->tpl_vars['value_fullname']->value;?>
" aria-describedby="inputSuccess2Status">
						
						<?php echo $_smarty_tpl->tpl_vars['mensaje_error_fullname']->value;?>

					</div>
				</div>
			</div>
			<div class="form-group <?php echo $_smarty_tpl->tpl_vars['class_error_date']->value;?>
">
				<div class="form-inline">
					<label for="inputPassword3" class="col-sm-2 control-label">Date</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Date" id="fdate" value="<?php echo $_smarty_tpl->tpl_vars['value_date']->value;?>
" placeholder="aaaa/mm/dd">
						
						<?php echo $_smarty_tpl->tpl_vars['mensaje_error_date']->value;?>

					</div>
				</div>
			</div>
			<div class="form-group <?php echo $_smarty_tpl->tpl_vars['class_error_email']->value;?>
">
				<div class="form-inline">
					<label for="inputPassword3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['value_email']->value;?>
">
						
						<?php echo $_smarty_tpl->tpl_vars['mensaje_error_email']->value;?>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-inline">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Aceptar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-12">	
		<?php echo $_smarty_tpl->tpl_vars['datos_post_fullname']->value;?>

		<br>
		<?php echo $_smarty_tpl->tpl_vars['datos_post_date']->value;?>

		<br>
		<?php echo $_smarty_tpl->tpl_vars['datos_post_email']->value;?>

	</div>
</div><?php }} ?>
