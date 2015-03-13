<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 14:00:06
         compiled from "C:\xampp\htdocs\templates\Web.Plantilla\web\templates\captcha\ppal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2420354ff4b403a34d6-28410308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd4f9e1ca479918985cdb79f92ea75ae1a5ec69f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\captcha\\ppal.tpl',
      1 => 1426165135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2420354ff4b403a34d6-28410308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ff4b403bb034_51304872',
  'variables' => 
  array (
    'captcha' => 0,
    'valido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff4b403bb034_51304872')) {function content_54ff4b403bb034_51304872($_smarty_tpl) {?><div class="row">
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
