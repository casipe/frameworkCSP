<?php
/* Smarty version 3.1.33, created on 2021-01-10 22:21:03
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/bankaccount/bankaccount_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ffba7ff9e1da6_47579383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5c42ff92af0f2c4129cd051744c9cb779a7b64' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/bankaccount/bankaccount_list.phtml',
      1 => 1608691422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffba7ff9e1da6_47579383 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Register'),$_smarty_tpl ) );?>
</li> 
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</li>
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank Account'),$_smarty_tpl ) );?>
</li> 
</ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-bank"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank Account'),$_smarty_tpl ) );?>
</h2>
</div> 

<!-- PAGE CONTENT WRAPPER -->  
<div class="page-content-wrap">                

    <div class="row">
        <div class="col-md-12">
            <p></p>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default" >
                <div class="panel-heading">                                
                    <h3 class="panel-title"></h3>
                    <div class="panel-controls pull-right">											
                        <a href="javascript:void(0)" class="btn btn-success btnAddModal" onclick="clearNoty()"><span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>
</a>
                    </div>                                
                </div>
                <div class="panel-body">
                    <div class="table-responsive list-datatable">
                        <p>
                        <table id="dataTable" class="table">
                            <thead>
                                <tr>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bank'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</th>  
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Agency'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account Number'),$_smarty_tpl ) );?>
</th> 
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Operation'),$_smarty_tpl ) );?>
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
            </div>
            <!-- END DEFAULT DATATABLE -->
        </div>
    </div>
</div>
<!-- PAGE CONTENT WRAPPER -->   
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/bankaccount.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?> 
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>


<?php }
}
