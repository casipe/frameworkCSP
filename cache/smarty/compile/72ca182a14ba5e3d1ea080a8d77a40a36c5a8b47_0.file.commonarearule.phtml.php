<?php
/* Smarty version 3.1.33, created on 2021-01-10 21:53:39
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/commonarearule/commonarearule.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffba193dcfa49_43068456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ca182a14ba5e3d1ea080a8d77a40a36c5a8b47' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/commonarearule/commonarearule.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffba193dcfa49_43068456 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden"  id="idItem" value="" /> 
                    <div class="form-group">
                        <div class="col-md-8 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="40" required  value="" />
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-10 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Lock for the next set to block/unit'),$_smarty_tpl ) );?>
</label>
                            <div class="col-md-8 col-xs-12" style="margin-left:-15px"> 
                                <select class="form-control select" id="intervalo_bloqueio" name="intervalo_bloqueio" data-show-subtext="true" data-live-search="true"> 
                                    <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
                                    <option value="DIARIO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Daily'),$_smarty_tpl ) );?>
</option>
                                    <option value="SEMANAL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Weekly'),$_smarty_tpl ) );?>
</option>
                                    <option value="QUINZENAL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Fortnightly'),$_smarty_tpl ) );?>
</option>
                                    <option value="MENSAL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Monthly'),$_smarty_tpl ) );?>
</option>
                                    <option value="ANUAL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yearly'),$_smarty_tpl ) );?>
</option>													
                                </select>
                            </div>
                        </div>

                    </div>	
                    <br>
                    <div class="row">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Available days'),$_smarty_tpl ) );?>
</legend>									
                            <div class="form-group">
                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" id="segunda" class="icheckbox dia_semana" value="1" name="segunda" /></label>
                                    <label class="control-label" for="edit_segunda"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Monday'),$_smarty_tpl ) );?>
</label>
                                </div>

                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" id="terca" class="icheckbox dia_semana" value="1" name="terca" /></label>
                                    <label class="control-label" for="edit_terca"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Tuesday'),$_smarty_tpl ) );?>
</label>
                                </div>

                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" id="quarta" class="icheckbox dia_semana" value="1" name="quarta" /></label>
                                    <label class="control-label" for="edit_quarta"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Wednesday'),$_smarty_tpl ) );?>
</label>
                                </div>
                            </div>


                            <div class="form-group">

                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" id="quinta" class="icheckbox dia_semana" value="1" name="quinta" /></label>
                                    <label class="control-label" for="edit_quinta"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Thursday'),$_smarty_tpl ) );?>
</label>
                                </div>

                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" id="sexta" class="icheckbox dia_semana" value="1" name="sexta" /></label>
                                    <label class="control-label" for="edit_sexta"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Friday'),$_smarty_tpl ) );?>
</label>
                                </div>

                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" id="sabado" class="icheckbox dia_semana" value="1" name="sabado" /></label>
                                    <label class="control-label" for="edit_sabado"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Saturday'),$_smarty_tpl ) );?>
</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" id="domingo" class="icheckbox dia_semana" value="1" name="domingo" /></label>
                                    <label class="control-label" for="edit_domingo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Sunday'),$_smarty_tpl ) );?>
</label>
                                </div>

                                <div class="col-md-4 col-xs-12"> 
                                    <label class="check"><input type="checkbox" disabled id="feriado" class="icheckbox dia_semana" value="1" name="feriado" /></label>
                                    <label class="control-label" for="edit_feriado"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Holiday'),$_smarty_tpl ) );?>
</label>	
                                </div>
                            </div>

                        </fieldset>
                    </div>
                    <div class="hr"></div>

                    <div class="form-group">
                        <div class="col-md-7 col-xs-12"> 
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" value="1" name="status" /></label>
                            <label class="control-label" for="edit_active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
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
