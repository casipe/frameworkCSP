<?php
/* Smarty version 3.1.33, created on 2021-04-21 13:18:13
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/accessprofile/accessprofile.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60805045a27323_68149526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b356e380456c0ce044bc9dad2374f5307f725357' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/accessprofile/accessprofile.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60805045a27323_68149526 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modals">

    <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                    <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
</h4>
                </div> <!-- FORM -->
                <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" id="idItem" value=""/>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                                <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60"  value="" />
                            </div>
                        </div>	
                        <div class="hr"></div>

                        <div class="form-group">
                            <div class="col-md-7 col-xs-12"> 
                                <label class="check"><input type="checkbox" id="active" class="icheckbox" value="1" name="status" checked /></label>
                                <label class="control-label" for="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                                <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
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


</div>
<?php }
}
