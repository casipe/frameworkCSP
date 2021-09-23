<?php
/* Smarty version 3.1.33, created on 2021-01-10 21:54:34
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/employee/employee.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffba1cad0bc02_01174933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '977dffa0d6c667f48ce6109997ff10a3d25941cb' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/employee/employee.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffba1cad0bc02_01174933 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</h4>
            </div>     <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="idItem" value="" /> 
                <div class="modal-body">

                    <div class="form-group"> 
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="60" required value="" />
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Last name'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" maxlength="60" required value="" />
                        </div>                       
                    </div>

                    <div class="form-group"> 
                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'SSN'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control cpf" id="cpf" name="cpf" maxlength="14"  value="" />
                        </div>

                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Genre'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="sexo" name="sexo">													
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>												
                                <option value="M"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Male'),$_smarty_tpl ) );?>
</option>
                                <option value="F"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Female'),$_smarty_tpl ) );?>
</option>												
                            </select>
                        </div>    

                        <div class="col-md-4 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Marital Status'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="estado_civil" name="estado_civil">													
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>												
                                <option value="SOLTEIRO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Not Married'),$_smarty_tpl ) );?>
</option>
                                <option value="CASADO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Married'),$_smarty_tpl ) );?>
</option>
                                <option value="DIVORCIADO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Divorced'),$_smarty_tpl ) );?>
</option>
                                <option value="VIUVO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Widower'),$_smarty_tpl ) );?>
</option>
                            </select>
                        </div>

                    </div>

                    <div class="hr"></div>


                    <div class="form-group"> 
                        <div class="col-md-12 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Address'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="endereco" name="endereco" maxlength="100" required value="" />
                        </div>
                    </div>


                    <div class="form-group"> 
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'City'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="cidade" name="cidade" maxlength="60" required value="" />
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'District'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="bairro" name="bairro" maxlength="7"  value="" />                    
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'State'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="uf" name="uf" data-show-subtext="true" data-live-search="true">													
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listUf']->value) && count($_smarty_tpl->tpl_vars['listUf']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listUf']->value, 'nome', false, 'uf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['uf']->value => $_smarty_tpl->tpl_vars['nome']->value) {
?>                                     
                                <option value="<?php echo $_smarty_tpl->tpl_vars['uf']->value;?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 
                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>													
                            </select>
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Postal Code'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control cep" id="cep" name="cep" maxlength="8"  value="" />
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Telephone'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="telefone" name="telefone" maxlength="12" required value="" />
                        </div>

                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cell Phone'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control" id="celular" name="celular" maxlength="12"  value="" />
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-md-12 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Email'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" class="form-control email" id="email" name="email" maxlength="254" required value="" />
                        </div>
                    </div>


                    <div class="form-group"> 
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Function'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="id_funcionario_funcao" name="id_funcionario_funcao" data-show-subtext="true" data-live-search="true">													
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listEmployeeFunction']->value) && count($_smarty_tpl->tpl_vars['listEmployeeFunction']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listEmployeeFunction']->value, 'item', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>                                     
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable4,'iv'=>'employeefunction'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
 
                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>													
                            </select>
                            <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('employeefunction')"></span>
                        </div>
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Company'),$_smarty_tpl ) );?>
</label>																						
                            <select class="form-control select" required id="id_empresa" name="id_empresa" data-show-subtext="true" data-live-search="true">													
                                <option selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>													
                                <?php if (isset($_smarty_tpl->tpl_vars['listCompany']->value) && count($_smarty_tpl->tpl_vars['listCompany']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCompany']->value, 'item', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>                                     
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable5,'iv'=>'company'),$_smarty_tpl ) );?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->nome_fantasia;?>
 
                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>													
                            </select>
                            <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('company')"></span>
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
