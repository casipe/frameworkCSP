<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:22:52
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/add.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de06ca33ec6_12392355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dd3cb0a1ab747512374bc4a8e6e3d6058bd0808' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/add.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de06ca33ec6_12392355 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</h4>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reference'),$_smarty_tpl ) );?>
: <span id="info_ano"></span> 
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form id="form_costcenter_add" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">  
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type Of Movement'),$_smarty_tpl ) );?>
 </label>
                            <select class="form-control" id="add_tipo_movimento" name="tipo_movimento">
                                <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value="R"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Revenue'),$_smarty_tpl ) );?>
</option>
                                <option value="D"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expense'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-xs-12">  
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" id="add_id_plano_conta" name="id_plano_conta" data-show-subtext="true" data-live-search="true">
                                <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>	

                            </select>
                            <span class="pointer fal fa-plus-circle fa-2x text-right green" onClick="pageLoad('managementaccount')"></span>
                        </div>
                    </div>

                    <div class="row">										     
                        <div class="col-md-12 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="add_descricao" name="descricao" maxlength="60" required value="" />
                        </div>
                    </div>

                    <div class="row">								     
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control valor" id="add_valor" name="valor" maxlength="7"  value="" />

                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-12 col-xs-12">  
                            <label class="control-label" for="meses"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Month'),$_smarty_tpl ) );?>
</label>
                            <select class="form-control select" multiple="multiple"  id="add_meses" name="mes[]" data-live-search="true">
                                <option disabled ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMonths']->value, 'desc', false, 'mes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                            </select>
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
</div>


<?php }
}
