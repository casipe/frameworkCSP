<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dweller.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9e2eb80_11314092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7582d698fe64674c6a1a7dce14e683f938593919' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dweller.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9e2eb80_11314092 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="modal fade" id="dwellerModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHeadAdd" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add Dweller'),$_smarty_tpl ) );?>
</h4>
            </div>

            <!-- FORM -->
            <form class="form-horizontal" id="formDweller" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  class="idItem"  value="" /> 
                <div class="modal-body">

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="40" required  value="" />
                        </div>


                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="documento" name="documento" maxlength="40" required  value="" />
                        </div>												
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="status" name="status">
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Inactive'),$_smarty_tpl ) );?>
</option>
                                <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</option>
                                <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Waiting For Approval'),$_smarty_tpl ) );?>
</option>
                                <option value="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Not Approved'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div> 
						<div class="col-md-6 col-xs-12" style="margin-top:20px;"> 																																																	   
							<label class="check"><input type="checkbox" id="responsavel" class="icheckbox" value="1" name="responsavel"/></label>							
							<label class="control-label" for="responsavel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Make Responsible'),$_smarty_tpl ) );?>
</label>	
							<span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
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
