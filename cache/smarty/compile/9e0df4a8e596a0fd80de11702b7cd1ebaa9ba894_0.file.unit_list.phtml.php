<?php
/* Smarty version 3.1.33, created on 2021-08-07 00:49:55
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/unit_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_610e02e3708591_66489138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e0df4a8e596a0fd80de11702b7cd1ebaa9ba894' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/unit/unit_list.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610e02e3708591_66489138 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?> 
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Register'),$_smarty_tpl ) );?>
</li>
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
</li> 
</ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-house-user"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Unit'),$_smarty_tpl ) );?>
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
                    <form id="filter">
                        <div class="col-md-2 col-xs-12 filter-button pull-left">
                            <select class="form-control select" id="id_bloco_filter" name="id_bloco" data-show-subtext="true" data-live-search="true">
                                <option value="" selected ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'All'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
)</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['listBlock']->value) && count($_smarty_tpl->tpl_vars['listBlock']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listBlock']->value, 'block', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
?>
                                        <?php if (!intval($_smarty_tpl->tpl_vars['block']->value->status)) {?>
                                            <?php continue 1;?>
                                        <?php }?>
                                        <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_smarty_tpl->tpl_vars['block']->value->id,'iv'=>'block'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value->descricao;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div>

                        <div class="col-md-3 col-xs-12"> 
                            <input type="text" class="form-control" id="q_filter" name="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Search term'),$_smarty_tpl ) );?>
" />
                        </div>

                        <button class="btn btn-primary pull-left filter-button"><i class="fal fa-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Consult'),$_smarty_tpl ) );?>
</button>
                    </form>
                    <div class="panel-controls pull-right">
                        <a href="javascript:void(0)" class="btn btn-success btnAddModal"  onclick="clearNoty()">
                            <span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add unit'),$_smarty_tpl ) );?>

                        </a>
                        <a href="javascript:void(0)" class="btn btn-success btnMultiAddUnit" onclick="clearNoty()">
                            <span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add in bulk'),$_smarty_tpl ) );?>

                        </a>


                    </div>                                
                </div>

                <div class="panel-body">
                    <div class="table-responsive list-datatable">
                        <table id="dataTable" class="table js-exportable">
                            <thead>
                                <tr>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</th> 
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Block'),$_smarty_tpl ) );?>
</th>
                                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
                                     <th style="min-width:130px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Action'),$_smarty_tpl ) );?>
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
$_smarty_tpl->_subTemplateRender($_prefixVariable2."pages/".((string)$_smarty_tpl->tpl_vars['controller']->value)."/unit.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>   
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>



<?php }
}
