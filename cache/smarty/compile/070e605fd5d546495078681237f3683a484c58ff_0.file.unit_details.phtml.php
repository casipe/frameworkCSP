<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:50:01
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/unit_details.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e9d93598_15583731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070e605fd5d546495078681237f3683a484c58ff' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/unit_details.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e9d93598_15583731 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>   
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Register'),$_smarty_tpl ) );?>
</li>
    <li><a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</a></li>     				
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Details'),$_smarty_tpl ) );?>
</li>
</ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-home"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Details'),$_smarty_tpl ) );?>
</h2>
</div> 

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">

            <!-- FORM -->
            <input type="hidden"  id="idUnit"  value="<?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id)) {
ob_start();
echo $_smarty_tpl->tpl_vars['datas']->value->id;
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable2,'iv'=>'unit'),$_smarty_tpl ) );
}?>" /> 
            <div class="panel panel-default">			
                <div class="panel-heading">                                
                    <h3 class="panel-title"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
:</b> <?php if (!empty($_smarty_tpl->tpl_vars['datas']->value->descricao)) {
echo $_smarty_tpl->tpl_vars['datas']->value->descricao;
}?></h3>                

                    <div class="panel-controls pull-right">
                        <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
')" class="btn btn-default">
                            <span class="far fa-arrow-left"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Back'),$_smarty_tpl ) );?>

                        </a>
                        <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/details/?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['datas']->value->id;
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable3,'iv'=>'unit'),$_smarty_tpl ) );?>
')" class="btn btn-info" style="margin-right: 15px" >
                            <span class="fal fa-sync-alt"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Refresh'),$_smarty_tpl ) );?>

                        </a>
                    </div> 										
                </div>								


                <div class="panel-body">    

                    <div class="col-md-12">
                        <br>
                        <!-- START TABS -->                                
                        <div class="panel panel-default tabs">                            
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active">
                                    <a href="#contentDetails" role="tab"  class="btn-control-tab" data-tablist="1" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'General Data'),$_smarty_tpl ) );?>
</a>
                                </li>
                                <li>
                                    <a href="#contentDweller" role="tab" class="btn-control-tab" data-tablist="3" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Dwellers'),$_smarty_tpl ) );?>
 
                                        <sup class="notification notification-red notify-dwellers <?php if (!isset($_smarty_tpl->tpl_vars['countNotyDweller']->value) || !intval($_smarty_tpl->tpl_vars['countNotyDweller']->value)) {?>none<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Waiting For Approval'),$_smarty_tpl ) );?>
"><?php if (isset($_smarty_tpl->tpl_vars['countNotyDweller']->value) && intval($_smarty_tpl->tpl_vars['countNotyDweller']->value) > 0) {
echo $_smarty_tpl->tpl_vars['countNotyDweller']->value;
}?></sup>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contentNotification" role="tab"  class="btn-control-tab" data-tablist="4" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Notifications'),$_smarty_tpl ) );?>
 
                                        <sup class="notification notification-red notify-notifications <?php if (!isset($_smarty_tpl->tpl_vars['countNotyNotification']->value) || !intval($_smarty_tpl->tpl_vars['countNotyNotification']->value)) {?>none<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New'),$_smarty_tpl ) );?>
"><?php if (isset($_smarty_tpl->tpl_vars['countNotyNotification']->value) && intval($_smarty_tpl->tpl_vars['countNotyNotification']->value) > 0) {
echo $_smarty_tpl->tpl_vars['countNotyNotification']->value;
}?></sup>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contentSolicitation" role="tab"  class="btn-control-tab" data-tablist="5" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Requests'),$_smarty_tpl ) );?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Occurrences'),$_smarty_tpl ) );?>

                                        <sup class="notification notification-red notify-solicitations <?php if (!isset($_smarty_tpl->tpl_vars['countNotySolicitation']->value) || !intval($_smarty_tpl->tpl_vars['countNotySolicitation']->value)) {?>none<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New'),$_smarty_tpl ) );?>
"><?php if (isset($_smarty_tpl->tpl_vars['countNotySolicitation']->value) && intval($_smarty_tpl->tpl_vars['countNotySolicitation']->value) > 0) {
echo $_smarty_tpl->tpl_vars['countNotySolicitation']->value;
}?></sup>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contentReservation" role="tab"  class="btn-control-tab" data-tablist="6" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reservations'),$_smarty_tpl ) );?>
 
                                        <sup class="notification notification-red notify-reservations <?php if (!isset($_smarty_tpl->tpl_vars['countNotyReservation']->value) || !intval($_smarty_tpl->tpl_vars['countNotyReservation']->value)) {?>none<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'New'),$_smarty_tpl ) );?>
"><?php if (isset($_smarty_tpl->tpl_vars['countNotyReservation']->value) && intval($_smarty_tpl->tpl_vars['countNotyReservation']->value) > 0) {
echo $_smarty_tpl->tpl_vars['countNotyReservation']->value;
}?></sup>
                                    </a>
                                </li>
                            </ul>                            
                            <div class="panel-body tab-content">
                                <div class="tab-pane active list-datatable" id="contentDetails">	
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/details.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datasDashboard'=>$_smarty_tpl->tpl_vars['datasDashboard']->value), 0, true);
?>																							
                                </div>
                                <div class="tab-pane list-datatable" id="contentDweller">	
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable5."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/dweller_list.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable6."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/dweller.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable7."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/dweller_access.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                </div>
                                <div class="tab-pane list-datatable" id="contentNotification">											
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable8."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/notification_list.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable9."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/notification.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                </div> 
                                <div class="tab-pane list-datatable" id="contentSolicitation">											
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable10."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/solicitation_list.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable11."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/solicitation.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                </div>
                                <div class="tab-pane list-datatable" id="contentReservation">											
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable12."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/reservation_list.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable13=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable13."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/reservation.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
                                </div>
                            </div>
                        </div>                                                   
                        <!-- END TABS -->                        
                    </div>
                </div>
                <input type="hidden" value="1" name="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
_submit">
                                <br class="clear"><br class="clear">
            </div>

        </div>
    </div>                    

</div>
<!-- END PAGE CONTENT WRAPPER --> 

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable14=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable14."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>   
<?php }
}
