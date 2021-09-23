<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:51:25
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/scheduling/modal_add.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e033dad9a92_21465134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9f1303b7a553502d11ed1b76922df1f14378389' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/scheduling/modal_add.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e033dad9a92_21465134 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="itemModalAdd" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add Event'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body modalScrollVertical">
                <!-- FORM -->
                <form id="form_scheduling_add" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">


                    <div class="form-group">
                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Date'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control"  readonly="readonly" id="data_inicio" name="data_inicio" placeholder="00/00/0000" />
                        </div>
                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Start Time'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control hour" id="hora_inicio" name="hora_inicio" placeholder="00:00" />
                        </div>


                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Final Date'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" readonly="readonly" id="data_fim" name="data_fim" placeholder="00/00/0000" />
                        </div>
                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'End Time'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control hour"  id="hora_fim" name="hora_fim" placeholder="00:00" />
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-7 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="tipoReserva" class="icheckbox" value="0" name="tipo_reserva"/></label>
                            <label class="control-label" for="tipoReserva"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reservation'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div id="contentReserva" style="display:none">

                        <div class="form-group">
                            <div class="col-md-8 col-xs-12"> 
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Common Area'),$_smarty_tpl ) );?>
</label>																						
                                <select class="form-control select" required id="id_area_comum" name="id_area_comum" data-show-subtext="true" data-live-search="true">													
                                    <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>													
                                    <?php if (isset($_smarty_tpl->tpl_vars['listCommonArea']->value) && count($_smarty_tpl->tpl_vars['listCommonArea']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCommonArea']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable6,'iv'=>'commonarea'),$_smarty_tpl ) );?>
" data-cost="<?php echo $_smarty_tpl->tpl_vars['item']->value->custo;?>
" >
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
 
                                    </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>													
                                </select>
                                <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('commonarea')"></span>
                            </div>
                            <div class="col-md-4 col-xs-12 pull-left"> 
                                <div id="infoCustoAreaComum" class="bold red">
                                    <div class="alert alert-info alert-small" role="alert">
                                        <i class="fal fa-exclamation-triangle"></i> <span class="custo"></span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-md-4 col-xs-12"> 
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
</label>																						
                                <select class="form-control select" id="id_bloco" data-show-subtext="true" data-live-search="true">													
                                    <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>													
                                    <?php if (isset($_smarty_tpl->tpl_vars['listBlock']->value) && count($_smarty_tpl->tpl_vars['listBlock']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listBlock']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>                                      
                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable7,'iv'=>'block'),$_smarty_tpl ) );?>
" >
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
 
                                    </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>													
                                </select>
                                <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('block')"></span>
                            </div>

                            <div class="col-md-4 col-xs-12"> 
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</label>																						
                                <select class="form-control select" id="id_unidade" name="id_unidade" data-show-subtext="true" data-live-search="true">													
                                    <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>														
                                </select>
                                <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('unit')"></span>
                            </div>
                        </div> 


                    </div>
                    <div id="contentAgendamento">
                        <div class="form-group">
                            <div class="col-md-8 col-xs-12"> 
                                <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Title'),$_smarty_tpl ) );?>
 </label>
                                <input type="text" class="form-control" id="titulo" name="titulo" maxlength="40" required  value="" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
 </label>
                            <textarea  class="form-control" id="observacao" name="observacao" maxlength="300" required rows="4" cols="40"></textarea>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="form-group">
                        <div class="col-md-7 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="importante" class="icheckbox" value="1" name="importante"/></label>
                            <label class="control-label" for="importante"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Mark as important'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>


                    
                </form>
                <!-- END FORM -->
            </div>
            <div class="modal-footer">
                <div class="col-md-12 col-xs-12">
                    <div class="return_msg"></div>
                    <br class="clear">
                </div>

                <button type="button" class="btn btn-success" id="btnAddSave"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div><?php }
}
