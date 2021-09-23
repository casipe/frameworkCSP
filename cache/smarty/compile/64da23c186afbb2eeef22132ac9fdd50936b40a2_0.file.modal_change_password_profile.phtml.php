<?php
/* Smarty version 3.1.33, created on 2021-09-06 23:02:30
  from '/var/www/html/conndo.com.br/admin/templates/default/modal_change_password_profile.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6136c8369b4db5_80385140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64da23c186afbb2eeef22132ac9fdd50936b40a2' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/modal_change_password_profile.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6136c8369b4db5_80385140 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="modalChangePasswordAccess" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="defModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Change access password'),$_smarty_tpl ) );?>
</h4>
            </div>

            <!-- FORM -->
            <form class="form-horizontal" id="formChangePasswordAccess">
                <div class="modal-body">

                    <div class="form-group">                                        
                        <div class="col-md-5 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Current Password'),$_smarty_tpl ) );?>
 </label>	
                            <input type="password" id="alterar_senhaAtual" name="senhaAtual" class="form-control"/>		
                        </div>
                    </div>

                    <div class="form-group">                                        
                        <div class="col-md-5 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New Password'),$_smarty_tpl ) );?>
 </label>	
                            <input type="password" id="alterar_senha1" name="senha1" class="form-control"/>		
                        </div>

                        <div class="col-md-5 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Confirm New Password'),$_smarty_tpl ) );?>
 </label>
                            <input type="password"  id="alterar_senha2" name="senha2" class="form-control"/>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success"  id="btnChangePasswordAccess"><i class="fal fa-sync-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Change'),$_smarty_tpl ) );?>
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
