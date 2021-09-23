<?php
/* Smarty version 3.1.33, created on 2021-04-21 13:17:18
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/accountreceive_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6080500e579697_18172196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8470285122eb762f70d369bc29fd5877a97a4887' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/accountreceive/accountreceive_list.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6080500e579697_18172196 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
echo '<script'; ?>
>
    var addEdit = false;
<?php echo '</script'; ?>
>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</li> 
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Entries'),$_smarty_tpl ) );?>
</li>
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Receive'),$_smarty_tpl ) );?>
</li>   
</ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-calculator"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Receive'),$_smarty_tpl ) );?>
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

                    <div class="col-md-7 col-xs-12 pull-left">
                        <form id="form_search" class="form-horizontal">
                            <input type="hidden" id="qSearch" value="" />
                            <div class="col-md-3 col-xs-12"> 
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Date'),$_smarty_tpl ) );?>
 </label>
                                <input type="text" class="form-control" DATE-START readonly="readonly" id="data1" name="data_1" placeholder="00/00/0000" />
                            </div>
                            <div class="col-md-3 col-xs-12"> 
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Final Date'),$_smarty_tpl ) );?>
 </label>
                                <input type="text" class="form-control" DATE-END readonly="readonly" id="data2" name="data_2" placeholder="00/00/0000" />
                            </div>
                            <div class="pull-left col-md-3 col-xs-12">  
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</label>
                                <select class="form-control select" id="id_plano_conta" name="id_plano_conta" data-show-subtext="true" 
                                        <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->status_movimento) && ($_smarty_tpl->tpl_vars['datas']->value->status_movimento != 'PEN' && $_smarty_tpl->tpl_vars['datas']->value->status_movimento != 'REJ')) {?> disabled="disabled" <?php }?>
                                        data-live-search="true">
                                        <option selected value="" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'All'),$_smarty_tpl ) );?>
</option>	
                                    <?php if (isset($_smarty_tpl->tpl_vars['listManagementAccount']->value) && count($_smarty_tpl->tpl_vars['listManagementAccount']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listManagementAccount']->value, 'mAccount', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['mAccount']->value) {
?>
                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['mAccount']->value->id;
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['encryptID'][0], array( array('id'=>$_prefixVariable2,'iv'=>'managementaccount'),$_smarty_tpl ) );?>
" 
                                            <?php if (isset($_smarty_tpl->tpl_vars['datas']->value->id_plano_conta) && $_smarty_tpl->tpl_vars['datas']->value->id_plano_conta == $_smarty_tpl->tpl_vars['mAccount']->value->id) {?>
                                            selected
                                            <?php }?>
                                            >
                                            <?php echo $_smarty_tpl->tpl_vars['mAccount']->value->descricao;?>

                                </option>                                                
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-3 col-xs-12" style="margin-top:25px">  
                            <div class="btn btn-primary filter-button" id="qSearchBtn"><i class="fal fa-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Consult'),$_smarty_tpl ) );?>
</div>
                        </div> 
                    </form>
                </div> 




                <div class="panel-controls pull-right"> 





                    <div class="col-md-12">
                        <div class="btn-group">
                            <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bulk Action'),$_smarty_tpl ) );?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="javascript:void(0);" class="btn-action-dropdown red" disabled id="btnDeleteSelected"><span class="fal fa-trash"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Delete'),$_smarty_tpl ) );?>
</a></li>
                                                                               
                            </ul>
                        </div>                        
                        <a href="javascript:pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/add')" class="btn btn-success" >
                            <span class="fal fa-plus"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Add'),$_smarty_tpl ) );?>

                        </a>  
                    </div>

                </div>	                                
            </div>

            <div class="panel-body">
                <div class="table-responsive list-datatable">

                    <p>
                    <table id="dataTable" class="table tableAccountReceive">
                        <thead>
                            <tr> 
                                <th style="max-width: 20px">
                                    <label class="check">
                                        <input type="checkbox" id="checkAll" class="icheckbox" disabled name="all" onchange="Accountreceive.checkAll()" />
                                    </label>
                                </th>
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Ref'),$_smarty_tpl ) );?>
</th> 
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</th> 
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
</th> 
                                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Movement Date'),$_smarty_tpl ) );?>
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
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>

<?php }
}
