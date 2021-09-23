<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/notification_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9e606d1_15552865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c2067d4dc2ed6fe402fb7422042a53d185937a' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/notification_list.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9e606d1_15552865 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="h-title"><i class="fal fa-bells"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Notifications'),$_smarty_tpl ) );?>
</h4>
<div class="row">
    <div class="btn-control pull-right">
        <a href="javascript:void(0)" class="btn btn-success btnAddModal" onclick="clearNoty()"><span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add Notification'),$_smarty_tpl ) );?>
</a>
    </div>	
</div>
<hr>
<div class="row">
    <div class="table-responsive table-datatable datatable-list">
        <table id="dataTableNotification" class="table js-exportable">
            <thead>
                <tr>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Title'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Action'),$_smarty_tpl ) );?>
</th>
                </tr>
            </thead>
            <tbody>
                <!-- RESULT DATATABLE -->
            </tbody>
        </table>
    </div>
</div>




<?php }
}
