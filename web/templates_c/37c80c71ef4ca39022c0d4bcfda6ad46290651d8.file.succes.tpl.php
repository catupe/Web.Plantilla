<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-13 12:29:54
         compiled from "..\web\templates\mensajes\succes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:380555030272497c37-36107818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37c80c71ef4ca39022c0d4bcfda6ad46290651d8' => 
    array (
      0 => '..\\web\\templates\\mensajes\\succes.tpl',
      1 => 1426257912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '380555030272497c37-36107818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje_succes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550302724e1257_36876668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550302724e1257_36876668')) {function content_550302724e1257_36876668($_smarty_tpl) {?><div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $_smarty_tpl->tpl_vars['mensaje_succes']->value;?>

</div>
<?php }} ?>
