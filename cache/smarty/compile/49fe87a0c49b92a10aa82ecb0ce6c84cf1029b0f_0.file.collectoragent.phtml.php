<?php
/* Smarty version 3.1.33, created on 2021-01-10 22:32:23
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/collectoragent/collectoragent.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffbaaa7d976f9_07755934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49fe87a0c49b92a10aa82ecb0ce6c84cf1029b0f' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/collectoragent/collectoragent.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffbaaa7d976f9_07755934 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" id="idItem" value=""/>

                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" required maxlength="60" />
                        </div>
                    </div>							

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">     
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type Of Movement'),$_smarty_tpl ) );?>
</label>                                                                                       
                            <select class="form-control select" id="tipo_movimento" name="tipo_movimento">                                                
                                <option value="R"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To Receive'),$_smarty_tpl ) );?>
</option>
                                <option value="P"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To Pay'),$_smarty_tpl ) );?>
</option>
                                <option value="A"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Both'),$_smarty_tpl ) );?>
</option>												
                            </select>
                        </div>

                        <div class="col-md-5 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
</label>                                                                                            
                            <select class="form-control select" id="tipo" name="tipo">                                                
                                <option value="BANCO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank'),$_smarty_tpl ) );?>
</option>
                                <option value="CARTEIRA"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Payment Slip'),$_smarty_tpl ) );?>
</option>
                                <option value="ADVOGADO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Lawyer'),$_smarty_tpl ) );?>
</option>
                                <option value="PROTESTO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Protest'),$_smarty_tpl ) );?>
</option>
                                <option value="CARTORIO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>"Notary's Office"),$_smarty_tpl ) );?>
</option>												
                            </select>
                        </div>
                    </div>
                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Fine'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control decimal_str" id="multa" name="multa" required maxlength="60" />
                        </div>

                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Interest'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control decimal_str" id="juros" name="juros" required maxlength="60" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Beneficiary Code'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="codigo_beneficiario" name="codigo_beneficiario" required maxlength="30" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Payment Place'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="boleto_local_pagamento" name="boleto_local_pagamento" required maxlength="100" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Header'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="boleto_observacao_cabecalho" name="boleto_observacao_cabecalho" required maxlength="100" />
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Footer'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="boleto_observacao_rodape" name="boleto_observacao_rodape" required maxlength="100" />
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

                </form>
                <!-- END FORM -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div><?php }
}
