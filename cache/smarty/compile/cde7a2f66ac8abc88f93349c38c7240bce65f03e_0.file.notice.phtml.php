<?php
/* Smarty version 3.1.33, created on 2021-01-18 23:46:27
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/notice/notice.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60064803842531_68303444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cde7a2f66ac8abc88f93349c38c7240bce65f03e' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/notice/notice.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60064803842531_68303444 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit Notice'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="idItem"  value="" /> 
                <div class="modal-body">


                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Subject'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="assunto" name="assunto" maxlength="40" required  value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Message'),$_smarty_tpl ) );?>
 </label>
                            <textarea type="text" class="form-control" id="mensagem" name="mensagem" maxlength="500" required rows="6" cols="40"></textarea>
                        </div>
                    </div>

                    <div id="checkNotificacaoPush" class="form-group">
                        <div class="col-md-7 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="notificacao_push" class="icheckbox" value="1" name="notificacao_push"/></label>
                            <label class="control-label" for="edit_notificacao_push"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Send push notification'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>

                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-7 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" value="1" name="status" /></label>
                            <label class="control-label" for="edit_active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" id="btnSendNotification" onclick="Notice.SendNotification()" class="btn btn-info"><i class="fal fa-envelope"></i> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Send push notification now'),$_smarty_tpl ) );?>

                    </a>
                    
                    <button type="button" class="btn btn-success" id="btnSave" ><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
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
