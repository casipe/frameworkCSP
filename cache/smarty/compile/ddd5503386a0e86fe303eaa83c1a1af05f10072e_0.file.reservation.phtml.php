<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/reservation.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9eca523_87277553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddd5503386a0e86fe303eaa83c1a1af05f10072e' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/reservation.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9eca523_87277553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reservation Details'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                

                <div class="form-group">
                    <div class="col-md-12 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Title'),$_smarty_tpl ) );?>
 </label>
                        <div id="info_titulo" class="info-data"></div>
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Date'),$_smarty_tpl ) );?>
 </label>
                        <div id="info_data_inicio" class="info-data"></div>
                    </div>

                    <div class="col-md-4 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Final Date'),$_smarty_tpl ) );?>
 </label>
                        <div id="info_data_fim" class="info-data"></div>
                    </div>
                    <div class="col-md-4 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cost'),$_smarty_tpl ) );?>
 </label>
                        <div id="info_custo" class="info-data"></div>
                    </div>
                </div>

                <div class="form-group">                    
                    <div class="col-md-4 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Date'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Creation'),$_smarty_tpl ) );?>
</label>
                        <div id="info_data_add" class="info-data"></div>
                    </div>

                    <div class="col-md-8 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Create by'),$_smarty_tpl ) );?>
 </label>
                        <div id="info_nome_usuario" class="info-data"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Note'),$_smarty_tpl ) );?>
 </label>
                        <div id="info_observacao" class="info-data"></div>
                    </div>  
                </div> 
                <div class="form-group">                    
                    <div class="col-md-4 col-xs-12 info-content">
                        <label class="info-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
 </label>
                        <div id="info_status" class="info-data"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer clear">
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>

        </div>
    </div>
</div><?php }
}
