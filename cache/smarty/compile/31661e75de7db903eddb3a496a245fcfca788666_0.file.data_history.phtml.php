<?php
/* Smarty version 3.1.33, created on 2021-01-18 23:45:02
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/data_history.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600647ae15bc15_13196092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31661e75de7db903eddb3a496a245fcfca788666' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/data_history.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600647ae15bc15_13196092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php if (isset($_smarty_tpl->tpl_vars['datas']->value) && COUNT($_smarty_tpl->tpl_vars['datas']->value)) {?>

<hr class="clear">
<br>
    <button class="btn btn-link collapsed row pull-left" type="button" data-toggle="collapse"
            data-target="#contentHistorico" aria-expanded="false" aria-controls="contentHistorico" style="margin-top:-40px">
        <i class="fal fa-eye"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'See History'),$_smarty_tpl ) );?>

    </button>

<div id="contentHistorico" class="col-md-12 collapse pull-left scroll">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="far fa-clock-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'History'),$_smarty_tpl ) );?>
</h3>
        </div>
        <div class="panel-body">                                
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Parcel'),$_smarty_tpl ) );?>
</th>
                        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
</th>
                        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due'),$_smarty_tpl ) );?>
</th>
                        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
                    </tr>
                </thead>
                <tbody>  
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'items');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['items']->value) {
?>	
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                    <tr><td colspan="4"><br><span class="bold pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Date'),$_smarty_tpl ) );?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['data_upd'],"%d/%m/%Y %H:%M:%S");?>
</span></td></tr>
                    <?php }?>
                    <tr class="<?php if ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PAG') {?>blue<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'CAN') {?>red<?php }?>">
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['parcela'];?>
</th>
                        <td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",'');?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['data_vencimento'],"%d/%m/%Y");?>
</td>
                        <td><span class="red"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Canceled'),$_smarty_tpl ) );?>
</td> 
                    </tr>		
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <p class="clear">                          
        </div>
    </div>       
</div>
<?php }?>
<p class="clear">   <?php }
}
