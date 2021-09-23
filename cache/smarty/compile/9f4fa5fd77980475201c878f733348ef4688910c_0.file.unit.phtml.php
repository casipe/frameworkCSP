<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:49:55
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/unit.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e373c042_04301030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4fa5fd77980475201c878f733348ef4688910c' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/unit.phtml',
      1 => 1628300950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e373c042_04301030 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ADD MODAL --> 
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnCloseModalCondominium" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add unit'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="idItem" value="" /> 
                <div class="modal-body">

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="id_bloco" name="id_bloco" data-show-subtext="true" data-live-search="true">
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['listBlock']->value) && count($_smarty_tpl->tpl_vars['listBlock']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listBlock']->value, 'block', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
?>
                                <?php if (!intval($_smarty_tpl->tpl_vars['block']->value->status)) {?>
                                <?php continue 1;?>
                                <?php }?>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['block']->value->id,'iv'=>'block'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value->descricao;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('block')"></span>
                        </div> 

                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="30" required  value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Number'),$_smarty_tpl ) );?>
 </label>							
                            <input type="text" class="form-control" id="numero" name="numero" maxlength="10" required  value="" />
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Floor'),$_smarty_tpl ) );?>
 </label>																   
                            <input type="text" class="form-control numero" id="andar" name="andar" maxlength="10" value="" />
                        </div>
                    </div>
                    <hr>

                    <div class="form-group"> 
                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total Unit Area'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control decimal_str" id="total_area_unidade" name="total_area_unidade" maxlength="10" value="" />
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">  
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Owner'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control  selectpicker with-ajax" id="id_proprietario" name="id_proprietario" data-show-subtext="true"                                             
                                    data-live-search="true">
                                <option selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option> 
                                <?php if (isset($_smarty_tpl->tpl_vars['listOwner']->value) && count($_smarty_tpl->tpl_vars['listOwner']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listOwner']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['item']->value->id,'iv'=>'owner'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->nome;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('owner')"></span>
                        </div>
                    </div>

                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12"> 																																																	   
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" value="1" checked name="status" /></label>							
                            <label class="control-label" for="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>
                        
                        <div class="col-md-6 col-xs-12" style="margin-top:10px;">
                            <button type="button" class="btn btn-primary pull-right none" id="btnAvancado">
                                <i class="fal fa-info-circle"></i> 
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Detalhes da Unidade...'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
                    
                    


                </div>
                <div class="modal-footer">
                    <div class="col-md-12 col-xs-12">
                        <div class="return_msg"></div>
                        <br class="clear">
                    </div>
                    <button type="button" class="btn btn-success" id="btnSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="btn btn-info btnCloseModalCondominium" data-dismiss="modal"><i class="fal fa-times-circle"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                </div>
            </form>

            <!-- END FORM -->
        </div>
    </div>
</div>



<!-- ADD MULTI MODAL -->
<div class="modal fade" id="multiAddModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnCloseModalCondominium" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add in bulk'),$_smarty_tpl ) );?>
</h4>
            </div>  
            <!-- FORM -->
            <form id="formMulti" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="is_multi_unit" name="is_multi_unit" value="1" />
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 col-xs-12"> 
                            <div class="form-group">
                                <div class="col-md-8 col-xs-12"> 
                                    <label class="control-label text-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Qty of Units'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control numero" id="multi_qtd" name="qtd_unidade" maxlength="5" value="" />
                                    <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total units per block that will be created automatically'),$_smarty_tpl ) );?>
</span>
                                </div>                                
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-xs-12"> 
                                    <label class="control-label text-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Sequence'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control numero" id="multi_sequencia_inicial" name="sequencia_inicial" maxlength="3" value="" />
                                    <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Eg: Start with 2 for Desc-2, Desc-3'),$_smarty_tpl ) );?>
...</span>
                                </div>                                
                            </div> 
                            <div class="form-group">
                                <div class="col-md-8 col-xs-12">
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Separator'),$_smarty_tpl ) );?>
</label>											                                                                                            
                                    <select class="form-control select" id="separador" name="separador" data-show-subtext="true" data-live-search="true">
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
                        </div> 

                        <div class="col-md-9 col-xs-12"> 
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
</label>											                                                                                            
                                    <select class="form-control select" id="multi_id_bloco" name="id_bloco" data-show-subtext="true" data-live-search="true">
                                        <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                        <?php if (isset($_smarty_tpl->tpl_vars['listBlock']->value) && count($_smarty_tpl->tpl_vars['listBlock']->value)) {?>
                                        <option value="0" selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'All'),$_smarty_tpl ) );?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listBlock']->value, 'block', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
?>
                                        <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['block']->value->id,'iv'=>'block'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value->descricao;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </select>
                                    <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('block')"></span>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control" id="multi_descricao" name="descricao" maxlength="30" required  value="" />
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">                               
                                <div class="col-md-4 col-xs-12"> 
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Total Unit Area'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control decimal_str" id="multi_total_area_unidade" name="total_area_unidade" maxlength="10" value="" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-7 col-xs-12" style="margin-top:30px;"> 																																																	   
                                    <label class="check"><input type="checkbox" id="multi_active" checked class="icheckbox" value="1" name="status" /></label>							
                                    <label class="control-label" for="multi_active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                                    <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                                </div>
                            </div>
                        </div>
                    </div>				

                    <br>				

                </div>
                <div class="modal-footer">
                    <div class="col-md-12 col-xs-12">
                        <div class="return_msg"></div>
                        <br class="clear">
                    </div>
                    <button type="button" class="btn btn-success"  OnClick='Unit.add(true)'><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="btn btn-info btnCloseModalCondominium" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
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
