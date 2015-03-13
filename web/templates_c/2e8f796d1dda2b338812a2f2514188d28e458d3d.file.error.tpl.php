<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 14:43:40
         compiled from "C:\xampp\htdocs\templates\Web.Plantilla\web\templates\mensajes\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26374550195dc7e76e5-09118136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8f796d1dda2b338812a2f2514188d28e458d3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\mensajes\\error.tpl',
      1 => 1426167805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26374550195dc7e76e5-09118136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550195dc7f43e0_33672877',
  'variables' => 
  array (
    'mensaje_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550195dc7f43e0_33672877')) {function content_550195dc7f43e0_33672877($_smarty_tpl) {?><div class="alert alert-danger alert-dismissible" role="alert" id="mensaje-error">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $_smarty_tpl->tpl_vars['mensaje_error']->value;?>

</div><?php }} ?>
