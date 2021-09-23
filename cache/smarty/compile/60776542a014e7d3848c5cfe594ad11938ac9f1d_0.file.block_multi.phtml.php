<?php
/* Smarty version 3.1.33, created on 2021-08-07 19:39:09
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/block/block_multi.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610f0b8d66a627_98898347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60776542a014e7d3848c5cfe594ad11938ac9f1d' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/block/block_multi.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610f0b8d66a627_98898347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- START MULTI SAVE -->
<div class="modal fade" id="itemModalMulti" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnCloseModalBlock" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add in bulk'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formMulti" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="is_multi_block" name="is_multi_block" value="1" />
                <div class="modal-body">

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="multi_descricao" name="descricao" maxlength="30" required  value="" />

                            <span class="help-block">Informe o descrição do bloco.</span>
                        </div>
                    </div>
                    <hr>


                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label text-left"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Qty of Blocks'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control numero" id="multi_qtd" name="qtd_bloco" maxlength="3" value="" />
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total blocks that will be created automatically'),$_smarty_tpl ) );?>
</span>
                        </div>                                
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label text-left"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Sequence'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control numero" id="sequencia_inicial" name="sequencia_inicial" maxlength="3" value="" />
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Eg: Start with 2 for Desc-2, Desc-3'),$_smarty_tpl ) );?>
...</span>
                        </div>                                
                    </div> 
                    <div class="form-group">
                        <div class="col-md-8 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Separator'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="block_separador" name="separador" data-show-subtext="true" data-live-search="true">
                                <option  selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>								
                                <option value="-"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
-99</option>
                                <option value="_"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
_99</option>
                                <option value="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
#99</option>
                                <option value="S"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 99</option>
                                <option value="99">99-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</option>		 													
                            </select>
                        </div>
                    </div>

                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-7 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="multi_active" class="icheckbox" value="1" name="status" checked /></label>
                            <label class="control-label" for="multi_active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnSaveMulti"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                    <button type="button" id="closeBlockAdd" class="btn btn-info btnCloseModalBlock" data-dismiss="modal"><i class="fal fa-times-circle"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                </div>
            </form>

            <!-- END FORM -->
        </div>
    </div>
</div>
<!-- END MULTI SAVE -->

<?php }
}
