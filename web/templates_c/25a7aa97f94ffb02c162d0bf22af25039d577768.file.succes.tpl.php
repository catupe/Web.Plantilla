<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-12 11:24:20
         compiled from "C:\xampp\htdocs\templates\Web.Plantilla\web\templates\mensajes\succes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245905501a194695000-49444410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a7aa97f94ffb02c162d0bf22af25039d577768' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\Web.Plantilla\\web\\templates\\mensajes\\succes.tpl',
      1 => 1426168203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245905501a194695000-49444410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje_succes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5501a1946d5961_06996056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501a1946d5961_06996056')) {function content_5501a1946d5961_06996056($_smarty_tpl) {?><div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $_smarty_tpl->tpl_vars['mensaje_succes']->value;?>

</div>
<?php }} ?>
