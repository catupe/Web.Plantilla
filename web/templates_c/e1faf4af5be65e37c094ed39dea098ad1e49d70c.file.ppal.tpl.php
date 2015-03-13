<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-13 11:47:35
         compiled from "..\web\templates\formulario\ppal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326855502f887aa35e9-20272737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1faf4af5be65e37c094ed39dea098ad1e49d70c' => 
    array (
      0 => '..\\web\\templates\\formulario\\ppal.tpl',
      1 => 1426257912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326855502f887aa35e9-20272737',
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
  'unifunc' => 'content_5502f887b5c313_38003198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502f887b5c313_38003198')) {function content_5502f887b5c313_38003198($_smarty_tpl) {?><div class="row">
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
