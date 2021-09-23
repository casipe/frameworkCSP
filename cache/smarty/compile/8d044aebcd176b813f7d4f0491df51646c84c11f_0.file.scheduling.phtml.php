<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:51:25
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/scheduling/scheduling.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e033daadcd0_82723358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d044aebcd176b813f7d4f0491df51646c84c11f' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/scheduling/scheduling.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e033daadcd0_82723358 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dwellers'),$_smarty_tpl ) );?>
</li> 
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reservations'),$_smarty_tpl ) );?>
</li>
    <li><a href="javascript:void(0);" onClick="pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Scheduling'),$_smarty_tpl ) );?>
</a></li>          
</ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-calendar"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Scheduling'),$_smarty_tpl ) );?>
</h2>
    <div class="panel-controls pull-right">   
            </div>	
</div>  



<!-- PAGE CONTENT WRAPPER --> 
<div class="page-content-wrap"  style="min-height:800px"  > 
<!-- FORM -->
<form id="form_<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" class="form-horizontal" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'URL'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/" accept-charset="UTF-8" enctype="multipart/form-data">
    <input type="hidden" class="form-control" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id)) {
ob_start();
echo $_smarty_tpl->tpl_vars['datas']->value->id;
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable2,'iv'=>'accountpay'),$_smarty_tpl ) );
}?>" />			
  
        <div class="row">
            <div class="col-md-12">

                <div class="page-content-wrap" style="margin-bottom:70px"> 
                    <div class="row">

                                                <div class="col-md-7 section-content-page">

                            <div class="panel panel-default pull-left">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Calendar'),$_smarty_tpl ) );?>
                               
                                    </h3> 
                                </div>
                                <div class="panel-body"> 
                                    <div id="calendario"></div>                                    
                                    <div class="loading-calendar dot-pulse"></div>
                                </div>
                            </div>
                        </div> 
                        
                                                <div class="col-md-5">
                            <div class="panel panel-default pull-left">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="far fa-clock-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pending Events'),$_smarty_tpl ) );?>
</h3>
                                </div>
                                <div class="panel-body">                                
                                    <div id="infoPendingEvents">
                                        <div class="row">                          
                                            <div class="list-group border-bottom dot-pulse">
                                            </div>
                                        </div>                                        
                                    </div>
                                    <p class="clear">                          
                                </div>
                            </div>       
                        </div>
                        
                    </div>
                </div>

                
            </div>
        </div>     <div class="clear"></div>

</form>
    </div>
 
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/modal_add.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/modal_edit.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable5."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
}
}
