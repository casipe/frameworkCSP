<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:32:41
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/package/package.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610dfed92a8864_07410790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0009f3172ebf7f25dfa4a71f0a7e4718d0ed5f5a' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/package/package.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610dfed92a8864_07410790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/conndo.com.br/core/libraries/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receive Package'),$_smarty_tpl ) );?>
</h4>
            </div>
            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" id="idItem" value=""/>
                <div class="modal-body modalScrollVertical">

                    <div class="form-group ScrollTop">

                        <div class="col-md-5 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Package Type'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="id_tipo_encomenda" name="id_tipo_encomenda" data-show-subtext="true" data-live-search="true">													
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listPackageType']->value) && count($_smarty_tpl->tpl_vars['listPackageType']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listPackageType']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable4,'iv'=>'packagetype'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
 
                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>													
                            </select>
                        </div>


                        <div class="col-md-7 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="id_unidade" name="id_unidade" data-show-subtext="true" data-live-search="true">
                                <option  selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listUnit']->value) && count($_smarty_tpl->tpl_vars['listUnit']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listUnit']->value, 'unit', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['unit']->value) {
?>
                                <?php if (!intval($_smarty_tpl->tpl_vars['unit']->value->status)) {?>
                                <?php continue 1;?>
                                <?php }?>
                                <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['unit']->value->id,'iv'=>'unit'),$_smarty_tpl ) );?>
"> 
                                    (<?php echo $_smarty_tpl->tpl_vars['unit']->value->bloco_descricao;?>
) - <?php echo $_smarty_tpl->tpl_vars['unit']->value->descricao;?>

                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div> 
                    </div>
                    <hr/>                   

                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="100"/>
                        </div>                        
                    </div>						

                    <div class="form-group">
                        <div class="col-md-4 col-xs-12">                                            
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Data de Chegada'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control date-picker-today" readonly="readonly" id="data_chegada" name="data_chegada" 
                                   value="<?php echo smarty_modifier_date_format(time(),'%d/%m/%Y');?>
"
                                   maxlength="10" required/>
                        </div>

                        <div class="col-md-4 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Data de Retirada'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control date-picker-today" readonly="readonly" id="data_retirada" name="data_retirada"                                   
                                   maxlength="10" />
                        </div>

                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="status" name="status">														
                                <option value="AGU" > <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Aguardando Retirada'),$_smarty_tpl ) );?>
</option>
                                <option value="ENT" > <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Entregue'),$_smarty_tpl ) );?>
</option>                                
                                <option value="DEV" > <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Devolvido'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div id="contenDadosRetirada">
                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">                                            
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Local de Retirada'),$_smarty_tpl ) );?>
 </label>											
                                <input type="text" class="form-control" id="local_retirada" name="local_retirada" maxlength="100" required />
                            </div>                        
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">                                            
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Nome da Pessoa que Retirou'),$_smarty_tpl ) );?>
 </label>											
                                <input type="text" class="form-control" id="retirada_nome_pessoa" name="retirada_nome_pessoa" maxlength="100" required />
                            </div>                        
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-xs-12">                                            
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Documento da Pessoa que Retirou'),$_smarty_tpl ) );?>
 </label>											
                                <input type="text" class="form-control" id="retirada_doc_pessoa" name="retirada_doc_pessoa" maxlength="40" required />
                            </div>                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="observacao" name="observacao" maxlength="100" />
                        </div>
                    </div>                  

                    <div class="form-group contenMotivoDevolucao none">
                        <div class="col-md-12 col-xs-12">                                            
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reason for Return'),$_smarty_tpl ) );?>
 </label>											
                            <input type="text" class="form-control" id="motivo_devolucao" name="motivo_devolucao" maxlength="100" />
                        </div>
                    </div>                  

                    <br><br><br>
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
