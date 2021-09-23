<?php
/* Smarty version 3.1.33, created on 2021-08-06 22:22:52
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/edit.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610de06ca44ae9_23510672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcdb892fb87bcf10486da77d9492f8fca737e85a' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/budget/edit.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610de06ca44ae9_23510672 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="modal fade" id="itemEditModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Edit'),$_smarty_tpl ) );?>
</h4>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reference'),$_smarty_tpl ) );?>
: <span id="info_ano_mes"></span>
            </div>
            <div class="modal-body">
                <div id="resultItems"></div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 col-xs-12">
                    <div class="return_msg"></div>
                    <br class="clear">
                </div>
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
