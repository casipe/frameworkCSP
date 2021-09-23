<?php
/* Smarty version 3.1.33, created on 2021-04-21 13:17:55
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/user/user.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60805033c15229_11550800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6a94ec229b05646a147be3efc19875f9a1a43b' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/user/user.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60805033c15229_11550800 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
</h4>
            </div>

            <!-- FORM -->
            <form id="formItem" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden"  id="idItem"  value="" />  
                <div class="modal-body modalScrollVertical">
                    <div class="scrollTo"></div>
                    <div class="form-group">									
                        <div class="col-md-10 col-xs-12"> 
                            <?php if (intval($_smarty_tpl->tpl_vars['isUserAdmin']->value)) {?>
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
 </label>	
                            <input type="text" class="form-control" id="nome" name="nome" required />

                            <?php } else { ?>
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
 </label>	
                            <input type="text" class="form-control" id="nome"  disabled/>
                            <?php }?>	
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-xs-12">
                            <?php if (intval($_smarty_tpl->tpl_vars['isUserAdmin']->value) || intval($_smarty_tpl->tpl_vars['isUserSupport']->value)) {?>	
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Email'),$_smarty_tpl ) );?>
 </label>	
                            <input type="text" class="form-control" id="email" name="email" required />
                            <?php } else { ?>
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Email'),$_smarty_tpl ) );?>
 </label>	
                            <input type="text" class="form-control" id="email"  disabled/>
                            <?php }?>

                        </div>
                    </div>

                    <div class="form-group">                                        
                        <div class="col-md-5 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Password'),$_smarty_tpl ) );?>
 </label>	
                            <input type="password" id="senha" name="senha" class="form-control"/>												           
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enter the password to access the system'),$_smarty_tpl ) );?>
</span>
                        </div>


                        <div class="col-md-5 col-xs-12">
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Confirm the Password'),$_smarty_tpl ) );?>
 </label>
                            <input type="password"  id="senha2" name="senha2" class="form-control"/>
                        </div>
                    </div>

                    <hr/>	
                    <div class="form-group">									
                        <?php if (intval($_smarty_tpl->tpl_vars['isUserAdmin']->value) || intval($_smarty_tpl->tpl_vars['isUserSupport']->value)) {?>


                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><sup class="required">*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Type'),$_smarty_tpl ) );?>
</label>											                                                                                           
                            <select class="form-control select" id="tipo" name="tipo">  
                                <option disabled value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <option value="USUARIO"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'User'),$_smarty_tpl ) );?>
</option>													
                                <?php if (intval($_smarty_tpl->tpl_vars['isUserAdmin']->value) || intval($_smarty_tpl->tpl_vars['isUserSupport']->value)) {?>
                                <option value="ADMIN"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Administrator'),$_smarty_tpl ) );?>
</option>
                                <?php }?>
                            </select>
                        </div>


                        <?php }?>

                        <?php if (intval($_smarty_tpl->tpl_vars['isUserAdmin']->value) || intval($_smarty_tpl->tpl_vars['isUserSupport']->value)) {?>
                        <div class="col-md-6 col-xs-12"> 
                            <div class="col-md-12 col-xs-12" style="margin-left:-15px">
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Default Condominium'),$_smarty_tpl ) );?>
</label>											                                                                                           
                                <select class="form-control select" id="id_condominio" name="id_condominio" data-show-subtext="true" data-live-search="true">
                                    <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                    <option value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'None'),$_smarty_tpl ) );?>
</option>
                                    <?php if (isset($_smarty_tpl->tpl_vars['listCondominium']->value) && count($_smarty_tpl->tpl_vars['listCondominium']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCondominium']->value, 'condo', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['condo']->value) {
?>
                                    <?php if (!intval($_smarty_tpl->tpl_vars['condo']->value->status)) {?>
                                    <?php continue 1;?>
                                    <?php }?>
                                    <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['condo']->value->id,'iv'=>'condominium'),$_smarty_tpl ) );?>
"> 
                                        <?php echo $_smarty_tpl->tpl_vars['condo']->value->descricao;?>

                                    </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                                <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('condominium/add')"></span>
                            </div>
                            <div class="clear">
                                <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'It will be the default condominium when the user logs in to the system'),$_smarty_tpl ) );?>
</span>
                            </div>
                        </div>
                        <?php }?>
                    </div>

                    <div class="form-group contentUnidade none">
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="id_bloco" name="id_bloco" data-show-subtext="true" data-live-search="true">
                            </select>
                            <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('block')"></span>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</label>											                                                                                            
                            <select class="form-control select" id="id_unidade" name="id_unidade" data-show-subtext="true" data-live-search="true">
                            </select>
                            <span class="pointer fa fa-plus-circle fa-2x text-right green" onClick="pageLoad('unit')"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Profile Picture'),$_smarty_tpl ) );?>
</label><br>	 										                                                                                                                                       
                            <input type="file" class="fileinput btn-primary" name="picture" id="picture" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose File'),$_smarty_tpl ) );?>
"/>                            
                            <div id="editViewAvatar" class="viewAvatar"></div>
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'User profile image on the system'),$_smarty_tpl ) );?>
</span>
                        </div>

                        <div class="col-md-5 col-xs-12"> 
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Default Language'),$_smarty_tpl ) );?>
</label>											                                                                                           
                            <select class="form-control select" id="iso_language" name="iso_language">                                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'desc', false, 'iso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iso']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>  
                                <option value="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</option>							                	               	              
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>																									
                            </select>
                        </div>								

                    </div>

                    <?php if (intval($_smarty_tpl->tpl_vars['isUserAdmin']->value) || intval($_smarty_tpl->tpl_vars['isUserSupport']->value)) {?>										
                    <div class="hr"></div>											
                    <div class="form-group">
                        <div class="col-md-4 col-xs-12"> 																																																					   
                            <label class="check"><input type="checkbox" id="active" class="icheckbox" value="1" name="status"/></label>
                            <label class="control-label" for="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Active/Inactive'),$_smarty_tpl ) );?>
</span>
                        </div>
                        <div class="col-md-4 col-xs-12"> 																																																					   
                            <label class="check"><input type="checkbox" id="is_sindico" class="icheckbox" checked value="1" name="is_sindico"/></label>
                            <label class="control-label" for="edit_is_sindico"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Syndic'),$_smarty_tpl ) );?>
</label>	
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Yes/No'),$_smarty_tpl ) );?>
</span>
                        </div>
                        <div class="col-md-4 col-xs-12"> 																																																					   
                            <label class="check"><input type="checkbox" id="acesso_app_mobile" class="icheckbox" checked value="1" name="acesso_app_mobile"/></label>
                            <label class="control-label" for="edit_acesso_app_mobile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Mobile App'),$_smarty_tpl ) );?>
</label>	 
                            <span class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Enable/Disable'),$_smarty_tpl ) );?>
</span>
                        </div>
                    </div>		
                    <?php }?>


                </div>
                <div class="modal-footer">
                    <div class="col-md-12 col-xs-12">
                        <div class="return_msg"></div> 
                        <br class="clear">
                    </div>

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
