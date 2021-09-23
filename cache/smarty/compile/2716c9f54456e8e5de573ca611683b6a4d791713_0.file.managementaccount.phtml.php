<?php
/* Smarty version 3.1.33, created on 2021-01-11 13:52:15
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/managementaccount/managementaccount.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffc823fbdebf1_21536581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2716c9f54456e8e5de573ca611683b6a4d791713' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/managementaccount/managementaccount.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc823fbdebf1_21536581 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</h4>
            </div><!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="idItem" value=""/> 
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60" required value="" />
                        </div>
                    </div>

                    <div class="form-group">										     
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Code'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control cod_plano_conta" id="codigo" name="codigo" maxlength="7" required value="" />
                            <span class="help-block">Ex.: 4.02.00</span>
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Parent Code'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control cod_plano_conta" id="codigo_pai" name="codigo_pai" maxlength="7"  value="" />
                            <span class="help-block">Ex.: 4.01.00</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type Of Movement'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="tipo_movimento" name="tipo_movimento">
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value="R"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Revenue'),$_smarty_tpl ) );?>
</option>
                                <option value="D"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expense'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="tipo" name="tipo">
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value="A"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Analytical'),$_smarty_tpl ) );?>
</option>
                                <option value="S"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Synthetic'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div>
                    </div>

                    <div class="hr"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">																						                                                                                                                                        
                            <label class="check"><input type="checkbox" id="aprovacao_automatica_movimento" class="icheckbox" value="1" name="aprovacao_automatica_movimento"/></label>
                            <label for="aprovacao_automatica_movimento"  class="col-md- control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Aprovar lançamento automaticamente'),$_smarty_tpl ) );?>
</label>
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">																						                                                                                                                                        
                            <label class="check"><input type="checkbox" id="quitacao_tesouraria_movimento" class="icheckbox" value="1" name="quitacao_tesouraria_movimento"/></label>
                            <label for="quitacao_tesouraria_movimento"  class="col-md- control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial discharge only in treasury'),$_smarty_tpl ) );?>
</label>
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
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
