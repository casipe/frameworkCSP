<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/reservation_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9eb9d77_71811266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59ca67143e0cb378252b7560df47154d9d6b5d9' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/reservation_list.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9eb9d77_71811266 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="h-title"><i class="fal fa-calendar"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reservations'),$_smarty_tpl ) );?>
</h4>
<hr>
 <div class="table-responsive table-datatable">
    <table id="dataTableReservation" class="table js-exportable">
        <thead>
            <tr>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Common Area'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Date'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Final Date'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cost'),$_smarty_tpl ) );?>
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




						<?php }
}
