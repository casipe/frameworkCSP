<?php
/* Smarty version 3.1.33, created on 2020-11-03 16:02:39
  from '/var/www/html/conndo.com.br/admin/templates/default/modal_condominium.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa1a94fe4b9d7_21072603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8696b74e2606b62be51db22fa10c241b368e484' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/modal_condominium.phtml',
      1 => 1604379235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa1a94fe4b9d7_21072603 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['listCondominiumSession']->value) && count($_smarty_tpl->tpl_vars['listCondominiumSession']->value) > 1) {?>
<div class="modal fade" id="modalLoadCondominium" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="defModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Change Condominium'),$_smarty_tpl ) );?>
</h4>
            </div>
            
            <!-- FORM -->
            <form class="form-horizontal" id="formChangeCondo">
                <div class="modal-body">

                    <div class="form-group">
                        <div class="col-md-7 col-xs-12">
                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose the condominium'),$_smarty_tpl ) );?>
 </label>
                            <select class="form-control select"  id="idChangeCondo" data-show-subtext="true" data-live-search="true">
                                <option disabled selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Choose'),$_smarty_tpl ) );?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listCondominiumSession']->value, 'ITEM', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['context'][0], array( array('p'=>'ID_CONDOMINIUM'),$_smarty_tpl ) );
$_prefixVariable68 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['ITEM']->value->id <> $_prefixVariable68) {?>
                                <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['ITEM']->value->id;
$_prefixVariable69 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable69,'iv'=>'condominium'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value->descricao;?>
</option>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                            </select>
                            <span class="help-block">O sistema será redirecionado à página inicial.</span>
                        </div>
                    </div>								

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success"  id="btnChangeCondo"><i class="fal fa-sync-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Change'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="btn btn-info" id="modalChangeCondClose" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
                </div>
            </form> 
            <!-- END FORM -->
        </div>
    </div>
</div>
<?php }
}
}
