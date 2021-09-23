<?php
/* Smarty version 3.1.33, created on 2021-01-18 23:45:02
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/data_titles.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600647ae143912_16722492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0511653615a32420a35019f11308d3ea7c5fcdda' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/data_titles.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600647ae143912_16722492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (isset($_smarty_tpl->tpl_vars['datas']->value) && COUNT($_smarty_tpl->tpl_vars['datas']->value)) {?>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Parcel'),$_smarty_tpl ) );?>
</th>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
</th>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reference'),$_smarty_tpl ) );?>
</th>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due'),$_smarty_tpl ) );?>
</th>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
        </tr>
    </thead>
    <tbody>  
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>

        <tr class="<?php if ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PAG') {?>green<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'CAN') {?>red<?php }?>">
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['parcela'];?>
</th>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",'');?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['numero_documento'];?>
</td> 
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['data_vencimento'],"%d/%m/%Y");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status_pagamento'];?>
</td> 
        </tr>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php } else { ?>
<div class="row">
    <div class="alert alert-info alert-small" role="alert">
        <i class="fal fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'There is no title to display'),$_smarty_tpl ) );?>
.
    </div>
</div>
<?php }
}
}
