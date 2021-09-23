<?php
/* Smarty version 3.1.33, created on 2020-12-14 19:24:49
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/data_simulation.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd7e63138f8f5_49205330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406c360cb358314ee28bc4943af3200300f6e19a' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/data_simulation.phtml',
      1 => 1607984635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd7e63138f8f5_49205330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (isset($_smarty_tpl->tpl_vars['datas']->value) && COUNT($_smarty_tpl->tpl_vars['datas']->value)) {?>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Parcel'),$_smarty_tpl ) );?>
</th>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
</th>
            <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due'),$_smarty_tpl ) );?>
</th>
        </tr>
    </thead>
    <tbody>  
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['installment'];?>
</th>
            <td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['value'],2,",",'');?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%d/%m/%Y");?>
</td>
        </tr>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['resto']->value) && $_smarty_tpl->tpl_vars['resto']->value != 0) {?>
<hr>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total'),$_smarty_tpl ) );?>
: <strong class="blue">R$ <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,",",'');?>
</strong><br>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Difference'),$_smarty_tpl ) );?>
: <strong class="red">R$ <?php echo number_format($_smarty_tpl->tpl_vars['resto']->value,2,",",'');?>
</strong>
<input type="hidden" name="total" id="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
<input type="hidden" name="titulos[<?php echo $_smarty_tpl->tpl_vars['item']->value['installment'];?>
][valor]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
"/>
<input type="hidden" name="titulos[<?php echo $_smarty_tpl->tpl_vars['item']->value['installment'];?>
][data]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
"/>	
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>
<div class="row">
    <div class="alert alert-info alert-small" role="alert">
        <i class="fal fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'There is no title to display'),$_smarty_tpl ) );?>
.
    </div>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['datas']->value['historico']) && COUNT($_smarty_tpl->tpl_vars['datas']->value['historico'])) {?>
<div class="col-md-12">
    <div class="panel panel-default pull-left">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value['historico'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>		
                    <tr class="<?php if ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'PAG') {?>green<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['status_pagamento_valor'] == 'CAN') {?>red<?php }?>">
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value['parcela'];?>
</th>
                        <td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['valor'],2,",",'');?>
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
            <p class="clear">                          
        </div>
    </div>       
</div>
<?php }
}
}
