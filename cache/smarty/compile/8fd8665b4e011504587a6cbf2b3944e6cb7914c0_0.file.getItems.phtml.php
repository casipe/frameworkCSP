<?php
/* Smarty version 3.1.33, created on 2020-11-17 18:36:03
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/getItems.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb44243c91a93_48151157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fd8665b4e011504587a6cbf2b3944e6cb7914c0' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/getItems.phtml',
      1 => 1605645840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb44243c91a93_48151157 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="containe r">

    <div id="tableModal" class="table-editable">
        
        <table class="table" id="budget-items"> 
            <thead>
            <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</th>        
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
(R$)</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type Of Movement'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Month'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Action'),$_smarty_tpl ) );?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable1,'iv'=>'budgetitem'),$_smarty_tpl ) );?>
">
                    <td contenteditable="true" data-descricao><?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
</td>
                    <td contenteditable="true" data-valor class="money"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value->valor,2,",",".");?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['item']->value->tipo_movimento == "D") {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expenses'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Revenues'),$_smarty_tpl ) );
}?></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->plano_conta;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->mes;?>
</td>
                    <td>
                        <i class="fal fa-save fa-2x green link act-item-edit" style="margin-right:4px;" 
                                data-id-item="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable2,'iv'=>'budgetitem'),$_smarty_tpl ) );?>
">
                        </i>  
                        <i class="fal fa-trash fa-2x red link act-item-delete" data-id-item="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable3,'iv'=>'budgetitem'),$_smarty_tpl ) );?>
" 
                        onClick="Budget.removeItem('<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable4,'iv'=>'budgetitem'),$_smarty_tpl ) );?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Are you sure you want to delete the record'),$_smarty_tpl ) );?>
: <br><?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
?')">
                        </i>
                    </td>
                </tr>                
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

</div><?php }
}
