<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/solicitation_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9e8b1e7_03054940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c0d1d77bee8459e2017e3fafb61f4afba25b309' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/solicitation_list.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9e8b1e7_03054940 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="h-title"><i class="fal fa-file-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Requests'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Occurrences'),$_smarty_tpl ) );?>
</h4>
<hr>
<div class="table-responsive">
    <div class="table-responsive">
        <table id="dataTableSolicitation" class="table js-exportable">
            <thead>
                <tr>
    				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Subject'),$_smarty_tpl ) );?>
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
</p>

						



						<?php }
}
