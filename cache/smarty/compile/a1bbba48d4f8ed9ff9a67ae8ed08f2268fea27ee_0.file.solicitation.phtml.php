<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/solicitation.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9e9a5d9_42252799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1bbba48d4f8ed9ff9a67ae8ed08f2268fea27ee' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/solicitation.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9e9a5d9_42252799 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="solicitationModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHeadEdit" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnCloseModalUnit" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHeadEdit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit Solicitation'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Occurrence'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formSolicitation" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  class="idItem"  value="" /> 
                <div class="modal-body modalScroll">

                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Subject'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control readonly" id="solicitation_assunto" disabled name="assunto" maxlength="40" required  value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Message'),$_smarty_tpl ) );?>
 </label>
                            <textarea type="text" class="form-control readonly" id="solicitation_mensagem" disabled name="mensagem" maxlength="300" rows="6" cols="150"></textarea>
                        </div>												
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Answer'),$_smarty_tpl ) );?>
 </label>
                            <textarea type="text" class="form-control" id="solicitation_resposta"  name="resposta" maxlength="300" rows="6" cols="150"></textarea>
                        </div>												
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="solicitation_tipo" name="tipo" >
                                <option value="NOR"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Normal'),$_smarty_tpl ) );?>
</option>
                                <option value="EME"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Emergency'),$_smarty_tpl ) );?>
</option>
                                <option value="URG"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Urgent'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div> 

                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="solicitation_status" name="status" required >
                                <option value="ABE"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Open'),$_smarty_tpl ) );?>
</option>
                                <option value="ANA"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'In Analysis'),$_smarty_tpl ) );?>
</option>
                                <option value="FIN"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Finalize'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div> 
                    </div>
                    <br>
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
</div><?php }
}
