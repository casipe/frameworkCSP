<?php
/* Smarty version 3.1.33, created on 2020-11-23 22:57:59
  from '/var/www/html/conndo.com.br/admin/templates/default/reports/financial/report_accountreceive.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbc68a79d6a45_51799551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '774aaac2b64a07b6e803bd89a77f24943bb0fff6' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/reports/financial/report_accountreceive.phtml',
      1 => 1606182042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbc68a79d6a45_51799551 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">    
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</li> 
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reports'),$_smarty_tpl ) );?>
</li> 
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Receive'),$_smarty_tpl ) );?>
</li>   
</ul>
<!-- END BREADCRUMB -->                

<div class="page-title">                    
    <h2><span class="fal fa-file-chart-line"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Report'),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Account to Receive'),$_smarty_tpl ) );?>
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
                    <div class="col-md-12 col-xs-12 pull-left">
                        <form id="formReport" class="form-horizontal">
                            <input type="hidden" id="qSearch" value="" />
                            <div class="col-md-9 col-xs-12 contentFilterReport"> 
                                <div class="col-md-4   col-xs-12"> 
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Initial Date'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control" DATE-START readonly="readonly" id="data1" name="data1" placeholder="00/00/0000" />
                                </div>
                                <div class="col-md-4 col-xs-12"> 
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Final Date'),$_smarty_tpl ) );?>
 </label>
                                    <input type="text" class="form-control" DATE-END readonly="readonly" id="data2" name="data2" placeholder="00/00/0000" />
                                </div>
                                <div class="pull-left col-md-4 col-xs-12">  
                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Management Account'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control select" id="id_plano_conta" name="id_plano_conta" data-show-subtext="true" 
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
">
                                            <?php echo $_smarty_tpl->tpl_vars['mAccount']->value->descricao;?>

                                        </option> 
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class=" pull-left col-md-12 col-xs-12"> 

                                        <div class="col-md-4 col-xs-12"> 
                                            <label class="control-label" style="display: table; margin-top: 10px"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Report Type'),$_smarty_tpl ) );?>
 </label>
                                            <label class="check control-label" style="margin-right:25px"><input type="radio" class="icheckbox" value="S" name="tipoRelatorio" checked="checked"/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Synthetic'),$_smarty_tpl ) );?>
</label>
                                            <label class="check control-label"><input type="radio" class="icheckbox" name="tipoRelatorio" value="A"/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Analytical'),$_smarty_tpl ) );?>
</label>
                                        </div> 

                                        <div class="pull-left col-md-4 col-xs-12" style="margin-left: 0px; margin-top:15px">
                                            <label class="check"><input type="checkbox" id="contabilizado" class="icheckbox" value="1" name="somenteRecebido" /></label>
                                            <label class="control-label" for="somenteRecebido"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Somente Recebido'),$_smarty_tpl ) );?>
</label>
                                        </div>

                                    </div>  


                                </div> 
                            </div> 
                            <div class="ull-left col-md-3 col-xs-12">   
                                <div class="col-md-5 col-xs-12" style="margin-top:25px">  
                                    <span class="btn btn-primary filter-button" id="btnConsult"><i class="fal fa-search fa-2x"></i> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Consult'),$_smarty_tpl ) );?>
</span>
                                    <span class="btn btn-info filter-button" id="btnGenerateReport" style="margin-top:10px"><i class="fal fa-file fa-2x"></i> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Generate Report'),$_smarty_tpl ) );?>
</span>
                                </div>  
                            </div> 


                        </form>
                    </div>                               
                </div>

                <div class="panel-body">
                    <div id="resultReport" style="min-height: 300px"></div>
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
