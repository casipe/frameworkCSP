<?php
/* Smarty version 3.1.33, created on 2020-12-15 08:11:54
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/document/modal_edit_folder.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd899fa7d8061_22425884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b1ce14dce1376af1dc6ca451c532a58c2573b32' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/document/modal_edit_folder.phtml',
      1 => 1608005220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd899fa7d8061_22425884 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modalEditFolder" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Folder'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="path"></div>
                    <hr>
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" name="descricao" maxlength="60" required/>
                            <span class="help-block">Descrição da pasta.</span>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Visibility'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" name="visibilidade" required>
                                <option value="PUBLICO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Public'),$_smarty_tpl ) );?>
</option>
                                <option value="PRIVADO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Private'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div> 
                    </div>
                </form> 
                <!-- END FORM -->
            </div>
            <br class="clear"><br class="clear">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"  id="btnSaveEditFolder"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-primary" id="modalSaveFolderClose" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div> <?php }
}
