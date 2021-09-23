<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:35:29
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/commonarea/commonarea.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610dff816986d9_81234644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83411e7b1702599205e654991156df871ea74b38' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/commonarea/commonarea.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610dff816986d9_81234644 (Smarty_Internal_Template $_smarty_tpl) {
?>                                

<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body modalScroll">
                <!-- FORM -->
                <form id="formItem" class="form-horizontal scrollTo" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" id="idItem" value=""/>
                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="40" required  value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Use Rule'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" id="id_area_comum_regra" name="id_area_comum_regra" data-show-subtext="true" data-live-search="true">													
                                <option selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listCommonAreaRule']->value) && count($_smarty_tpl->tpl_vars['listCommonAreaRule']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCommonAreaRule']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable4,'iv'=>'commonarearule'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
 
                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>													
                            </select>
                            <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('commonarearule')"></span>
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Terms of Use'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" id="id_termo_uso" name="id_termo_uso" data-show-subtext="true" data-live-search="true">													
                                <option selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listTermsUse']->value) && count($_smarty_tpl->tpl_vars['listTermsUse']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listTermsUse']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable5,'iv'=>'termsuse'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
 
                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>													
                            </select>
                            <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('termsuse')"></span>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="gera_fatura" class="icheckbox" value="1" name="gera_fatura" /></label>
                            <label class="control-label" for="gera_fatura"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Generate Invoice'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>

                    <div id="addFaturamento" class="none">
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">  
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</label>
                                <select class="form-control select" id="id_plano_conta" name="id_plano_conta" data-show-subtext="true" data-live-search="true">
                                    <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                    <?php if (isset($_smarty_tpl->tpl_vars['listManagementAccount']->value) && count($_smarty_tpl->tpl_vars['listManagementAccount']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listManagementAccount']->value, 'mAccount', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['mAccount']->value) {
?>
                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['mAccount']->value->id;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable6,'iv'=>'managementaccount'),$_smarty_tpl ) );?>
" >
                                        <?php echo $_smarty_tpl->tpl_vars['mAccount']->value->descricao;?>

                                    </option>                                                
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                                <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('managementaccount')"></span>
                            </div>

                            <div class="col-md-6 col-xs-12 row">  
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document Type'),$_smarty_tpl ) );?>
</label>
                                <select class="form-control select" id="id_tipo_documento" name="id_tipo_documento" data-show-subtext="true" data-live-search="true">
                                    <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                    <?php if (isset($_smarty_tpl->tpl_vars['listDocumentType']->value) && count($_smarty_tpl->tpl_vars['listDocumentType']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listDocumentType']->value, 'DocumentType', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['DocumentType']->value) {
?>
                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['DocumentType']->value->id;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable7,'iv'=>'documenttype'),$_smarty_tpl ) );?>
" >
                                        <?php echo $_smarty_tpl->tpl_vars['DocumentType']->value->descricao;?>

                                    </option>                                                
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                                <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('documenttype')"></span>
                            </div>

                            <div class="col-md-6 col-xs-12">                                            
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cost'),$_smarty_tpl ) );?>
 </label>
                                <input type="text" class="form-control" placeholder="0.00" value="" MASCARA-MOEDA id="custo"  name="custo"  maxlength="18" required/>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">                                            
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due Day'),$_smarty_tpl ) );?>
 </label>
                                <select class="form-control select" id="dia_vencimento" name="dia_vencimento" data-show-subtext="true" data-live-search="true">
                                    <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                    <?php
$_smarty_tpl->tpl_vars['dia'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['dia']->step = 1;$_smarty_tpl->tpl_vars['dia']->total = (int) ceil(($_smarty_tpl->tpl_vars['dia']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['dia']->step));
if ($_smarty_tpl->tpl_vars['dia']->total > 0) {
for ($_smarty_tpl->tpl_vars['dia']->value = 1, $_smarty_tpl->tpl_vars['dia']->iteration = 1;$_smarty_tpl->tpl_vars['dia']->iteration <= $_smarty_tpl->tpl_vars['dia']->total;$_smarty_tpl->tpl_vars['dia']->value += $_smarty_tpl->tpl_vars['dia']->step, $_smarty_tpl->tpl_vars['dia']->iteration++) {
$_smarty_tpl->tpl_vars['dia']->first = $_smarty_tpl->tpl_vars['dia']->iteration === 1;$_smarty_tpl->tpl_vars['dia']->last = $_smarty_tpl->tpl_vars['dia']->iteration === $_smarty_tpl->tpl_vars['dia']->total;?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
" >
                                        <?php if ($_smarty_tpl->tpl_vars['dia']->value < 10) {?>0<?php }
echo $_smarty_tpl->tpl_vars['dia']->value;?>

                                    </option>  
                                    <?php }
}
?>
                                </select>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-4 col-xs-12">                                             
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Maximum of guest'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control numero" value="0" id="max_convidado"  name="max_convidado"  maxlength="4" required/>
                        </div>
                    </div>

                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-4 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" checked value="1" name="status" /></label>
                            <label class="control-label" for="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>

                        <div class="col-md-8 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="requer_aprovacao_sindico" class="icheckbox" checked value="1" name="requer_aprovacao_sindico" /></label>
                            <label class="control-label" for="requer_aprovacao_sindico"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Requires authorization from the building manager'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>

                </form>
                <!-- END FORM -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
