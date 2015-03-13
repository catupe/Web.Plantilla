<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-13 11:47:36
         compiled from "..\web\templates\mensajes\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171225502f888852e89-72172453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb64fb23f7d51919279f7edd92df5673cb55904' => 
    array (
      0 => '..\\web\\templates\\mensajes\\error.tpl',
      1 => 1426257912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171225502f888852e89-72172453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5502f88889adb4_27185167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502f88889adb4_27185167')) {function content_5502f88889adb4_27185167($_smarty_tpl) {?><div class="alert alert-danger alert-dismissible" role="alert" id="mensaje-error">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $_smarty_tpl->tpl_vars['mensaje_error']->value;?>

</div><?php }} ?>
