<?php
/* Smarty version 3.1.33, created on 2021-01-11 13:52:15
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/managementaccount/bankaccount.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffc823fbf5157_76881279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecea47ebded2218d2d6a6a5fa9cf81f68c896e18' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/managementaccount/bankaccount.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc823fbf5157_76881279 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="bankAccountModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank Account'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formBankAccount" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" id="idItemBankAccount" value=""/>
                <div class="modal-body modalScrollVertical">

                    <div class="form-group" id="bankAccount">
                        <div class="descContaPlano"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
:</b> <span id="descContaPlano"></span></div>
                        <?php if (isset($_smarty_tpl->tpl_vars['listBankAccount']->value) && count($_smarty_tpl->tpl_vars['listBankAccount']->value)) {?>
                        <table class="table table-bordered">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listBankAccount']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td>
                                    <label class="check"><input type="checkbox" class="icheckbox banco_conta" id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable5,'iv'=>'bankaccount'),$_smarty_tpl ) );?>
" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable6,'iv'=>'bankaccount'),$_smarty_tpl ) );?>
" name="id_banco_conta[]" /></label>
                                    </label>
                                </td>
                                <td><label class="control-label" for="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable7,'iv'=>'bankaccount'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->banco_descricao;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value->agencia;?>
 / <?php echo $_smarty_tpl->tpl_vars['item']->value->numero_conta;
if ($_smarty_tpl->tpl_vars['item']->value->operacao) {?> - Op.: <?php echo $_smarty_tpl->tpl_vars['item']->value->operacao;
}?>)</labe></td>                                
                            </tr>                           
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </table>
                        <?php } else { ?>
                        <hr>
                        <div class="row">
                            <div class="alert alert-info alert-small" role="alert">
                                <i class="fal fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Nenhuma conta bancária foi encontrada'),$_smarty_tpl ) );?>
.
                            </div>
                        </div>
                        <?php }?>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSaveBankAccount"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                </div>  
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>                

<?php }
}
