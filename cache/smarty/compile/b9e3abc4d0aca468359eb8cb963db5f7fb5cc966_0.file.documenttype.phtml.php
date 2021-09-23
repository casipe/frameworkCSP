<?php
/* Smarty version 3.1.33, created on 2021-01-10 22:29:43
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/documenttype/documenttype.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffbaa07357e89_41234821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e3abc4d0aca468359eb8cb963db5f7fb5cc966' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/documenttype/documenttype.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffbaa07357e89_41234821 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
</h4>
            </div> <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="idItem" value="" /> 
                <div class="modal-body">
                    <!-- FORM -->


                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="60" required/>
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Ex.: Boleto, Cartão, Nota Fiscal'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">   
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="tipo" name="tipo" data-show-subtext="true" data-live-search="true"> 
                                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	
                                <option value="BOL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pay Ticket'),$_smarty_tpl ) );?>
</option>												
                                <option value="NOF"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Tax Invoice'),$_smarty_tpl ) );?>
</option>
                                <option value="CHE"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Check'),$_smarty_tpl ) );?>
</option>
                                <option value="CRT"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Credit Card'),$_smarty_tpl ) );?>
</option>
                                <option value="DIN"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>"Money"),$_smarty_tpl ) );?>
</option>	
                                <option value="OUT"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>"Other"),$_smarty_tpl ) );?>
</option>												
                            </select>
                        </div>

                        <div class="col-md-5 col-xs-12">  
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Payment Gateway'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="id_config_gateway_pagamento" name="id_config_gateway_pagamento" data-show-subtext="true" data-live-search="true">	
                                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>	
                                <?php if (isset($_smarty_tpl->tpl_vars['listPaymentGateway']->value) && count($_smarty_tpl->tpl_vars['listPaymentGateway']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listPaymentGateway']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable4,'iv'=>'configpaymentgateway'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>

                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('paymentgateway')"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type of Title'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To Receive'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="id_tipo_titulo_receber" name="id_tipo_titulo_receber" data-show-subtext="true" data-live-search="true">
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>												
                                <?php if (isset($_smarty_tpl->tpl_vars['listTypeTitle']->value) && count($_smarty_tpl->tpl_vars['listTypeTitle']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listTypeTitle']->value, 'typetitle', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['typetitle']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['typetitle']->value->tipo_movimento == 'R' || $_smarty_tpl->tpl_vars['typetitle']->value->tipo_movimento == 'A') {?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['typetitle']->value->id;
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable5,'iv'=>'typetitle'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['typetitle']->value->descricao;?>

                                </option>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('typetitle')"></span>
                        </div>

                        <div class="col-md-5 col-xs-12">  
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type of Title'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To Pay'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="id_tipo_titulo_pagar" name="id_tipo_titulo_pagar" data-show-subtext="true" data-live-search="true">	
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>	
                                <?php if (isset($_smarty_tpl->tpl_vars['listTypeTitle']->value) && count($_smarty_tpl->tpl_vars['listTypeTitle']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listTypeTitle']->value, 'typetitle', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['typetitle']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['typetitle']->value->tipo_movimento == 'P' || $_smarty_tpl->tpl_vars['typetitle']->value->tipo_movimento == 'A') {?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['typetitle']->value->id;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable6,'iv'=>'typetitle'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['typetitle']->value->descricao;?>

                                </option>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('typetitle')"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Code'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="codigo" name="codigo" maxlength="10" />
                        </div>

                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Abbreviation'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="sigla" name="sigla" maxlength="10"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Maximum Installment'),$_smarty_tpl ) );?>
 </label>	
                            <input type="text" class="form-control numero" id="parcelamento_maximo" maxlength="3" name="parcelamento_maximo" />
                        </div>
                    </div>	

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12"> 
                            <label class="check"><input type="checkbox" class="icheckbox" value="1" id="gera_titulo" name="gera_titulo"/></label>
                            <label class="control-label" for="edit_gera_titulo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Generate Title'),$_smarty_tpl ) );?>
</label>
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>	

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12"> 
                            <label class="check"><input type="checkbox" class="icheckbox" value="1" id="exige_num_documento" name="exige_num_documento" ></label>
                            <label class="control-label" for="edit_exige_num_documento"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Requires Document Number'),$_smarty_tpl ) );?>
</label>
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>													

                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" value="1" name="status" /></label>
                            <label class="control-label" for="edit_active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="col-md-12 col-xs-12">
                        <div class="return_msg"></div>
                        <br class="clear">
                    </div>
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
