<?php
/* Smarty version 3.1.33, created on 2021-04-21 13:18:13
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/accessprofile/permission.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60805045a4c1e5_49821101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f7ccab929170d5dc192161b3384d2a2bdcd6e2d' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/accessprofile/permission.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60805045a4c1e5_49821101 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modals">

    <div class="modal fade" id="itemModalPermission" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                    <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Permission'),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Profile'),$_smarty_tpl ) );?>
: <span id="descAccessProfile"></span></h4>
                </div> <!-- FORM -->
                <form id="formPermission" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" id="idItemAccessProfile" value=""/>
                    <div class="modal-body modalScroll">                   
                        <?php if (isset($_smarty_tpl->tpl_vars['listAccessModulePlain']->value)) {?>
                        <br>
                        <label class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Modules'),$_smarty_tpl ) );?>
:<label>
                                <div class="clear hr" style="margin-top:-10px;"></div><br>
                                <div class="row">
                                    <div class="alert alert-info alert-small" role="alert">
                                        <i class="fal fa-exclamation-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Select the desired module for the profile'),$_smarty_tpl ) );?>
.</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row col-md-12 col-xs-12">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listAccessModulePlain']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable5,'iv'=>'accessmodule'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('id_item', $_prefixVariable6);?>

                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][id_modulo_acesso_plano]"> 
                                    <input type="hidden" class="inputs_id_perfil_modulo_acesso" value="" id="id_perfil_modulo_acesso_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][id_perfil_modulo_acesso]">

                                    <div class="col-md-11 col-xs-12"> 
                                        <table class="table table-bordered no-align-last-cell" style="border-top: 2px solid #c4f5fd">
                                            <thead>
                                                <tr>
                                                    <td colspan="5">
                                                        <label class="check"><input type="checkbox" id="access_module_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" data-action-id="<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" class="icheckbox access_module_check" 
                                                                                    value="1" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][modulo_acesso_flag]"/></label>
                                                        <label class="control-label" for="access_module_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
</label>    
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="edit-action-<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" data-action-item style="display:none"> 
                                                    <th>
                                                        <input type="hidden" class="access_module_view_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" value="1" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][action][visualizar]"/>

                                                        <label class="check">
                                                            <input type="checkbox" disabled checked id="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_visualizar" class="icheckbox access_module_check"/>
                                                        </label>
                                                        <label class="control-label action-lablel" for="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
visualizar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'View'),$_smarty_tpl ) );?>
</label> 
                                                    </th>
                                                    <th>
                                                        <label class="check">
                                                            <input type="checkbox" id="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_adicionar" class="icheckbox access_module_check" 
                                                                   value="1" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][action][adicionar]"/>
                                                        </label>
                                                        <label class="control-label action-lablel" for="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_adicionar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</label> 
                                                    </th>
                                                    <th>
                                                        <label class="check">
                                                            <input type="checkbox" id="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_alterar" class="icheckbox access_module_check" 
                                                                   value="1" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][action][alterar]"/>
                                                        </label>
                                                        <label class="control-label action-lablel" for="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_alterar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
</label> 
                                                    </th>
                                                    <th>
                                                        <label class="check">
                                                            <input type="checkbox" id="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_excluir" class="icheckbox access_module_check" 
                                                                   value="1" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][action][excluir]"/>
                                                        </label>
                                                        <label class="control-label action-lablel" for="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_excluir"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Delete'),$_smarty_tpl ) );?>
</label> 
                                                    </th>
                                                     <th>
                                                        <label class="check">
                                                            <input type="checkbox" id="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_relatorio" class="icheckbox access_module_check" 
                                                                   value="1" name="access_module[<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
][action][relatorio]"/>
                                                        </label>
                                                        <label class="control-label action-lablel" for="access_module_action_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
_relatorio"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Report'),$_smarty_tpl ) );?>
</label> 
                                                    </th>
                                                                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <?php } else { ?>
                                <div class="row">
                                    <div class="alert alert-info alert-small" role="alert">
                                        <i class="fal fa-exclamation-triangle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Module not found'),$_smarty_tpl ) );?>
. <a href="javascript:void(0)"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Please contact support'),$_smarty_tpl ) );?>
.</a>
                                    </div>
                                </div>
                                <?php }?>


                                <div id="input_actions"></div>

                                </div>
                                <div class="modal-footer">
                                    <?php if (isset($_smarty_tpl->tpl_vars['listAccessModulePlain']->value)) {?>
                                    <button type="button" class="btn btn-success" onclick="Accessprofile.savePermission()"><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                                    <?php }?>
                                    <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                                </div>
                                </form>
                                <!-- END FORM -->                       

                                </div>
                                </div>
                                </div>


                                </div>

<?php }
}
