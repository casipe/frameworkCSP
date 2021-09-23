<?php
/* Smarty version 3.1.33, created on 2021-04-21 13:17:55
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/user/condominium.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60805033c41dd2_18358076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a69d700ae8b52d17744046de717fc027abfcad' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/user/condominium.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60805033c41dd2_18358076 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal" id="condominiumModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'User'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Condominium'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form id="formCondominium" class="form-horizontal" method="post" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden"  id="userId"  value="" />  

                    <h5><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
:</b> <span id="userNameCondominium"></span></h5>
                    <h5><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Email'),$_smarty_tpl ) );?>
:</b> <span id="userEmailCondominium"></span></h5>

                    <div class="clear hr"></div>
                    <?php if (isset($_smarty_tpl->tpl_vars['listCondominium']->value)) {?>
                    <div class="row col-md-12 col-xs-12">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCondominium']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable8 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable8,'iv'=>'condominium'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_assignInScope('id_item', $_prefixVariable9);?>

                        <div class="col-md-6 col-xs-12"> 																																																					   
                            <label class="check"><input type="checkbox" id="condominio_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" class="icheckbox condominio_check" value="<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
" name="condominios[]"/></label>
                            <label class="control-label" for="condominio_<?php echo $_smarty_tpl->tpl_vars['id_item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->descricao;?>
</label>
                        </div>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>

                    <div class="clear hr"></div>
                    <span class="help-block">*<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Select desired condominium'),$_smarty_tpl ) );?>
</span>  
                    <?php } else { ?>
                        <div class="text-center red"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'No access condominium available'),$_smarty_tpl ) );?>
<div>
                    <?php }?> 


                </form>
                <!-- END FORM -->
            </div>
            <div class="modal-footer">
                <div class="col-md-12 col-xs-12">
                    <div class="return_msg"></div>
                    <br class="clear">
                </div>

                <button type="button" class="btn btn-success" id="btnSaveCondominium"  OnClick='User.saveCondominium($("#userId").val())'><i class="fal fa-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Save'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div><?php }
}
