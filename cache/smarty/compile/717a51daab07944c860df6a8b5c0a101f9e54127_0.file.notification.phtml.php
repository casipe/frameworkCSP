<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/notification.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9e74b41_33015779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '717a51daab07944c860df6a8b5c0a101f9e54127' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/notification.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9e74b41_33015779 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHeadAdd" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnCloseModalUnit" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add Notification'),$_smarty_tpl ) );?>
</h4>
            </div>

            <!-- FORM -->
            <form class="form-horizontal" id="formNotification" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  class="idItem"  value="" /> 
                <div class="modal-body">

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Title'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="titulo" name="titulo" maxlength="40" required  value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-7 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Message'),$_smarty_tpl ) );?>
 </label>
                            <textarea type="text" class="form-control" id="mensagem" name="mensagem" required maxlength="300" rows="6" cols="100"></textarea>
                        </div>												
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select selectpicker" id="tipo" name="tipo" required data-show-subtext="true" data-live-search="true">
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value="NOT"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Notification'),$_smarty_tpl ) );?>
</option>
                                <option value="AVI"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Notice'),$_smarty_tpl ) );?>
</option>
                                <option value="DUV"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Doubt'),$_smarty_tpl ) );?>
</option>
                                <option value="MUL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Mulct'),$_smarty_tpl ) );?>
</option>
                                <option value="SOL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Solicitation'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div> 
                    </div>

                    <div class="form-group">
                        <div class="col-md-7 col-xs-12"> 
                            <label class="check"><input type="checkbox" class="icheckbox solicitar_resposta" value="1" name="solicitar_resposta" /></label>
                            <label class="control-label" for="solicitar_resposta"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Request Receiving Response'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btnSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
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
