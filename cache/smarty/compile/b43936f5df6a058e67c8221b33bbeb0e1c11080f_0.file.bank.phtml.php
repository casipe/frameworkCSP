<?php
/* Smarty version 3.1.33, created on 2021-01-10 22:21:22
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/bank/bank.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffba81294f233_37418301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43936f5df6a058e67c8221b33bbeb0e1c11080f' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/bank/bank.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffba81294f233_37418301 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" id="idItem" value=""/>
                <div class="modal-body">

                    <div class="form-group">											
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>                                                
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60" required/>
                        </div>
                    </div>	

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Code'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="codigo" name="codigo" maxlength="10" required/>
                        </div>


                        <div class="col-md-5 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Internal Code'),$_smarty_tpl ) );?>
 </label>                                              
                            <input type="text" class="form-control" id="codigo_interno" name="codigo_interno" maxlength="60"/>
                        </div>
                    </div>										

                    <div class="form-group">
                        <div class="col-md-11 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'URL'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="url" name="url" maxlength="300"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-11 col-xs-12">                                              
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Conciliation URL'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="url_conciliacao" name="url_conciliacao" maxlength="300" />
                        </div>
                    </div> 
                    <br>
                    <div class="form-group">
                        <div class="col-md-10 col-xs-12"> 											
                            <label class="check">
                                <input type="checkbox" class="icheckbox" value="1" id="atualiza_nosso_numero" name="atualiza_nosso_numero"/>
                            </label>
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Update our number'),$_smarty_tpl ) );?>
</label>
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>	
                    </div>	

                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                              
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
 </label>											 
                            <textarea class="form-control" id="observacao" name="observacao" maxlength="300" rows="6" cols="80" ></textarea>
                            <span class="help-block">Ex.: https://API.<span class="lowercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank'),$_smarty_tpl ) );?>
</span>.com</span>
                        </div> 
                    </div>


                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" checked value="1" name="status" /></label>
                            <label class="control-label" for="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
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
