<?php
/* Smarty version 3.1.33, created on 2021-01-10 22:30:13
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/typetitle/typetitle.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffbaa259fd148_02002242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a86af61256afbcd616bed0a3b43ec3fc07a6eddf' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/typetitle/typetitle.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffbaa259fd148_02002242 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input type="hidden" id="idItem" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60" required  />
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Ex.: Título Avulso a Pagar'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>							

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="tipo" name="tipo"> 
                                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                <option value="DINHEIRO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Money'),$_smarty_tpl ) );?>
</option>								
                                <option value="CARTAO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Credit Card'),$_smarty_tpl ) );?>
</option>
                                <option value="DUPLICATA"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank Duplicate'),$_smarty_tpl ) );?>
</option>
                                <option value="DEPOSITO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>"Bank Deposit"),$_smarty_tpl ) );?>
</option>
                                <option value="TRANSFERENCIA"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Transfer'),$_smarty_tpl ) );?>
</option>										
                                <option value="OUTROS"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>"Others"),$_smarty_tpl ) );?>
</option>													
                            </select>
                        </div>

                        <div class="col-md-5 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type Of Movement'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="tipo_movimento" name="tipo_movimento"> 
                                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value="R"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To Receive'),$_smarty_tpl ) );?>
</option>
                                <option value="P"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To Pay'),$_smarty_tpl ) );?>
</option>
                                <option value="A"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Both'),$_smarty_tpl ) );?>
</option>												
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                       
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Minimum Installment'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control numero" id="parcelamento_minimo" maxlength="3" name="parcelamento_minimo" />
                        </div>


                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Maximum Installment'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control numero" id="parcelamento_maximo" maxlength="3" name="parcelamento_maximo"/>

                        </div>
                    </div>
                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" value="1" name="status" /></label>
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
