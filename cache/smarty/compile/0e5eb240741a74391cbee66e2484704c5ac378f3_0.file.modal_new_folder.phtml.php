<?php
/* Smarty version 3.1.33, created on 2020-12-15 08:11:54
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/document/modal_new_folder.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd899fa7c3c85_75535294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e5eb240741a74391cbee66e2484704c5ac378f3' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/document/modal_new_folder.phtml',
      1 => 1608005220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd899fa7c3c85_75535294 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="modalNewFolder" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New Folder'),$_smarty_tpl ) );?>
</h4>
            </div> 
            <!-- FORM -->
            <form id="formAddFolder" class="form-horizontal" method="post" action="" accept-charset="UTF-8">
                <input type="hidden" name="type" value="folder"/>
                <div class="modal-body"> 
                    <div class="path"></div>
                    <hr>
                    <div class="form-group"> 
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60" required/>
                            <span class="help-block">Descrição da pasta.</span>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Visibility'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="visibilidade" name="visibilidade" required >
                                <option value="PUBLICO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Public'),$_smarty_tpl ) );?>
</option>
                                <option value="PRIVADO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Private'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div> 

                    </div>
                </div>
                 <br class="clear"><br class="clear">
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSaveAddFolder"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal" id="btnCloseModalFile"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>



<?php }
}
