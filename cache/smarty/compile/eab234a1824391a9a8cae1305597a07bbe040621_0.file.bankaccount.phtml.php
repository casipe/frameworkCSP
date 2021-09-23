<?php
/* Smarty version 3.1.33, created on 2021-01-10 22:21:03
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/bankaccount/bankaccount.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffba7ff9ffd10_27148772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eab234a1824391a9a8cae1305597a07bbe040621' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/bankaccount/bankaccount.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffba7ff9ffd10_27148772 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" id="idItem" value=""/>
                <div class="modal-body modalScrollVertical">

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="id_banco" name="id_banco" data-show-subtext="true" data-live-search="true">													
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listBank']->value) && count($_smarty_tpl->tpl_vars['listBank']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listBank']->value, 'bank', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['bank']->value) {
?>
                                <?php if (!intval($_smarty_tpl->tpl_vars['bank']->value->status)) {?>
                                <?php continue 1;?>
                                <?php }?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bank']->value->id;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable4,'iv'=>'bank'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['bank']->value->codigo;?>
 - <?php echo $_smarty_tpl->tpl_vars['bank']->value->descricao;?>
 
                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>													
                            </select>
                            <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('bank')"></span>
                        </div>
                    </div> 
                    <hr/>
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60" required />
                        </div>
                    </div>							
                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Agency Number'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="agencia" name="agencia" maxlength="20" required />
                        </div>

                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account Number'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="numero_conta" name="numero_conta" maxlength="20" required />
                        </div>
                    </div>							

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Operation'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="operacao" name="operacao" maxlength="10" />
                        </div>

                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Our Number'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="nosso_numero" name="nosso_numero" maxlength="20" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Telephone'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="telefone" name="telefone" maxlength="40" />
                        </div>
                    </div>	
                    <div class="form-group"> 
                        <div class="col-md-10 col-xs-12">                                              
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Payment Place'),$_smarty_tpl ) );?>
 </label>		
                            <textarea type="text" class="form-control" id="local_pagamento" name="local_pagamento" maxlength="40" rows="2" cols="80" ></textarea>
                            <span class="help-block">Informe o local de pagamento(Boleto).</span>
                        </div> 
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                              
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
 </label>											
                            <textarea type="text" class="form-control" id="observacao" name="observacao" maxlength="300" rows="6" cols="80" ></textarea>
                        </div> 
                    </div>
                    <div class="hr"></div>
                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" checked value="1" name="status" /></label>
                            <label class="control-label" for="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
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
