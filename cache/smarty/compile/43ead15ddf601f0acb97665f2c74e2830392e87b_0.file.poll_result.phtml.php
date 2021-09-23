<?php
/* Smarty version 3.1.33, created on 2021-01-18 23:43:21
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/poll/poll_result.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600647495d3df3_02517986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ead15ddf601f0acb97665f2c74e2830392e87b' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/poll/poll_result.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600647495d3df3_02517986 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="modal fade" id="resultPollModal" tabindex="-1" role="dialog" aria-labelledby="titleModalHead" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Close'),$_smarty_tpl ) );?>
</span></button>
                <h4 class="modal-title" id="titleModalHead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Poll Result'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
                <b id="titlePoll"></b>
                <div class="row">
                    <div class="col-md-7">

                        <!-- START PIE CHART -->
                        <div class="panel panel-default pull-left">                            
                            <div class="panel-body resultGraph">
                                <svg id="graphView"></svg>
                            </div>
                        </div>
                        <!-- END PIE CHART -->

                    </div> 
                    <div class="col-md-5">
                        <!-- START TREEVIEW -->
                        <div class="panel panel-default pull-left">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Voters'),$_smarty_tpl ) );?>
</h3>
                            </div>
                            <div class="panel-body">
                                <div id="secretVote"></div>
                                <div id="listUserVote"></div>
                                <p class="clear">                          
                            </div>
                        </div>
                        <!-- END TREEVIEW -->        
                    </div>
                </div>
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
