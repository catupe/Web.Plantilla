<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-13 15:47:38
         compiled from "..\web\templates\captcha\ppal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4615502f88a68c798-51128530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2242d08de320fbfe7ee7645b35da142649d83bd' => 
    array (
      0 => '..\\web\\templates\\captcha\\ppal.tpl',
      1 => 1426257912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4615502f88a68c798-51128530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captcha' => 0,
    'valido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5502f88a6e47d9_44534531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502f88a6e47d9_44534531')) {function content_5502f88a6e47d9_44534531($_smarty_tpl) {?><div class="row">
	<div class="col-sm-12">	
		<form class="form-horizontal" method="POST" action="">
		<!--<form class="form-horizontal" method="POST" action="" id="formulario" name="formulario">-->
			<div class="form-group">
				<div class="form-inline">
					<div class="col-sm-2">
						<button type="button" class="pull-right btn btn-default btn-lg" aria-label="Left Align" id="recargar-imagen">
							<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
						</button>
					</div>
					<div class="col-sm-10">
						<img src="<?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
" alt="CAPTCHA code" id="imagen-captcha">
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
		----------> <?php echo $_smarty_tpl->tpl_vars['valido']->value;?>
 <-----------
	</div>
</div><?php }} ?>
