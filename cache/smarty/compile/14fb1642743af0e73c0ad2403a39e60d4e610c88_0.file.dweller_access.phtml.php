<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dweller_access.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9e4c4f3_45220532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14fb1642743af0e73c0ad2403a39e60d4e610c88' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dweller_access.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9e4c4f3_45220532 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="modal fade" id="dwellerAccessModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHeadAdd" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dweller Access Information'),$_smarty_tpl ) );?>
</h4>
            </div>

            <!-- FORM -->
            <form class="form-horizontal" id="formAccessDweller" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Code'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['codigo_acesso_morador']->value;?>
" id="codigo_acesso_morador" />
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Mobile App'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="morador_acesso_app" name="morador_acesso_app">
                                <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->morador_acesso_app) || intval($_smarty_tpl->tpl_vars['datas']->value->morador_acesso_app) == 1) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes'),$_smarty_tpl ) );?>
</option>
                                <option value="0" <?php if (empty($_smarty_tpl->tpl_vars['datas']->value->morador_acesso_app) || intval($_smarty_tpl->tpl_vars['datas']->value->morador_acesso_app) == 0) {?>selected<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'No'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div> 

                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12"> 
                            <label class="check"><input type="checkbox" class="icheckbox" value="1" id="restaurar_senha" name="restaurar_senha" /></label>
                            <label class="control-label" for="restaurar_senha"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reset Default Password'),$_smarty_tpl ) );?>
:  <span class="red"><?php echo $_smarty_tpl->tpl_vars['codigo_acesso_morador']->value;?>
</span></label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btnSaveAccessDweller"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
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
