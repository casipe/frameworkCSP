<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dweller_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9e1bc83_98964833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b46a4a5ff99a5030b34ffd70b4db5df0d035c5a7' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/dweller_list.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9e1bc83_98964833 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="h-title"><i class="fal fa-users"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dwellers'),$_smarty_tpl ) );?>
</h4>
<div class="row">
    <div class="btn-control pull-right">
        <a href="javascript:void(0)" class="btn btn-info btnDwellerAccessModal" onclick="clearNoty()" style="margin-right: 15px">
            <span class="fal fa-user-lock"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dweller Access'),$_smarty_tpl ) );?>
 
        </a>
        <a href="javascript:void(0)" class="btn btn-success btnAddModal" onclick="clearNoty()">
            <span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add Dweller'),$_smarty_tpl ) );?>

        </a>
    </div>	
</div>
<hr>
<div class="table-responsive">
    <div class="table-responsive">
        <table id="dataTableDweller" class="table js-exportable">
            <thead>
                <tr>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Name'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Document'),$_smarty_tpl ) );?>
</th> 
					 <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Responsible'),$_smarty_tpl ) );?>
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
