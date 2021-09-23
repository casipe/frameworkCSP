<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/pageStyleSheet.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c836d576c2_53650844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725c3735517ba009603678d57eeff93633313c4c' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pageStyleSheet.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c836d576c2_53650844 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['STYLE_SHEET']->value)) {
echo $_smarty_tpl->tpl_vars['STYLE_SHEET']->value;?>

<?php }
if (isset($_smarty_tpl->tpl_vars['DYNAMIC_DATA_TABLE']->value) && count($_smarty_tpl->tpl_vars['DYNAMIC_DATA_TABLE']->value)) {?>
<link rel="stylesheet" type="text/css" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'BASE_URL_TEMPLATE'),$_smarty_tpl ) );?>
lib/buttons/css/buttons.dataTables.min.css">
<?php }
}
}
