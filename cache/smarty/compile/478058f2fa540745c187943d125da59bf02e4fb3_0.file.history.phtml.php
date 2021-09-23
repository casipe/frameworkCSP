<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:30:37
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/visitor/history.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610dfe5da9c8e8_39483582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '478058f2fa540745c187943d125da59bf02e4fb3' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/visitor/history.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610dfe5da9c8e8_39483582 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="itemHistoryModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Visit History'),$_smarty_tpl ) );?>
 </h4>
            </div>
            <table id="userInfoHistory">
                <tr>  
                    <td rowspan="4">
                        <div class="photoVisit">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="bottom">
                        <b class="userNameVisit"></b>
                        <div class="userDocVisit"></div>
                    </td>
                </tr>                
            </table>
            <div class="modal-body">
                <div class="tableScroll">                       
                    <table id="dataTableHistory" class="table">
                        <thead>
                            <tr>                                
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Access Type'),$_smarty_tpl ) );?>
</th> 
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Date Entry'),$_smarty_tpl ) );?>
</th> 
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Exit Date'),$_smarty_tpl ) );?>
</th> 
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th> 
                                <th class="tb-action"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- RESULT DATATABLE -->
                        </tbody>
                    </table>
                </div>
                <div class="hr"></div>
                <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fal fa-times-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</button>
            </div>


        </div>
    </div>
</div>
<?php }
}
