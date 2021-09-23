<?php
/* Smarty version 3.1.33, created on 2021-01-18 23:43:21
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/poll/poll_list_result.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600647495c3fd6_88274947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f6855eb70401d0b656d280602422424d69faaf' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/poll/poll_list_result.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600647495c3fd6_88274947 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dwellers'),$_smarty_tpl ) );?>
</li>    
    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Poll Result'),$_smarty_tpl ) );?>
</a></li>
</ul> 
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-poll"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Poll Result'),$_smarty_tpl ) );?>
</h2>
</div> 

<!-- PAGE CONTENT WRAPPER --> 
<div class="page-content-wrap">                

    <div class="row"> 
        <div class="col-md-12"> 
            <p></p>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default" >


                <div class="panel-body">

                    <table id="dataTable" class="table">
                        <thead>
                            <tr>
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</th>												
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Type of Vote'),$_smarty_tpl ) );?>
</th>
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
                                <th class="tb-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Action'),$_smarty_tpl ) );?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- RESULT DATATABLE -->
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
        </div>
    </div>                                

</div>
<!-- PAGE CONTENT WRAPPER -->  

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/poll_result.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>  
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>


<?php }
}
