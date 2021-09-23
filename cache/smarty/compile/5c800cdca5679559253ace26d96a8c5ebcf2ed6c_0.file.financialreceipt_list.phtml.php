<?php
/* Smarty version 3.1.33, created on 2021-04-21 13:17:27
  from '/var/www/html/conndo.com.br/admin/templates/default/pages/financialreceipt/financialreceipt_list.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_608050175e27d9_99150874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c800cdca5679559253ace26d96a8c5ebcf2ed6c' => 
    array (
      0 => '/var/www/html/conndo.com.br/admin/templates/default/pages/financialreceipt/financialreceipt_list.phtml',
      1 => 1610380630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608050175e27d9_99150874 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."pageStyleSheet.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Financial'),$_smarty_tpl ) );?>
</li>
    <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Treasury'),$_smarty_tpl ) );?>
</li>
    <li class="active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receipt'),$_smarty_tpl ) );?>
</li>
</ul>
<!-- END BREADCRUMB -->                
<div class="page-title">
    <h2><span class="fal fa-cash-register"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receipt'),$_smarty_tpl ) );?>
</h2>
    <ul class="panel-controls">
        <li><a href="javascript:void(0);" onClick="pageLoad('<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['action_controller']->value == 'add') {?>add<?php } else { ?>edit/?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>')" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Refresh'),$_smarty_tpl ) );?>
" id="btn-reset" class="panel-refresh"><span class="far fa-refresh"></span></a></li>
    </ul>
</div>
<!-- PAGE CONTENT WRAPPER -->
<!-- FORM -->
<div class="page-content-wrap" style="min-height:650px;">
    <div class="row">
        <div class="col-md-12"> 
            <div class="page-content-wrap">



                <div class="row">
                                        <div class="col-md-7 section-content-page">
                        <div class="panel panel-default pull-left">
                            <form id="form_search" class="form-horizontal">
                                <input type="hidden" id="qSearch" value="" />
                                <div class="panel-heading">

                                    <div class="form-group">
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
                                        <div class="col-md-3 col-xs-12"> 
                                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Due Date'),$_smarty_tpl ) );?>
 </label>
                                            <input type="text" class="form-control" DATE-END  readonly="readonly" id="data_vencimento" name="data_vencimento" placeholder="00/00/0000" />
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group">


                                        <div class="col-md-3 col-xs-12">  
                                            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
 </label>
                                            <select class="form-control selectpicker" id="status" name="status" >
                                                <option value="ALL"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'All'),$_smarty_tpl ) );?>
</option>
                                                <option value="PEN"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Pending Approval'),$_smarty_tpl ) );?>
</option>                                                
                                                <option value="CTD"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Received'),$_smarty_tpl ) );?>
</option>
                                                <option value="APR"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Approved'),$_smarty_tpl ) );?>
</option>
                                                <option value="REJ"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Rejected'),$_smarty_tpl ) );?>
</option>
                                                <option value="CAN"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Canceled'),$_smarty_tpl ) );?>
</option>
                                            </select>
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


                                    <div class="col-md-3 col-xs-12 pull-left" style="margin-top:25px">  
                                         <div class="pull-left">
                                            <div class="col-md-12 col-xs-12"> 
                                                <label class="check"><input type="checkbox" id="vencido" class="icheckbox" value="1" name="vencido" /></label>
                                                <label class="control-label" for="vencido"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Expired'),$_smarty_tpl ) );?>
</label>	
                                            </div>
                                        </div>                                        
                                        <div class="btn btn-primary filter-button pull-right" id="qSearchBtn"><i class="fal fa-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Consult'),$_smarty_tpl ) );?>
</div>
                                    </div> 

                                    <div class="col-md-3"  style="margin-top:25px">
                                        <div class="btn-group  pull-right">
                                            <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Bulk Action'),$_smarty_tpl ) );?>
 <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                                                                <li><a href="javascript:void(0);" class="btn-action-dropdown red" disabled id="btnAprovarSelected"><span class="fal fa-thumbs-up"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To approve'),$_smarty_tpl ) );?>
</a></li>
                                                <li><a href="javascript:void(0);" class="btn-action-dropdown red" disabled id="btnRejeitarSelected"><span class="fal fa-thumbs-down"> </span>  &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reject'),$_smarty_tpl ) );?>
</a></li>
                                            </ul>
                                        </div>   
                                    </div>
                                </div>  

                            </div>
                        </form>
                        <div class="panel-body">
                            <div class="row">                          

                                <table id="dataTable" class="table tableFinancialReceipt">
                                    <thead>
                                        <tr> 
                                            <th style="max-width: 20px">
                                                <label class="check">
                                                    <input type="checkbox" id="checkAll" class="icheckbox" disabled name="all" onchange="Financialreceipt.checkAll()" />
                                                </label>
                                            </th>
                                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Description'),$_smarty_tpl ) );?>
</th> 
                                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Value'),$_smarty_tpl ) );?>
</th> 
                                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Movement Date'),$_smarty_tpl ) );?>
</th>                                                     
                                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Movement Status'),$_smarty_tpl ) );?>
</th>
                                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Status'),$_smarty_tpl ) );?>
</th>
                                            <th class="" style="width:30px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Action'),$_smarty_tpl ) );?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- RESULT DATATABLE -->
                                    </tbody>
                                </table>		 
                                <div class="clear hr"></div>
                            </div>
                                                    </div>
                    </div>
                </div>
                                                <div class="col-md-5">
                    <div class="panel panel-default pull-left">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-default btn-action" disabled  
                                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To approve'),$_smarty_tpl ) );?>
"   onClick="Financialreceipt.approveMovement('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" id="approveMovement">
                                <i class="fal fa-thumbs-up fa-lg blue disabled" style="margin-left:5px;"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'To approve'),$_smarty_tpl ) );?>

                            </button>

                            <button type="button" class="btn btn-default btn-action" disabled 
                                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reject'),$_smarty_tpl ) );?>
"  onClick="Financialreceipt.rejectMovement('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" id="rejectMovement">
                                <i class="fal fa-thumbs-down fa-lg red disabled" style="margin-left:5px;"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Reject'),$_smarty_tpl ) );?>

                            </button>

                            <button type="button" class="btn btn-default btn-action" disabled 
                                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receive Payment'),$_smarty_tpl ) );?>
"  onClick="Financialreceipt.receivePayment('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')" id="receivePayment">
                                <i class="fal fa-hand-holding-usd fa-lg green disabled"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Receive Payment'),$_smarty_tpl ) );?>

                            </button>

                            <button type="button" class="btn btn-default btn-action" disabled 
                                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cancel'),$_smarty_tpl ) );?>
"  onClick="Financialreceipt.cancelMovement()" id="cancelMovement">
                                <i class="fal fa-file-times fa-lg red disabled"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('l'=>'Cancel'),$_smarty_tpl ) );?>

                            </button>

                        </div>
                        <div class="panel-body">
                            <div id="boxDatas"></div>
                            <p class="clear">                          
                        </div>
                    </div>
                </div>
                            </div>
        </div>

    </div>
</div>
</div>
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['const'][0], array( array('name'=>'PATH_TEMPLATE'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."pageScript.phtml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>''), 0, true);
?>

<?php }
}
