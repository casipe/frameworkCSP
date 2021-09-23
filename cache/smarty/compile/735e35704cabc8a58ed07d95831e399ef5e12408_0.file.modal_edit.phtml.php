<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:51:25
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/scheduling/modal_edit.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e033db08eb7_76962043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735e35704cabc8a58ed07d95831e399ef5e12408' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/scheduling/modal_edit.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e033db08eb7_76962043 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="itemModalEdit" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-s m">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit Event'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form id="form_scheduling_edit" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div id="content_info"></div>
                    <div class="hr"></div>
                    <div class="form-group">
                        <div class="col-md-4 col-xs-12" id="field_status"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" id="status" name="status" >													
                                <option selected value="0" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Inactive'),$_smarty_tpl ) );?>
</option>													
                               	<option  value="1" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</option>
                                <option  value="2" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Waiting For Approval'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div>
                 
                        <div class="col-md-8 col-xs-12" id="field_realizado"> 
                            <label class="check"><input type="checkbox" id="realizado" class="icheckbox" value="1" name="realizado"/></label>
                            <label class="control-label" for="realizado"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Mark as done'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>
                </form>
                <!-- END FORM -->
            </div>
            <div class="modal-footer">
                <div class="col-md-12 col-xs-12">
                    <div class="return_msg"></div>
                    <br class="clear">
                </div>
                <button type="button" class="btn btn-danger pull-left" id="btnDeleteEvent"><i class="fal fa-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Delete'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-success" id="btnEditSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div><?php }
}
